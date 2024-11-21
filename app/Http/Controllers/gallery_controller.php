<?php

namespace App\Http\Controllers;

use App\Models\gallery_model;
use App\Models\gallery_model_model;
use Illuminate\Http\Request;

class gallery_controller extends Controller
{
    public function gallery(){
        $data = gallery_model::all();
        // return view ('berita',compact('data'));
        return view ('gallery',compact('data'));
    }

    public function tambah_gallery(){
        $data = gallery_model::all();
        return view ('tambah_gallery',compact('data'));
    }

    public function tambah_gallery_proses(Request $request){
        // $request->validate([
        //     "gambar" => "required",
        //     "judul" => "required",
        //     "deksripsi" => "required"
        // ]);

        $photo = $request->file('gambar_gallery');
        $file = uniqid().".".$photo->getClientOriginalExtension();
        $photo->move('data_gambar',$file);

        $data = gallery_model::all();
        $data = new gallery_model();
        $data->gambar_gallery = $file;
        $data->judul_gallery = $request->judul_gallery;
        // $data->deskripsi = $request->deskripsi;
        $data->save();

        session()->flash('Pesan','Berhasil Menambahkan Foto');
        return redirect('gallery');
    }

    public function hapus_gallery($id){
        $data = gallery_model::findOrFail($id);
        $data->delete();

        session()->flash('Hapus','Gallery Berhasil Dihapus');
        return redirect('gallery');
    }

    public function edit_gallery($id){
        $data = gallery_model::findOrFail($id);
        return view ('edit_gallery',compact('data'));
    }

    public function edit_gallery_proses(Request $request,$id){
        $photo = $request->file('gambar_gallery');
        $file = uniqid().".".$photo->getClientOriginalExtension();
        $photo->move('data_gambar',$file);

        $data = gallery_model::findOrFail($id);
        $data->gambar_gallery = $file;
        $data->judul_gallery = $request->judul;
        $data->save();

        session()->flash('Pesan','Berhasil Mengubah Gallery');
        return redirect('gallery');
    }

}
