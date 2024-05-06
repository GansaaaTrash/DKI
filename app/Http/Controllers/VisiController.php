<?php

namespace App\Http\Controllers;

use App\Models\visi;
use Illuminate\Http\Request;

class VisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Visi::all();
        return view('admin.visi.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.visi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                
                'img' => 'mimes:jpg,png,jpeg',
                               
            ],
        );

        $imageName = time() . '.' . $request->img->extension();
        $request->img->move(public_path('img'), $imageName);

        $data = [
            
            'img' => $imageName,   
        ];
        Visi::create($data);
        return redirect('/visi');
    }

    /**
     * Display the specified resource.
     */
    public function show(visi $visi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Visi::where('id', $id)->first();
        return view('admin.visi.edit')->with('items', $item);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'img' => 'mimes:jpg,png,jpeg'
            ],
        );

        $imageName = time() . '.' . $request->img->extension();
        $request->img->move(public_path('img'), $imageName);
       

        $data = [
            
            'img' => $imageName,         
             
        ];
        
        Visi::where('id', $id)->update($data); 
        return redirect('/visi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        visi::where('id', $id)->delete();
        return redirect('/visi');
    }
}
