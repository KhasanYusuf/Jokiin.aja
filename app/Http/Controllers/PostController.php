<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function create()
    {
        if (Auth::check() && Auth::user()->role === 'penjoki') {
            return view('penjoki/post');
        }
        return redirect('/')->with('error', 'Unauthorized access');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'details' => 'required|string',
            'duration' => 'required|integer',
            'price' => 'required|numeric',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if (Auth::check() && Auth::user()->role === 'penjoki') {
            $post = Post::create([
                'user_id' => Auth::id(),
                'title' => $request->title,
                'details' => $request->details,
                'duration' => $request->duration,
                'price' => $request->price,
            ]);

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $path = $image->store('public/post_images');
                    PostImages::create([
                        'post_id' => $post->id,
                        'image_path' => $path,
                    ]);
                }
            }

            return redirect('/')->with('success', 'Post created successfully');
        }
        return redirect('/')->with('error', 'Unauthorized access');
    }
    public function index()
    {
        // Mengambil 10 data post beserta relasi images
        $posts = Post::with(['images', 'user'])->latest()->paginate(10);
        // dd($posts);

        // Kirimkan data ke view
        return view('index', compact('posts'));
    }
    public function show($id)
    {
        // Cari post berdasarkan ID dan sertakan relasi gambar
        $post = Post::with('images')->find($id);

        // Jika post tidak ditemukan, kembalikan halaman 404 atau pesan error
        if (!$post) {
            return abort(404, 'Post not found');
        }

        // Tampilkan view detail post
        return view('single-product', compact('post'));
    }
}
