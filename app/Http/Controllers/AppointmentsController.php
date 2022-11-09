<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Patient;
use App\Models\Appointment;
use App\Models\SurgeryKind;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
    public function create(Patient $patient)
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

            $patient=Patient::where('id',$request->patient_id)->first();


        //     $visit_date = $request->visit_date;
        //     $next_visit_date = $request->next_visit_date;
        //    // $patient_id = $patient->id;
        //     $cost = $request->cost;
        //     $currency = $request->currency;
        //     $paid = $request->paid;
        //     $remaining_amount = $request->remaining_amount;
        //     $pay_date = $request->pay_date;
        //     $notes = $request->notes;


        $validated = $request->validate([
            'next_visit_date' => 'required',
        ]);

           // $user=Patient::where('id',$id)->with()->appointments;
         
           $input=$request->all();
           $event=$input['event'];
           $request['event'] = implode('-',$event);  
       
         
           $patient->appointments()->create($request->except('patient_id','patient_name'));

            Alert::warning('إضافة زيارة', 'تمت عملية الإضافة بنجاح');
            return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = Patient::whereId($id)->first();
        $surgerykind=SurgeryKind::all();
        // dd($patient);
        $today_date = date('Y-m-d H:i:s');
        return view('appointment.create', compact('patient','today_date','surgerykind'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Patient $patient)
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
    public function update(Request $request, $id, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Patient $patient)
    {
        //
    }
}
