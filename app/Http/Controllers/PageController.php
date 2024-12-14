<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Menu;

class PageController extends Controller
{
    public function home() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function menu() {
        return view('menu');
    }

    public function contact()
    {
        return view('contact'); 
    }

    public function showContactForm() {
        return view('contact');
    }

    public function submitContact(Request $request)
    {
        // Validasi data form
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Lakukan pengolahan data form, misalnya kirim email atau simpan ke database

        return back()->with('success', 'Your message has been sent successfully!');
    }

    public function showMenu()
    {
        return view('menu'); // Pastikan view 'menu' tersedia
    }

    public function order() {
        return view('order');
    }

    public function showResult()
    {
        $data = session('data');
        
        return view('result', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'image' => 'required|image'
        ]);

        $path = $request->file('image')->store('images');

        Menu::create([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $path
        ]);

        return redirect()->route('menu.index')->with('success', 'Menu item added!');
    }
}
