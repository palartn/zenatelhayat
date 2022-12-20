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
			<h2 >تعديل بيانات الأقسام</h2>
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



	<div class="card-body pt-5 row">
	<!--begin::Form-->
	<form method="POST"  action="{{route('payments.update',$payment->id)}}">
		@csrf
        @method('put')

		<div class="row ">
			<div class="col-6" mt-6>
				<label class="fs-4 fw-semibold form-label" for="patient_id"> إسم المريض ورقمه
					</label>
				<input type="text" value="{{$payment->patient->patient_fname .' '.$payment->patient->patient_sname.' '.$payment->patient->patient_tname.' '.$payment->patient->patient_lname .'---'.$payment->patient->patient_number}}"
					class="form-control form-control-solid  active @error('name') is-invalid @enderror"
					id="patient_id" name="patient_id" readonly
					placeholder=" إسم المريض ورقمه">
				@error('patient_id')
					<div class="text-danger mt-1 mb-1">{{ $message }}</div>
				@enderror

			</div>

            <div class="col-6" mt-6>
				<label class="fs-4 fw-semibold form-label" for="paid"> المبلغ المدفوع
					</label>
				<input type="text" value="{{$payment->paid}}"
					class="form-control form-control-solid  active @error('paid') is-invalid @enderror"
					id="paid" name="paid"
					>
				@error('paid')
					<div class="text-danger mt-1 mb-1">{{ $message }}</div>
				@enderror

			</div>
            <div class="col-6" mt-6>
				<label class="fs-4 fw-semibold form-label" for="currency"> عملة الدفع</label>
				<input type="text" value="{{$payment->currency}}"
					class="form-control form-control-solid  active @error('paid') is-invalid @enderror"
					id="currency" name="currency" readonly
					>
				@error('currency')
					<div class="text-danger mt-1 mb-1">{{ $message }}</div>
				@enderror

			</div>
            <div class="col-6" mt-6>
				<label class="fs-4 fw-semibold form-label" for="pay_date"> تاريخ الدفع</label>
				<input type="date"
					class="form-control form-control-solid  flatpickr-input active @error('pay_date') is-invalid @enderror"
					id="kt_datepicker_1 pay_date" name="pay_date"
					value="{{ $payment->pay_date }}">
				@error('pay_date')
					<div class="text-danger mt-1 mb-1">{{ $message }}</div>
				@enderror

			</div>
            <div class="col-12" mt-6>
				<label class="fs-4 fw-semibold form-label" for="notes"> ملاحظات الدفعة </label>
				<input type="text"
					class="form-control form-control-solid   @error('notes') is-invalid @enderror"
					id="notes" name="notes"
					value="{{ $payment->notes }}">
				@error('notes')
					<div class="text-danger mt-1 mb-1">{{ $message }}</div>
				@enderror

			</div>
			<button type="submit" id="btn" class="btn btn-primary mt-10">
				<span class="indicator-label btn-lg btn-block">حفظ</span>
				</button>
 		</div>

	</form>
</div>
@endsection
@section('scripts')
<script>

    $(".flatpickr-input").flatpickr({

    });

    </script>
@endsection


