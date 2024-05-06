<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Profil::all();
        return view('admin.profil.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.profil.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'Judul' => 'required',
                'Desc' => 'required',
                'img1' => 'mimes:jpg,png,jpeg',
                'img2' => 'mimes:jpg,png,jpeg',
                'img3' => 'mimes:jpg,png,jpeg',
                'img4' => 'mimes:jpg,png,jpeg',
                'img5' => 'mimes:jpg,png,jpeg',
                'img6' => 'mimes:jpg,png,jpeg',
                'img7' => 'mimes:jpg,png,jpeg',
                'img8' => 'mimes:jpg,png,jpeg',
                'img9' => 'mimes:jpg,png,jpeg',
                'img10' => 'mimes:jpg,png,jpeg',
                'img11' => 'mimes:jpg,png,jpeg',
                'img12' => 'mimes:jpg,png,jpeg',
               
            ],
        );

        $imageName1 = time() . '.' . $request->img1->extension();
        $request->img1->move(public_path('img1'), $imageName1);

        $imageName2 = time() . '.' . $request->img2->extension();
        $request->img2->move(public_path('img2'), $imageName2);

        $imageName3 = time() . '.' . $request->img3->extension();
        $request->img3->move(public_path('img3'), $imageName3);

        $imageName4 = time() . '.' . $request->img4->extension();
        $request->img4->move(public_path('img4'), $imageName4);

        $imageName5 = time() . '.' . $request->img5->extension();
        $request->img5->move(public_path('img5'), $imageName5);

        $imageName6 = time() . '.' . $request->img6->extension();
        $request->img6->move(public_path('img6'), $imageName6);

        $imageName7 = time() . '.' . $request->img7->extension();
        $request->img7->move(public_path('img7'), $imageName7);

        $imageName8 = time() . '.' . $request->img8->extension();
        $request->img8->move(public_path('img8'), $imageName8);

        $imageName9 = time() . '.' . $request->img9->extension();
        $request->img9->move(public_path('img9'), $imageName9);

        $imageName10 = time() . '.' . $request->img10->extension();
        $request->img10->move(public_path('img10'), $imageName10);

        $imageName11 = time() . '.' . $request->img11->extension();
        $request->img11->move(public_path('img11'), $imageName11);

        $imageName12 = time() . '.' . $request->img12->extension();
        $request->img12->move(public_path('img12'), $imageName12);

       

        $data = [
            'Judul' => $request->Judul,
            'Desc' => $request -> Desc,
            'img1' => $imageName1,
            'img2' => $imageName2,
            'img3' => $imageName3,
            'img4' => $imageName4,
            'img5' => $imageName5,
            'img6' => $imageName6,
            'img7' => $imageName7,
            'img8' => $imageName8,
            'img9' => $imageName9,
            'img10' => $imageName10,
            'img11' => $imageName11,
            'img12' => $imageName12,
            
        ];
        Profil::create($data);
        return redirect('/profil');
    }

    /**
     * Display the specified resource.
     */
    public function show(Profil $profil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Profil::where('id', $id)->first();
        return view('admin.profil.edit')->with('items', $item);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        $request->validate(
            [
                'Judul' => 'required',
                'Desc' => 'required',
                'img1' => 'mimes:jpg,png,jpeg',
                'img2' => 'mimes:jpg,png,jpeg',
                'img3' => 'mimes:jpg,png,jpeg',
                'img4' => 'mimes:jpg,png,jpeg',
                'img5' => 'mimes:jpg,png,jpeg',
                'img6' => 'mimes:jpg,png,jpeg',
                'img7' => 'mimes:jpg,png,jpeg',
                'img8' => 'mimes:jpg,png,jpeg',
                'img9' => 'mimes:jpg,png,jpeg',
                'img10' => 'mimes:jpg,png,jpeg',
                'img11' => 'mimes:jpg,png,jpeg',
                'img12' => 'mimes:jpg,png,jpeg',
               
            ],
        );

        $imageName1 = time() . '.' . $request->img1->extension();
        $request->img1->move(public_path('img1'), $imageName1);

        $imageName2 = time() . '.' . $request->img2->extension();
        $request->img2->move(public_path('img2'), $imageName2);

        $imageName3 = time() . '.' . $request->img3->extension();
        $request->img3->move(public_path('img3'), $imageName3);

        $imageName4 = time() . '.' . $request->img4->extension();
        $request->img4->move(public_path('img4'), $imageName4);

        $imageName5 = time() . '.' . $request->img5->extension();
        $request->img5->move(public_path('img5'), $imageName5);

        $imageName6 = time() . '.' . $request->img6->extension();
        $request->img6->move(public_path('img6'), $imageName6);

        $imageName7 = time() . '.' . $request->img7->extension();
        $request->img7->move(public_path('img7'), $imageName7);

        $imageName8 = time() . '.' . $request->img8->extension();
        $request->img8->move(public_path('img8'), $imageName8);

        $imageName9 = time() . '.' . $request->img9->extension();
        $request->img9->move(public_path('img9'), $imageName9);

        $imageName10 = time() . '.' . $request->img10->extension();
        $request->img10->move(public_path('img10'), $imageName10);

        $imageName11 = time() . '.' . $request->img11->extension();
        $request->img11->move(public_path('img11'), $imageName11);

        $imageName12 = time() . '.' . $request->img12->extension();
        $request->img12->move(public_path('img12'), $imageName12);

       

        $data = [
            'Judul' => $request->Judul,
            'Desc' => $request -> Desc,
            'img1' => $imageName1,
            'img2' => $imageName2,
            'img3' => $imageName3,
            'img4' => $imageName4,
            'img5' => $imageName5,
            'img6' => $imageName6,
            'img7' => $imageName7,
            'img8' => $imageName8,
            'img9' => $imageName9,
            'img10' => $imageName10,
            'img11' => $imageName11,
            'img12' => $imageName12,
            
        ];

        Profil::where('id', $id)->update($data); 
        return redirect('/profil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Profil::where('id', $id)->delete();
        return redirect('/profil');
    }
}
