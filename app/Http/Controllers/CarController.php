<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
         $data = Car::where( 'merek', $request->search)->get();
        }else{
         $data = Car::all();
        }
       
        return view('/datamobil', compact("data"));
    }

    public function tambahdata(){
        return view('tambahdata');
    }

    public function beranda(Request $request)
    {
      if($request->has('search')){
         $data = Car::where('sewa', true)->where('merek', $request->search)->get();
      }else{
         $data = Car::where('sewa', true)->get();
      }
      
      return view('/beranda', compact("data"));
  }

  public function disewa(){
   $data = Car::where('sewa', false)->get();
   return view('disewakan', compact("data"));
}


    public function insert(Request $request){
       $data = Car::create($request->all());
       if($request->hasFile('foto')){
         $request->file('foto')->move('fotomobil/', $request->file('foto')->getClientOriginalName());
         $data->foto = $request->file('foto')->getClientOriginalName();
         $data->save();
       }
       return redirect('/datamobil');
    }

    public function tampilkandata($id){
        $data = Car::find($id);

        return view('tampilkandata', compact('data'));

     }

     public function dikembalikanview($id){
      $data = Car::find($id);

      return view('dikembalikan', compact('data'));

   }

     public function tampilkansewa($id){
      $data = Car::find($id);

      return view('sewa', compact('data'));

   }

     public function updatedata(Request $request, $id){
        $data = Car::find($id);
        $data->update($request->all());
        return redirect('/datamobil');
     }


        public function sewa(Request $request, $id){
         $data = Car::find($id);
         $data->update([
            
            'sewa' => false,
            'tanggalawal'=>$request->tanggalawal,
            'tanggalakhir'=>$request->tanggalakhir
      ]);
         return redirect('/disewakan');
        }

        public function dikembalikan(Request $request, $id){
         $data = Car::find($id);
         $data->update([
            'sewa' => true
      ]);
         return redirect('/beranda');
        }
      
   

     public function delete($id){
        $data = Car::find($id);
        $data->delete();

        return redirect('/datamobil');

     }
}
