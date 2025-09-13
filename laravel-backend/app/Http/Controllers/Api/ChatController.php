<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChatController extends Controller {
    public function threads(){ return response()->json(['threads'=>[]]); }
    public function messages($id){ return response()->json(['messages'=>[]]); }
    public function postMessage($id, Request $r){ return response()->json(['status'=>'ok']); }
}
