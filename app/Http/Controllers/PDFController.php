<?php

namespace App\Http\Controllers;

//use Elibyy\TCPDF\TCPDF;
use View;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Elibyy\TCPDF\Facades\TCPDF;

class PDFController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {

            $filename = 'demo.pdf';

            $data = [
                'title' => 'Generate PDF using Laravel TCPDF - ItSolutionStuff.com!'
            ];
            $title='New Test';

            $html = view()->make('pdf.index', $data)->render();

            $pdf = new TCPDF;

            $pdf::SetTitle('Hello World');
            $pdf::AddPage();
            $pdf::writeHTML($html, true, false, true, false, '');
return view('pdf.index',compact('html','html','pdf','title'));
            // $pdf::Output(public_path($filename), 'F');

            // return response()->download(public_path($filename));


    }

    public function download(Request $request)
    {
        {
            $filename = 'hello_world.pdf';

            $data = [
                'title' => 'Hello world!'
            ];

            $view = View::make('PDF.index', $data);
            $html = $view->render();

            $pdf = new TCPDF;

            $pdf::SetTitle('Hello World');
            $pdf::AddPage('p',[3508 ,2480]);

            $pdf::writeHTML($html, true, false, true, false, '');

            $pdf::Output(public_path($filename), 'F');

            return response()->download(public_path($filename));
        }
    }

}
