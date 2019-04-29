<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    private $listPath = 'volunteers.list'; //caminho para a view

    public function index(){

        $districts = District::all(); //buscando todos os distritos
        $volunteers = Volunteer::all(); //buscando todos os voluntários

        return view($this->listPath, compact('districts', 'volunteers'));
    }


    /**
     * Filtra os voluntários com base nos distritos e assets (recursos)
     * Retorna todos os voluntários que fazem parte de um certo distrito
     * e que possuem um certo recurso. Ou retorna todos de um certo distrito.
     *
     * @param null $district - id do distrito
     * @param null $asset - id do asset (recurso)
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     */
    public function filterVolunteers ($district = null, $asset = null)
    {
        $query = Volunteer::where('id', '>', 0);

        if ($district) {
            $query->where('districts_id', $district);
        }
        if ($asset) {
            $query->whereHas('assets', function ($subQuery) use ($asset) {
                $subQuery->where('id', $asset);
            });
        }

        $volunteers = $query->get();
        $districts = District::all(); //buscando todos os distritos

        return view($this->listPath, compact('districts','district', 'volunteers', 'asset'));
    }

}
