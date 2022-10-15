<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\TeacherUser;
use App\Models\User;
use Illuminate\Http\Request;

class UserTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.teachers.index");
    }


    public function create()
    {
        return view("admin.teachers.create");
    }


    public function store(Request $request)
    {
        User::create(
            [
                "name" => $request->name,
                "email" => $request->email,
                "password" => bcrypt($request->phone),
                "id_identifier" => $request->id_identifier
            ]
        )->assignRole("teacher");

        TeacherUser::create($request->all());

        return redirect()->route("admin.teachers.create")->with("info", "El usuario se ha creado correctamente, el profesor debe cambiar su contraseña.");
    }

    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(TeacherUser $teacher)
    {
        $subjects = Subject::where("id_identifier_teacher", $teacher->id)->paginate(10);
        return view("admin.teachers.edit", compact("subjects", "teacher"));
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
