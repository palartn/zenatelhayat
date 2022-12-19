<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Patient;
use App\Models\SurgeryKind;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Resources\SurgerykindResource;
use App\Models\Payment;

use function PHPUnit\Framework\returnSelf;

class SurgeryKindsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('surgerykind.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(SurgeryKind $surgerykind)
    {
        return view('surgerykind.create',compact('surgerykind'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,SurgeryKind $surgerykind)
    {
        SurgeryKind::create([
            'name' => $request->name,
            'surgery_kind_id' => $request->parent,
        ]);

        Alert::warning('تعديل بيانات الأقسام', 'تمت عملية التعديل بنجاح');
        return redirect()->route('surgerykinds.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $surgeykind = SurgeryKind::findOrFail($id);
        $app_return = new SurgerykindResource($surgeykind);
        return $app_return;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SurgeryKind $surgerykind)
    {
        return view('surgerykind.edit',compact('surgerykind'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SurgeryKind $surgerykind)
    {
        $surgerykind ->update([
            'name' => $request->name,
            'surgery_kind_id' => $request->parent,
        ]);

        Alert::warning('تعديل بيانات الأقسام', 'تمت عملية التعديل بنجاح');
        return redirect()->route('surgerykinds.index');
        //->with('success', 'تم التعديل بنجاح');

    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SurgeryKind $surgerykind)
    {
        $surgerykind->delete();
        return response()->json($surgerykind);
    }


    public function getSurgerykindData(Request $request)
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


        $totalRecords = SurgeryKind::select('count(*) as allcount')->count();
        //alert($totalRecords);
        $totalRecordswithFilter = SurgeryKind::select('count(surgery_kinds.*) as allcount');


        if ($searchValue != null)
            $totalRecordswithFilter = $totalRecordswithFilter
                ->where('surgery_kinds.name', 'like', '%' . $searchValue . '%')
                ->orWhere('surgery_kinds.id', 'like', '%' . $searchValue . '%')
                ->orWhere('surgery_kinds.surgery_kind_id', 'like', '%' . $searchValue . '%')
                ->orWhere('surgery_kinds.created_at', $searchValue);

        if ($from_date != -1)
            $totalRecordswithFilter = $totalRecordswithFilter->whereBetween('surgery_kinds.created_at', array($from_date, $to_date));
        if ($filter_1 != -1)
            $totalRecordswithFilter = $totalRecordswithFilter->where('surgery_kinds.created_at', 'like', '%' . $filter_1 . '%');
        // if ($filter_2 != -1)
        //     $totalRecordswithFilter = $totalRecordswithFilter->whereHas('patient', function ($query) use ($filter_2) {
        //         $query->where('patients.patient_fname', 'like', '%' . $filter_2 . '%');
        //     });




        $totalRecordswithFilter = $totalRecordswithFilter->count();

        // Fetch records

        // $items = DB::table('appointments')->whereDate('visit_date', DB::raw('CURDATE()'))->with('patient')->orderBy('appointments.id', 'desc');

        $items = SurgeryKind::orderBy('surgery_kinds.id', 'asc');
        if ($searchValue != null)
            $items = $items
                ->where('surgery_kinds.name', 'like', '%' . $searchValue . '%')
                ->orWhere('surgery_kinds.surgery_kind_id', 'like', '%' . $searchValue . '%')
                ->orWhere('surgery_kinds.name', $searchValue)
                ->orWhere('surgery_kinds.id', $searchValue);
        if ($from_date != -1)
            $items = $items->whereBetween('surgery_kinds.created_at', array($from_date, $to_date));
        if ($filter_1 != -1)
            $items = $items->where('surgery_kinds.created_at', 'like', $filter_1);
        // if ($filter_2 != -1)
        //     $items = $items->whereHas('patient', function ($query) use ($filter_2) {

        //         $query->where('patients.patient_fname', 'like', '%' . $filter_2 . '%');
        //     });
        if ($filter_3 != -1)
            $items = $items->whereIn('surgery_kinds.id', $filter_3);
        if ($filter_4 != -1)
            $items = $items->where('surgery_kinds.id', 'like', '%' . $filter_4 . '%');
        $items = $items->select('surgery_kinds.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();




        $data = [];
        foreach ($items as $item) {
            $data[] = [
                'id' => $item->id,
                // 'visit_date' => $item->id,
              //  'patient_id' => $item->patient->patient_fname . ' ' . $item->patient->patient_sname . ' ' . $item->patient->patient_tname . ' ' . $item->patient->patient_lname,
                'surgery_kind_id' => $item->surgery_kind_id,
                'surgery_kind_parent' => $item->parent->name,
                'name' => $item->name,
                // 'surgery_kind_id_child' => $item->surgery_kind_child->name,
                // 'notes' => $item->notes,
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
