<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignmentExam extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "timeStart",
        "timeEnd",
        "date",
        "calification",
        "id_identifier_subject",
    ];

    // public function id_subject()
    // {
    //     return $this->belongsTo(Subject::class, "id_identifier_assignment");
    // }

    public function id_subject()
    {
        return $this->hasOne(AssignmentExam::class, "id");
    }
}
