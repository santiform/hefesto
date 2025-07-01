<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
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
            ->select('id', 'ubicacion')
            ->get();

        return view('operador.nuevo_informe_3', compact('equipos', 'edificio', 'familia'));
    }

    public function nuevoInforme4(Request $request)
    {
        $edificio = $request->input('edificio');
        $familia = $request->input('familia');
        $id_equipo = $request->input('equipo');


        $equipo = DB::table('equipos')
            ->where('id', $id_equipo)
            ->select('id', 'ubicacion')
            ->first();


        return view('operador.nuevo_informe_4', compact('equipo','edificio', 'familia'));
    }


    public function nuevoInforme5(Request $request)
    {
        $validated = $request->validate([
            // Checkbox (booleanos)
            'limpieza_filtros' => 'boolean',
            'limpieza_evaporador' => 'boolean',
            'lubricacion_bujes_motor' => 'boolean',
            'lubricacion_bujes_blower' => 'boolean',
            'limpieza_blower_evaporador' => 'boolean',
            'ajuste_contacto_electrico' => 'boolean',
            'limpieza_caja_electrica' => 'boolean',
            'limpieza_drenaje_bomba_bandeja' => 'boolean',
            'verificacion_termostato' => 'boolean',
            'limpieza_unidad_condensadora' => 'boolean',

            // Campos numéricos
            'presion_baja_antes' => 'nullable|numeric',
            'presion_baja_despues' => 'nullable|numeric',
            'presion_alta_antes' => 'nullable|numeric',
            'presion_alta_despues' => 'nullable|numeric',
            'amperaje_compresor_antes' => 'nullable|numeric',
            'amperaje_compresor_despues' => 'nullable|numeric',
            'voltaje_alimentacion_antes' => 'nullable|numeric',
            'voltaje_alimentacion_despues' => 'nullable|numeric',
            'inyeccion_aire_temp_antes' => 'nullable|numeric',
            'inyeccion_aire_temp_despues' => 'nullable|numeric',
        ]);

        $idEquipo = $request->input('equipo');
        $hoy = Carbon::today(); // fecha actual a las 00:00

        $existeInformeHoy = DB::table('informes')
            ->where('id_equipo', $idEquipo)
            ->whereDate('created_at', $hoy)
            ->exists();

        if ($existeInformeHoy) {
            $error = "Este equipo posee un informe anterior (subido hoy).";
            return view('operador.error', compact('error'));
        }

        // Insertar en la tabla 'informes'
        DB::table('informes')->insert([
            'id_user' => auth()->id(),
            'id_equipo' => $request->input('equipo'),

            'limpieza_filtros' => $validated['limpieza_filtros'],
            'limpieza_evaporador' => $validated['limpieza_evaporador'],
            'lubricacion_bujes_motor' => $validated['lubricacion_bujes_motor'],
            'lubricacion_bujes_blower' => $validated['lubricacion_bujes_blower'],
            'limpieza_blower_evaporador' => $validated['limpieza_blower_evaporador'],
            'ajuste_contacto_electrico' => $validated['ajuste_contacto_electrico'],
            'limpieza_caja_electrica' => $validated['limpieza_caja_electrica'],
            'limpieza_drenaje_bomba_bandeja' => $validated['limpieza_drenaje_bomba_bandeja'],
            'verificacion_termostato' => $validated['verificacion_termostato'],
            'limpieza_unidad_condensadora' => $validated['limpieza_unidad_condensadora'],

            'presion_baja_antes' => $validated['presion_baja_antes'],
            'presion_baja_despues' => $validated['presion_baja_despues'],
            'presion_alta_antes' => $validated['presion_alta_antes'],
            'presion_alta_despues' => $validated['presion_alta_despues'],
            'amperaje_compresor_antes' => $validated['amperaje_compresor_antes'],
            'amperaje_compresor_despues' => $validated['amperaje_compresor_despues'],
            'voltaje_alimentacion_antes' => $validated['voltaje_alimentacion_antes'],
            'voltaje_alimentacion_despues' => $validated['voltaje_alimentacion_despues'],
            'inyeccion_aire_temp_antes' => $validated['inyeccion_aire_temp_antes'],
            'inyeccion_aire_temp_despues' => $validated['inyeccion_aire_temp_despues'],

            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $validacion = "Informe guardado correctamente en la base de datos.";
        return view('operador.validacion', compact('validacion'));
    }


    // Método para listar informes propios (operario)
    public function misInformes()
    {
        // Acá podés traer los informes del usuario y pasarlos a la vista
        return view('operador.mis_informes');
    }
}
