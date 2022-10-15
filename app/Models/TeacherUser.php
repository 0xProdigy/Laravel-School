<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherUser extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "lastname",
        "address",
        "email",
        "phone",
        "specialty",
        "birthday",
        "gender",
        "id_identifier",
    ];
}
