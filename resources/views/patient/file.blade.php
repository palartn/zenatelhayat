@extends('layouts.master')
@section('content')
    <div id="kt_content_container" class="container-xxl mt-6">
        <div class="card card-flush h-lg-100" id="kt_contacts_main">
            <!--begin::Card header-->

            <div class="modal-header bg-secondary">

                <h5 class="modal-title card-label fw-bolder fs-3 mb-1 ">البيانات الأساسية للمريض</h5>
            </div>
            <div class="modal-body row">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="form-group row mb-1">
                                <label class="col-form-label col-lg-4 fs-4 fw-semibold form-label">الاسم رباعي</label>
                                <div class="col-lg-8">
                                    <div class="form-control-plaintext border px-2 alpha-slate fs-4 fw-semibold form-label"
                                        style="" id="patient_name">
                                        {{ $patient->patient_fname . ' ' . $patient->patient_sname . ' ' . $patient->patient_tname . ' ' . $patient->patient_lname }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group row mb-1">
                                <label class="col-form-label col-lg-4 fs-4 fw-semibold form-label">رقم الهوية</label>
                                <div class="col-lg-8">
                                    <div class="form-control-plaintext border px-2 alpha-slate fs-4 fw-semibold form-label "
                                        id="patient_idc" style="">{{ $patient->idc }}</div>
                                </div>
                            </div>
                        </div>



                        <div class="card shadow-sm mt-5">
                            <div class="card-header">
                                <h3 class="card-title col-xl-12">رفع ملفات المريض</h3>

                                <div class="container">
                                    <h1 class="page-header text-center">ملفات المريض</h1>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="card">
                                                <div class="card-header">رفع الملفات</div>
                                                <div class="card-body">

                                                    <form method="POST" action="{{ route('upload_file', $patient->id) }}"
                                                        enctype="multipart/form-data">
                                                        {{ csrf_field() }}
                                                        <input type="file" class="form-control form-control-solid mb-5" name="file[]" multiple>
                                                        <input type="text" name="title" class="form-control form-control-solid mb-5" placeholder="اسم الملف">
                                                        <button type="submit" class="btn btn-primary">رفع الصورة</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div style="margin-top:20px;">
                                                @if (count($errors) > 0)
                                                    @foreach ($errors->all() as $error)
                                                        <div class="alert alert-danger text-center">
                                                            {{ $error }}
                                                        </div>
                                                    @endforeach
                                                @endif

                                                @if (session('success'))
                                                    <div class="alert alert-success text-center">
                                                        {{ session('success') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            {{-- <h2>ملفات المريض</h2> --}}
                                            <table class="table table-bordered table-striped ">
                                                <thead>
                                                    <th>الملف</th>
                                                    <th>إسم الملف</th>
                                                    <th>حجم الملف</th>
                                                    <th>تاريخ الرفع</th>
                                                    <th>مكان الملف</th>
                                                </thead>
                                                <tbody>
                                                    @if (count($files) > 0)
                                                        @foreach ($files as $file)
                                                            <tr>
                                                                <td><img src='/storage/patient_files/{{$file->file }}'
                                                                        name="{{ $file->title }}"
                                                                        style="width:90px;height:90px;">
                                                                </td>
                                                                <td>{{ $file->title }}</td>
                                                                <td>
                                                                    @if ($file->size < 1000)
                                                                        {{ number_format($file->size, 2) }} bytes
                                                                    @elseif($file->size >= 1000000)
                                                                        {{ number_format($file->size / 1000000, 2) }} mb
                                                                    @else
                                                                        {{ number_format($file->size / 1000, 2) }} kb
                                                                    @endif
                                                                </td>
                                                                <td>{{ date('M d, Y h:i A', strtotime($file->created_at)) }}
                                                                </td>
                                                                <td><a
                                                                        href="{{$file->location }}">اضغط لرؤيةالملف</a>
                                                                </td>

                                                            </tr>
                                                        @endforeach
                                                    @else
                                                        <tr>
                                                            <td colspan="5" class="text-center">لا يوجد ملفات للمريض</td>
                                                        </tr>
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>



                                <div class="row col-sm">



                                </div>
                            </div>



                        </div>



                        <div class="card-body">
                           زيارات المريض
                        </div>
                        <div class="card-footer">
                            Footer
                        </div>
                    </div>


                </div>
            </div>
        @endsection
