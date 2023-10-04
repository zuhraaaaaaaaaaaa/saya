<?php

namespace App\Http\Controllers;
use App\Models\postmodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = postmodel :: latest()->paginate(5);
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required|image|mimes: jpeg,jpg,png|max:2048',
            'judul' => 'required|min:5',
            'konten' => 'required|min:10',
        ]);

        // uploud gambar
        $foto = $request->file('foto');
        $foto->storeAs('public/post', $foto->hashName());

        //simpan
        postmodel :: create([
            'foto' => $foto->hashName(),
            'judul'=> $request->judul,
            'konten'=> $request->konten

        ]);
         //redirect to
            return redirect()->route('posts.index')->with(['success' => 'data berhasil di simpan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
       $post =PostModel::findOrFail($id);
        return view('post.show',compact ('post'));
            
        }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $post = PostModel ::findOrFail($id);
         Storage::delete('public/post', $post->foto);
         $post->delete();
         return redirect()->route('posts.index')->with(['success'=> 'Data Berhasil Di Hapus']);
    }
}
