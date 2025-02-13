<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

Route::get('/', function () {
    return view('denah');
});

Route::get('/uploads/images', function () {
    return view('upload-image');
});

Route::post('uploads/gambar', function (Request $request) {
    try {
        $validated = $request->validate([
            'title' => 'required|string',
            'file' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);

        $file = $request->file('file');
        $fileName = Str::slug($validated['title']) . '.' . $file->getClientOriginalExtension(); // Use Str::slug for safer filenames
        $path = public_path('assets/images/');

        // Check if the directory exists, and create it if it doesn't
        if (!File::isDirectory($path)) {
            File::makeDirectory($path, 0755, true); // Create recursively with appropriate permissions
        }


        if (is_file($path. $fileName)) {
            unlink($path. $fileName);
        }

        $file->move($path, $fileName);

        Alert::success('Gambar berhasil di simpan.');
        return redirect()->back();

    } catch (\Throwable $th) {
        Alert::error('Terjadi kesalahan saat upload images. ' . $th->getMessage());
        return redirect()->back();
    }
})->name('upload.image');