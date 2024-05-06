<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = About::all();
        return view('admin.about.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'Judul' => 'required',
                'Desc1' => 'required',
                'Desc2' => 'required',
                'img' => 'mimes:jpg,png,jpeg',
                
               
            ],
        );

        $imageName = time() . '.' . $request->img->extension();
        $request->img->move(public_path('img'), $imageName);

       

        $data = [
            'Judul' => $request->Judul,
            'Desc1' => $request -> Desc1,
            'Desc2' => $request -> Desc2,
            'img' => $imageName,
          
            
        ];
        About::create($data);
        return redirect('/about');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = About::where('id', $id)->first();
        return view('admin.about.edit')->with('items', $item);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        $request->validate(
            [
                'Judul' => 'required',
                'Desc1' => 'required',
                'Desc2' => 'required',
                'img' => 'mimes:jpg,png,jpeg',
                
               
            ],
        );

        $imageName = time() . '.' . $request->img->extension();
        $request->img->move(public_path('img'), $imageName);

       

        $data = [
            'Judul' => $request->Judul,
            'Desc1' => $request -> Desc1,
            'Desc2' => $request -> Desc2,
            'img' => $imageName,
          
            
        ];
        About::where('id', $id)->update($data); 
        return redirect('/about');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        About::where('id', $id)->delete();
        return redirect('/about');
    }
}
