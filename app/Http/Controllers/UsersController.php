<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\Rules\Dimensions;
use Symfony\Component\HttpFoundation\RequestStack;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(User $user)
    {
        //    $users = User::orderBy('id','desc')->paginate(5);
        //$user = User::all();
        return view('user.index', compact('user'));
    }
    public function create()
    {
        $roles = Role::all();
        return view('user.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $name = $request->name;
        $password = $request->password;
        $email = $request->email;
        $address = $request->address;
        $phone = $request->phone;
        $gender = $request->gender;
        $status = $request->status;


        if ($status == '') {
            $status = 0;
        }
        $validated = $request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required|unique:users',
            'phone' => 'required|min:7',
            'address' => 'required',
            'profile_photo_path' => ['nullable', 'image', 'dimensions:min_width=200,min_height=200'],
        ]);
        if ($request->hasFile('profile_photo')) {
            $file = $request->file('profile_photo');
            $path = $file->store('users_photos', 'public');
        }
        //User::create([]);
        $add_user = User::create([
            'name' => $name,
            'password' => bcrypt($password),
            'email' => $email,
            'address' => '123',
            'phone' => $phone,
            'gender' => $gender,
            'status' => $status,
            'profile_photo_path' =>$path
        ]);


        $add_user->assignRole($request->role);

        Alert::success('إضافة مستخدم جديد', 'تمت عملية الإضافة بنجاح');

        return redirect()->route('users.index');
        //->with('success', 'تم الإضافة بنجاح');

        // return redirect('/users/create');



    }



    public function edit(User $user)
    {
        $roles = Role::all();
        // if ($user == null) {
        //     abort(404);
        // }
        $roleSelected = $user->roles()->pluck('id')->toArray();
        //   dd($roleSelected);
        return view('user.edit', compact('user', 'roles', 'roleSelected'));
    }
    


    public function update(Request $request, User $user)
    {

        // $user=User::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => ['email','required', Rule::unique('users')->ignore($user->id)],
            'phone' => 'required|min:7',
            'address' => 'required',
            'profile_photo_path' => ['nullable', 'image', 'dimensions:min_width=200,min_height=200'],

        ]);if ($request->file('profile_photo') == null) {
            $file = "";
        }else{
        $previous = $user->profile_photo_path;
        $file = $request->file('profile_photo');
        $path = $file->store('users_photos', 'public');


        $user->update([

            'name' => $name = $request->name,
            'password' => bcrypt($password = $request->password),
            'email' => $email = $request->email,
            'address' => $address = $request->address,
            'phone' => $phone = $request->phone,
            'gender' => $gender = $request->gender,
            'status' => $status = $request->status,
            'profile_photo_path' => $path,

        ]);
        if($request->status==''){
$status=0;
        }



        if ($previous && $previous != $user->profile_photo_path) {
            Storage::disk('public')->delete($previous);
        }
    }
        if ($request->has('role')) {
            $userRole = $user->getRoleNames();
            foreach ($userRole as $role) {
                $user->removeRole($role);
            }
            $user->assignRole($request->role);
        }
        //return redirect()->back();
        Alert::warning('تعديل بيانات مستخدم', 'تمت عملية التعديل بنجاح');

        return redirect()->route('users.index');
        //->with('success', 'تم التعديل بنجاح');
    }


    public function show(User $user)
    {
        return response()->json($user);
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


        $totalRecords = User::select('count(*) as allcount')->count();
        $totalRecordswithFilter = User::select('count(users.*) as allcount');

        if ($searchValue != null)
            $totalRecordswithFilter = $totalRecordswithFilter
                ->where('users.name', 'like', '%' . $searchValue . '%')
                ->where('users.email', 'like', '%' . $searchValue . '%')
                ->orWhere('users.address', $searchValue);

        if ($from_date != -1)
            $totalRecordswithFilter = $totalRecordswithFilter->whereBetween('users.created_at', array($from_date, $to_date));
        if ($filter_1 != -1)
            $totalRecordswithFilter = $totalRecordswithFilter->where('users.name', 'like', '%' . $filter_1 . '%');
        if ($filter_2 != -1)
            $totalRecordswithFilter = $totalRecordswithFilter->where('users.email', 'like', '%' . $filter_2 . '%');
        if ($filter_3 != -1)
            $totalRecordswithFilter = $totalRecordswithFilter->whereIn('users.address', $filter_3);


        $totalRecordswithFilter = $totalRecordswithFilter->count();

        // Fetch records

        $items = User::orderBy('users.id', 'desc');
        if ($searchValue != null)
            $items = $items
                ->where('users.name', 'like', '%' . $searchValue . '%')
                ->orWhere('users.email', 'like', '%' . $searchValue . '%')
                ->orWhere('users.address', $searchValue);

        if ($from_date != -1)
            $items = $items->whereBetween('users.created_at', array($from_date, $to_date));
        if ($filter_1 != -1)
            $items = $items->where('users.name', 'like', '%' . $filter_1 . '%');
        if ($filter_2 != -1)
            $items = $items->where('users.email', 'like', '%' . $filter_2 . '%');
        if ($filter_3 != -1)
            $items = $items->where('users.address', $filter_3);

        $items = $items->select('users.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();


        $data = [];
        foreach ($items as $item) {



            $data[] = [
                'id' => $item->id,
                'name' => $item->name,
                'email' => $item->email,
                'address' => $item->address,
                "created_at" => Carbon::parse($item->dob)->format('d-m-Y'), // h:i A
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

    public function destroy(User $user)
    {
        $user->delete();
        return response()->json($user);
    }
}
