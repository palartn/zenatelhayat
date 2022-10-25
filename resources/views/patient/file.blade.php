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
							<div class="form-control-plaintext border px-2 alpha-slate fs-4 fw-semibold form-label" style="" id="patient_name">{{$patient->patient_fname. ' ' . $patient->patient_sname .' '. $patient->patient_tname .' '.$patient->patient_lname}}
								</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="form-group row mb-1">
						<label class="col-form-label col-lg-4 fs-4 fw-semibold form-label">رقم الهوية</label>
						<div class="col-lg-8">
						   <div class="form-control-plaintext border px-2 alpha-slate fs-4 fw-semibold form-label " id="patient_idc"
								style="">{{$patient->idc}}</div>
						</div>
					</div>
				</div>

	<div class="card shadow-sm mt-5">
		<div class="card-header">
			<h3 class="card-title col-xl-12">البيانات الشخصية</h3>
	<div class="row col-sm">



</div>
</div>



	</div>



		<div class="card-body">
			Lorem Ipsum is simply dummy text...
		</div>
		<div class="card-footer">
			Footer
		</div>
	</div>


</div>
</div>
@endsection