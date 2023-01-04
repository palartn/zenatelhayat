<?php

namespace App\Http\Controllers;

//use Elibyy\TCPDF\TCPDF;

use App\Models\Expense;
use App\Models\Patient;
use App\Models\Payment;
use View;

use Illuminate\Http\Request;
use Elibyy\TCPDF\Facades\TCPDF;
use PDF;
class PDFController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Expense $expense){
        $expense=Expense::all();
        $sum_expense=Expense::all()->sum('amount');
        $payment=Payment::all();
        $sum_payment=Payment::all()->sum('paid');
        $total=$sum_payment- $sum_expense;
        
return view('pdf.index',compact('expense','payment','sum_payment','sum_expense','total'));
    
 }

    public function download()
    {
        $expense=Expense::all();
        $sum_expense=Expense::all()->sum('amount');
        $payment=Payment::all();
        $sum_payment=Payment::all()->sum('paid');
        $total=$sum_payment- $sum_expense;
        $pdf = new TCPDF('P', 'mm','A4', true, 'UTF-8', false);;
        // set document information
//        $pdf::SetCreator(PDF_CREATOR);
//        $pdf::SetAuthor($invoice->author->name);
        $pdf::SetTitle('تقرير مالي');
//        $pdf::SetSubject($invoice->title);
//        $pdf::SetKeywords($invoice->title);

// set default header data

        $pdf::SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 018', PDF_HEADER_STRING);

// set header and footer fonts
        $pdf::setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf::setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
        $pdf::SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set default monospaced font
        //$pdf::SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf::SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf::SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf::SetFooterMargin(PDF_MARGIN_FOOTER);


// set auto page breaks
        //$pdf::SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
        $pdf::setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language dependent data:
        $lg = Array();
        $lg['a_meta_charset'] = 'UTF-8';
        $lg['a_meta_dir'] = 'rtl';
        $lg['a_meta_language'] = 'fa';
        $lg['w_page'] = 'page';

// set some language-dependent strings (optional)
        $pdf::setLanguageArray($lg);

// ---------------------------------------------------------
//        $fontname = $pdf::addTTFfont("{{asset('assets/fonts/line-awesome/line-awesome.ttf')}}");

// set font
        $pdf::SetFont('time_n_r', '', 12);
// Custom Header
$invoice='ssssssss';
        $pdf::setHeaderCallback(function($pdf) use ($invoice) {
            $pdf->SetY(-50);
            $pdf->Image('@'.file_get_contents( K_PATH_IMAGES.'LOQO2018.png'), 200, 5, 27, '', 'PNG', '', 'R', false, 10, '', false, false, 0, false, false, false);
            $pdf->SetMargins(0, 50, 0);
            // $pdf->SetFont('time_n_r', '', 12);
            // $pdf->Cell(180, 0, 'رقم المسلسل: '.$invoice.'/'.$invoice, 0, false, 'L', false, '', 0, false, 'T', 'M');
//            $pdf->Ln();


        });

// Custom Footer
       $pdf::setFooterCallback(function($pdf) {
            $pdf->SetY(-40);
          /*   $pdf->SetFont('time_n_r', '', 12);
            $pdf->writeHTML('
            <table>
                <tr>
                    <td style="width: 40px">نسخة/ </td>
                    <td style="text-align: right">وزارة المالية</td>
                </tr>
                <tr>
                    <td style="width: 40px">نسخة/ </td>
                    <td style="text-align: right">دائرة اللوازم العامة</td>
                </tr>
                <tr>
                    <td style="width: 40px">نسخة/ </td>
                    <td style="text-align: right">المالية</td>
                </tr>
                <tr style="line-height: 3">
                    <td style="width: 200px">نموذج رقم (6) اللوازم العامة </td>
                </tr>
            </table>');*/
            // Position at 15 mm from bottom
            $pdf->SetY(-15);
            // Set font
            $pdf->SetFont('time_n_r', 'I', 8);
            // Page number
            $pdf->Cell(0, 10, 'صفحة '.$pdf->getAliasNumPage().'/'.$pdf->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');

        });
// add a page

$pdf::setCellPaddings(2, 1, 2, 2);

        $pdf::AddPage();
        $pdf::setRTL(true);
        $html = view('pdf.index',['expense'=>$expense,
        'payment'=>$payment,
        'sum_payment'=>$sum_payment,
        'sum_expense'=>$sum_expense,
        'total'=>$total,
        ])->render();
        $pdf::WriteHTML($html, true, 0, true, 0);
      //  $pdf->Output('example_006.pdf', 'I');

         $pdf::Output('example_018.pdf','I');
    }
    }

