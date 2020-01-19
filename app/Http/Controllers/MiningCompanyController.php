<?php

namespace App\Http\Controllers;

use App\MiningCompany;
use Illuminate\Http\Request;

class MiningCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('pages.company.index')->with([
          'companies' => MiningCompany::with('region')->paginate()
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\MiningCompany  $miningCompany
     * @return \Illuminate\Http\Response
     */
    public function show(MiningCompany $miningCompany)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MiningCompany  $miningCompany
     * @return \Illuminate\Http\Response
     */
    public function edit(MiningCompany $miningCompany)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MiningCompany  $miningCompany
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MiningCompany $miningCompany)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MiningCompany  $miningCompany
     * @return \Illuminate\Http\Response
     */
    public function destroy(MiningCompany $miningCompany)
    {
        //
    }
}
