<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class ModuleController extends Controller {
    public function index() {
        $modules = ['results','fees','attendance','hostel','transport','library','courses','chat','white_label','corporate'];
        return view('admin.modules.index', compact('modules'));
    }
}
