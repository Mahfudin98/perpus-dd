<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use App\Anggota;
use App\KerjaPraktek;
use App\TugasAkhir;
use App\Jurnal;
use App\Fakultas;
use Facade\FlareClient\Http\Response;
use PDF;

class ComponenController extends Controller
{
    public function index(){
        $buku    = Buku::paginate(15);
        $jurnal  = Jurnal::all();
        $kp      = KerjaPraktek::all();
        $ta      = TugasAkhir::all();

        return view('welcome', [
            'buku'    => $buku,
            'kp'      => $kp,
            'ta'      => $ta,
            'jurnal'  => $jurnal
            ]);
    }

    public function search(Request $request){
        if ($request->ajax()) {
            $output = "";

            $buku = Buku::where('judul', 'LIKE', '%' . $request->search. "%")->paginate(15);

            if ($buku) {
                foreach ($buku as $key => $value) {
                    $output.='<tr>'.

                    '<td>'.$value->isbn.'</td>'.
                    '<td>'.$value->judul.'</td>'.
                    '<td>'.$value->pengarang.'</td>'.
                    '<td>'.$value->penerbit.'</td>'.
                    '<td>'.$value->tahun.'</td>'.
                    '</tr>';
                }

                return Response($output);
            }
        }
    }

    public function count(){
        $anggota = Anggota::all();
        $buku    = Buku::all();
        $jurnal  = Jurnal::all();
        $kp      = KerjaPraktek::all();
        $ta      = TugasAkhir::all();

        return view('component.count', [
            'anggota' => $anggota,
            'buku'    => $buku,
            'kp'      => $kp,
            'ta'      => $ta,
            'jurnal'  => $jurnal
            ]);
    }

    public function create(){
        $fak = Fakultas::all();
        return view('createkp', ['fak' => $fak]);
    }

    public function store(Request $request){
        $request->validate([
            'judulKP'       => 'required',
            'nomorIdKP'     => 'required',
            'namaKP'        => 'required',
            'IdFakultas'    => 'required',
            'tahunKP'       => 'required',
            'linkKP'        => 'required'
        ]);

        // $data = $request->input('linkKP');
        // $file = $request->file('linkKP')->getClientOriginalName();
        // $filename = pathinfo($file, PATHINFO_FILENAME);
        // $extension = $request->file('linkKP')->getClientOriginalExtension();
        // $destination = $request->get('linkKP')->move( $file);;

        $filenameWithExt = $request->file('linkKP')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('linkKP')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('linkKP')->move(public_path('file'), $fileNameToStore);


        $form_data = new KerjaPraktek();

         $form_data->judulKP = $request->judulKP;
         $form_data->nomorIdKP = $request->nomorIdKP;
         $form_data->namaKP = $request->namaKP;
         $form_data->IdFakultas =  $request->IdFakultas;
         $form_data->tahunKP = $request->tahunKP;
         $form_data->linkKP = $fileNameToStore;

         $form_data->save();

         return redirect('/');
    }

    public function pdf($idKP) {
        $view= KerjaPraktek::where('idKP', $idKP)->first();

        return view('pdf', ['view' => $view]);
    }

}
