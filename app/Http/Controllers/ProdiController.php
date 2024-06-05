<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\ValidatedData;

class ProdiController extends Controller
{
    public function index()
    {
        $data = ['nama' => 'hitler', 'foto' =>'opp.jpeg'];
        $prodi = Prodi::all();
        return view('prodi.index', compact ('data', 'prodi')); 
    }

    public function create()
    {
        $data = ['nama' => 'hitler', 'foto' =>'opp.jpeg'];
        return view('prodi.create', compact(['data']));
    }

    public function store(Request $request)
    {
        $validateData = $request->validate(
            [
                'nama_prodi' => 'required|unique:prodi|max:255'
            ],
            [
                'nama_prodi.required' => 'nama prodi harus diisi',
                'nama_prodi.unique' => 'nama prodi wes enek',
                'nama_prodi.max' => 'nama prodi maksimal 255 karakter' 
            ]
        );
            Prodi::create($validateData);
            return redirect ('prodi');
    }
    public function edit(String $id)
    {
        $data = ['nama' => 'hitler', 'foto' =>'opp.jpeg'];
        $prodi = Prodi::find($id);
        return view('prodi.edit', compact(['data', 'prodi']));
    }

    public function update(Request $request, string $id)
    {
        $validateData = $request->validate(
            [
                'nama_prodi' => 'required|unique:prodi|max:255'
            ],
            [
                'nama_prodi.required' => 'nama prodi harus diisi',
                'nama_prodi.unique' => 'nama prodi wes enek',
                'nama_prodi.max' => 'nama prodi maksimal 255 karakter' 
            ]
        );
        prodi::where('id', $id)->update($validateData);
        return redirect('/prodi');
    }
    public function destroy(string $id)
    {
        prodi::destroy($id);
        return redirect('/prodi');
    }
}


