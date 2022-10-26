<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Patient;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function file(Patient $patient)
    {
        //$files = File::all();

        $files = $patient->files;

        return view('patient.file')->with(compact('files', 'patient'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Patient $patient)
    {
        $messages = [
            'required' => 'الرجاء ارفق ملف أو صورة',
        ];

        $this->validate($request, [
            'file' => 'required',
        ], $messages);

        foreach ($request->file as $file) {
            $filename = time() . '_' . $file->getClientOriginalName();
            $filesize = $file->getSize();
            $file->storeAs('public/', $filename);
            // $fileModel = new File;
            // $fileModel->name = $filename;
            // $fileModel->size = $filesize;
            // $fileModel->location = 'storage/'.$filename;
            // $fileModel->save();
            $patient->files()->create([
                'file' => $filename,
                'size' => $filesize,
                'location' => 'storage/' . $filename,
            ]);
        }
        Alert::warning('رفع الملفات', 'تمت عملية الإضافة بنجاح');

        return redirect()->back();
        //->with('success', 'File/s Uploaded Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
