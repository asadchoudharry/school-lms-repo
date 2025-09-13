<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class FeeInvoiceController extends Controller {
    public function index() { return view('fee-invoices.index'); }
    public function generatePdf($invoiceId) {
        $invoice = ['id'=>$invoiceId, 'student'=>'John Doe', 'amount'=>120.00, 'date'=>date('Y-m-d')];
        $pdf = Pdf::loadView('fee-invoices.receipt', compact('invoice'));
        return $pdf->download('fee_receipt_'.$invoiceId.'.pdf');
    }
}
