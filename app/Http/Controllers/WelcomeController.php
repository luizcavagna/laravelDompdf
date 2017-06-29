<?php

namespace App\Http\Controllers;

use Request;
use PDF;

class WelcomeController extends Controller
{
    public function index()
    {
    	return view('welcome');
    }
    public function gerarPdf()
    {
    	$html = Request::input('html');

        $this->data['html'] = $html;

        $pdf = PDF::loadView('pdf', $this->data);
        $pdf->save(public_path().'/assets/pdf/pdf_Welcome.pdf');

        return 'Donload Pdf';
    
    }
}
