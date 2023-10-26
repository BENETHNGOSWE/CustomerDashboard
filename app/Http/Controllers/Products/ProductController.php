<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    protected $data;

    public function __construct(){
        $this->data = Product::all();
    }

    public function index(){
        return view("products.index", $this->data);
    }

    public function create(){
        return view("products.create");
    }

    public function store(Request $request){

        // $this->validate($request, [
        $request->validate([
            "product_name"=>'required'

        ]);

       
    }
}
