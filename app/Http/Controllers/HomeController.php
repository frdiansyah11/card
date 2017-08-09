<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Models\Vehicle;

class HomeController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::all();
        return view('home', ['vehicles' => $vehicles]);
    }

    public function show($id)
    {
    	 /*$nilai = 'ini adalah linknya ' . $id;
    	 //$user = 'nicoy11';
        //$unescaped = "<script> alert('x!')</script>";

        //insert
        // DB::table('tbl_user')->insert([
        //     ['username' => 'testing', 'password' => 'testing','email' => 'testing@xyz.com']
        // ]);

        //update
        // DB::table('tbl_user')->where('username','testing')
        //         ->update(['username' => 'damn', 'password' => 'damn','email' => 'damn@xyz.com']);

        //delete
        //DB::table('tbl_user')->where('username','damn')->delete();

        */
        //$users = DB::table('tbl_user')->where('username','like','%a%')->get();

        $vehicle = Vehicle::find($id);

        if (!$vehicle) {
          abort(404);
        }
    	  return view('single',['vehicle' => $vehicle]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
      $this->validate($request,[
        'nomor' => 'required|max:12',
        'merk'  => 'required|max:10',
      ]);

      //insert biasa
      $vehicles = new Vehicle;
      $vehicles->nomor = $request->nomor;
      $vehicles->merk = $request->merk;
      $vehicles->jenis = $request->jenis;
      $vehicles->save();

      return redirect('home');

      //insert mass assignment
      /*Vehicle::create([
        'nomor' => 'B887UTZ',
        'merk' => 'Formula 2',
        'jenis' => 'Mobil'
      ]);*/
    }

    public function edit($id)
    {
      $vehicle = Vehicle::find($id);

      if (!$vehicle) {
        abort(404);
      }
      return view('edit',['vehicle' => $vehicle]);
    }

    public function update(Request $request, $id)
    {
      //update biasa
      $vehicle = Vehicle::find($id);
      $vehicle->nomor = $request->nomor;
      $vehicle->merk = $request->merk;
      $vehicle->jenis = $request->jenis;
      $vehicle->save();
      return redirect('home/' . $id);

      //update mass assignment
      /*Vehicle::where('merk','Ducati')->update([
        'merk' => 'Honda Revo'
      ]);*/
    }

    public function destroy($id)
    {
      //delete
      $vehicles = Vehicle::find($id);
      $vehicles->delete();
      return redirect('home');

      //delete kedua
      //Vehicle::destroy([1 , 2]);

      //soft delete
      /*$vehicles = Vehicle::find(4);
      $vehicles->delete();*/

      //restore soft delete
      //Vehicle::withTrashed()->where('id', 4)->restore();
    }

}
