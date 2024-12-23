<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class SiteController extends Controller
{
   public function index() {
    $produtos = Produto::all();

    return view("site.home", compact("produtos"));
   }

   public function details($id) {
      $produto = Produto::where('id', $id)->first();

      return view("site.details", compact("produto"));
   }
}
