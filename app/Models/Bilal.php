<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bilal extends Model
{
    use HasFactory;
    public $table = "bilal";
    // public $timestamps = false;
    public $timestamps = false;

    // Accessor 
    public function getNameAttribute($value) {
        return ucfirst($value);
    }
    public function getLnameAttribute($value) {
        return $value." Welcome ";
    }

    // Mutator 
    public function setNameAttribute($value) {
        $this->attributes['name'] = "Mr " . $value;
    }
}
