<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Patient;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;


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
        $roles = Role::all();
        return view('patient.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $fname = $request->fname;
            $sname = $request->sname;
            $tname = $request->tname;
            $lname = $request->lname;
            $idc = $request->idc;
            $dob = $request->dob;
            $occupation = $request->occupation;
            $email = $request->email;
            $mobile = $request->mobile;
            $mobile_second = $request->mobile_second;
            $address = $request->address;
            $gender = $request->gender;
            $husband_name = $request->husband_name;
            $husband_occupation = $request->husband_occupation;
            $husband_dob = $request->husband_dob;
            $notes = $request->notes;

            $validated = $request->validate([
                'fname' => 'required',
                'sname' => 'required',
                'lname' => 'required',
                'idc' => 'required|min:9|unique:Patients',
                'mobile' => 'required|min:7',
            ]);

            //Patients::create([]);
            $add_patients = Patient::create([
                'patient_fname' => $fname,
                'patient_sname' => $sname,
                'patient_tname' => $tname,
                'patient_lname' => $lname,
                'idc' => $idc,
                'email' => $email,
                'patient_dob' => $dob,
                'occupation' => $occupation,
                'address' => $address,
                'mobile' => $mobile,
                'mobile_second' => $mobile_second,
                'gender' => $gender,
                'husband_name' => $husband_name,
                'husband_occupation' => $husband_occupation,
                'notes' => $notes
            ]);


            // $add_patients->assignRole($request->role);


            return redirect()->route('patients.create')->with('success', 'تم الإضافة بنجاح');


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
