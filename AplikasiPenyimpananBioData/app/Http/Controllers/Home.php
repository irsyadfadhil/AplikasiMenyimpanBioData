<?php

namespace App\Http\Controllers;

use App\Models\biodata;
use App\Models\Biodata as ModelsBiodata;
use App\Models\RiwayatPekerjaan;
use App\Models\RiwayatPelatihan;
use App\Models\RiwayatPendidikan;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ShoppinCart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class Home extends Controller
{

    public function index()
    {
        return view('home');
    }

    public function home_user()
    {
        $email = Auth::user()->email;
        $id = Auth::user()->id;

        if ($email == "admin@gmail.com") {
            $data = biodata::with('User', 'RiwayatPendidikan', 'RiwayatPelatihan', 'RiwayatPekerjaan')->get();
        } else {
            $data = biodata::with('User', 'RiwayatPendidikan', 'RiwayatPelatihan', 'RiwayatPekerjaan')->where('id_user',$id)->get();
        }

        return view('home_user', compact('email','data'));
    }



    public function form_biodata()
    {
        return view('form_biodata');
    }


    public function form_biodata_edit(Request $request)
    {
        $id = Auth::user()->id;
        $email = Auth::user()->email;

        if ($email == "admin@gmail.com") {
            // $data = biodata::where('id_user',$request->id_biodata)->first();
            $data = biodata::first();
        } else {
            $data = biodata::where('id_user',$id)->first();
        }
        return view('form_biodata_edit', compact('data'));
    }

    public function form_store(Request $request)
    {
        $id = Auth::user()->id;
        $id_biodata = Str::uuid()->toString();
        $id_pendidikan_terakhir = Str::uuid()->toString();
        $id_riwayat_pelatihan = Str::uuid()->toString();
        $id_riwayat_pekerjaan = Str::uuid()->toString();

        $user = biodata::create([
            'nama' => $request->nama,
            'id_user' => $id,
            'id_biodata' => $id_biodata,
            'status' => $request->status,
            'posisi_dilamar' => $request->posisi_dilamar,
            'no_ktp' => $request->no_ktp,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'golongan_darah' => $request->golongan_darah,
            'alamat_ktp' => $request->alamat_ktp,
            'alamat_tinggal' => $request->alamat_tinggal,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'orang_terdekat_dihubungi' => $request->orang_terdekat_dihubungi,
            'id_pendidikan_terakhir' => $id_pendidikan_terakhir,
            'id_riwayat_pelatihan' => $id_riwayat_pelatihan,
            'id_riwayat_pekerjaan' => $id_riwayat_pekerjaan,
            'skill' => $request->skill,
            'bersedia_penempatan' => $request->bersedia_penempatan,
            'penghasilan_yang_diharapkan' => $request->penghasilan_yang_diharapkan,
            'tanggal_penandatanganan_biodata' => $request->tanggal_penandatanganan_biodata,
            'nama_penandatanganan_biodata' => $request->nama_penandatanganan_biodata,
        ]);


        $buat_riwayat_pelatihan = RiwayatPelatihan::create([
            'id_riwayat_pelatihan' => $id_riwayat_pelatihan,
            'id_biodata' => $id_biodata,
            'nama_kursus_seminar' => $request->nama_kursus_seminar2,
            'sertifikat' => $request->sertifikat,
            'tahun' => $request->tahun_pelatihan
        ]);

        $buat_riwayat_pelatihan_2 = RiwayatPelatihan::create([
            'id_riwayat_pelatihan' => $id_riwayat_pelatihan,
            'id_biodata' => $id_biodata,
            'nama_kursus_seminar' => $request->nama_kursus_seminar2,
            'sertifikat' => $request->sertifikat2,
            'tahun' => $request->tahun_pelatihan2
        ]);

        $buat_riwayat_pekerjaan_1 = RiwayatPekerjaan::create([
            'id_riwayat_pekerjaan' => $id_riwayat_pekerjaan,
            'id_biodata' => $id_biodata,
            'nama_perusahaan' => $request->nama_perusahaan,
            'posisi_terakhir' => $request->posisi_terakhir,
            'pendapat_terakhir' => $request->pendapat_terakhir,
            'tahun' => $request->tahun_pekerjaan
        ]);

        $buat_riwayat_pekerjaan_2 = RiwayatPekerjaan::create([
            'id_riwayat_pekerjaan' => $id_riwayat_pekerjaan,
            'id_biodata' => $id_biodata,
            'nama_perusahaan' => $request->nama_perusahaan2,
            'posisi_terakhir' => $request->posisi_terakhir2,
            'pendapat_terakhir' => $request->pendapat_terakhir2,
            'tahun' => $request->tahun_pekerjaan2
        ]);

        $buat_riwayat_pendidikan = RiwayatPendidikan::create([
            'id_pendidikan_terakhir' => $id_pendidikan_terakhir,
            'id_biodata' => $id_biodata,
            'jenjang_pendidikan_terakhir' => $request->jenjang_pendidikan_terakhir,
            'nama_institusi_akademi' => $request->nama_institusi_akademi,
            'jurusan' => $request->jurusan,
            'tahun_lulus' => $request->tahun_lulus,
            'ipk' => $request->ipk
        ]);

        $buat_riwayat_pendidikan_2 = RiwayatPendidikan::create([
            'id_pendidikan_terakhir' => $id_pendidikan_terakhir,
            'id_biodata' => $id_biodata,
            'jenjang_pendidikan_terakhir' => $request->jenjang_pendidikan_terakhir2,
            'nama_institusi_akademi' => $request->nama_institusi_akademi2,
            'jurusan' => $request->jurusan2,
            'tahun_lulus' => $request->tahun_lulus2,
            'ipk' => $request->ipk2
        ]);
        return redirect('/home_user');
    }

    public function form_store_edit(Request $request)
    {

        $update_biodata = biodata::update([
            'nama' => $request->nama,
            'posisi_dilamar' => $request->posisi_dilamar,
            'tempat_lahir' => $request->id_biodata,
            'tanggal_lahir' => $request->tanggal_lahir,
        ]);


        return redirect('/home_user');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function actionregister(Request $request)
    {
        $user = User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'active' => 1
        ]);

        Session::flash('message', 'Register Berhasil. Akun Anda sudah Aktif silahkan Login menggunakan username dan password.');
        return redirect('/login');
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('/home_user');
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/login');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }


    public function hapus_biodata(Request $request)
    {
        // return $request->id_biodata;
        $hapus_biodata = Biodata::where('id_biodata', $request->id_biodata)->truncate();
        $hapus_RiwayatPekerjaan = RiwayatPekerjaan::where('id_biodata', $request->id_biodata)->truncate();
        $hapus_RiwayatPendidikan = RiwayatPendidikan::where('id_biodata', $request->id_biodata)->truncate();
        $hapus_RiwayatPelatihan = RiwayatPelatihan::where('id_biodata', $request->id_biodata)->truncate();
        return redirect('/home_user');
    }
}
