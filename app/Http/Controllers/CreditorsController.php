<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Patient;
use App\Models\Payment;
use App\Models\SurgeryKind;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\creditorsResource;
use App\Models\Appointment;
use RealRashid\SweetAlert\Facades\Alert;


class CreditorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('creditors.index');
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
        $app_return = new creditorsResource($payment);
        $total_amount = total_paid($payment->patient_id);
return ['app_return'=>$app_return,'total_amount'=>$total_amount];
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


    public function getcreditorsData(Request $request)
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


        $totalRecords = DB::table('appointments')->where('is_paid_complete',0)->count();
        $totalRecordswithFilter = DB::table('appointments')->where('is_paid_complete',0);
        // $totalRecords = Appointment::select('count(*) as allcount')->count();
        // $totalRecords = Appointment::whereDate('visit_date', DB::raw('CURDATE()'))->count();
        // $totalRecordswithFilter = Appointment::whereDate('visit_date', DB::raw('CURDATE()'));
        // $totalRecordswithFilter = Appointment::select('count(appointments.*) as allcount');

        if ($searchValue != null)
            $totalRecordswithFilter = $totalRecordswithFilter
                ->where('appointments.amount_after_discount', 'like', '%' . $searchValue . '%')
                ->orWhere('appointments.amount_before_discount', 'like', '%' . $searchValue . '%')
                ->orWhere('appointments.campaign_year', 'like', '%' . $searchValue . '%')
                ->orWhere('appointments.patient_id', $searchValue);

        if ($from_date != -1)
            $totalRecordswithFilter = $totalRecordswithFilter->whereBetween('appointments.visit_date', array($from_date, $to_date));
        // if ($filter_1 != -1)
        //     $totalRecordswithFilter = $totalRecordswithFilter->where('appointments.remaining_amount', 'like', '%' . $filter_1 . '%');
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
        $items = Appointment::where('is_paid_complete',0)->with('patient')->orderBy('appointments.id', 'desc');
        if ($searchValue != null)
            $items = $items
                ->where('appointments.amount_after_discount', 'like', '%' . $searchValue . '%')
                ->orWhere('appointments.patient_id)', 'like', '%' . $searchValue . '%')
                ->orWhere('appointments.campaign_year', $searchValue)
                ->orWhere('appointments.discount_value', $searchValue);


        if ($from_date != -1)
            $items = $items->whereBetween('appointments.visit_date', array($from_date, $to_date));
        // if ($filter_1 != -1)
        //     $items = $items->where('appointments.total_price', 'like', $filter_1);
        if ($filter_2 != -1)
            $items = $items->whereHas('patient', function ($query) use ($filter_2) {
                $query->where('patients.patient_fname', 'like', '%' . $filter_2 . '%');
            });
        if ($filter_3 != -1)
            $items = $items->whereIn('appointments.next_visit_date', $filter_3);
        if ($filter_4 != -1)
            $items = $items->where('appointments.notes', 'like', '%' . $filter_4 . '%');
        $items = $items->select('appointments.*')
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
                'next_visit_date' => $item->next_visit_date,
                'campaign_year' => $item->campaign_year,
                'full_name' => $item->full_name,
                'notes' => $item->notes,
                'surgery_kind_id_child'=>$item->surgery_kind->name,
                'amount_before_discount' => $item->amount_before_discount,
                'amount_after_discount' => $item->amount_after_discount,
                'visit_date' => $item->visit_date,
                'paid' => $item->paid,
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
