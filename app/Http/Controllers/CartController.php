<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;


class CartController extends Controller
{
    // Menambahkan item ke dalam keranjang
    public function addToCart(Request $request, $postId)
    {
        $post = Post::find($postId);

        // Jika post tidak ditemukan
        if (!$post) {
            return redirect()->back()->with('error', 'Post not found');
        }

        // Cek apakah item sudah ada dalam keranjang
        $cart = Cart::where('user_id', auth()->id())
                    ->where('post_id', $post->id)
                    ->first();

        if ($cart) {
            // Jika item sudah ada, tambahkan jumlahnya
            $cart->quantity += $request->quantity;
            $cart->save();
        } else {
            // Jika item belum ada, buat item baru di keranjang
            Cart::create([
                'user_id' => auth()->id(),
                'post_id' => $post->id,
                'quantity' => $request->quantity
            ]);
        }

        return redirect()->route('cart.index')->with('success', 'Item added to cart');
    }

    // Menampilkan keranjang belanja
    public function index()
    {
        // Ambil semua cart untuk user yang sedang login
        $carts = Cart::with('post')->where('user_id', auth()->id())->get();
        $totalPrice = $carts->sum(function ($item) {
            return $item->post->price * $item->quantity;
        });
        return view('cart', compact('carts','totalPrice'));
    }

    // Mengupdate jumlah produk dalam keranjang
    public function update(Request $request, $cartId)
    {
        // Loop melalui semua cart yang diupdate
        foreach ($request->cartId as $cartId => $cart) {
            $cartItem = Cart::find($cartId);
            if ($cartItem) {
                $cartItem->quantity = $request->quantity[$cartId]; // Update quantity
                $cartItem->save();
            }
        }

        return redirect()->route('cart.index')->with('success', 'Cart updated successfully');
    }

    // Menghapus item dari keranjang
    public function remove($cartId)
    {
        $cart = Cart::findOrFail($cartId);
        $cart->delete();

        return redirect()->route('cart.index')->with('success', 'Item removed from cart');
    }
    public function checkout()
    {
        // Ambil data cart untuk pengguna yang sedang login
        $cartItems = Cart::where('user_id', Auth::id())->get();

        // Jika tidak ada produk dalam keranjang, arahkan ke halaman cart
        if ($cartItems->isEmpty()) {
            return redirect()->route('cart')->with('message', 'Your cart is empty!');
        }
        // dd($cartItems);

        // Hitung total harga keranjang
        $totalPrice = $cartItems->sum(function ($item) {
            return $item->post->price * $item->quantity;
        });

        // Kirim data ke view checkout
        return view('checkout', compact('cartItems', 'totalPrice'));
    }
}
