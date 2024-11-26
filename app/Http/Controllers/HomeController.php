<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Telefone;

class HomeController extends Controller
{
    public function index(){
        
        $telefones = Telefone::get();
        // return($telefones);


        $teste = "boa tarde";


        return view('welcome', compact('teste', 'telefones'));
    }
}
