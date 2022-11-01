<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Patient;
use App\Models\Appointment;
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
            $data = Appointment::whereDate('event_start', '>=', $request->start)
                ->whereDate('event_end',   '<=', $request->end)
                ->get(['id', 'event_name', 'event_start', 'event_end']);
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
    public function store(Request $request, Patient $patient)
    {

            $visit_date = $request->visit_date;
            $next_visit_date = $request->next_visit_date;
            $patient_id = $request->patient_id;
            $cost = $request->cost;
            $currency = $request->currency;
            $paid = $request->paid;
            $remaining_amount = $request->remaining_amount;
            $pay_date = $request->pay_date;
            $notes = $request->notes;


        $validated = $request->validate([
            'next_visit_date' => 'required',]);
            $patient = Patient::with('appointments');
            dd($patient);




            // $patient->appointments()->create([
            //     'visit_date' => $visit_date,
            //     'next_visit_date' => $next_visit_date,

            //     'cost' => $cost,
            //     'currency' => $currency,
            //     'paid' => $paid,
            //     'remaining_amount' => $remaining_amount,
            //     'pay_date' => $pay_date,
            //     'notes' => $notes,
            // ]);
            Alert::warning('إضافة زيارة', 'تمت عملية الإضافة بنجاح');
            return redirect()->back();

           // Appointment::create($request->all());


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
        // dd($patient);
        $today_date = date('Y-m-d H:i:s');
        return view('appointment.index', compact('patient','today_date'));
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
