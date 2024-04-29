<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\DataPeserta;
use App\Models\Asuransi;
use App\Enums\Agama;
use App\Enums\Kelamin;
use App\Enums\StatusKawin;

class FormController extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
       //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $program = $request->query('program'); // defaultProgram adalah nilai default
        return view('form.create', compact('program'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('id_peserta', $request->ktp);
        Session::flash('nama_lengkap_peserta', $request->nama);
        Session::flash('alamat', $request->alamat);
        Session::flash('tempat_lahir', $request->tlahir);
        Session::flash('tanggal_lahir', $request->tgllhr);
        Session::flash('jenis_kelamin', $request->kelamin);
        Session::flash('agama', $request->agama);
        Session::flash('status', $request->statusNikah);
        Session::flash('pekerjaan', $request->pekerjaan);
        Session::flash('nama_asuransi', $request->asuransi);
        Session::flash('no_asuransi', $request->noasuransi);
        Session::flash('hobi', $request->hobi);
        Session::flash('keahlian', $request->keahlian);
        Session::flash('bahasa', $request->bahasa);

        $request->validate([
            'nama' => 'required|string|max:50',
            'ktp' => 'required|string|size:16|unique:data_peserta,id_peserta',
            'alamat' => 'required|string',
            'tlahir' => 'required|string',
            'tgllhr'  => 'required|date',
            'kelamin'  => 'required|string|in:' . implode(',', array_column(Kelamin::cases(), 'value')),
            'agama' => 'required|string|in:' . implode(',', array_column(Agama::cases(), 'value')),
            'statusNikah' => 'required|string|in:' . implode(',', array_column(StatusKawin::cases(), 'value')),
            'pekerjaan' => 'required|string|max:30',
            'asuransi' => 'required|string|max:50',
            'noasuransi' => 'required|string|max:16',
            'hobi' => 'required|string|max:30',
            'keahlian' => 'required|string|max:30',
            'bahasa' => 'required|string|max:30',
        ], [
            'ktp.required' => 'Nomor KTP wajib diisi.',
            'ktp.size' => 'Nomor KTP harus tepat 16 digit.',
            'ktp.unique' => 'Nomor KTP sudah terdaftar.',
            'nama.required' => 'Nama Lengkap wajib diisi.',
            'alamat.required' => 'Alamat wajib diisi.',
            'tlahir.required' => 'Tempat Lahir wajib diisi.',
            'tgllhr.required' => 'Tanggal Lahir wajib diisi.',
            'kelamin.required' => 'Jenis Kelamin wajib diisi.',
            'agama.required' => 'Agama wajib diisi.',
            'statusNikah.required' => 'Status Nikah wajib diisi.',
            'pekerjaan.required' => 'Pekerjaan wajib diisi.',
            'asuransi.required' => 'Nama Asuransi wajib diisi. Bila tidak ada tulis Tidak Ada',
            'noasuransi.required' => 'No Asuransi wajib diisi. Bila tidak ada tulis Tidak Ada',
            'hobi.required' => 'Hobi wajib diisi.',
            'keahlian.required' => 'Keahlian wajib diisi.',
            'bahasa.required' => 'Bahasa Sehari-hari wajib diisi.',
        ]);
           
        $dataPeserta = DataPeserta::create([
            'id_peserta' => $request->ktp,
            'nama_lengkap_peserta' => $request->nama, 
            'alamat' => $request->alamat,
            'tempat_lahir' => $request->tlahir,
            'tanggal_lahir' => $request->tgllhr,
            'jenis_kelamin' => $request->kelamin,
            'agama' => $request->agama,
            'status' => $request->statusNikah,
            'pekerjaan' => $request->pekerjaan,
            'hobi' => $request->hobi,
            'keahlian' => $request->keahlian,
            'bahasa' => $request->bahasa,
        ]);

        if (!empty($request->asuransi) && !empty($request->noasuransi)) {
            $dataAsuransi = new Asuransi([
                'nama_asuransi' => $request->asuransi,
                'no_asuransi' => $request->noasuransi
            ]);
            $dataPeserta->asuransi()->save($dataAsuransi);
        }

        return 'HI';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
