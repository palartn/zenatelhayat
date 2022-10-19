<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Patient;
use Illuminate\Http\Request;


class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Patient $user)
    {
      //  dd(Patient::all());
        return view('patient.index',compact('user'));
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


        $totalRecords = Patient::select('count(*) as allcount')->count();
        $totalRecordswithFilter = Patient::select('count(patients.*) as allcount');

        if ($searchValue != null)
            $totalRecordswithFilter = $totalRecordswithFilter
                ->where('patients.patient_fname', 'like', '%' . $searchValue . '%')
                ->where('patients.idc', 'like', '%' . $searchValue . '%')
                ->where('patients.mobile', 'like', '%' . $searchValue . '%')
                ->orWhere('patients.address', $searchValue);

        if ($from_date != -1)
            $totalRecordswithFilter = $totalRecordswithFilter->whereBetween('patients.created_at', array($from_date, $to_date));
        if ($filter_1 != -1)
            $totalRecordswithFilter = $totalRecordswithFilter->where('patients.patient_fname', 'like', '%' . $filter_1 . '%');
        if ($filter_2 != -1)
            $totalRecordswithFilter = $totalRecordswithFilter->where('patients.mobile', 'like', '%' . $filter_2 . '%');
        if ($filter_3 != -1)
            $totalRecordswithFilter = $totalRecordswithFilter->whereIn('patients.address', $filter_3);
        if ($filter_4 != -1)
            $totalRecordswithFilter = $totalRecordswithFilter->whereIn('patients.idc', $filter_4);


        $totalRecordswithFilter = $totalRecordswithFilter->count();

        // Fetch records

        $items = Patient::orderBy('patients.id', 'desc');
        if ($searchValue != null)
            $items = $items
                ->where('patients.patient_fname', 'like', '%' . $searchValue . '%')
                ->orWhere('patients.mobile', 'like', '%' . $searchValue . '%')
                ->orWhere('patients.address', $searchValue)
                ->orWhere('patients.idc', $searchValue);


        if ($from_date != -1)
            $items = $items->whereBetween('patients.created_at', array($from_date, $to_date));
        if ($filter_1 != -1)
            $items = $items->where('patients.patient_fname', 'like', '%' . $filter_1 . '%');
            if ($filter_2 != -1)
            $items = $items->where('patients.mobile', 'like', '%' . $filter_2 . '%');
        if ($filter_3 != -1)
            $items = $items->whereIn('patients.address', $filter_3);
            if ($filter_4 != -1)
            $items = $items->where('patients.idc', 'like', '%' . $filter_4 . '%');
        $items = $items->select('patients.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();




        $data = [];
        foreach ($items as $item) {
            $data[] = [
                'id' => $item->id,
                'idc' => $item->idc,
                'name' => $item->patient_fname .' '. $item->patient_sname .' '. $item->patient_tname .' '. $item->patient_lname,
                'mobile' => $item->mobile,
                'address' => $item->address,
                "created_at" => Carbon::parse($item->patient_dob)->format('d-m-Y'), // h:i A
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
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patient.create');
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
    public function show(Patient $patient)
    {
        return response()->json($patient);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        return view('patient.edit',compact('patient'));
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
}
