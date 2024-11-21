<?php

namespace App\Http\Controllers;

use App\Models\berita_model;
use Illuminate\Http\Request;

class berita_controller extends Controller
{
    public function berita(){
        $data = berita_model::all();
        return view ('berita',compact('data'));
    }
    
    public function tambah_berita(){
        return view ('tambah_berita');
    }

    public function tambah_berita_proses(Request $request){
        // $request->validate([
        //     "gambar" => "required",
        //     "judul" => "required",
        //     "deksripsi" => "required"
        // ]);

        $photo = $request->file('gambar');
        $file = uniqid().".".$photo->getClientOriginalExtension();
        $photo->move('data_gambar',$file);

        $data = new berita_model();
        $data->gambar = $file;
        $data->judul = $request->judul;
        $data->deskripsi = $request->deskripsi;
        $data->save();

        session()->flash('Pesan','Berhasil Menambahkan Data');
        return redirect('berita');
    }

    public function hapus_berita($id){
        $data = berita_model::findOrFail($id);
        $data->delete();

        session()->flash('Hapus','Data Berhasil Dihapus');
        return redirect('berita');
    }

    public function edit_berita($id){
        $data = berita_model::findOrFail($id);
        return view ('edit_berita',compact('data'));
    }

    public function edit_berita_proses(Request $request,$id){
        $photo = $request->file('gambar');
        $file = uniqid().".".$photo->getClientOriginalExtension();
        $photo->move('data_gambar',$file);

        $data = berita_model::findOrFail($id);
        $data->gambar = $file;
        $data->judul = $request->judul;
        $data->deskripsi = $request->deskripsi;
        $data->save();

        session()->flash('Pesan','Berhasil Mengubah Data');
        return redirect('berita');
    }

    public function berita_lengkap($id){
        $data = berita_model::findOrFail($id);
        return view ('berita_lengkap',compact('data'));
    }
}