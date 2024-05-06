<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Post::all();
        return view('frontend.cp')->with('data', $data);
    }

    public function dash()
    {
        $itemdashboard = Post::all();
        return view('dashboard.index')->with('itemdashboard', $itemdashboard);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'Judul' => 'required',
                'Description' => 'required',
                'Gambar1' => 'mimes:jpg,png,jpeg',
                'Gambar2' => 'mimes:jpg,png,jpeg',
                'Gambar3' => 'mimes:jpg,png,jpeg',
                'Gambar' => 'mimes:jpg,png,jpeg'
            ],
        );

        $imageName1 = time() . '.' . $request->Gambar1->extension();
        $request->Gambar1->move(public_path('img1'), $imageName1);

        $imageName2 = time() . '.' . $request->Gambar2->extension();
        $request->Gambar2->move(public_path('img2'), $imageName2);

        $imageName3 = time() . '.' . $request->Gambar3->extension();
        $request->Gambar3->move(public_path('img3'), $imageName3);

        $imageName = time() . '.' . $request->Gambar->extension();
        $request->Gambar->move(public_path('img'), $imageName);

        $data = [
            'Judul' => $request->Judul,
            'Description' => $request -> Description,
            'img1' => $imageName1,
            'img2' => $imageName2,
            'img3' => $imageName3,
            'img' => $imageName
        ];
        Post::create($data);
        return view('dashboard.header.post');
    }

    /**
     * Store a newly created resource in storage.
     */
   

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Post::where('id', $id)->first();
        return view('dashboard.header.edit')->with('item', $item);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, $id)
    {
        
        $request->validate(
            [
                'Judul' => 'required',
                'Description' => 'required',
                'Gambar1' => 'mimes:jpg,png,jpeg',
                'Gambar2' => 'mimes:jpg,png,jpeg',
                'Gambar3' => 'mimes:jpg,png,jpeg',
                'Gambar' => 'mimes:jpg,png,jpeg'
         
            ],
        );


        $imageName1 = time() . '.' . $request->Gambar1->extension();
        $request->Gambar1->move(public_path('img1'), $imageName1);

        $imageName2 = time() . '.' . $request->Gambar2->extension();
        $request->Gambar2->move(public_path('img2'), $imageName2);

        $imageName3 = time() . '.' . $request->Gambar3->extension();
        $request->Gambar3->move(public_path('img3'), $imageName3);

        $imageName = time() . '.' . $request->Gambar->extension();
        $request->Gambar->move(public_path('img'), $imageName);

        $data = Post::where('id', $id)->first();

        $data->Judul = $request->Judul;
        $data->Description = $request->Description;
        $data->img1 = $imageName1;
        $data->img2 = $imageName2;
        $data->img3 = $imageName3;
        $data->img = $imageName;
        $data->save();

        return redirect()->route('post.index')->with('success', 'berhasil melakukan edit Berita');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::where('id', $id)->first();
        $post->delete();
        return redirect()->route('post.index')->with('success', 'Berhasil menghapus data');
    }

    public function header (Request $request)
    {
       
    }


    

    
}
