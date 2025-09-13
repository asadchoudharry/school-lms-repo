<?php
namespace App\Http\Controllers;
use App\Models\Result;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ResultController extends Controller {
    public function index() { $results = Result::with('items')->paginate(20); return view('results.index', compact('results')); }
    public function create() { return view('results.create'); }
    public function store(Request $r) {
        $data = $r->validate(['total_marks'=>'required','obtained_marks'=>'required','student_id'=>'required']);
        $result = Result::create($data);
        return redirect()->route('results.index')->with('success','Result saved (scaffold)');
    }
    public function marksheetPdf(Result $result) {
        $result->load('items');
        $pdf = Pdf::loadView('results.pdf', compact('result'));
        return $pdf->download('marksheet_'.$result->id.'.pdf');
    }
}
