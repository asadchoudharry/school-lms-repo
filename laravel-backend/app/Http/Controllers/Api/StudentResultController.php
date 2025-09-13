<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Result;

class StudentResultController extends Controller {
    public function index(Request $request) {
        $user = $request->user();
        $student = $user->student ?? null;
        if (!$student) return response()->json(['error'=>'No student linked'],404);
        $results = Result::with('items')->where('student_id',$student->id)->get();
        return response()->json(['student'=>$student,'results'=>$results]);
    }
    public function show($id){ return response()->json(['ok'=>true]); }
}
