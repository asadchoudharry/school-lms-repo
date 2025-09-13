<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model {
    protected $fillable = ['name','slug','logo','contact_email','subdomain'];
}
