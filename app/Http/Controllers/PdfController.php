<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomType;
use PDF;

class PdfController extends Controller
{
    public function imprimirhabitaciones(Request $request)
    {
        $room_types=Roomtype::orderBy('id','ASC')->get();
        $pdf = \PDF::loadView('Pdf.habitacionesPDF',['room_types' => $room_types ]);
        $pdf->setPaper('carta', 'A4');
        return $pdf->stream();} 
}
