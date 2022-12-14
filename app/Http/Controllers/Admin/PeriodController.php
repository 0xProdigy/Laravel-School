<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Period;
use App\Models\SchoolYear;
use Illuminate\Http\Request;


class PeriodController extends Controller
{
    public function __construct()
    {
        $this->middleware("can:admin.periods.index")->only("index");
        $this->middleware("can:admin.periods.create")->only("create");
        $this->middleware('can:admin.periods.show')->only("show");
        $this->middleware('can:admin.periods.edit')->only("edit", "update", "destroy");
        $this->middleware('can:admin.periods.store')->only("store");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.periods.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $years = SchoolYear::all();

        return view("admin.periods.create", compact("years"));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Period::create($request->all());

        return redirect()->route("admin.periods.create")->with("info", "El periodo se ha creado correctamente, visite su lista de periodos.");

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
        //
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
