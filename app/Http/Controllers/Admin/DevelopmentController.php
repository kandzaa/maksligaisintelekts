<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Development;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DevelopmentController extends Controller
{
    public function index()
    {
        $developments = Development::orderBy('order', 'asc')->orderBy('created_at', 'desc')->get();
        return view('admin.developments.index', compact('developments'));
    }

    public function create()
    {
        return view('admin.developments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_lv' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'content_lv' => 'required|string',
            'content_en' => 'required|string',
            'description_lv' => 'nullable|string',
            'description_en' => 'nullable|string',
            'icon_class' => 'nullable|string|max:255',
            'order' => 'nullable|integer|min:0',
            'published' => 'boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->except('image');
        $data['slug'] = Str::slug($request->title_en);
        $data['published'] = $request->has('published');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/developments'), $imageName);
            $data['image'] = $imageName;
        }

        Development::create($data);

        return redirect()->route('admin.developments.index')
            ->with('success', 'Development created successfully.');
    }

    public function edit(Development $development)
    {
        return view('admin.developments.edit', compact('development'));
    }

    public function update(Request $request, Development $development)
    {
        $request->validate([
            'title_lv' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'content_lv' => 'required|string',
            'content_en' => 'required|string',
            'description_lv' => 'nullable|string',
            'description_en' => 'nullable|string',
            'icon_class' => 'nullable|string|max:255',
            'order' => 'nullable|integer|min:0',
            'published' => 'boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->except('image');
        $data['slug'] = Str::slug($request->title_en);
        $data['published'] = $request->has('published');

        if ($request->hasFile('image')) {
            // Delete old image
            if ($development->image) {
                $oldImagePath = public_path('assets/images/developments/' . $development->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/developments'), $imageName);
            $data['image'] = $imageName;
        }

        $development->update($data);

        return redirect()->route('admin.developments.index')
            ->with('success', 'Development updated successfully.');
    }

    public function destroy(Development $development)
    {
        // Delete image
        if ($development->image) {
            $imagePath = public_path('assets/images/developments/' . $development->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $development->delete();

        return redirect()->route('admin.developments.index')
            ->with('success', 'Development deleted successfully.');
    }
}
