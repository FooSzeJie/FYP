<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;
use App\Models\User;
use Auth;

class HRDFController extends Controller
{
    public function pdfReport()
    {
        $orders = DB::table('my_orders')
        ->where('ID','=',Auth::id())
        ->get();

        
        $pdf = PDF::loadView('myPDF', compact('hrdf'));

        return $pdf->download('Hrdf Form.pdf');
    }
}
