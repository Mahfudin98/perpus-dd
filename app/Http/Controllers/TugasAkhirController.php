<?php

namespace App\Http\Controllers;

use App\TugasAkhir;
use App\Fakultas;
use Illuminate\Http\Request;

class TugasAkhirController extends Controller
{
    public function create(){
        $fak = Fakultas::all();
        return view('createta', ['fak' => $fak]);
    }

    public function store(Request $request){
        $request->validate([
            'judulTA'       => 'required',
            'nomorIdTA'     => 'required',
            'namaTA'        => 'required',
            'idFakultas'    => 'required',
            'tahunTA'       => 'required',
            'linkTA'        => 'required'
        ]);

        // $data = $request->input('linkTA');
        // $file = $request->file('linkTA')->getClientOriginalName();
        // $filename = pathinfo($file, PATHINFO_FILENAME);
        // $extension = $request->file('linkTA')->getClientOriginalExtension();
        // $destination = $request->get('linkTA')->move( $file);;

        $filenameWithExt = $request->file('linkTA')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('linkTA')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('linkTA')->move(public_path('file'), $fileNameToStore);


        $form_data = new TugasAkhir();

         $form_data->judulTA = $request->judulTA;
         $form_data->nomorIdTA = $request->nomorIdTA;
         $form_data->namaTA = $request->namaTA;
         $form_data->idFakultas =  $request->idFakultas;
         $form_data->tahunTA = $request->tahunTA;
         $form_data->linkTA = $fileNameToStore;

         $form_data->save();

         return redirect('/');
    }

    public function pdf($idTA) {
        $view= TugasAkhir::where('idTA', $idTA)->first();

        return view('pdf', ['view' => $view]);
    }
}
