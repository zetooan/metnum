<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::where('role', 'user')
                      ->orderBy('created_at', 'desc')
                      ->get();

        return view('landing.user_index', compact('data'));
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
        // Temukan user berdasarkan ID
        $user = User::find($id);

        // Periksa apakah user ditemukan
        if (!$user) {
            return redirect()->route('user.index')->with('error', 'User  tidak ditemukan.');
        }

        // Hapus user
        $user->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('user.index')->with('success', 'User  berhasil dihapus.');
    }
}
