<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home()
    {
        return view('welcome');
    }
    public function hakkimizda()
    {
        return view('hakkimizda');
    }
    public function iletisim()
    {
        return view('iletisim');
    }
    public function otomasyon()
    {
        return view('otomasyon');
    }

}
