<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use App\Paslon;
use App\User;

class AdminController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

  public function listMahasiswa()
  {
      $mahasiswa = User::all();
      return view('admin/listMahasiswa', compact('mahasiswa'));
  }

  public function listPaslon()
  {
      $paslon = Paslon::all();
      return view('admin/listPaslon', compact('paslon'));
  }

  public function tambahMahasiswa()
  {
      return view('admin/tambahMahasiswa');
  }

  public function tambahPaslon()
  {
      return view('admin/tambahPaslon');
  }

  public function addPaslon(Request $request)
  {
    	$this->validate($request,[
            'namaketua'=>'required',
            'namawakilketua'=>'required',
            'angkatanketua'=>'required',
            'angkatanwakilketua'=>'required',
            'nomerurut'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

    	$paslon = new Paslon;
        $paslon->namaketua = $request->input('namaketua');
        $paslon->namawakilketua = $request->input('namawakilketua');
        $paslon->angkatanketua = $request->input('angkatanketua');
        $paslon->angkatanwakilketua = $request->input('angkatanwakilketua');
        $paslon->nomerurut = $request->input('nomerurut');
        // if($request->hasFile('image')){
        //   $name = Storage::disk('local')->put('paslon', $request->image);
        //   $paslon->image = $name;
        // }
        if ($request->hasFile('image'))
         {
           $file = $request->file('image');
           $name = $file->getClientOriginalName();
           $paslon->image = $name;
           $file->move(public_path().'paslon', $name);
         }
        $paslon->save();
  	    return redirect('/admin/listPaslon');
  }

  public function addMahasiswa(Request $request)
  {
    $this->validate($request, array(
              'name'          => 'required|max:100',
              'nim'         => 'required|unique:users',
              'angkatan'     => 'required',
              'admin'        => 'required',
              'password'        => 'required',
          ));
      $user   = User::create([
              'name'           => $request->input('name'),
              'nim'          => $request->input('nim'),
              'angkatan'      => $request->input('angkatan'),
              'admin'        => $request->input('admin'),
              'password'       => Hash::make($request['password']),
          ]);
      return redirect('/admin/listMahasiswa');
  }

  public function deletePaslon(Request $request)
    {
        $this->validate($request,[
            'id'=>'required',
        ]);
        // $id = Crypt::decrypt($product_id);
        $paslon = Paslon::find($request->input('id'));
        $exist = Storage::disk('local')->exists('paslon',$paslon->image);
        if($exist){
            Storage::disk('local')->delete('paslon',$paslon->image);
        }
        $paslon->delete();
      	return redirect('/admin/listPaslon');
    }

  public function hasilPerolehan()
  {
      return view('admin/hasilPerolehan');
  }
}
