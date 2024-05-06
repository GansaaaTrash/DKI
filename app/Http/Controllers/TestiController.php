<?php

namespace App\Http\Controllers;

use App\Models\Testi;
use Illuminate\Http\Request;

class TestiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Testi::all();
        return view('admin.testi.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'Judul' => 'required',
                'Nama' => 'required',
                'Desc' => 'required',
                'img' => 'mimes:jpg,png,jpeg',
                
               
            ],
        );

        $imageName = time() . '.' . $request->img->extension();
        $request->img->move(public_path('img'), $imageName);

       

        $data = [
            'Judul' => $request->Judul,
            'Nama' => $request -> Nama,
            'Desc' => $request -> Desc,
            'img' => $imageName,
          
            
        ];
        Testi::create($data);
        return redirect('/testi');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testi $testi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Testi::where('id', $id)->first();
        return view('admin.testi.edit')->with('items', $item);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'Judul' => 'required',
                'Nama' => 'required',
                'Desc' => 'required',
                'img' => 'mimes:jpg,png,jpeg',
                
               
            ],
        );

        $imageName = time() . '.' . $request->img->extension();
        $request->img->move(public_path('img'), $imageName);

       

        $data = [
            'Judul' => $request->Judul,
            'Nama' => $request -> Nama,
            'Desc' => $request -> Desc,
            'img' => $imageName,
          
            
        ];
        Testi::where('id', $id)->update($data); 
        return redirect('/testi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Testi::where('id', $id)->delete();
        return redirect('/testi');
    }
}
