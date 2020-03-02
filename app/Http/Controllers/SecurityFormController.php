<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SecurityForm;

class SecurityFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breaches = SecurityForm::all();

        return view('security_form/index', compact('breaches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('security_form/create');
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
        //dd($request);
        $request->validate([
            "name" => 'required',
            "last_name" => 'required',
            "position" => 'required',
            "email" => 'required|email',
            "phone" => 'required|numeric',
            "detection_breach_date" => 'required',
            "detection_breach_date_type" => 'required',
            "start_breach_date" => 'required',
            "start_breach_date_type" => 'required',
            "detection_breach_description" => 'required',
            "breach_description" => 'required',
            "breach_types" => 'required',
            "breach_origins" => 'required',
            "breach_measures" => 'required',
            "breach_data" => 'required',
            "affected_subjects" => 'required',
            "affected_subjects_number" => 'required',
            "impacts" =>'required',
            "resolution_breach_date" => 'required_with:breach_is_resolved'
        ]);

        $input = $request->all();
        $input['breach_types'] = implode(',', $input['breach_types']);
        $input['breach_origins'] = implode(',', $input['breach_origins']);
        $input['breach_data'] = implode(',', $input['breach_data']);
        $input['affected_subjects'] = implode(',', $input['affected_subjects']);
        $input['impacts'] = implode(',', $input['impacts']);
        $input['breach_is_resolved'] = (isset($input['breach_is_resolved']) && $input['breach_is_resolved'] == "1") ? 1 : 0;
        $student = SecurityForm::create($input);
        return back()->with('success', 'Incidente guardado exitosamente');
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
        $securityForm = SecurityForm::find($id);
        $securityForm['resolution_breach_date_type'] = $securityForm['resolution_breach_date_type'] == 'exact' ? 'Exacta' : 'Estimada';
        $securityForm['detection_breach_date_type'] = $securityForm['detection_breach_date_type'] == 'exact' ? 'Exacta' : 'Estimada';
        $securityForm['start_breach_date_type'] = $securityForm['start_breach_date_type'] == 'exact' ? 'Exacta' : 'Estimada';
        $returnHTML = view('security_form/show', compact('securityForm'))->render();
        return response()->json(array('success' => true, 'html'=>$returnHTML));
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
