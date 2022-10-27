<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\AssignmentExam;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExamController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects = Subject::where("id_identifier_teacher", Auth::user()->id)->get();
        return view("teacher.exam.create", compact("subjects"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    // public function store(Request $request, Subject $subject)
    public function store(Request $request)
    {
        AssignmentExam::create(
            [
                "name" => $request->name,
                "timeStart" => $request->timeStart,
                "timeEnd" => $request->timeEnd,
                "date" => $request->date,
                "calification" => $request->calification,
                "id_identifier_subject" => $request->id_identifier_subject,
                "calification" => random_int(0, 20),
            ]
        );
        return redirect()->route("teacher.exams.create")->with("info", "El examen se ha creado correctamente, puede notificar a sus alumnos.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return $id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
