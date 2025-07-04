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
        $crecimiento_flagship = Agente::select('crecimiento_flagship')
            ->whereNotNull('crecimiento_flagship')
            ->orderBy('crecimiento_flagship', 'desc')
            ->get();

        $crecimiento_galones = Agente::select('crecimiento_galones')
            ->whereNotNull('crecimiento_galones')
            ->orderBy('crecimiento_galones', 'desc')
            ->get();

        $penetracion_flagship = Agente::select('penetracion_flagship')
            ->whereNotNull('penetracion_flagship')
            ->orderBy('penetracion_flagship', 'desc')
            ->get();

        $mix_flagship = Agente::select('mix_flagship')
            ->whereNotNull('mix_flagship')
            ->orderBy('mix_flagship', 'desc')
            ->get();

        $pops_flagship = Agente::select('pops_flagship')
            ->whereNotNull('pops_flagship')
            ->orderBy('pops_flagship', 'desc')
            ->get();

        return view('sections.ranking', compact(
            'crecimiento_flagship',
            'crecimiento_galones',
            'penetracion_flagship',
            'mix_flagship',
            'pops_flagship'
        ));
    }
}
