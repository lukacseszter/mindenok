<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [ "name", "email" ];
    // protected $table = "mas_tablanev";
    // protected $primarykey = "mas_id";
    // protected $keytype = "string";
    // public $incrementing = false;
    // const CREATED_AT = "letrehozas";
    // const UPDATED_AT = "modositas";
    public $timestamps = "false;";
    
    public function course(){
        return $this->belongsTo( Course::class);
    }
}
