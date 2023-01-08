{{-- --سبب الزيارة
تجميد
سائل

تختلف الدفعات حيث لكل واحدة سعر

-- الزئر بدون رقم
إدارة الدفوعات
اظهار كافة تفاصيل الدفعات في المودال
-- في الزيارات والحجوزات
اضافة مراجعة ومتابعة وعمليات

-- الاشعارات
اشعار انتهاء التجميد قبل  10 ايام

--التقارير
 --}}
 {{-- $startdate = $request->startdate;
$enddate = $request->enddate;

$pdf = PDF::loadView('report.issuedreportprint',compact('stockIssued', 'startdate', 'enddate'));


<p> From:{{ $startdate }}  To: {{ $enddate }} </p>
 --}}
"// date between search?"
$from = date('2018-01-01');
$to = date('2018-05-02');

Reservation::whereBetween('reservation_from', [$from, $to])->get();


Reservation::all()->filter(function($item) {
  if (Carbon::now()->between($item->from, $item->to)) {
    return $item;
  }
});


Reservation::whereBetween('reservation_from', [$from1, $to1])
  ->orWhereBetween('reservation_to', [$from2, $to2])
  ->whereNotBetween('reservation_to', [$from3, $to3])
  ->get();



 