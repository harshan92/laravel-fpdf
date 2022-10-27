<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;

class PdfController extends Controller
{
    protected $fpdf;

    public function __construct()
    {
        $this->fpdf = new Fpdf;
    }

    public function index() 
    {
        $this->fpdf->SetFont('Arial', 'B', 15);
        $this->fpdf->AddPage("L", ['100', '100']);
        $this->fpdf->Text(10, 10, "Hello World!");
        // $fullName = iconv("cp1252", "utf-8//IGNORE", "හර්ෂාන්");
        // $this->fpdf->Text(10, 40, $fullName);       

        $this->fpdf->Output();

        exit;
    }
}