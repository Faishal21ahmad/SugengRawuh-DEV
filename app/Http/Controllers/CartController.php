<?php

namespace App\Http\Controllers;

use App\Models\MenuRM;
use App\Models\Pesanan;
use Illuminate\Support\Str;

use App\Models\DetailPesanan;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


class CartController extends Controller
{
    public function addcart($id)
    {
        session_start();
        $menu = MenuRM::find($id);
        $cart = session()->get('cart');
        if ($cart === null) {
            $h = false;
        } else {
            $h = array_key_exists($id, session('cart'));
        }

        if ($h === true) {
            $cart[$id] = [
                'menuid' => $menu->menu_id,
                'name' => $menu->menu,
                'jumlah' => $cart[$id]['jumlah'] + 1,
                'harga' => $menu->harga,
                'img' => $menu->img
            ];
        } else {
            $cart[$id] = [
                'menuid' => $menu->menu_id,
                'name' => $menu->menu,
                'jumlah' => 1,
                'harga' => $menu->harga,
                'img' => $menu->img
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back();
    }

    public function pluscart($id)
    {
        $menu = MenuRM::find($id);
        $cart = session()->get('cart');
        $cart[$id] = [
            'menuid' => $menu->menu_id,
            'name' => $menu->menu,
            'jumlah' => $cart[$id]["jumlah"] + 1,
            'harga' => $menu->harga,
            'img' => $menu->img
        ];
        session()->put('cart', $cart);
        return redirect()->back();
    }

    public function minuscart($id)
    {
        $menu = MenuRM::find($id);
        $cart = session()->get('cart');
        $cart[$id] = [
            'menuid' => $menu->menu_id,
            'name' => $menu->menu,
            'jumlah' => $cart[$id]["jumlah"] - 1,
            'harga' => $menu->harga,
            'img' => $menu->img
        ];
        if ($cart[$id]["jumlah"] <= 0) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        } else {
            session()->put('cart', $cart);
        }
        return redirect()->back();
    }

    public function store(Request $request)
    {
        $codeps = Str::random(10);
        $pesan = $request->validate([
            'adminrm_id' => '',
            'meja_id' => '',
            'jenispembayaran_id' => 'required',
            'codepesan' => '',
            'namapemesan' => 'required',
            'totalharga' => '',
            'statuspesanan' => ''
        ]);
        $pesan['codepesan'] = $codeps;
        Pesanan::create($pesan);
        $detail = session()->get('cart');
        foreach ($detail as $id => $item) {
            $detailpesan = [
                'menu_id' => $id,
                'jumlah' => $item['jumlah'],
                'subharga' => $item['harga'] * $item['jumlah']
            ];
            $detailpesan['codepesan'] = $codeps;
            DetailPesanan::create($detailpesan);
        };

        return redirect('/success');
    }

    public function success()
    {
        session()->flush('cart');
        return view('pesanan.selesai');
    }
}
