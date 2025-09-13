<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Agency extends Model {
    protected $fillable = ['name','slug','logo','max_students','max_teachers'];
}
