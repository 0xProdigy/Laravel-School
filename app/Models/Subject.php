<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = [
        "trayecto",
        "name",
        "status",
        "startDate",
        "endDate",
        "id_identifier",
        "id_identifier_assignment"
    ];

    public function id_examen()
    {
        return $this->hasOne(AssignmentExam::class, "id");
    }
}
