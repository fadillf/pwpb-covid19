<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InfoController extends Controller
{
    public function index()
    {
        $provinsi = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
        $indonesia = Http::get('https://api.kawalcorona.com/indonesia');

        $dataGlobal = [
            "positif" => Http::get('https://api.kawalcorona.com/positif')->json(),
            "sembuh" => Http::get('https://api.kawalcorona.com/sembuh')->json(),
            "meninggal" => Http::get('https://api.kawalcorona.com/meninggal')->json()
        ];

        $covid19 = Http::get('https://covid19.mathdro.id/api/countries/IDN')->json();

        $dataProv = $provinsi->json();
        $dataInd = $indonesia->json();
        $dataPositif = ((float)str_replace(',', '.', $dataInd['0']['positif'])) - ((float)str_replace(',', '.', $dataInd['0']['sembuh'])) - ((float)str_replace(',', '.', $dataInd['0']['meninggal']));
        $dataPositif = str_replace('.', ',', $dataPositif);

        return view('user/terkini', compact('dataProv','dataInd', 'dataPositif', 'dataGlobal', 'covid19'));
    }
}
