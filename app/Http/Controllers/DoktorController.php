<?php

namespace App\Http\Controllers;

use App\Doktor;
use Illuminate\Http\Request;

class DoktorController extends Controller
{
    public function index()
    {
        $doktorlar  = Doktor::paginate(8);
        return view('doktor.index',['doktorlar'=>$doktorlar]);
    }
    public function show($doktor)
    {
        $doktor = Doktor::find($doktor);
        return view('doktor.show', ['doktor'=>$doktor]);
    }
    public function create()
    {
        return view('doktor.create');
    }
    public function store()
    {
        Doktor::create($this->validatedoktor());
        return redirect('/otomasyon/doktorlar');
    }
    public function edit(Doktor $doktor)
    {
        return view('doktor.edit',compact('doktor'));
    }
    public function update(Doktor $doktor)
    {
        $doktor->update($this->validatedoktor());
        return redirect($doktor->path());
    }
    public function destroy(Doktor $doktor)
    {
        $doktor->delete();
        return redirect('/otomasyon/doktorlar');
    }
    protected function validatedoktor()
    {
        return request()->validate([
            'doktorTc' => 'required',
            'doktorTel' => 'required',
            'doktorAd' => 'required',
            'doktorSad' => 'required',
            'doktorAdres' => 'required',
            'email' => 'required'

        ]);
    }

}
