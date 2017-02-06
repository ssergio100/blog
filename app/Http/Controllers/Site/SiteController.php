<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index()
    {
        return 'Index';
    }
    public function contato()
    {
        return 'Contato';
    }
    public function categoria($id)
    {
        return 'Categoria '.$id;
    }

}
