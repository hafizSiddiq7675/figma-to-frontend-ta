<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Fascades\App; 
use Barryvdh\DomPDF\Facade\Pdf;

class CvExportController extends Controller
{

   
    public function cvFourDownload(){
        
        // return view ('cv-exports.index-export-four');
        $pdf = PDF::loadView('pdf/personalpdf', compact('user','result'))->setOptions(['defaultFont' => 'sans-serif']);
        $Pdf= Pdf::loadView('cv-exports.index-export-four');
        return $Pdf->download();
        
    }
    public function cvFiveDownload(){
        
        // return view ('cv-exports.index-export-four');
        $pdf = PDF::loadView('pdf/personalpdf', compact('user','result'))->setOptions(['defaultFont' => 'sans-serif']);
        $Pdf= Pdf::loadView('cv-exports.index-export-five');
        return $Pdf->download();
        
    }
    public function cvSixDownload(){
        
        // return view ('cv-exports.index-export-four');
        $pdf = PDF::loadView('pdf/personalpdf', compact('user','result'))->setOptions(['defaultFont' => 'sans-serif']);
        $Pdf= Pdf::loadView('cv-exports.index-export-six');
        return $Pdf->download();
        
    }
    public function cvSevenDownload(){
        
        // return view ('cv-exports.index-export-four');
        $pdf = PDF::loadView('pdf/personalpdf', compact('user','result'))->setOptions(['defaultFont' => 'sans-serif']);
        $Pdf= Pdf::loadView('cv-exports.index-export-seven');
        return $Pdf->download();
        
    }
}

        
