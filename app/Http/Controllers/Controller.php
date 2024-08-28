<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Curso;
use App\Models\User;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function cuartocomputacion()
    {

        $cursos = Curso::orderBy('nombre', 'asc')->paginate(5);
        return view('4tocomputacion', compact('cursos','cursos'));

    }




}
