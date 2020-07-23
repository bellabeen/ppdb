<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Siswa;
class SiswaController extends Controller
{
    //index menampilkan semua nama
    public function index(){
        $siswa = \App\Siswa::all();

        if(count($siswa) > 0){ //
            $res['message'] = "Success!";
            $res['values'] = $siswa;
            return response($res);
        } else{
            $res['message'] = "Empty!";
            return response($res);
        }
    }

    //menampilkan nama sesuai id
    public function show($id){
        $siswa = \App\Siswa::where('id',$id)->get();

        if(count($siswa) > 0){ //mengecek apakah data kosong atau tidak
            $res['message'] = "Success!";
            $res['values'] = $siswa;
            return response($res);
        }
        else{
            $res['message'] = "Failed!";
            return response($res);
        }
    }

    //menyimpan data
    public function store(Request $request){
        $nomor_pendaftaran = $request->input('nomor_pendaftaran');
        $nama = $request->input('nama');
        $jenis_kelamin = $request->input('jenis_kelamin');
        $tempat_lahir = $request->input('tempat_lahir');
        $tanggal_lahir = $request->input('tanggal_lahir');
        $alamat = $request->input('alamat');
        $kelurahan = $request->input('kelurahan');
        $kecamatan = $request->input('kecamatan');
        $kota = $request->input('kota');
        $provinsi = $request->input('provinsi');
        $nama_ortu = $request->input('nama_ortu');
        $nomor_telpon = $request->input('nomor_telpon');
        $nomor_nik = $request->input('nomor_nik');
        $nomor_kk = $request->input('nomor_kk');
        $foto = $request->input('foto');
        
        if($request->hasFile('foto')){
            $foto = $request->file('foto');
            $ext = $foto->getClientOriginalExtension();
            $siswa = new \App\Siswa();
            if ($request->file('foto')->isValid()) {
                $foto_name = date('YmdHis'). ".$ext";
                $upload_path = 'image/';
                $request->file('foto')->move($upload_path, $foto_name);
                $input['foto'] = $foto_name;
                $siswa->foto = $foto_name;
            }
        }

        $siswa = new \App\Siswa();
        $siswa->nomor_pendaftaran = $nomor_pendaftaran;
        $siswa->nama = $nama;
        $siswa->jenis_kelamin = $jenis_kelamin;
        $siswa->tempat_lahir = $tempat_lahir;
        $siswa->tanggal_lahir = $tanggal_lahir;
        $siswa->alamat = $alamat;
        $siswa->kelurahan = $kelurahan;
        $siswa->kecamatan = $kecamatan;
        $siswa->kota =  $kota;
        $siswa->provinsi = $provinsi;
        $siswa->nama_ortu =  $nama_ortu;
        $siswa->nomor_telpon = $nomor_telpon;
        $siswa->nomor_nik = $nomor_nik;
        $siswa->nomor_kk = $nomor_kk;
        $siswa->foto = $foto_name;
    
        if($siswa->save()){
            $res['message'] = "Success!";
            $res['value'] = "$siswa";
            return response($res);
        }
    }
    
    //edit data
    public function update(Request $request, $id)
    {
        
        $nomor_pendaftaran = $request->input('nomor_pendaftaran');
        $nama = $request->input('nama');
        $jenis_kelamin = $request->input('jenis_kelamin');
        $tempat_lahir = $request->input('tempat_lahir');
        $tanggal_lahir = $request->input('tanggal_lahir');
        $alamat = $request->input('alamat');
        $kelurahan = $request->input('kelurahan');
        $kecamatan = $request->input('kecamatan');
        $kota = $request->input('kota');
        $provinsi = $request->input('provinsi');
        $nama_ortu = $request->input('nama_ortu');
        $nomor_telpon = $request->input('nomor_telpon');
        $nomor_nik = $request->input('nomor_nik');
        $nomor_kk = $request->input('nomor_kk');

        $siswa = Siswa::get();
        $siswa = \App\Siswa::where('id',$id)->first();
        $siswa->nomor_pendaftaran = $nomor_pendaftaran;
        $siswa->nama = $nama;
        $siswa->jenis_kelamin = $jenis_kelamin;
        $siswa->tempat_lahir = $tempat_lahir;
        $siswa->tanggal_lahir = $tanggal_lahir;
        $siswa->alamat = $alamat;
        $siswa->kelurahan = $kelurahan;
        $siswa->kecamatan = $kecamatan;
        $siswa->kota =  $kota;
        $siswa->provinsi = $provinsi;
        $siswa->nama_ortu =  $nama_ortu;
        $siswa->nomor_telpon = $nomor_telpon;
        $siswa->nomor_nik = $nomor_nik;
        $siswa->nomor_kk = $nomor_kk;

        if($siswa->save()){
            $res['message'] = "Success!";
            return response($res);
        }
        else{
            $res['message'] = "Failed!";
            return response($res);
        }
    }

    //hapus data
    public function destroy($id)
    {
        $siswa = \App\Siswa::where('id',$id)->first();

        if($siswa->delete()){
            $res['message'] = "Success!";
            return response($res);
        }
        else{
            $res['message'] = "Failed!";
            return response($res);
        }
    }
}
