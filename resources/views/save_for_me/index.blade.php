"//how to generate laravel pdf ?"
<?php
     public function getTestdata($id){
           $user = PersonalInfo::find($id);
          $object = PersonalInfo::where('id',$id)->get();
        $object1 = AdditionalInformation::where('user_id',$id)->get();
         $data3=UserImage::where('user_id',$id)->get();
     return view('test',compact('id','object','object1','user','data3'));
 }


<a href="{{  url('/pdf')  }}">Download PDF</a>
...
<th>
      @foreach($data3 as $currentUser)
      <img src="{{ url('images/' . $currentUser->name ) }}">
      @endforeach
 </th>
...
  @php
    $userFamily = $user->userFamily;
  @endphp
    <tr>
    <td><b>FAMILY Members</b></td>
      <td>
    @foreach($userFamily as $val)

    @if($val["meta_key"] == "relationshiplist")
    {{  $val["meta_value"]  }}  |
    @endif
        @endforeach
    </td>


public function fun_pdf(){
    $pdf = PDF::loadView('test'); //load view page
    return $pdf->download('test.pdf'); // download pdf file
}


Route::get('/pdf', 'pdfDownloadController@fun_pdf');
Route::get('/user/showtest/{id}/test1', 'testController@getTestData')->name('template');


    public function fun_pdf($id){
        $user = PersonalInfo::find($id);
        $object = PersonalInfo::where('id',$id)->get();
        $object1 = AdditionalInformation::where('user_id',$id)->get();
        $data3=UserImage::where('user_id',$id)->get();
        $data =[
            'id' => $id,
            'object' => $object,
            'object1' => $object1,
            'user' => $user,
            'data3' => $data3,
        ];

        $pdf = PDF::loadView('test',$data); //load view page
        return $pdf->download('test.pdf'); // download pdf file
    }

