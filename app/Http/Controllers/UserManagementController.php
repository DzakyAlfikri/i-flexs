<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;

class UserManagementController extends Controller
{
    public function index()
    {
        $users = User::where('usertype', 'user')->latest()->get();
        return view('admin.users.index', compact('users'));
    }

    public function destroy(User $user)
    {
        if($user->usertype === 'admin') {
            return redirect()->route('admin.users.index')
                ->with('error', 'Admin tidak dapat dihapus');
        }

        $user->delete();
        return redirect()->route('admin.users.index')
                ->with('success', 'Pengguna berhasil dihapus');
    }
}
