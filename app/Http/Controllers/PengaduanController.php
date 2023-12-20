<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StatusValidasi;
use App\Models\Dinas;
use App\Models\StatusPengaduan;
use App\Models\Pengaduan;


class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dinasOptions = Dinas::all();
        return view('beranda-pengadu.index', compact('dinasOptions'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

         // Validasi data input
         $validatedData = $request->validate([
            'nama' => 'required|string',
            'no_ktp' => 'required|string',
            'kecamatan' => 'required|string',
            'kelurahan' => 'required|string',
            'rt' => 'required|string',
            'rw' => 'required|string',
            'alamat' => 'required|string',
            'email' => 'required|string',
            'no_hp' => 'required|string',
            'id_validasi' => 'required|exists:status_validasis,id',
            'dinas_id' => 'required|exists:dinas,id',
            'id_status' => 'required|exists:status_pengaduans,id',
            'isi_pengaduan' => 'required|string',
            'isi_tanggapan' => 'required|string',
            'file' => 'file|mimes:jpeg,png,mp4|max:10240',
        ]);

        // Handle file upload
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $fileName, 'public');
            $validatedData['file_path'] = $filePath;
        }

    // Set nilai default untuk id_validasi dan id_status
    $validatedData['id_validasi'] = 1; // Nilai default untuk id_validasi
    $validatedData['id_status'] = 0;   // Nilai default untuk id_status

    // Simpan data pengaduan ke database
    $pengaduan = Pengaduan::create($validatedData);

    // Simpan relasi dengan dinas
    $dinas = Dinas::find($request->input('dinas_id'));
    $pengaduan->dinas()->associate($dinas);

    // Simpan relasi dengan status pengaduan
    $statusPengaduan = StatusPengaduan::find($request->input('id_status'));
    $pengaduan->statusPengaduan()->associate($statusPengaduan);

    $pengaduan->save();

        // Response atau redirect ke halaman tertentu
        return response()->json(['message' => 'Pengaduan berhasil disimpan', 'data' => $pengaduan], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
