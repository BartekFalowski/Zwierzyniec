<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BestInterviewQuestionController extends Controller
{
    public function pdfview(Request $request)
    {
        $items = DB::table("items")->get();
        view()->share('items',$items);
        if($request->has('download')){
            $pdf = PDF::loadView('pdfview');
            return $pdf->download('pdfview.pdf');
        }
        return view('pdfview');
    }
}
