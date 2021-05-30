<?php

namespace App\Http\Controllers;

use App\Hasta;
use Illuminate\Http\Request;

class HastaController extends Controller
{
    public function index()
    {
        $hastalar  = Hasta::paginate(8);
        return view('hasta.index',['hastalar'=>$hastalar]);
    }
    public function show($hasta)
    {
        $hasta = Hasta::find($hasta);
        return view('hasta.show', ['hasta'=>$hasta]);
    }
    public function create()
    {
        return view('hasta.create');
    }
    public function store()
    {
        Hasta::create($this->validateHasta());
        return redirect('/otomasyon/hastalar');
    }
    public function edit(Hasta $hasta)
    {
        return view('hasta.edit',compact('hasta'));
    }
    public function update(Hasta $hasta)
    {
        $hasta->update($this->validateHasta());
        return redirect($hasta->path());
    }
    public function destroy(Hasta $hasta)
    {
        $hasta->delete();
        return redirect('/otomasyon/hastalar');
    }
    protected function validateHasta()
    {
        return request()->validate([
            'hastaTC' => 'required',
            'hastaTel' => 'required',
            'hastaAd' => 'required',
            'hastaSad' => 'required',
            'dogumTarihi' => 'required',
            'dogumYeri' => 'required',
            'cinsiyet' => 'required',
            'medeniHal' => 'required',
            'adres' => 'required'

        ]);
    }
    public function search(Request $request){

        $search = $request->input('search');
        $hastalar = Hasta::query()
            ->where('hastaTC', 'LIKE', "%{$search}%")
            ->orWhere('hastaAd', 'LIKE', "%{$search}%")
            ->orWhere('hastaSad', 'LIKE', "%{$search}%")
            ->get();
        return view('hasta.search', compact('hastalar'),compact('search'))
            ->with('query',\request('search'));
    }
}
