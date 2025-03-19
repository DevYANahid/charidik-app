<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // 🔐 Authentication Required
    }

    public function index()
    {
        $heroes = Hero::all();
        return view('admin.hero.index', compact('heroes'));
    }

    public function create()
    {
        return view('admin.hero.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'slider_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'slider_title' => 'required',
            'slider_category' => 'required',
            'bottom_image1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'bottom_title1' => 'required',
            'bottom_category1' => 'required',
            'bottom_image2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'bottom_title2' => 'required',
            'bottom_category2' => 'required',
            'bottom_image3' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'bottom_title3' => 'required',
            'bottom_category3' => 'required',
            'video_url' => 'required|url',
        ]);

        $hero = new Hero();

        // Image Uploads
        if ($request->hasFile('slider_image')) {
            $hero->slider_image = $request->file('slider_image')->store('heroes', 'public');
        }
        if ($request->hasFile('bottom_image1')) {
            $hero->bottom_image1 = $request->file('bottom_image1')->store('heroes', 'public');
        }
        if ($request->hasFile('bottom_image2')) {
            $hero->bottom_image2 = $request->file('bottom_image2')->store('heroes', 'public');
        }
        if ($request->hasFile('bottom_image3')) {
            $hero->bottom_image3 = $request->file('bottom_image3')->store('heroes', 'public');
        }

        // Store other data
        $hero->fill($request->except(['slider_image', 'bottom_image1', 'bottom_image2', 'bottom_image3']));
        $hero->save();

        return redirect()->route('hero.index')->with('success', 'Hero Section added successfully!');
    }

    public function edit(Hero $hero)
    {
        return view('admin.hero.edit', compact('hero'));
    }

    public function update(Request $request, Hero $hero)
    {
        $request->validate([
            'slider_title' => 'required',
            'slider_category' => 'required',
            'bottom_title1' => 'required',
            'bottom_category1' => 'required',
            'bottom_title2' => 'required',
            'bottom_category2' => 'required',
            'bottom_title3' => 'required',
            'bottom_category3' => 'required',
            'video_url' => 'required|url',
        ]);

        // Image Updates
        if ($request->hasFile('slider_image')) {
            $hero->slider_image = $request->file('slider_image')->store('heroes', 'public');
        }
        if ($request->hasFile('bottom_image1')) {
            $hero->bottom_image1 = $request->file('bottom_image1')->store('heroes', 'public');
        }
        if ($request->hasFile('bottom_image2')) {
            $hero->bottom_image2 = $request->file('bottom_image2')->store('heroes', 'public');
        }
        if ($request->hasFile('bottom_image3')) {
            $hero->bottom_image3 = $request->file('bottom_image3')->store('heroes', 'public');
        }

        $hero->fill($request->except(['slider_image', 'bottom_image1', 'bottom_image2', 'bottom_image3']));
        $hero->save();

        return redirect()->route('hero.index')->with('success', 'Hero Section updated successfully!');
    }

    public function destroy(Hero $hero)
    {
        $hero->delete();
        return redirect()->route('hero.index')->with('success', 'Hero Section deleted successfully!');
    }
}
