<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Patient;
use App\Models\Appointment;
use App\Models\SurgeryKind;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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


        //     $visit_date = $request->visit_date;
        //     $next_visit_date = $request->next_visit_date;
        //    // $patient_id = $patient->id;
        //     $cost = $request->cost;
        //     $currency = $request->currency;
        //     $paid = $request->paid;
        //     $remaining_amount = $request->remaining_amount;
        //     $pay_date = $request->pay_date;
        //     $notes = $request->notes;

        if($request->next_visit_date=='مريض'){
        $validated = $request->validate([
            'next_visit_date' => 'required',
        ]);}

        //  Payemnt::with('patient.appointments')->get();
       
           $event=$request->event;
         //  $request['event'] = implode('-',$event);  
       
         
          DB::beginTransaction();
          try{
            $patient->appointments()->create([
                'next_visit_date' => $request->next_visit_date,
                'surgery_kind_id' => $request->surgery_kind_id,
                'surgery_kind_id_child' => $request->surgery_kind_id_child,
            
                //'event' => implode('-',$request->event),
               ]);
    
               $payment = $patient->payments()->create([
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
               return redirect()->back();
    
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
        $patient = Patient::whereId($id)->first();
        $surgerykind=SurgeryKind::whereNull('surgery_kind_id')->get();
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
