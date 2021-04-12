<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RizkyramaController extends Controller
{
    public function index(){  
        return "Halo saya Rizkyrama,dalam controller RizkyramaController";
        /*$nama = "ACHMAD RIZKY RAMADHANI";

        $pelajaran = ["MVC","Laravel","Pemrograman Lanjut"];

        return view('rizkyrama', compact('nama','pelajaran'));*/
    }
    
    public function create(){
        return "Metode ini nanti digunakan untuk menampilkan form untuk menambah user data";
    }

    public function store(request $request){
        return "metode ini nantinya digunakan untuk menciptakan data user baru";
    }   

    public function show($id){
        return "metode ini nantinya akan digunakan untuk mengambil satu data user dengan id-" . $id;
    }

    public function update(request $request, $id){
        return "metode ini nantinya akan digunakan untuk menambah data user dengan id-" . $id;
    }

    public function destroy($id){
        return "metode ini nantinya digunakan untuk menghapus-" . $id;
    }
}