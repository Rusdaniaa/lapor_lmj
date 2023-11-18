<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dinas;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class DinasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = $request->input('perPage', 10);
        $keyword = $request->input('search', '');

        $dataDinass = Dinas::where('nama_dinas', 'like', "%$keyword%")
        ->orWhere('alamat', 'like', "%$keyword%")
        ->paginate($perPage);



        return view('superadmin.data-dinas', compact('dataDinass', 'perPage', 'keyword'));

    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response(view('superadmin.form-dinas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_dinas' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            // tambahkan aturan validasi lainnya sesuai kebutuhan
        ]);

        try {
            Dinas::create($validatedData);
            return redirect('dinas')->with('success', 'Data berhasil dibuat!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage())->withInput();
        }
    }

    public function showEdit($id){

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_dinas' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
        ]);

        try {
            $dataDinas = Dinas::findOrFail($id);
            $dataDinas->update($request->all());

            return redirect('dinas')->with('success', 'Data berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage())->withInput();
        }
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
        $dataDinas = Dinas::findOrFail($id);
        return view('superadmin.edit-dinas', compact('dataDinas'));
    }

    /**
     * Update the specified resource in storage.
     */


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
