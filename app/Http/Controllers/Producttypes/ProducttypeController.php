<?php

namespace App\Http\Controllers\Producttypes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductType;

class ProducttypeController extends Controller
{
    protected $data;
    public function __construct(){
        $this->data = ProductType::all();
    }

    public function index(){
        return view("producttypes.list", $this->data);
    }

    public function create(){
        return view("producttypes.create");
    }

    public function store(Request $request){

        $products=$request->input("product");
        $producttype=$request->input("product");

        foreach($products as $product) {
            $producttype = ProductType::create([
                "product_name"=> $product,
            ]);
        }
        return redirect()->route('producttypes.index')->with("success","");
    }
}
