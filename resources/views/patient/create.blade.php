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
	<div class="card-body pt-5">
		<!--begin::Form-->
		<form class="form fv-plugins-bootstrap5 fv-plugins-framework" method="POST" action="{{route('patients.store')}}" enctype="multipart/form-data">
            @csrf
           <div class="row xl-3 mb-7 ">
            <label class="fs-4 fw-semibold form-label mt-3" for="fname"> الإسم الأول</label>
                <div class="col">
                  <input type="text" id="fname" class="form-control form-control-solid @error('fname') is-invalid @enderror" name="name"  value="{{ old('name') }}" placeholder="الإسم الأول" aria-label="First name">
                </div>

                <div class="col">
                <label class="fs-4 fw-semibold form-label mt-3" for="sname"> إسم الأب</label>

                  <input type="text" id="sname" class="form-control form-control-solid @error('sname') is-invalid @enderror" name="name"  value="{{ old('name') }}" placeholder="Last name" aria-label="Last name">
                </div>
                <div class="col">
                  <input type="text" class="form-control form-control-solid @error('tname') is-invalid @enderror" name="name"  value="{{ old('name') }}" placeholder="Last name" aria-label="Last name">
                </div>
                <div class="col">
                  <input type="text" class="form-control form-control-solid @error('lname') is-invalid @enderror" name="name"  value="{{ old('name') }}" placeholder="Last name" aria-label="Last name">
                </div>
              </div>


			<div class="fv-row mb-7 fv-plugins-icon-container">
				<!--begin::Label-->
				<label class="fs-4 fw-semibold form-label mt-3">
					<span class="required">الإسم الأول</span>
					<i class="fas fa-exclamation-circle ms-1 fs-7 " data-bs-toggle="tooltip" aria-label="الرجاء ادخال اسم المستخدم" data-kt-initialized="1"></i>
				</label>

				<!--end::Label-->
				<!--begin::Input-->
                <div class="col-xl-3 mb-2">
				<input type="text" class="col-xs-3 form-control form-control-solid @error('fname') is-invalid @enderror" name="name"  value="{{ old('name') }}" required>
                @error('name')
                <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-xl-3 mb-2">
				<input type="text" class="col-xs-3 form-control form-control-solid @error('fname') is-invalid @enderror" name="name"  value="{{ old('name') }}" required>
                @error('name')
                <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                </div>
				<!--end::Input-->
                <div class="col">
					<!--begin::Input group-->
					<!--begin::Label-->
				<label class="fs-4 fw-semibold form-label mt-3">
					<span class="required">كلمة المرور</span>
					<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="الرجاء ادخال كلمة المرور" data-kt-initialized="1"></i>
				</label>

				<!--end::Label-->
				<!--begin::Input-->
				<input type="password" class="form-control form-control-solid @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required>
                @error('password')
                <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
				<!--end::Input-->
					<!--end::Input group-->
				</div>
			<div class="fv-plugins-message-container invalid-feedback">

            </div>
			<!--end::Input group-->

			<!--begin::Row-->
			<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
				<!--begin::Col-->
				<div class="col">
					<!--begin::Input group-->
					<div class="fv-row mb-7 fv-plugins-icon-container">
						<!--begin::Label-->
						<label class="fs-4 fw-semibold form-label mt-3">
							<span class="required">البريد الإلكتروني</span>
							<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter the contact's email." data-kt-initialized="1"></i>
						</label>
						<!--end::Label-->
						<!--begin::Input-->
						<input type="email" class="form-control form-control-solid @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                        @error('email')
                        <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
						<!--end::Input-->
					<div class="fv-plugins-message-container invalid-feedback"></div></div>
					<!--end::Input group-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col">
					<!--begin::Input group-->
					<div class="fv-row mb-7">
						<!--begin::Label-->
						<label class="fs-4 fw-semibold form-label mt-3">
							<span>رقم الهاتف</span>
							<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter the contact's phone number (optional)." data-kt-initialized="1"></i>
						</label>
						<!--end::Label-->
						<!--begin::Input-->
						<input type="number" class="form-control form-control-solid @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required>
                        @error('phone')
                        <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
						<!--end::Input-->
					</div>
					<!--end::Input group-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->
			<!--begin::Row-->
			<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
				<!--begin::Col-->
				<div class="col">
					<!--begin::Input group-->
					<div class="fv-row mb-7">
						<!--begin::Label-->
						<label class="fs-4 fw-semibold form-label mt-3">
							<span>العنوان</span>
							<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter the contact's city of residence (optional)." data-kt-initialized="1"></i>
						</label>
						<!--end::Label-->
						<!--begin::Input-->
						<input type="text" class="form-control form-control-solid @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}"required>
                        @error('address')
                        <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
						<!--end::Input-->
					</div>
					<!--end::Input group-->
				</div>
				<div class="col">
					<!--begin::Input group-->
					<div class="fv-row mb-7">
						<!--begin::Label-->
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
						<!--end::Input-->
					</div>
					<!--end::Input group-->
				</div>
				<div class="col">
					<!--begin::Input group-->

					<!--end::Input group-->
				</div>
			</div>
			<!--end::Row-->

			<!--begin::Separator-->
			<div class="separator mb-6"></div>
			<!--end::Separator-->
			<!--begin::Action buttons-->
			<div class="d-flex">
				<!--begin::Button-->
					<button type="submit" id="btn" class="btn btn-primary   ">
					<span class="indicator-label btn-lg btn-block">حفظ</span>
					</button>
				<!--end::Button-->
			</div>
			<!--end::Action buttons-->
		</form>
		<!--end::Form-->
	</div>
	<!--end::Card body-->
</div>
</div>
	@endsection
<script>setTimeout(function() {
	$('.alert-session-flash').fadeOut('low');
}, 3000); // <-- time in milliseconds
</script>
