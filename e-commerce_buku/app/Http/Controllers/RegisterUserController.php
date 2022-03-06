<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterUserController extends Controller
{
    public function index() {
        $judul = "User Register";
        
        return view('user.registeruser', compact('judul'));
    }

    public function store(Request $request) {
        $judul = "User Register";

        $request->validate([
            'photo' => 'required|image|file|mimes:jepg,png,jpg',
            'name' => 'required|max:255',
            'email' => 'required|min:5|email|unique:users',
            'password' => 'required|min:5|max:255',
            'status' => 'required',
        ]);

        $image = $request->file('photo');
        $new_image= rand().".".$image ->getClientOriginalExtension();

        $data= array(
            'photo'=> $new_image,
            'name'=> $request->name,
            'email'=> $request->email, 
            'password'=> Hash::make($request->password),
            'status'=> $request->status,
            
        );
        $image->move(public_path('photo'),$new_image);
    
        User::create($data);
        return redirect('/registeruser')
        ->with('success','Registration has been successful');
        
    }
}
