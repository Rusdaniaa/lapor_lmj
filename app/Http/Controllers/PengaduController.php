<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengadu;
class PengaduController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $perPage = $request->input('perPage', 10);
        $keyword = $request->input('search', '');

        $dataPengadus = Pengadu::where('nama', 'like', "%$keyword%")
        ->orWhere('alamat', 'like', "%$keyword%")
        ->paginate($perPage);

        return view('superadmin.data-pengadu', [
            'dataPengadus' => $dataPengadus,
            'perPage' => $perPage,
            'keyword' => $keyword,
        ]);
       // return view('superadmin.data-pengadu', ['dataPengadus' => $dataPengadus]);
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
        //
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
