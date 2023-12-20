<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class DataAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = $request->input('perPage', 10);
        $keyword = $request->input('search', '');

        $adminUsers = User::where('role', 'admin')
            ->where(function ($query) use ($keyword) {
                $query->where('name', 'like', "%$keyword%")
                    ->orWhere('alamat', 'like', "%$keyword%")
                    ->orWhere('email', 'like', "%$keyword%");
            })
            ->paginate($perPage);

        return view('superadmin.data-admin', [
            'adminUsers' => $adminUsers,
            'perPage' => $perPage,
            'keyword' => $keyword,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response(view('superadmin.form-admin'));
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
            User::create($validatedData);
            return redirect('data-admin')->with('success', 'Data berhasil dibuat!');
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
