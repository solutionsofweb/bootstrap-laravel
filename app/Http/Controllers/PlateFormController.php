<?php

namespace App\Http\Controllers;

use App\Models\PlateForm;
use Illuminate\Http\Request;

class PlateFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plateForms = PlateForm::select('icon')->get()->toJson(JSON_PRETTY_PRINT);
        return $plateForms;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PlateForm  $plateForm
     * @return \Illuminate\Http\Response
     */
    public function show(PlateForm $plateForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PlateForm  $plateForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PlateForm $plateForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlateForm  $plateForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlateForm $plateForm)
    {
        //
    }
}