<?php

namespace App\Http\Controllers;

use App\Poliklinik;
use App\Randevu;
use Illuminate\Http\Request;

class RandevuController extends Controller
{
    public function index()
    {
        $randevular  = Randevu::all();
        return view('randevu.index',['randevular'=>$randevular])
            ->with('poliklinikler',Poliklinik::all());
    }
    public function show(Randevu $randevu)
    {
//        $randevular = Randevu::all()->where('randevuID', '=', $randevu->id);
        $randevular = Randevu::with(['poliklinik'=>function($q) {
            $q->select('poliklinikAd','id');
        }])->find($randevu);

//      return response()->json($randevular);
        return view('randevu.show', ['randevu'=>$randevu]);
    }
    public function create()
    {
        return view('randevu.create')
            ->with('poliklinikler',Poliklinik::all());
    }
    public function store()
    {
        Randevu::create($this->validateRandevu());
        return redirect('/otomasyon/randevular');
    }
    public function edit(Randevu $randevu)
    {
        return view('randevu.edit',compact('randevu'))
            ->with('poliklinikler',Poliklinik::all());
    }
    public function update(Randevu $randevu)
    {
        $randevu->update($this->validateRandevu());
        return redirect($randevu->path());
    }
    public function destroy(Randevu $randevu)
    {
        $randevu->delete();
        return redirect('/otomasyon/randevular');
    }
    protected function validateRandevu()
    {
        return request()->validate([
            'hastaTC' => 'required',
            'hastaAd' => 'required',
            'hastaSad' => 'required',
            'poliklinikID' => 'required',
            'randevuTarihi' => 'required',
            'saat' => 'required'

        ]);
    }
    public function search(Request $request){

        $search = $request->input('search');
        $randevular = Randevu::query()
            ->where('hastaAd', 'LIKE', "%{$search}%")
            ->get();
        return view('randevu.search', compact('randevular'),compact('search'))
            ->with('query',\request('search'));
    }
}
