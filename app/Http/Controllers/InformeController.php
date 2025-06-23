<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformeController extends Controller
{
    // Método para panel admin
    public function adminIndex()
    {
        return view('admin.index');  // Asegurate de tener esta vista
    }

    // Método para panel operario
    public function operadorIndex()
    {
        return view('operador.index');  // Asegurate de tener esta vista
    }

    // Método para crear informe (operario)
    public function nuevoInforme()
    {
        return view('operador.nuevo_informe'); // Vista para crear informes
    }

    // Método para listar informes propios (operario)
    public function misInformes()
    {
        // Acá podés traer los informes del usuario y pasarlos a la vista
        return view('operador.mis_informes');
    }
}
