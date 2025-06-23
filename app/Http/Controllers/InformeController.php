<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


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


    public function nuevoInforme()
    {
        $edificios = DB::table('equipos')->select('edificio')->distinct()->pluck('edificio');
        return view('operador.nuevo_informe', compact('edificios'));
    }

    public function nuevoInforme2(Request $request)
    {
        // Capturás el edificio enviado por GET
        $edificio = $request->input('edificio');

        // Podés usar ese dato para filtrar familias dentro de ese edificio, por ejemplo:
        $familias = DB::table('equipos')
                    ->where('edificio', $edificio)
                    ->select('familia')
                    ->distinct()
                    ->pluck('familia');

        $familias = DB::table('equipos')->select('familia')->distinct()->pluck('familia');
        return view('operador.nuevo_informe_2', compact('edificio', 'familias'));
    }

    public function nuevoInforme3(Request $request)
    {
        $edificio = $request->input('edificio');
        $familia = $request->input('familia');

        // Consultar equipos filtrando por edificio y familia y obtener sólo el campo 'nombre'
        $equipos = DB::table('equipos')
            ->where('edificio', $edificio)
            ->where('familia', $familia)
            ->pluck('ubicacion');  // pluck trae solo el campo 'nombre' como colección de strings


        return view('operador.nuevo_informe_3', compact('equipos', 'edificio', 'familia'));
    }

    public function nuevoInforme4(Request $request)
    {
        $edificio = $request->input('edificio');
        $familia = $request->input('familia');
        $equipo = $request->input('equipo');

        return view('operador.nuevo_informe_4', compact('equipo', 'edificio', 'familia'));
    }


    // Método para listar informes propios (operario)
    public function misInformes()
    {
        // Acá podés traer los informes del usuario y pasarlos a la vista
        return view('operador.mis_informes');
    }
}
