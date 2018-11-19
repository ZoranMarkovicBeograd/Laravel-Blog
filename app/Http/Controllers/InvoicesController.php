<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    public function invoice(Request $request)
    {
        $salery = $request->get('salery');
        $course = $request->get('course');
        $result = $salery * $course;
/*
var_dump( ['result'=>$result]); die;*/
        return view('invoices.invoice', ['result'=>$result]);
    }
}
