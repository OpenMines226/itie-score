<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\MiningCompany;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard')->with([
          'regions' => Region::withCount('mining_companies')->get(),
          'companies' => MiningCompany::paginate()
        ]);
    }
}
