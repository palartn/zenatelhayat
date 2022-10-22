@extends('layouts.master')
@section('content')
<div id="kt_content_container" class="container-xxl mt-6">
<div class="card card-flush h-lg-100" id="kt_contacts_main">
	<!--begin::Card header-->
	<div class="card-header pt-7" id="kt_chat_contacts_header">
		<!--begin::Card title-->
		<div class="card-title">
			<!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
			<span class="svg-icon svg-icon-1 me-2">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="currentColor"></path>
					<path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="currentColor"></path>
				</svg>
			</span>
			<!--end::Svg Icon-->
			<h2 >إضافة مريض</h2>
		</div>
		<!--end::Card title-->
	</div>

	@if (session()->has('success'))
	<div class="alert alert-success alert-session-flash  ">
		<h1>{{session()->get('success')}}</h1>
	</div>
	@endif
    {{-- @if ($errors->any())
    <div class="text-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}
	<!--end::Card header-->
	<!--begin::Card body-->
	<form class="kt-form kt-form--label-right" enctype="multipart/form-data" accept-charset="utf-8" id="from_view_cust" name="from_view_cust" autocomplete='off'>
		<div class="kt-portlet__body">
			<div class="form-group row">
		

	
	<div class="card-body pt-5">
	<!--begin::Form-->
		<form method="POST" action="{{route('patients.store')}}" enctype="multipart/form-data">
            @csrf
           <div class="row ">
                <div class="col xl-3">
					<label class="fs-4 fw-semibold form-label" for="sname"> إسم الأول</label>
                  <input type="text" id="fname" class="form-control form-control-solid @error('fname') is-invalid @enderror" name="fname"  value="{{ old('fname') }}" placeholder="الإسم الأول" aria-label="First name">
                </div>
                <div class="col xl-3">
                <label class="fs-4 fw-semibold form-label" for="sname"> إسم الأب</label>
                  <input type="text" id="sname" class="form-control form-control-solid @error('sname') is-invalid @enderror" name="sname"  value="{{ old('sname') }}" placeholder="إسم الأب" aria-label="Last name">
                </div>
                <div class="col xl-3">
					<label class="fs-4 fw-semibold form-label" for="sname"> إسم الجد</label>
                  <input type="text" class="form-control form-control-solid @error('tname') is-invalid @enderror" name="tname"  value="{{ old('tname') }}" placeholder="إسم الجد" aria-label="Last name">
                </div>
                <div class="col xl-3">
					<label class="fs-4 fw-semibold form-label" for="lname"> إسم العائلة</label>
                  <input type="text" class="form-control form-control-solid @error('lname') is-invalid @enderror" name="lname"  value="{{ old('lname') }}" placeholder="إسم العائلة" aria-label="Last name">
                </div>
             </div>

			 <div class="row mt-6">
			 <div class="col xl-3">
				<label class="fs-4 fw-semibold form-label" for="idc"> رقم الهوية</label>
			  <input type="text" class="form-control form-control-solid @error('idc') is-invalid @enderror" name="idc"  value="{{ old('idc') }}" placeholder="رقم الهوية" aria-label="Last name">
			</div>
			<div class="col xl-3">
				<label class="fs-4 fw-semibold form-label" for="dob"> تاريخ الميلاد</label>
			  <input type="date" class="form-control form-control-solid ps-12 flatpickr-input active @error('dob') is-invalid @enderror" id="kt_datepicker_1" name="dob"  value="{{ old('dob') }}" placeholder="تاريخ الميلاد" aria-label="Last name">
			  {{-- <input class="form-control form-control-solid ps-12 flatpickr-input active" name="date" placeholder="Pick a date" id="kt_datepicker_1" type="text" readonly="readonly"> --}}
			</div>
			
			<div class="col xl-3">
				<label class="fs-4 fw-semibold form-label" for="occupation"> الوظيفة</label>
			  <input type="text" class="form-control form-control-solid @error('occupation') is-invalid @enderror" name="occupation"  value="{{ old('occupation') }}" placeholder="الوظيفة" aria-label="Last name">
			</div>
		
		</div>

		<div class="row mt-6">
			<div class="col xl-3">
			   <label class="fs-4 fw-semibold form-label" for="email"> البريد الإلكتروني</label>
			 <input type="text" class="form-control form-control-solid @error('email') is-invalid @enderror" name="email"  value="{{ old('email') }}" placeholder="البريد الإلكتروني" aria-label="Last name">
		   </div>
		   <div class="col xl-3">
			   <label class="fs-4 fw-semibold form-label" for="mobile"> جوال</label>
			 <input type="text" class="form-control form-control-solid  @error('mobile') is-invalid @enderror"  name="mobile"  value="{{ old('mobile') }}" placeholder="جـــوال" aria-label="Last name">
			 {{-- <input class="form-control form-control-solid ps-12 flatpickr-input active" name="date" placeholder="Pick a date" id="kt_datepicker_1" type="text" readonly="readonly"> --}}
		   </div>
		   
		   <div class="col xl-3">
			   <label class="fs-4 fw-semibold form-label" for="mobile_second"> الوظيفة</label>
			 <input type="text" class="form-control form-control-solid @error('mobile_second') is-invalid @enderror" name="mobile_second"  value="{{ old('mobile_second') }}" placeholder="جوال ثاني إن وجد" aria-label="Last name">
		   </div>
	   	   </div>

	   <div class="row mt-6">
		<div class="col xl-3">
		   <label class="fs-4 fw-semibold form-label" for="address"> العنوان</label>
		 <input type="text" class="form-control form-control-solid @error('address') is-invalid @enderror" name="address"  value="{{ old('address') }}" placeholder="عنوان السكن" aria-label="Last name">
	   </div>

	   <div class="col xl-3">
		<label class="fs-4 fw-semibold form-label mt-3">
			<span>الجنس</span>
			<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter the contact's phone number (optional)." data-kt-initialized="1"></i>
		</label>
		<!--end::Label-->
		<!--begin::Input-->
		<select name="gender" class="form-select" data-control="select2" data-placeholder="الرجاء الإختيار">

			<option value="1">ذكر</option>
			<option value="2" selected>أنثى</option>
		</select>
		 {{-- <input class="form-control form-control-solid ps-12 flatpickr-input active" name="date" placeholder="Pick a date" id="kt_datepicker_1" type="text" readonly="readonly"> --}}
	   </div>
	</div>

	  
	

		<div class="d-flex flex-column mb-8 mt-6">
			<label class="fs-4 fw-semibold form-label">ملاحظـــات</label>
			<textarea class="form-control form-control-solid" rows="3" name="notes" placeholder="ملاحظات" ></textarea>
		</div>
		<div class="d-flex">
	
				<button type="submit" id="btn" class="btn btn-primary   ">
				<span class="indicator-label btn-lg btn-block">حفظ</span>
				</button>

				
</form>
	   
   
   </div>





	   
			


	@endsection
<script>setTimeout(function() {
	$('.alert-session-flash').fadeOut('low');
}, 3000); // <-- time in milliseconds
</script>