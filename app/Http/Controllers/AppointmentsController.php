<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Patient;
use App\Models\Appointment;
use App\Models\SurgeryKind;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Resources\AppointmentResource;
use App\Models\Payment;

class AppointmentsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)

    {

        if($request->ajax()) {
            $data = Appointment::whereDate('visit_date', '>=', $request->start)
                ->whereDate('next_visit_date',   '<=', $request->end)
                ->get(['id', 'notes', 'visit_date', 'next_visit_date']);
            return response()->json($data);
        }
        return view('appointment.index');
    }

    public function calendarEvents(Request $request)
    {

        switch ($request->type) {
           case 'create':
              $event = Appointment::create([
                  'event_name' => $request->event_name,
                  'event_start' => $request->event_start,
                  'event_end' => $request->event_end,
              ]);

              return response()->json($event);
             break;

           case 'edit':
              $event = Appointment::find($request->id)->update([
                  'event_name' => $request->event_name,
                  'event_start' => $request->event_start,
                  'event_end' => $request->event_end,
              ]);

              return response()->json($event);
             break;

           case 'delete':
              $event = Appointment::find($request->id)->delete();

              return response()->json($event);
             break;

           default:
             # ...
             break;
        }
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


    public function prodfunct(){

		$prod=Appointment::all();//get data from table
        // dd($prod);
		return view('appointment.index',compact('prod'));//sent data to view

	}

	public function findProductName(Request $request){


	    //if our chosen id and products table prod_cat_id col match the get first 100 data

        //$request->id here is the id of our chosen option id
        $data = SurgeryKind::where('surgery_kind_id',$request->id)->get();
        return response()->json($data);//then sent this data to ajax success
	}





    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //dd($request->all());

        $patient=Patient::where('id',$request->patient_id)->first();


        if($request->next_visit_date=='مريض'){
        $validated = $request->validate([
            'next_visit_date' => 'required',
        ]);}

        //  Payemnt::with('patient.appointments')->get();

           $event=$request->event;
         //  $request['event'] = implode('-',$event);


          DB::beginTransaction();
          try{
            $appointment=$patient->appointments()->create([
                'next_visit_date' => $request->next_visit_date,
                'surgery_kind_id' => $request->surgery_kind_id,
                'surgery_kind_id_child' => $request->surgery_kind_id_child,

                //'event' => implode('-',$request->event),
               ]);

               $payment = $patient->payments()->create([
                'appointment_id'=>$appointment->id,
                    'total_price' => $request->total_price,
                    'currency' => $request->currency,
                    'paid' => $request->paid,
                    'remaining_amount' => $request->remaining_amount,
                    'total_price' => $request->total_price,
                    'pay_date' => $request->pay_date,
                    // 'total_price' => $request->total_price,
                    'notes' => $request->notes,
               ]);

               DB::commit();

               Alert::warning('إضافة زيارة', 'تمت عملية الإضافة بنجاح');
               return redirect()->route('patients.index');

          }catch(\Exception $ex){
            DB::rollBack();
           return $ex->getMessage();
          }

    }


    public function CreateNewAppointment(Request $request)
    {
        $patient=Patient::all();
        // if($request->next_visit_date=='مريض'){
        // $validated = $request->validate([
        //     'next_visit_date' => 'required',
        // ]);}
           $event=$request->event;
          DB::beginTransaction();
          try{
            $appointment=$patient->appointments()->create([
                'next_visit_date' => $request->next_visit_date,
                'surgery_kind_id' => $request->surgery_kind_id,
                'surgery_kind_id_child' => $request->surgery_kind_id_child,

                //'event' => implode('-',$request->event),
               ]);

               $payment = $patient->payments()->create([
                'appointment_id'=>$appointment->id,
                    'total_price' => $request->total_price,
                    'currency' => $request->currency,
                    'paid' => $request->paid,
                    'remaining_amount' => $request->remaining_amount,
                    'total_price' => $request->total_price,
                    'pay_date' => $request->pay_date,
                    // 'total_price' => $request->total_price,
                    'notes' => $request->notes,
               ]);

               DB::commit();

               Alert::warning('إضافة زيارة', 'تمت عملية الإضافة بنجاح');
               return redirect()->route('patients.index');

          }catch(\Exception $ex){
            DB::rollBack();
           return $ex->getMessage();
          }

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
        $appointment = Appointment::findOrFail($id);
       $app_return=new AppointmentResource($appointment);
        return $app_return;

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {

        $surgerykind =SurgeryKind::whereNull('surgery_kind_id')->get();
        $patient = Patient::all();
        $payment=Payment::all();
    return view('appointment.edit',compact('appointment','patient','surgerykind','payment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        // dd($request->all());
        $appointment ->update([
            'next_visit_date' => $request->next_visit_date,
                'surgery_kind_id' => $request->surgery_kind_id,
                'surgery_kind_id_child' => $request->surgery_kind_id_child,

        ]);
        $appointment->payment->update([
            'paid' => $request->paid,
            'total_price' => $request->total_price,
            'currency' => $request->currency,
            'pay_date' => $request->pay_date,
            'remaining_amount' => $request->remaining_amount,
            'notes' => $request->notes,
        ]);







        Alert::warning('تعديل بيانات زيارة', 'تمت عملية التعديل بنجاح');
        return redirect()->route('appointments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(appointment $appointment)
    {
        $appointment->delete();
        return response()->json($appointment);
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


        $totalRecords = Appointment::select('count(*) as allcount')->count();
        $totalRecordswithFilter = Appointment::select('count(patients.*) as allcount');

        if ($searchValue != null)
            $totalRecordswithFilter = $totalRecordswithFilter
                ->where('appointments.patient_id', 'like', '%' . $searchValue . '%')
                ->where('appointments.visit_date', 'like', '%' . $searchValue . '%')
                ->where('appointments.next_visit_date', 'like', '%' . $searchValue . '%')
                ->orWhere('appointments.surgery_kind_id', $searchValue);

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

        $items = Appointment::orderBy('appointments.id', 'desc');
        if ($searchValue != null)
            $items = $items
                ->where('appointments.visit_date', 'like', '%' . $searchValue . '%')
                ->orWhere('appointments.next_visit_date', 'like', '%' . $searchValue . '%')
                ->orWhere('appointments.patient_id', $searchValue)
                ->orWhere('appointments.surgery_kind_id', $searchValue);


        if ($from_date != -1)
            $items = $items->whereBetween('appointments.created_at', array($from_date, $to_date));
        if ($filter_1 != -1)
            $items = $items->where('appointments.visit_date', 'like', '%' . $filter_1 . '%');
            if ($filter_2 != -1)
            $items = $items->where('appointments.patient_id', 'like', '%' . $filter_2 . '%');
        if ($filter_3 != -1)
            $items = $items->whereIn('appointments.surgery_kind_id', $filter_3);
            if ($filter_4 != -1)
            $items = $items->where('surgery_kind_id.notes', 'like', '%' . $filter_4 . '%');
        $items = $items->select('appointments.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();




        $data = [];
        foreach ($items as $item) {
            $data[] = [
                'id' => $item->id,
               // 'visit_date' => $item->id,
                'patient_id' => $item->patient->patient_fname. ' '.$item->patient->patient_sname. ' '.$item->patient->patient_tname . ' '.$item->patient->patient_lname,
                'next_visit_date' => $item->next_visit_date,
                'surgery_kind_id' => $item->surgery_kind->name,
               'surgery_kind_id_child' => $item->surgery_kind_child->name,
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
