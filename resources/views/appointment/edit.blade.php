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
			<h2 >تعديل بيانات زيارة</h2>
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

		<div class="col xl-3">
			<label class="fs-4 fw-semibold form-label" for="visit_date"> التاريخ</label>
			<input type="text" readonly disabled
				class="form-control form-control-solid @error('visit_date') is-invalid @enderror"
				name="visit_date" value="{{ $appointment->visit_date }}" readonly >
		</div>

		<div class="col mt-6">
			<div class="col xl-3">
				<label class="fs-4 fw-semibold form-label" for="mobile_second"> إسم
					المريض
				</label>

				@foreach($patient as $patient)
				@endforeach
				</span>
				<input type="text"
					class="form-control form-control-solid @error('patient_name') is-invalid @enderror" readonly
					name="patient_name"
					value="{{ $patient->patient_fname . ' ' . $patient->patient_sname . ' ' . $patient->patient_tname . ' ' . $patient->patient_lname }}">
			</div>
				<div class="row">
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
				  <div class="col col-4">
					<label class="fs-4 fw-semibold form-label mt-6"> سبب الزيارة </label>
					<select name='surgery_kind_id'  class="form-control form-control-solid productcategory" id="prod_cat_id">
					<option value="0" disabled="true" selected="true">سبب الزيارة</option>
					@foreach($surgerykind as $surgerykind)
						<option {{$appointment->surgery_kind_id == $surgerykind->id ? 'selected' : '' }} value="{{$surgerykind->id}}">{{$surgerykind->name}}</option>
					@endforeach
				</select>

				</div>

					<div class="col col-4">
						<label class="fs-4 fw-semibold form-label mt-6" > القسم</label>
						<select  name='surgery_kind_id_child'  class="form-control form-control-solid productname">
							@if($appointment->surgery_kind_id_child != null)
						<option id="sssss" selected value="{{$appointment->surgery_kind_id_child}}">{{$appointment->surgery_kind_child->name}}</option>
							@endif
							{{-- <option value="0" disabled="true" selected="true">القسم</option> --}}
						</select>

				</div>


				<div class="row campaign d-none " id="campaign">
					<div class="col-12 mt-6">
						<label class="fs-4 fw-semibold form-label" for="mobile">
							حملة </label>
						<input type="text"
							class="form-control form-control-solid campaign_year  @error('campaign_year') is-invalid @enderror"
							name="campaign_year" id="campaign_year"
							value="{{$appointment->campaign_year}}" placeholder="حملة ">
						@error('campaign_year')
							<div class="text-danger mt-1 mb-1">{{ $message }}</div>
						@enderror

					</div>

				</div>




				</div>
				<div class="row specific {{ $appointment->surgery_kind_id !== 3 ? 'd-none' : '' }} " id="specific">
					<div class="col-4 mt-6">
						<label class="fs-4 fw-semibold form-label" for="mobile">
							عدد العبوات</label>
						<input type="number"
							class="form-control form-control-solid   @error('qty_packages') is-invalid @enderror"
							name="qty_packages" id="qty_packages"
							value="{{$appointment->qty_packages }}" placeholder="عدد العبوات">
						@error('qty_packages')
							<div class="text-danger mt-1 mb-1">{{ $message }}</div>
						@enderror

					</div>
					<div class="col-4 mt-6">
						<label class="fs-4 fw-semibold form-label" for="mobile"> تاريخ بداية
							التجميد</label>
						<input type="date"
							class="form-control form-control-solid  flatpickr-input active  @error('freez_start_date') is-invalid @enderror"
							id="kt_datepicker_1" name="freez_start_date"
							value="{{$appointment->freez_start_date }}" placeholder="تاريخ بداية التجميد">
						@error('freez_start_date')
							<div class="text-danger mt-1 mb-1">{{ $message }}</div>
						@enderror

					</div>
					<div class="col-4 mt-6">
						<label class="fs-4 fw-semibold form-label" for="mobile"> تاريخ نهاية
							التجميد</label>
						<input type="date"
							class="form-control form-control-solid   flatpickr-input active @error('freez_end_date') is-invalid @enderror"
							id="kt_datepicker_2" name="freez_end_date" id="freez_end_date"
							value="{{$appointment->freez_end_date }}" placeholder="تاريخ نهاية التجميد">
						@error('freez_end_date')
							<div class="text-danger mt-1 mb-1">{{ $message }}</div>
						@enderror

					</div>

				</div>

			<div class="row" >
				<div class="col-4 sm-3 mt-6">
					<label class="fs-4 fw-semibold form-label"
						for="amount_before_discount">التكلفة</label>
					<input type="number"
						class="form-control form-control-solid amount_before_discount @error('amount_before_discount') is-invalid @enderror"
						name="amount_before_discount" id="amount_before_discount" value="{{ $appointment->amount_before_discount }}" placeholder="المبلغ للدفع">
				</div>

				{{-- <div class="col-4 sm-3 mt-6">
					<label class="fs-4 fw-semibold form-label" for="visit_date">المبلغ
						المدفوع</label>
					<input type="number"
						class="form-control form-control-solid paid @error('paid') is-invalid @enderror"
						name="paid" id="paid" value="{{ $appointment->payment->paid }}" placeholder="المدفوع">
				</div> --}}
				<div class="col-4 sm-3 mt-6">
					<label class="fs-4 fw-semibold form-label" for="discount_value">
						خصم خاص</label>
					<input type="number"
						class="form-control form-control-solid paid @error('discount_value') is-invalid @enderror"
						name="discount_value" id="discount_value" value="{{ $appointment->discount_value }}" placeholder="مبلغ الخصم">
				</div>
				<div class="col-4 mt-6">
					<label class="fs-4 fw-semibold form-label" for="amount_after_discount">صافي المبلغ بعد الخصم
						</label>
					<input type="number" name="amount_after_discount"  style="background: rgb(221, 228, 243)"
						class="form-control form-control-solid amount_after_discount @error('amount_after_discount') is-invalid @enderror"
						 placeholder="الباقي" value="{{ $appointment->amount_after_discount }}">
				</div>


			<div>
			<label class="fs-4 fw-semibold form-label mt-6">ملاحظـــات</label>
			<textarea id="kt_docs_tinymce_basic" class="form-control form-control-solid" rows="3" name="notes"
			placeholder="ملاحظات">{{$appointment->notes}}</textarea>
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
@endsection
</div>

@section('scripts')
<script>

	$('input.total_price,input.paid').on('change keyup',function(){
		var total_price = $("#total_price").val()
		var paid = $("#paid").val()
		console.log(total_price);

	  $grand_total=$('.remaining_amount').val(total_price-paid);

	})

	</script>

<script type="text/javascript">
	$(document).ready(function(){

		$(document).on('change','#prod_cat_id',function(){
			var x=$(this).val();
					if(x==3){
                    $('.specific').removeClass('d-none');
					}

				else {
					$('.specific').addClass('d-none');
					$("#qty_packages").attr('value','');
					$("#kt_datepicker_1").val('');
					$("#kt_datepicker_2").val('');
				}
				var xn=$(this).val();
					if(x==2){
                    $('.campaign').removeClass('d-none');
					}
					else {
					$('.campaign').addClass('d-none');
					$('.campaign_year').val('');

				}
			var cat_id=$(this).val();

			var div=$(this).parent();
			console.log(div);

			var op=" ";

			$.ajax({
				type:'get',
				url:'{!!URL::to('findProductName')!!}',
				data:{'id':cat_id,},
				success:function(data){
					//console.log('success');

					console.log(data);
					$("#sssss").remove();
					//console.log(data.length);
					op+='<option value="0" selected disabled>الرجاء الإختيار</option>';
					for(var i=0;i<data.length;i++){
					op+='<option value="'+data[i].id+'">'+data[i].name+'</option>';
				   }

				   $('.productname').html(" ");
				   $('.productname').append(op);
				},
				error:function(){

				}
			});
		});

		$(document).on('change','.productname',function () {
			var prod_id=$(this).val();

			var a=$(this).parent();
			console.log(prod_id);
			var op="";
			$.ajax({
				type:'get',
				url:'{!!URL::to('findPrice')!!}',
				data:{'id':prod_id},
				dataType:'json',//return data will be json
				success:function(data){
					console.log("price");
					console.log(data.price);

					// here price is coloumn name in products table data.coln name

					a.find('.prod_price').val(data.price);

				},
				error:function(){

				}
			});


		});

	});
</script>
<script>

	$('input.amount_before_discount,input.discount_value,input.amount_after_discount,input.paid').on('change keyup',function(){
		var amount_before_discount = $("#amount_before_discount").val()
		var discount_value = $("#discount_value").val()
		//console.log(total_price);
	  $grand_total=$('.amount_after_discount').val(amount_before_discount - discount_value);

	})

	</script>

		<script>

			$(".flatpickr-input").flatpickr({

			});

			</script>
@endsection

