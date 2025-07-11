<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agente;

class RankingController extends Controller
{
    /**
     * Display the ranking page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $general = Agente::select('*')
            ->selectRaw('(COALESCE(crecimiento_flagship, 0) + COALESCE(crecimiento_galones, 0) + COALESCE(penetracion_flagship, 0) + COALESCE(mix_flagship, 0) + COALESCE(pops_flagship, 0)) as total_puntos')
            ->orderBy('total_puntos', 'desc')
            ->limit(10)
            ->get();

        $crecimiento_flagship = Agente::select('crecimiento_flagship')
            ->whereNotNull('crecimiento_flagship')
            ->orderBy('crecimiento_flagship', 'desc')
            ->limit(10)
            ->get();

        $crecimiento_galones = Agente::select('crecimiento_galones')
            ->whereNotNull('crecimiento_galones')
            ->orderBy('crecimiento_galones', 'desc')
            ->limit(10)
            ->get();

        $penetracion_flagship = Agente::select('penetracion_flagship')
            ->whereNotNull('penetracion_flagship')
            ->orderBy('penetracion_flagship', 'desc')
            ->limit(10)
            ->get();

        $mix_flagship = Agente::select('mix_flagship')
            ->whereNotNull('mix_flagship')
            ->orderBy('mix_flagship', 'desc')
            ->limit(10)
            ->get();

        $pops_flagship = Agente::select('pops_flagship')
            ->whereNotNull('pops_flagship')
            ->orderBy('pops_flagship', 'desc')
            ->limit(10)
            ->get();

        return view('sections.ranking', compact(
            'general',
            'crecimiento_flagship',
            'crecimiento_galones',
            'penetracion_flagship',
            'mix_flagship',
            'pops_flagship'
        ));
    }
}
