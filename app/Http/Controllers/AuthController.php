<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();
            return redirect('/')->with('message', 'Login successful');
        }

        return response()->json([
            'message' => 'Invalid credentials',
        ], 401);
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string|unique:users,phone', // Validasi nomor HP
            'password' => 'required|string|min:8',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['role'] = 'user'; // Set role default sebagai 'user'

        $user = User::create($validatedData);

        return redirect('/login')->with('message', 'Registration successful. Please log in.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return response()->json(['message' => 'Logged out successfully']);
    }
    public function profile()
    {
        // Cek apakah pengguna telah login
        if (!Auth::check()) {
            return redirect('/login')->with('message', 'Please log in to access your profile.');
        }

        // Dapatkan pengguna yang sedang login
        $user = Auth::user();

        // Redirect berdasarkan role
        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard');
        } elseif ($user->role === 'penjoki') {
            return redirect()->route('penjoki.dashboard');
        } else {
            return redirect()->route('user.dashboard'); // Default untuk role 'user'
        }
    }

    public function showPenjokiUsers()
    {
        $penjokiUsers = User::where('role', 'penjoki')->get();
        return view('admin/table-data-penjoki', ['penjokiUsers' => $penjokiUsers]);
    }
    public function showAdminUsers()
    {
        $admin = User::where('role', 'Admin')->get();
        return view('admin/table-data-admin', ['admin' => $admin]);
    }
    public function showCommonUsers()
    {
        $pelanggan = User::where('role', 'penjoki')->get();
        return view('admin/table-data-pelanggan', ['pelanggan' => $pelanggan]);
    }
    public function submitNda(Request $request)
{
    $validated = $request->validate([
        'nda_agreement' => 'required|in:agree,disagree',
    ]);

    if ($validated['nda_agreement'] === 'agree') {
        $user = Auth::user();
        $user->role = 'penjoki'; // Ubah role menjadi 'penjoki'
        $user->save();

        return redirect('/profile')->with('message', 'Anda telah menyetujui NDA. Selamat datang sebagai Penjoki!');
    } else {
        return redirect('/')->with('message', 'Anda tidak menyetujui NDA. Peran Anda tetap sebagai User.');
    }
}

}
