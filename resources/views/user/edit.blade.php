@extends('layouts.master')
@section('content')


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
			<h2 >تعديل بيانات مستخدم</h2>
{{--
@if ($errors->any())
<div class="text-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif --}}
		</div>
		<!--end::Card title-->
	</div>
	<!--end::Card header-->
	<!--begin::Card body-->
	<div class="card-body pt-5">
		<!--begin::Form-->
		<form class="form fv-plugins-bootstrap5 fv-plugins-framework" method="POST" action="{{ route('users.update',$user->id) }}" enctype="multipart/form-data">
            @csrf
            @method('put')
			<!--begin::Input group-->
			<div class="mb-7">
				<!--begin::Label-->
				<label class="fs-4 fw-semibold mb-3">
					<span>رفع الصورة</span>
					<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Allowed file types: png, jpg, jpeg." data-kt-initialized="1"></i>
				</label>
				<!--end::Label-->
				<!--begin::Image input wrapper-->
				<div class="mt-1">
					<!--begin::Image placeholder-->
					<style>.image-input-placeholder {} </style>
					<!--end::Image placeholder-->
					<!--begin::Image input-->
					<div class="image-input image-input-outline image-input-placeholder image-input-empty image-input-empty" data-kt-image-input="true">
						<!--begin::Preview existing avatar-->
						<div class="image-input-wrapper w-100px h-100px" style="background-image: url('')"></div>
						<!--end::Preview existing avatar-->
						<!--begin::Edit-->
						<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-kt-initialized="1">
							<i class="bi bi-pencil-fill fs-7"></i>
							<!--begin::Inputs-->


							<input type="file" name="profile_photo" accept=".png, .jpg, .jpeg">
							<input type="hidden" name="avatar_remove">
							<!--end::Inputs-->
						</label>
						@error('avatar')
						<div class="text-danger mt-1 mb-1">{{ $message }}</div>
						@enderror
						<!--end::Edit-->
						<!--begin::Cancel-->
						<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-kt-initialized="1">
							<i class="bi bi-x fs-2"></i>
						</span>
						<!--end::Cancel-->
						<!--begin::Remove-->
						<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-kt-initialized="1">
							<i class="bi bi-x fs-2"></i>
						</span>
						<!--end::Remove-->
					</div>
					<!--end::Image input-->
				</div>
				<!--end::Image input wrapper-->
			</div>
			<!--end::Input group-->
			<!--begin::Input group-->



			<div class="fv-row mb-7 fv-plugins-icon-container">
				<!--begin::Label-->

				<label class="fs-4 fw-semibold form-label mt-3">
					<span class="required">الإسم</span>
					<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="الرجاء ادخال اسم المستخدم" data-kt-initialized="1"></i>
				</label>

				<!--end::Label-->
				<!--begin::Input-->
				<input type="text" class="form-control form-control-solid @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" >
                @error('name')
                <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                @enderror

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
				<input type="password" class="form-control form-control-solid @error('password') is-invalid @enderror" name="password" value="{{$user->name}}" required>
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
						<input type="email"  class="form-control form-control-solid @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" required>
                        @error('email')
                        <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        {{-- @error('email') <div class="text-danger">{{ $message }}</div> --}}

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
						<input type="text" class="form-control form-control-solid @error('phone') is-invalid @enderror" name="phone" value="{{$user->phone}}" required>
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
						<input type="text" class="form-control form-control-solid" name="address" value="{{$user->address}}" required>
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


							<option {{ $user->gender=='Male' ? 'selected' :'' }} value ="Male">ذكر</option>
							<option {{ $user->gender=='Female' ? 'selected' :'' }} value ="Female">أنثى</option>

						</select>
						<!--end::Input-->
					</div>
					<!--end::Input group-->
				</div>
			</div>
			<div class="col">
				<!--begin::Input group-->
				<div class="fv-row mb-7">
					<!--begin::Label-->
					<label class="fs-4 fw-semibold form-label mt-3">
						<span>الدور</span>
						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter the contact's phone number (optional)." data-kt-initialized="1"></i>
					</label>
					<!--end::Label-->
					<!--begin::Input-->
					<select name="role" class="form-select" data-control="select2" data-placeholder="الرجاء الإختيار">
						<option value="">Choose</option>
						@foreach($roles as $role)
						<option value="{{ $role->id }}" {{ in_array($role->id,$roleSelected) ? 'selected' : ''}}>{{ $role->name }}</option>
						@endforeach
					
						
					</select>
					<!--end::Input-->
				</div>
				<!--end::Input group-->
			</div>
			<!--end::Row-->
            <label class="form-check form-switch form-check-custom form-check-solid">
                <input class="form-check-input" type="checkbox" value="1" name="status" checked="checked">
                <span class="form-check-label fw-bold text-muted">فعال</span>
            </label>
        
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
@endsection
