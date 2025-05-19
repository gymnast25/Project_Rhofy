<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create()
    {
        return view('admin.admin');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'address' => 'required|string',
            'role' => 'required|in:Super Admin,Kasir',
        ]);

        // Simulasi menyimpan data (biasanya ke DB)
        return back()->with('success', 'Data admin berhasil disimpan.');
    }
}