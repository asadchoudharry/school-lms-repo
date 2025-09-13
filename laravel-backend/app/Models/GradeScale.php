<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class GradeScale extends Model {
    protected $fillable = ['grade','min_percentage','max_percentage','gpa'];
    public $timestamps = false;
}
