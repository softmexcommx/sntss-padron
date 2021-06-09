<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Padron;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {       
            return view("home");       
    }

    public function search(Request $request)
    { 

            try {
            $tra = Padron::where('Matricula', $request->matricula)->first();
            if($tra != null){
               
                return redirect()
                ->back()
                ->withInput()
                ->with('tra', $tra);
            }else{

                return redirect()
                ->back()
                ->withInput()
                ->with('error', 'No se encontro la matrícula');
            }
                
            } catch (\Exception $e) {

                return redirect()
                ->back()
                ->withInput()
                ->with('error', $e->getMessage());
            }

    }


}