<style>
   /* reset */

*
{
text-align: right; 
direction: rtl
	border: 1px;
	box-sizing: content-box;
	color: inherit;
	font-family: inherit;
	font-size: inherit;
	font-style: inherit;
	font-weight: inherit;
	line-height: inherit;
	list-style: none;
	margin: 0;
	padding: 2;
	text-decoration: none;
	vertical-align: top;
}

/* content editable */

*[contenteditable] { border-radius: 0.25em; min-width: 1em; outline: 0; }

*[contenteditable] { cursor: pointer; }

*[contenteditable]:hover, *[contenteditable]:focus, td:hover *[contenteditable], td:focus *[contenteditable], img.hover { background: #DEF; box-shadow: 0 0 1em 0.5em #DEF; }

span[contenteditable] { display: inline-block; }

/* heading */

h1 { font: bold 100% sans-serif; letter-spacing: 0.5em; text-align: center; text-transform: uppercase; }

/* table */

table { font-size: 75%; table-layout: fixed; width: 100%; }
table { border-collapse: separate; border-spacing: 2px; }
th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: left; }
th, td { border-radius: 0.25em; border-style: solid; }
th { background: #EEE; border-color: #BBB; }
td { border-color: #DDD; }

/* page */

html { font: 16px/1 'Open Sans', sans-serif; overflow: auto; padding: 0.5in; }
html { background: #999; cursor: default; }

body { box-sizing: border-box; height: 11in; margin: 0 auto; overflow: hidden; padding: 0.5in; width: 8.5in; }
body { background: #FFF; border-radius: 1px; box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5); }

/* header */

header { margin: 0 0 3em; }
header:after { clear: both; content: ""; display: table; }

header h1 { background: #000; border-radius: 0.25em; color: #FFF; margin: 0 0 1em; padding: 0.5em 0; }
header address { float: left; font-size: 75%; font-style: normal; line-height: 1.25; margin: 0 1em 1em 0; }
header address p { margin: 0 0 0.25em; }
header span, header img { display: block; float: right; }
header span { margin: 0 0 1em 1em; max-height: 25%; max-width: 60%; position: relative; }
header img { max-height: 100%; max-width: 100%; }
header input { cursor: pointer; -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; height: 100%; left: 0; opacity: 0; position: absolute; top: 0; width: 100%; }

/* article */

article, article address, table.meta, table.inventory { margin: 0 0 3em; }
article:after { clear: both; content: ""; display: table; }
article h1 { clip: rect(0 0 0 0); position: absolute; }

article address { float: left; font-size: 125%; font-weight: bold; }

/* table meta & balance */

table.meta, table.balance { float: right; width: 36%; }
table.meta:after, table.balance:after { clear: both; content: ""; display: table; }

/* table meta */

table.meta th { width: 40%; }
table.meta td { width: 60%; }

/* table items */

table.inventory { clear: both; width: 100%; }
table.inventory th { font-weight: bold; text-align: center; }

table.inventory td:nth-child(1) { width: 26%; }
table.inventory td:nth-child(2) { width: 38%; }
table.inventory td:nth-child(3) { text-align: right; width: 12%; }
table.inventory td:nth-child(4) { text-align: right; width: 12%; }
table.inventory td:nth-child(5) { text-align: right; width: 12%; }

/* table balance */

table.balance th, table.balance td { width: 50%; }
table.balance td { text-align: right; }

/* aside */

aside h1 { border: none; border-width: 0 0 1px; margin: 0 0 1em; }
aside h1 { border-color: #999; border-bottom-style: solid; }

/* javascript */

.add, .cut
{
	border-width: 1px;
	display: block;
	font-size: .8rem;
	padding: 0.25em 0.5em;	
	float: left;
	text-align: center;
	width: 0.6em;
}
      @media print
      {
         @page {
           margin-top: 0;
           margin-bottom: 0;
         }
         body  {
           padding-top: 50px;
           padding-bottom: 50px ;
         }
      } 


.add { margin: -2.5em 0 0; }

.add:hover { background: #00ADEE; }

.cut { opacity: 0; position: absolute; top: 0; left: -1.5em; }
.cut { -webkit-transition: opacity 100ms ease-in; }

tr:hover .cut { opacity: 1; }

@media print {
	* { -webkit-print-color-adjust: exact; }
	html { background: none; padding: 0; }
	body { box-shadow: none; margin: 0; }
	span:empty { display: none; }
	.add, .cut { display: none; }
}
@page { margin: 0; }
.pagination {
  display: inline-block;
  text-align: center !important;
}
nav{
	text-align: center !important;	
}
.pagination li {
  color: black;
  float: right;
  padding: 8px 12px;
  text-decoration: none;
  border-radius: 5px;

}
.d-none{
	display: none;
}
.pagination li.active {
  background-color: #0c67b1;
  color: white;
  border-radius: 5px;
}


.pagination li:hover:not(.active) {background-color: #ddd;}
</style>

<html>
	<head>
		<meta charset="utf-8">
		<title>Invoice</title>
	
	</head>
	<body dir="rtl">
		<img src="{{ asset('assets/media/reports/header-right.png') }}" width="720px">
		<article style="padding-top: 50px">
			{{-- <address contenteditable>
				<p dir="rtl"></p>
			</address> --}}
			
			<table class="meta">
			
				<tr>
					<th><span >مجموع المصروفات</span></th>
					<td><span contenteditable>{{ $sum_expense }}</span></td>
				</tr>
				<tr>
					<th><span contenteditable>مجموع الإيردات</span></th>
					<td><span contenteditable>{{ $sum_payment }}</span></td>
				</tr>
				<tr>
					<th><span contenteditable>الإجمالي</span></th>
					<td><span id="prefix" contenteditable></span><span>{{ $total }}</span></td>
				</tr>
			</table>
			<table class="inventory" dir="rtl">
				<thead>
					<tr >
						<th width="50px"><span contenteditable>الرقم</span></th>
						<th><span contenteditable>الجهة المدفوع لها</span></th>
						<th><span contenteditable>العملة</span></th>
						<th><span contenteditable>المبلغ</span></th>
						<th><span contenteditable>التاريخ</span></th>
						<th><span contenteditable>مللاحظات</span></th>
					</tr>
				</thead>
				<tbody>
					@foreach($expense as $expense)
					<tr>
					

						<td><a class="cut"></a><span contenteditable>{{ $expense->id; }}</span></td>		
						<td><span contenteditable>{{$expense->paied_for;}}</span></td>
						<td><span data-prefix>{{$expense->currency;}}</span><span contenteditable></span></td>
						<td><span data-prefix>{{$expense->amount;}}</span><span contenteditable></span></td>
						<td><span contenteditable>{{$expense->pay_date;}}</span></td>
						<td><span data-prefix>{{$expense->notes;}}</span><span></span></td>
					
					</tr>
					@endforeach
				</tbody>
				
			</table>
			<table class="inventory" dir="rtl">
				<thead>
					<tr >
						<th width="50px"><span contenteditable>الرقم</span></th>
						<th><span contenteditable>إسم المريض</span></th>
						<th><span contenteditable>العملة</span></th>
						<th><span contenteditable>المبلغ</span></th>
						<th><span contenteditable>التاريخ</span></th>
						<th><span contenteditable>مللاحظات</span></th>
					</tr>
				</thead>
				<tbody>
					@foreach($payments as $payment)
					<tr>
					

						<td><a class="cut"></a><span contenteditable>{{ $payment->id; }}</span></td>		
						<td><span contenteditable>{{ $payment->patient->patient_fname.' '.$payment->patient->patient_sname.' '.$payment->patient->patient_tname.' '.$payment->patient->patient_lname; }}</span></td>
						<td><span data-prefix>{{ $payment->currency; }}</span><span contenteditable></span></td>
						<td><span data-prefix>{{ $payment->paid; }}</span><span contenteditable></span></td>
						<td><span contenteditable>{{ $payment->pay_date; }}</span></td>
						<td><span data-prefix>{{ $payment->notes; }}</span><span></span></td>
					
					</tr>
					
					@endforeach


				</tbody>

			</table>
			
			@if(request()->is('pdf') )
			{{ $expense2->links(); }}
			@endif

			{{-- <a class="add">+</a> --}}
	</body>
	
</html>
<script>
	$('#from_date').flatpickr({
		format : 'dd-mm-yyyy',
	});
	
	$('#to_date').flatpickr({
		format : 'dd-mm-yyyy',
	});
</script>