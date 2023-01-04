<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Muebles;
use App\Maderas;
use Illuminate\Support\Facades\Storage;

use PDF;

class MueblesController extends Controller
{
    public function index(){
        $muebles=Muebles::all();
        return view('welcome')->with('muebles',$muebles);
    }

    public function guardaMueble(Request $request)
    {
        if(isset($request->id))
            $mueble=Muebles::find($request->id);
        else
            $mueble = new Muebles();
        
        $mueble->nombre = $request->nombre;
        $mueble->precio = $request->precio;
        $mueble->stock = $request->stock;
        $mueble->madera_id = $request->tipo;
        $path = $request->file('imagen')->store('public');
        $file = basename($path);
        $mueble->foto = $file;
        $mueble->descripcion = $request->descripcion;
        

        $mueble->save();
        return redirect()->back()->with('success','Mueble cargado con exito');
    }

    public function carga()
    {
        return view('/layouts/cargam');
    }

    public function cargain()
    {
        return view('/layouts/muestram');
    }

    public function verMuebles()
    {   
        $muebles=Muebles::all();
        return view('layouts/muestram')->with('muebles',$muebles);
    }

    public function editar($id=null)
    {
        if (!is_null($id)) {
            $mueble=Muebles::find($id);
            return view('layouts/editamuebles')->with('mueble',$mueble);
        }
        else
            return redirect('/ver-muebles');
    }

    public function edit(Request $request, $id){
        $mueble=Muebles::findOrFail($id);
        $mueble->nombre = $request->nombre;
        $mueble->precio = $request->precio;
        $mueble->stock = $request->stock;
        $mueble->madera_id = $request->tipo;
        if($request->hasFile('imagen')) {
            $mueble=Muebles::findOrFail($id);
            Storage::delete('public'.$mueble->foto);
            $path = $request->file('imagen')->store('public');
            $file = basename($path);
            $mueble->foto = $file;
        }
        $mueble->descripcion = $request->descripcion;

        $mueble->save();
        return redirect('/ver-muebles');
    }

    public function eliminar($id)
    {
        $mueble=Muebles::find($id);
        $mueble->delete();
        return redirect('/ver-muebles');
    }

    public function PruebaPDF(){
        $cart = session()->get('cart');
        $pdf = PDF::loadView('layouts/PDF', compact('cart'));
        return $pdf->stream('factura.pdf', array('Attachment'=>0));    
    }

    public function muebledetalle($id){
        return Muebles::findOrFail($id);
    }

    public function carrito(){
        return view('layouts/carrito');
    }

    public function addcart(Muebles $mueble){
        $cart = session()->get('cart');
        if (!$cart) {
            $cart = [$mueble->id => $this->datosSesion($mueble)];
            session()->put('cart', $cart);
            return redirect('/cart');
        }

        if (isset($cart[$mueble->id])) {
            $cart[$mueble->id]['cantidad']++;
            session()->put('cart',$cart);
            return redirect('/cart');
        }

        $cart[$mueble->id] = $this->datosSesion($mueble);
        session()->put('cart', $cart);
        return redirect('/cart');
    }

    public function eliminarcart($id){
        $cart = session()->get('cart');

        if(isset($cart[$id])){
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        return redirect('/cart');
    }

    protected function datosSesion(Muebles $mueble){
        return [
            'name' => $mueble->nombre,
            'cantidad' => 1,
            'precio' => $mueble->precio,
            'imagen' => $mueble->foto,
        ];
    }

    public function cambiarcantidad(Request $request, Muebles $mueble){
        $cart = session()->get('cart');
        if ($request->change_to == 'down') {
            if(isset($cart[$mueble->id])){
                if ($cart[$mueble->id]['cantidad'] > 1) {
                    $cart[$mueble->id]['cantidad']--;
                    session()->put('cart', $cart);
                    return redirect('/cart');
                }else {
                    return $this->eliminarcart($mueble->id);
                }
            }
        }else if ($request->change_to == 'up'){
            if(isset($cart[$mueble->id])){
                $cart[$mueble->id]['cantidad']++;
                session()->put('cart', $cart);
                return redirect('/cart');
            }
        }
        return back();
    }
}
