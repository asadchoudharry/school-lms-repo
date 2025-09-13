<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ResultItem extends Model {
    protected $fillable = ['result_id','subject_id','marks_obtained','max_marks'];
    public $timestamps = false;
}
