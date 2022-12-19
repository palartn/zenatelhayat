<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Payment;
use App\Models\Appointment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         return view('payments.index');
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
        //
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
    public function destroy(Payment $payment)
    {
        $payment->delete();
        return response()->json($payment);
    }






    public function getData(Request $request)
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
        // if ($request->filter_5 != -1) {

        //     $filter_5 = $request->filter_5;
        // } else {
        //     $filter_5 = -1;
        // }


        $totalRecords = payment::select('count(*) as allcount')->count();
        $totalRecordswithFilter = payment::select('count(payments.*) as allcount');

        if ($searchValue != null)
            $totalRecordswithFilter = $totalRecordswithFilter
                ->where('payments.pay_date', 'like', '%' . $searchValue . '%')
                ->orwhere('payments.paid', 'like', '%' . $searchValue . '%')
                ->orwhere('payments.notes', 'like', '%' . $searchValue . '%')
                 ->orWhere('payments.created_at', $searchValue);

        if ($from_date != -1)
            $totalRecordswithFilter = $totalRecordswithFilter->whereBetween('payments.created_at', array($from_date, $to_date));
        // if ($filter_1 != -1)
        //     $totalRecordswithFilter = $totalRecordswithFilter->where('payments.visit_date', $filter_1);
        if ($filter_2 != -1)
            $totalRecordswithFilter = $totalRecordswithFilter->whereHas('patient', function ($query) use ($filter_2) {
                $query->where('patient_fname', 'like', '%' . $filter_2 . '%');
            });
        if ($filter_3 != -1)
            $totalRecordswithFilter = $totalRecordswithFilter->whereHas('surgery_kind', function ($query) use ($filter_3) {
                $query->where('name', 'like', '%' . $filter_3 . '%');
            });
        // if ($filter_3 != -1)
        //    $totalRecordswithFilter = $totalRecordswithFilter->where('payments.visit_date', 'like', '%' . $filter_3 . '%');


        $totalRecordswithFilter = $totalRecordswithFilter->count();

        // Fetch records

        $items = payment::orderBy('payments.id', 'desc');
        if ($searchValue != null)
            $items = $items
                ->where('payments.visit_date', 'like', '%' . $searchValue . '%')
                ->orWhereHas('patient', function ($query) use ($searchValue) {
                    $query->where('patient_fname', 'like', '%' . $searchValue . '%');
                })
                ->orWhere('payments.next_visit_date', 'like', '%' .  $searchValue)
                ->orWhere('payments.notes','like', '%' . $searchValue);


            if ($from_date != -1)
                $items = $items->whereBetween('payments.created_at', array($from_date, $to_date));
        // if ($filter_1 != -1)
        //     $items = $items->where('payments.visit_date', $filter_1);
        if ($filter_2 != -1)
            $items = $items->whereHas('patient', function ($query) use ($filter_2) {
                $query->where('patient_fname', 'like', '%' . $filter_2 . '%');
            });
        if ($filter_3 != -1)
            $items = $items->whereHas('surgery_kind', function ($query) use ($filter_3) {
                $query->where('name', 'like', '%' . $filter_3 . '%');
            });
        // if ($filter_4 != -1)
        //     $items = $items->where('payments.visit_date', $filter_4);
        $items = $items->select('payments.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();




        $data = [];
        foreach ($items as $item) {
            $data[] = [
                'id' => $item->id,
                'p_id' => $item->patient_id,
                'patient_number' => $item->patient->patient_number,
                // 'visit_date' => $item->id,
                'patient_id' => $item->patient->patient_fname . ' ' . $item->patient->patient_sname . ' ' . $item->patient->patient_tname . ' ' . $item->patient->patient_lname,
                'pay_date' => $item->pay_date,
                'paid' => $item->paid,
                // 'surgery_kind_id' => $item->surgery_kind->name,
                // 'surgery_kind_id_child' => $item->surgery_kind_child->name,
                'notes' => $item->notes,
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
