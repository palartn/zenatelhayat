<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\ExpenseResource;
use App\Models\Expense as ModelsExpense;
use RealRashid\SweetAlert\Facades\Alert;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('expense.index');
    }


    public function today_expenses()
    {
        return view('expense.today_expense');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expense.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'paied_for' => 'required',
            'amount' => 'required',

        ]);
        Expense::create($request->all());
        Alert::success('إضافة مصروفات', 'تمت الإضافة بنجاح');

        return redirect()->route('expenses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function show(expense $expense)
    {
        return new ExpenseResource($expense);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function edit(expense $expense)
    {
        return view('expense.edit', compact('expense'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, expense $expense)
    {
        $expense->update([
            'paied_for' => $request->paied_for,
            'amount' => $request->amount,
            'currency' => $request->currency,
            'pay_date' => $request->pay_date,
            'notes' => $request->notes,
        ]);
        Alert::warning('تعديل بيانات مصروفات', 'تمت عملية التعديل بنجاح');
        return redirect()->route('expenses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(expense $expense)
    {
        $expense->delete();
        return response()->json($expense);
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


        $totalRecords = Expense::select('count(*) as allcount')->count();
        $totalRecordswithFilter = Expense::select('count(expenses.*) as allcount');

        if ($searchValue != null)
            $totalRecordswithFilter = $totalRecordswithFilter
                ->where('expenses.pay_date', 'like', '%' . $searchValue . '%')
                ->where('expenses.amount', 'like', '%' . $searchValue . '%')
                ->where('expenses.pay_date', 'like', '%' . $searchValue . '%')
                ->orWhere('expenses.notes', $searchValue);

        if ($from_date != -1)
            $totalRecordswithFilter = $totalRecordswithFilter->whereBetween('expenses.paied_for', array($from_date, $to_date));
        if ($filter_1 != -1)
            $totalRecordswithFilter = $totalRecordswithFilter->where('expenses.amount', 'like', '%' . $filter_1 . '%');
        if ($filter_2 != -1)
            $totalRecordswithFilter = $totalRecordswithFilter->where('expenses.pay_date', 'like', '%' . $filter_2 . '%');
        if ($filter_3 != -1)
            $totalRecordswithFilter = $totalRecordswithFilter->whereIn('expenses.currency', $filter_3);
        if ($filter_4 != -1)
            $totalRecordswithFilter = $totalRecordswithFilter->whereIn('expenses.notes', $filter_4);


        $totalRecordswithFilter = $totalRecordswithFilter->count();

        // Fetch records

        $items = Expense::orderBy('expenses.id', 'desc');
        if ($searchValue != null)
            $items = $items
                ->where('expenses.paied_for', 'like', '%' . $searchValue . '%')
                ->orWhere('expenses.currency', 'like', '%' . $searchValue . '%')
                ->orWhere('expenses.amount', $searchValue)
                ->orWhere('expenses.pay_date', $searchValue);


        if ($from_date != -1)
            $items = $items->whereBetween('expenses.created_at', array($from_date, $to_date));
        if ($filter_1 != -1)
            $items = $items->where('expenses.paied_for', 'like', '%' . $filter_1 . '%');
        if ($filter_2 != -1)
            $items = $items->where('expenses.amount', 'like', '%' . $filter_2 . '%');
        if ($filter_3 != -1)
            $items = $items->whereIn('expenses.pay_date', $filter_3);
        if ($filter_4 != -1)
            $items = $items->where('expenses.notes', 'like', '%' . $filter_4 . '%');
        $items = $items->select('expenses.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();




        $data = [];
        foreach ($items as $item) {
            $data[] = [
                'id' => $item->id,
                'paied_for' => $item->paied_for,
                'amount' => $item->amount,
                'currency' => $item->currency,
                'pay_date' => $item->pay_date,
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




    public function getData_Today(Request $request)
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


        // $totalRecords = Appointment::select('count(*) as allcount')->count();
        $totalRecords = DB::table('expenses')->whereDate('pay_date', DB::raw('CURDATE()'))->count();
        $totalRecordswithFilter = DB::table('expenses')->whereDate('pay_date', DB::raw('CURDATE()'));
        // $totalRecordswithFilter = Appointment::select('count(expenses.*) as allcount');

        if ($searchValue != null)
            $totalRecordswithFilter = $totalRecordswithFilter
                ->where('expenses.pay_date', 'like', '%' . $searchValue . '%')
                ->orWhere('expenses.pay_date', 'like', '%' . $searchValue . '%')
                ->orWhere('expenses.pay_date', 'like', '%' . $searchValue . '%')
                ->orWhere('expenses.pay_date', $searchValue);

        if ($from_date != -1)
            $totalRecordswithFilter = $totalRecordswithFilter->whereBetween('expenses.pay_date', array($from_date, $to_date));
        if ($filter_1 != -1)
            $totalRecordswithFilter = $totalRecordswithFilter->where('expenses.pay_date', 'like', '%' . $filter_1 . '%');
        if ($filter_2 != -1)
            $totalRecordswithFilter = $totalRecordswithFilter->where('expenses.pay_date','like', '%' . $filter_2);
        // if ($filter_3 != -1)
        //     $totalRecordswithFilter = $totalRecordswithFilter->whereIn('expenses.address', $filter_3);
        // if ($filter_4 != -1)
        //     $totalRecordswithFilter = $totalRecordswithFilter->whereIn('expenses.idc', $filter_4);


        $totalRecordswithFilter = $totalRecordswithFilter->count();

        // Fetch records

        $items = DB::table('expenses')->whereDate('visit_date', DB::raw('CURDATE()'))->orderBy('expenses.id', 'desc');
        $items = Expense::whereDate('pay_date', DB::raw('CURDATE()'))->orderBy('expenses.id', 'desc');
        if ($searchValue != null)
            $items = $items
                ->where('expenses.pay_date', 'like', '%' . $searchValue . '%')
                ->orWhere('expenses.pay_date', 'like', '%' . $searchValue . '%')
                ->orWhere('expenses.pay_date', $searchValue)
                ->orWhere('expenses.pay_date', $searchValue);


        if ($from_date != -1)
            $items = $items->whereBetween('expenses.pay_date', array($from_date, $to_date));
        if ($filter_1 != -1)
            $items = $items->where('expenses.pay_date', 'like',$filter_1);
            if ($filter_2 != -1)
            $items = $items->where('expenses.pay_date','like', '%' . $filter_2 . '%');
        if ($filter_3 != -1)
            $items = $items->whereIn('expenses.pay_date', $filter_3);
            if ($filter_4 != -1)
            $items = $items->where('surgery_kind_id.notes', 'like', '%' . $filter_4 . '%');
        $items = $items->select('expenses.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();




            $data = [];
            foreach ($items as $item) {
                $data[] = [
                    'id' => $item->id,
                    'paied_for' => $item->paied_for,
                    'amount' => $item->amount,
                    'currency' => $item->currency,
                    'pay_date' => $item->pay_date,
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





    // public function getData_Today(Request $request)
    // {
     
    //     $draw = $request->get('draw');
    //     $start = $request->get("start");
    //     $rowperpage = $request->get("length"); // Rows display per page
    //     $columnIndex_arr = $request->get('order');
    //     $columnName_arr = $request->get('columns');
    //     $order_arr = $request->get('order');
    //     $search_arr = $request->get('search');
    //     $columnIndex = $columnIndex_arr[0]['column']; // Column index
    //     $columnName = $columnName_arr[$columnIndex]['data']; // Column name
    //     $columnSortOrder = $order_arr[0]['dir']; // asc or desc

    //     $searchValue = $search_arr['value']; // Search value
    //     $searchValue_filtered = str_replace(' ', '', str_replace(['أ', 'إ'], 'ا', str_replace(['ي', 'ئ'], 'ى', str_replace('ة', 'ه', $searchValue))));
    //     if ($request->from_date != -1) {
    //         $from_date = Carbon::parse($request->from_date)->format('Y-m-d H:i:s');
    //     } else {
    //         $from_date = $request->from_date;
    //     }
    //     if ($request->to_date != -1) {
    //         $to_date = Carbon::parse($request->to_date)->format('Y-m-d H:i:s');
    //     } else {
    //         $to_date = $request->to_date;
    //     }
    //     if ($request->filter_1 != -1) {

    //         $filter_1 = $request->filter_1;
    //     } else {
    //         $filter_1 = -1;
    //     }
    //     if ($request->filter_2 != -1) {

    //         $filter_2 = $request->filter_2;
    //     } else {
    //         $filter_2 = -1;
    //     }
    //     if ($request->filter_3 != -1) {

    //         $filter_3 = $request->filter_3;
    //     } else {
    //         $filter_3 = -1;
    //     }
    //     if ($request->filter_4 != -1) {

    //         $filter_4 = $request->filter_4;
    //     } else {
    //         $filter_4 = -1;
    //     }


    //     $totalRecords = DB::table('expenses')->whereDate('pay_date', DB::raw('CURDATE()'))->count();
    //     $totalRecordswithFilter = DB::table('expenses')->whereDate('pay_date', DB::raw('CURDATE()'));
      

    //     if ($searchValue != null)
    //         $totalRecordswithFilter = $totalRecordswithFilter
    //             ->where('expenses.pay_date', 'like', '%' . $searchValue . '%')
    //             ->where('expenses.amount', 'like', '%' . $searchValue . '%')
    //             ->where('expenses.pay_date', 'like', '%' . $searchValue . '%')
    //             ->orWhere('expenses.notes', $searchValue);

    //     if ($from_date != -1)
    //         $totalRecordswithFilter = $totalRecordswithFilter->whereBetween('expenses.paied_for', array($from_date, $to_date));
    //     if ($filter_1 != -1)
    //         $totalRecordswithFilter = $totalRecordswithFilter->where('expenses.amount', 'like', '%' . $filter_1 . '%');
    //     if ($filter_2 != -1)
    //         $totalRecordswithFilter = $totalRecordswithFilter->where('expenses.pay_date', 'like', '%' . $filter_2 . '%');
    //     if ($filter_3 != -1)
    //         $totalRecordswithFilter = $totalRecordswithFilter->whereIn('expenses.currency', $filter_3);
    //     if ($filter_4 != -1)
    //         $totalRecordswithFilter = $totalRecordswithFilter->whereIn('expenses.notes', $filter_4);


    //     $totalRecordswithFilter = $totalRecordswithFilter->count();

    //     // Fetch records

    //     $items = Expense::orderBy('expenses.id', 'desc');
    //     if ($searchValue != null)
    //         $items = $items
    //             ->where('expenses.paied_for', 'like', '%' . $searchValue . '%')
    //             ->orWhere('expenses.currency', 'like', '%' . $searchValue . '%')
    //             ->orWhere('expenses.amount', $searchValue)
    //             ->orWhere('expenses.pay_date', $searchValue);


    //     if ($from_date != -1)
    //         $items = $items->whereBetween('expenses.created_at', array($from_date, $to_date));
    //     if ($filter_1 != -1)
    //         $items = $items->where('expenses.paied_for', 'like', '%' . $filter_1 . '%');
    //     if ($filter_2 != -1)
    //         $items = $items->where('expenses.amount', 'like', '%' . $filter_2 . '%');
    //     if ($filter_3 != -1)
    //         $items = $items->whereIn('expenses.pay_date', $filter_3);
    //     if ($filter_4 != -1)
    //         $items = $items->where('expenses.notes', 'like', '%' . $filter_4 . '%');
    //     $items = $items->select('expenses.*')
    //         ->skip($start)
    //         ->take($rowperpage)
    //         ->get();




    //     $data = [];
    //     foreach ($items as $item) {
    //         $data[] = [
    //             'id' => $item->id,
    //             'paied_for' => $item->paied_for,
    //             'amount' => $item->amount,
    //             'currency' => $item->currency,
    //             'pay_date' => $item->pay_date,
    //             'notes' => $item->notes,
    //             "created_at" => Carbon::parse($item->created_at)->format('d-m-Y'), // h:i A
    //             "actions" => null

    //         ];
    //     }

    //     $response = array(
    //         "draw" => intval($draw),
    //         "iTotalRecords" => $totalRecords,
    //         "iTotalDisplayRecords" => $totalRecordswithFilter,
    //         "aaData" => $data
    //     );

    //     return response()->json($response);
    //     exit;
    // }
}
