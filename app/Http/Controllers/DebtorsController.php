<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Patient;
use App\Models\Payment;
use App\Models\SurgeryKind;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\DebtorsResource;
use RealRashid\SweetAlert\Facades\Alert;
class DebtorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('debtors.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd('dasd');
        $payment = Payment::findOrFail($id);
        $app_return = new DebtorsResource($payment);
        return $app_return;
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    
    public function getdebtorsData(Request $request)
    {
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length"); // Rows display per page
        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');
        $columnIndex = $columnIndex_arr[0]['column']; // Column index
        $columnName = $columnName_arr[$columnIndex]['data']; // Column name
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc

        $searchValue = $search_arr['value']; // Search value
        $searchValue_filtered = str_replace(' ', '', str_replace(['أ', 'إ'], 'ا', str_replace(['ي', 'ئ'], 'ى', str_replace('ة', 'ه', $searchValue))));
        if ($request->from_date != -1) {
            $from_date = Carbon::parse($request->from_date)->format('Y-m-d H:i:s');
        } else {
            $from_date = $request->from_date;
        }
        if ($request->to_date != -1) {
            $to_date = Carbon::parse($request->to_date)->format('Y-m-d H:i:s');
        } else {
            $to_date = $request->to_date;
        }
        if ($request->filter_1 != -1) {

            $filter_1 = $request->filter_1;
        } else {
            $filter_1 = -1;
        }
        if ($request->filter_2 != -1) {

            $filter_2 = $request->filter_2;
        } else {
            $filter_2 = -1;
        }
        if ($request->filter_3 != -1) {

            $filter_3 = $request->filter_3;
        } else {
            $filter_3 = -1;
        }
        if ($request->filter_4 != -1) {

            $filter_4 = $request->filter_4;
        } else {
            $filter_4 = -1;
        }

        // $orders = DB::table('orders')
        // ->select('department', DB::raw('SUM(price) as total_sales'))
        // ->groupBy('department')
        // ->havingRaw('SUM(price) > ?', [2500])
        // ->get();


        $totalRecords = DB::table('payments')->where('remaining_amount','>',0)->count();
        $totalRecordswithFilter = DB::table('payments')->where('remaining_amount','>',0);
        // $totalRecords = Appointment::select('count(*) as allcount')->count();
        // $totalRecords = Appointment::whereDate('visit_date', DB::raw('CURDATE()'))->count();
        // $totalRecordswithFilter = Appointment::whereDate('visit_date', DB::raw('CURDATE()'));
        // $totalRecordswithFilter = Appointment::select('count(appointments.*) as allcount');

        if ($searchValue != null)
            $totalRecordswithFilter = $totalRecordswithFilter
                ->where('payments.remaining_amount', 'like', '%' . $searchValue . '%')
                ->orWhere('payments.total_price', 'like', '%' . $searchValue . '%')
                ->orWhere('payments.discount', 'like', '%' . $searchValue . '%')
                ->orWhere('payments.currency', $searchValue);

        if ($from_date != -1)
            $totalRecordswithFilter = $totalRecordswithFilter->whereBetween('payments.created_at', array($from_date, $to_date));
        // if ($filter_1 != -1)
        //     $totalRecordswithFilter = $totalRecordswithFilter->where('payments.remaining_amount', 'like', '%' . $filter_1 . '%');
        if ($filter_2 != -1)
            $totalRecordswithFilter = $totalRecordswithFilter->whereHas('patient', function ($query) use ($filter_2) {


                $query->where('patients.patient_fname', 'like', '%' . $filter_2 . '%');
            });
        // if ($filter_3 != -1)
        //     $totalRecordswithFilter = $totalRecordswithFilter->whereIn('appointments.address', $filter_3);
        // if ($filter_4 != -1)
        //     $totalRecordswithFilter = $totalRecordswithFilter->whereIn('appointments.idc', $filter_4);


        $totalRecordswithFilter = $totalRecordswithFilter->count();

        // Fetch records

        // $items = DB::table('appointments')->whereDate('visit_date', DB::raw('CURDATE()'))->with('patient')->orderBy('appointments.id', 'desc');
        $items = Payment::where('remaining_amount','>',0)->with('patient')->orderBy('payments.id', 'desc');
        if ($searchValue != null)
            $items = $items
                ->where('payments.remaining_amount', 'like', '%' . $searchValue . '%')
                ->orWhere('payments.total_price', 'like', '%' . $searchValue . '%')
                ->orWhere('payments.patient_id', $searchValue)
                ->orWhere('payments.currency', $searchValue);


        if ($from_date != -1)
            $items = $items->whereBetween('payments.pay_date', array($from_date, $to_date));
        // if ($filter_1 != -1)
        //     $items = $items->where('payments.total_price', 'like', $filter_1);
        if ($filter_2 != -1)
            $items = $items->whereHas('patient', function ($query) use ($filter_2) {

                $query->where('patients.patient_fname', 'like', '%' . $filter_2 . '%');
            });
        if ($filter_3 != -1)
            $items = $items->whereIn('payments.currency', $filter_3);
        if ($filter_4 != -1)
            $items = $items->where('payments.notes', 'like', '%' . $filter_4 . '%');
        $items = $items->select('payments.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();




        $data = [];
        foreach ($items as $item) {
            $data[] = [
                'id' => $item->id,
                // 'visit_date' => $item->id,
                'patient_id' => $item->patient->patient_fname . ' ' . $item->patient->patient_sname . ' ' . $item->patient->patient_tname . ' ' . $item->patient->patient_lname,
                'patient_number' => $item->patient->patient_number,
                'currency' => $item->patient->currency,
                'remaining_amount' => $item->remaining_amount,
                'pay_date' => $item->pay_date,
                'total_price' => $item->total_price,
                'notes' => $item->notes,
                'discount' => $item->discount,
                'currency' => $item->currency,
                'pay_date' => $item->pay_date,
                "created_at" => Carbon::parse($item->created_at)->format('d-m-Y'), // h:i A
                "actions" => null

            ];
        }

        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordswithFilter,
            "aaData" => $data
        );

        return response()->json($response);
        exit;
    }
}
