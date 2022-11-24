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
			<h2 >إضافة زيارة</h2>
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
    @endif  --}}



	<div class="card-body pt-5">
	<!--begin::Form-->
	<form method="POST" action="{{ route('appointments.update',$appointment->id) }}">
		@csrf
        @method('put')
		<input type="hidden" value="{{ $appointment->id }}" name="appointment_id">
		<div class="col xl-3">
			<label class="fs-4 fw-semibold form-label" for="visit_date"> التاريخ</label>
			<input type="text" readonly disabled
				class="form-control form-control-solid @error('visit_date') is-invalid @enderror"
				name="visit_date" value="{{ $appointment->visit_date }}" readonly disabled>
		</div>

		<div class="col mt-6">
			<div class="col xl-3">
				<label class="fs-4 fw-semibold form-label" for="mobile_second"> إسم
					المريض
				</label>
				@foreach($patient as $patient)
				<span class="d-inline-flex mb-3 px-2 py-1 fw-semibold text-black bg-success bg-opacity-20 border border-success border-opacity-20 rounded-2 h6 ">
					{{ "زائر لمرة واحدة" }}
					@endforeach
				</span>
				<input type="text"
					class="form-control form-control-solid @error('patient_name') is-invalid @enderror"
					name="patient_name"
					value="{{ $patient->patient_fname . ' ' . $patient->patient_sname . ' ' . $patient->patient_tname . ' ' . $patient->patient_lname }}">
			</div>




				<div class="row">
					@if($patient->patient_type=='مريض')
			<div class="col xl-4 col-4 mt-6">
				<label class="fs-4 fw-semibold form-label" for="mobile"> تاريخ الزيارة
					القادمة</label>
				<input type="date"
					class="form-control form-control-solid  flatpickr-input active @error('next_visit_date') is-invalid @enderror"
					id="kt_datepicker_1 next_visit_date" name="next_visit_date"
					value="{{ $appointment->next_visit_date }}" placeholder="الزيارة القادمة">
				@error('next_visit_date')
					<div class="text-danger mt-1 mb-1">{{ $message }}</div>
				@enderror

			</div>
			@endif
				  <div class="col col-4">
					<label class="fs-4 fw-semibold form-label mt-6"> سبب الزيارة </label>
					<select name='surgery_kind_id'  class="form-control form-control-solid productcategory" id="prod_cat_id">
					<option value="0" disabled="true" selected="true">سبب الزيارة</option>
					@foreach($surgerykind as $surgerykind)
						<option value="{{$surgerykind->id}}">{{$surgerykind->name}}</option>
					@endforeach
				</select>

				</div>

					<div class="col col-4">
						<label class="fs-4 fw-semibold form-label mt-6" > القسم</label>
						<select  name='surgery_kind_id_child'  class="form-control form-control-solid productname">
							{{-- <option value="0" disabled="true" selected="true">القسم</option> --}}
						</select>

				</div>
				</div>


			<div class="row">
				<div class="col-sm-4 mt-6">
					<label class="fs-4 fw-semibold form-label"
						for="visit_date">التكلفة</label>
					<input type="number"
						class="form-control form-control-solid total_price @error('total_price') is-invalid @enderror"
						name="total_price" id="total_price" value="{{ $appointment->payment->total_price }}" placeholder="المبلغ للدفع">
				</div>

				<div class="col-sm-4 mt-6">
					<label class="fs-4 fw-semibold form-label" for="visit_date">المبلغ
						المدفوع</label>
					<input type="number"
						class="form-control form-control-solid paid @error('paid') is-invalid @enderror"
						name="paid" id="paid" value="{{ $payment->paid }}" placeholder="المدفوع">
				</div>
				<div class="col-sm-4 mt-6">
					<label class="fs-4 fw-semibold form-label"
						for="visit_date">عملة الدفع</label>
						<select class="form-select form-select-lg form-select-solid  @error('currency') is-invalid @enderror "
					name="currency" data-control="select2" data-placeholder="Select an option" data-allow-clear="true">
						<option value="شيكل" >شيكل</option>
						<option value="دولار">دولار</option>
						<option value="دينار">دينار</option>
					</select>

				</div>


				<div class="col-6 mt-6">
					<label class="fs-4 fw-semibold form-label" for="visit_date">المبلغ
						المتبقي</label>
					<input type="number" name="remaining_amount" readonly style="background: rgb(221, 228, 243)"
						class="form-control form-control-solid remaining_amount @error('remaining_amount') is-invalid @enderror"
						 placeholder="الباقي" value="{{ $payment->remaining_amount }}">
				</div>
				<div class="col-6 mt-6">
					<label class="fs-4 fw-semibold form-label" for="visit_date">تاريخ
						الدفع</label>
					<input type="date" name="pay_date"
						class="form-control form-control-solid  flatpickr-input active @error('pay_date') is-invalid @enderror"
						value="{{ date('Y-m-d') }}" id="kt_datepicker_1"
						placeholder="تاريخ الدفع" value="{{ $payment->pay_date }}">
				</div>
			</div>
			<div>
			<label class="fs-4 fw-semibold form-label mt-6">ملاحظـــات</label>
			<textarea id="kt_docs_tinymce_basic" class="form-control form-control-solid" rows="3" name="notes"
			placeholder="ملاحظات">{{$data->notes}}</textarea>
			</div>
			<div class="d-flex">
				<button type="submit" id="btn" class="btn btn-primary mt-6">
				<span class="indicator-label btn-lg btn-block">حفظ</span>
				</button>
			</div>



 	</div>

	</div>
	</form>
</div>
<script>

	$('input.total_price,input.paid').on('change keyup',function(){
		var total_price = $("#total_price").val()
		var paid = $("#paid").val()
		console.log(total_price);

	  $grand_total=$('.remaining_amount').val(total_price-paid);

	})

	</script>

@endsection
