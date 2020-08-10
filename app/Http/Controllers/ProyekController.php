<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProyekController extends Controller
{
    public function index()
    {
        $data = DB::table('proyek')->get();
        // dd($data);
        return view('konten/indexProyek', compact('data'));
    }
    public function create()
    {
        return view('konten/createProyek');
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            //
        ]);

        $query = DB::table('proyek')->insert([]);
        return redirect('/proyek')->with('success', 'Proyek created!');
    }
    public function addstaff()
    {
        return view('konten/addStaff');
    }
    public function storestaff(Request $request)
    {
        $validateData = $request->validate([
            //
        ]);

        $query = DB::table('proyek_has_karyawan')->insert([]);
        return redirect('/proyek')->with('success', 'Success Added!');
    }
    public function edit($id)
    {
        $data = DB::table('proyek')->where('id', $id)->first();
        return view('konten/editProyek', compact('data'));
    }
    public function update($id, Request $request)
    {
        $validateData = $request->validate([
            //
        ]);

        $query = DB::table('proyek')->where('id', $id)->update([
            // 
        ]);

        return redirect('/proyek')->with('success', 'Proyek updated!');
    }
    public function destroy($id)
    {
        $query = DB::table('proyek')->where('id', $id)->delete();
        return redirect('/proyek')->with('success', 'proyek deleted!');
    }
}
