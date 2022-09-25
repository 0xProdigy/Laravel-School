<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentUser extends Model
{
    use HasFactory;
    protected $fillable =
    [ 
        "name",
        "lastname",
        "address",
        "email",
        "phone",
        "birthday",
        "gender",

        // "namejpg",
        // "filejpg",
        
        "section",
        "dnirepresentative",
        "representativerelation",

        "id_identifier",
    ];
}
