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
	<form method="POST"  action="{{route('surgerykinds.update',$surgerykind->id)}}">
		@csrf
        @method('put')

		<div class="row ">


			
				
			<div class="col-6">
				<label class="fs-4 fw-semibold form-label" for="name"> القسم الفرعي
					</label>
				<input type="text" value="{{$surgerykind->name}}"
					class="form-control form-control-solid  active @error('name') is-invalid @enderror"
					id="kt_datepicker_1 name" name="name"
					value="" placeholder=" القسم الفرعي">
				@error('name')
					<div class="text-danger mt-1 mb-1">{{ $message }}</div>
				@enderror

			</div>
			
			<div class="col-6">
				
				<label class="fs-4 fw-semibold form-label" for="surgery_kind_id"> إسم
					يتبع قسم
				</label>	
				<select name="parent" class="form-select" data-control="select2" data-placeholder="الرجاء الإختيار">
					<option value="">اختر..</option>
					@foreach(\app\Models\SurgeryKind::where('surgery_kind_id',null)->get() as $item)
					<option {{ $surgerykind->surgery_kind_id == $item->id ? 'selected' : '' }} value ="{{ $item->id }}}}">{{ $item->name }}</option>
					@endforeach
				</select>
			</div>
			<button type="submit" id="btn" class="btn btn-primary mt-10">
				<span class="indicator-label btn-lg btn-block">حفظ</span>
				</button>



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

		
@endsection

