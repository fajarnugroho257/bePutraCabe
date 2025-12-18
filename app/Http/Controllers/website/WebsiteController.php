<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\website\Faq;
use App\Models\website\Galery;
use App\Models\website\Order;
use App\Models\website\Pref;
use App\Models\website\Produk;
use App\Models\website\Produk_image;
use App\Models\website\ProdukDetail;
use App\Models\website\Testimoni;
use App\Models\website\VisiMisi;
use App\Models\website\Why;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['title'] = 'home';
        $data['visi'] = Pref::where('pref_name', 'pref_misi')->first();
        $data['rs_misi'] = VisiMisi::get();
        $data['rs_why'] = Why::get();
        $data['rs_test'] = Testimoni::get();
        $data['rs_faq'] = Faq::get();
        $data['cta_title'] = Pref::where('pref_name', 'cta_title')->first();
        $data['cta_desc'] = Pref::where('pref_name', 'cta_desc')->first();
        $data['no_wa'] = Pref::where('pref_name', 'no_wa')->first();
        $data['rs_galery'] = Galery::get();
        $data['rs_produk'] = Produk::get();
        // dd($data);
        return view('website.index', $data);
    }

    public function katalog()
    {
        $data['title'] = 'katalog';
        $data['rs_produk'] = Produk::get();
        return view('website.katalog', $data);
    }

    public function katalog_detail(string $slug)
    {
        $detail = Produk::where('slug', $slug)->first();
        if (empty($detail)) {
            return redirect()->route('home');
        }
        $data['title'] = 'katalog';
        $data['rs_produk'] = Produk::where('id', '<>', $detail->id)->get();
        $data['detail'] = $detail;
        $data['rs_image'] = Produk_image::where('produk_id', $detail->id)->get();
        $data['rs_desc'] = ProdukDetail::where('detail_jenis', 'desc')->where('produk_id', $detail->id)->get();
        $data['rs_detail'] = ProdukDetail::where('detail_jenis', 'detail')->where('produk_id', $detail->id)->get();
        return view('website.katalog_detail', $data);
    }

    public function about()
    {
        $data['title'] = 'about';
        $data['aboutme'] = Pref::where('pref_name', 'aboutme')->first();
        $data['pref_image'] = Pref::where('pref_name', 'pref_image')->first();
        return view('website.about', $data);
    }

    
    public function order()
    {
        $data['title'] = 'order';
        $data['rs_order'] = Order::orderBy('urut')->get();
        return view('website.order', $data);
    }

    public function kontak()
    {
        $data['title'] = 'kontak';
        $data['no_wa'] = Pref::where('pref_name', 'no_wa')->first();
        $data['no_wa_zero'] = Pref::where('pref_name', 'no_wa_zero')->first();
        return view('website.kontak', $data);
    }

    public function artikel()
    {
        $data['title'] = 'artikel';
        return view('website.artikel', $data);
    }

    public function artikel_detail(string $slug)
    {
        $data['title'] = 'artikel';
        return view('website.artikel_detail', $data);
    }

}
