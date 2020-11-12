<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function index(){
        return view('materias.index');
    }

    public function home(){
        return view('home');
    }

    public function EV(){
        return view('materias.EV');
    }

    public function ejercicios_EV(){
        return view('materias.ejercicios_EV');
    }

    public function reEV(){
        return view('materias.reEV');
    } 
    
    public function OM(){
        return view('materias.OM');
    }
    
    public function EOM(){
        return view('materias.EOM');
    }
    
    public function REOM(){
        return view('materias.REOM');
    }
    
    public function Det(){
        return view('materias.Det');
    }
    
    public function EDet(){
        return view('materias.EDet');
    } 

    public function REDet(){
        return view('materias.REDet');
    }
    
    public function Sel(){
        return view('materias.Sel');
    } 
    
    public function ESel(){
        return view('materias.ESel');
    }
    
    public function RESel(){
        return view('materias.RESel');
    } 
}
