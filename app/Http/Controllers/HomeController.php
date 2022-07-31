<?php

namespace App\Http\Controllers;

use App\Models\Student;
use PDF;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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
        return view('home');
    }
    public function generatepdf(){
        $data = Student::all();

        view()->share('data', $data);
        $pdf = PDF::loadview('datapdf');
        return $pdf->download('data.pdf');
    }
}
