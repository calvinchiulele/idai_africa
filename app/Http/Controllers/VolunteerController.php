<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Category;
use App\Models\District;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    private $listPath = 'volunteers.list'; //caminho para a view que lista os voluntários

    public function index(){

        $districts = District::all(); //buscando todos os distritos
        $volunteers = Volunteer::all(); //buscando todos os voluntários
        $assets = Asset::all(); //buscando todos os assets
        $categories = Category::all(); //buscando todas as categorias


        return view($this->listPath, compact('districts', 'volunteers', 'assets', 'categories'));
    }


    /**
     * Filtra os voluntários com base nos distritos e assets (recursos)
     * Retorna todos os voluntários que fazem parte de um certo distrito
     * e que possuem um certo recurso. Ou retorna todos de um certo distrito.
     *
     * @param null $fDistrict - id do distrito
     * @param null $fAsset - id do asset (recurso)
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     */
    public function filterVolunteers ($fDistrict, $fAsset, $fCategory)
    {
        $query = Volunteer::where('id', '>', 0);

        if ($fCategory !== '-1') {
            $query->whereHas('categories', function ($subQuery) use ($fCategory) {
                $subQuery->where('category_id', $fCategory);
            });
        }
        if ($fDistrict !== '-1' ) {
            $query->where('districts_id', $fDistrict);
        }
        if ($fAsset !== '-1') {
            $query->whereHas('assets', function ($subQuery) use ($fAsset) {
                $subQuery->where('assets_id', $fAsset);
            });
        }

        $volunteers = $query->get();
        $districts = District::all(); //buscando todos os distritos
        $assets = Asset::all(); //buscando todos os assets
        $categories = Category::all(); //buscando todas as categorias


        return view($this->listPath, compact('districts','fDistrict', 'volunteers', 'fAsset', 'assets', 'fCategory', 'categories'));
    }

}
