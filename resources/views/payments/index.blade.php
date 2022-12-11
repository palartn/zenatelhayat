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
	<form method="POST" action="{{ route('subpayments.store') }}">
		@csrf
		<div class="col mt-6">
			<div class="col xl-3">
				<select name="patient_id" class="form-select form-control form-control-solid" data-control="select2" data-placeholder="الرجاء اختيار اسم المريض">
                    <option></option>
                    @foreach ($patient as $patient)
                    <option value="{{$patient->id}}">{{$patient->patient_fname. ' ' .$patient->patient_sname. ' '.$patient->patient_tname. ' '.$patient->patient_lname .' '.' '.'('.$patient->patient_number.')'}}</option>
                    @endforeach
                </select>
			</div>
            




				<div class="row campaign d-none " id="campaign">
					<div class="col-12 mt-6">
						<label class="fs-4 fw-semibold form-label" for="mobile">
							حملة </label>
						<input type="text"
							class="form-control form-control-solid   @error('campaign_year') is-invalid @enderror"
							name="campaign_year"
							value="{{old('campaign_year')}}" placeholder="حملة ">
						@error('campaign_year')
							<div class="text-danger mt-1 mb-1">{{ $message }}</div>
						@enderror

					</div>

				</div>

				
					
				
			
			<div class="row">
				
				<div class="col-6 sm-3 mt-6">
					<label class="fs-4 fw-semibold form-label" for="amount_paid">المبلغ
						المدفوع</label>
					<input type="number"
						class="form-control form-control-solid paid @error('amount_paid') is-invalid @enderror"
						name="amount_paid" id="amount_paid" value="{{ old('amount_paid') }}" placeholder="المدفوع">
				</div>

				<div class="col-6 sm-3 mt-6">
					<label class="fs-4 fw-semibold form-label" for="discount">
						خصم خاص</label>
					<input type="number"
						class="form-control form-control-solid paid @error('discount') is-invalid @enderror"
						name="discount" id="discount" value="{{ old('discount') }}" placeholder="مبلغ الخصم">
				</div>

				<div class="col-6 sm-3 mt-6">
					<label class="fs-4 fw-semibold form-label"
						for="currancy">عملة الدفع</label>
						<select class="form-select form-select-lg form-select-solid  @error('currancy') is-invalid @enderror "
					name="currancy" data-control="select2" data-placeholder="Select an option" data-allow-clear="true">
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
						value="" placeholder="الباقي" value="{{ old('remaining_amount') }}">
				</div>
				<div class="col-12 mt-6">
					<label class="fs-4 fw-semibold form-label" for="visit_date">تاريخ
						الدفع</label>
					<input type="date" name="paid_date"
						class="form-control form-control-solid  flatpickr-input active @error('paid_date') is-invalid @enderror"
						value="{{ date('Y-m-d') }}" id="kt_datepicker_1"
						placeholder="تاريخ الدفع" value="{{ old('paid_date') }}">
				</div>
			</div>
			<div>
			<label class="fs-4 fw-semibold form-label mt-6">ملاحظـــات</label>
			<textarea id="kt_docs_tinymce_basic" class="form-control form-control-solid" rows="3" name="notes"
			placeholder="ملاحظات"></textarea>
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
	@section('scripts')
<script>setTimeout(function() {
	$('.alert-session-flash').fadeOut('low');
}, 3000); // <-- time in milliseconds
</script>

<script>

$(".flatpickr-input").flatpickr({

});

</script>
<script>
tinymce.init({
    selector: '#kt_docs_tinymce_basic'
});
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

				}
				var x=$(this).val();
					if(x==2){
                    $('.campaign').removeClass('d-none');
					}
				else {
					$('.campaign').addClass('d-none');

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

$('input.total_price,input.paid,input.discount').on('change keyup',function(){
		var total_price = $("#total_price").val()
		var discount = $("#discount").val()
		var paid = $("#paid").val()
		//console.log(total_price);
	  $grand_total=$('.remaining_amount').val(total_price-paid-discount);
	
	})

	</script>

@endsection