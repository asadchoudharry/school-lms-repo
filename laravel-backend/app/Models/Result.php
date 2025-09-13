<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Result extends Model {
    protected $fillable = ['exam_session_id','student_id','total_marks','obtained_marks','percentage','gpa','grade','ai_feedback'];
    public function items(){ return $this->hasMany(ResultItem::class); }
}
