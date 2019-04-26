<?php

namespace App\Http\Controllers;
use PDF;

use Illuminate\Http\Request;

class pdfgenerate extends Controller
{
    public function pdf(){
        
        $data = ['title' => 'Welcome to HDTuto.com'];

        $pdf = PDF::loadView('DilshanCv', $data);

  

        return $pdf->download('itsolutionstuff.pdf');
    }
}
