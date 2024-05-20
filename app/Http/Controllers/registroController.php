<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\registroRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class registroController extends Controller
{
    public function show(){
        return view ('registro');
    }
    public function registroUsuario(registroRequest $request){
       
        $user = User::create($request->validated());
        return view('welcome');
           
    }
}
