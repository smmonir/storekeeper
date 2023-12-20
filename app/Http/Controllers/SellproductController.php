<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SellproductController extends Controller
{
    public function sellProduct(Request $request, $id=NULL)
    {
        if ($id == null) {
            return response("Please provide a product id", 400);
        }else{
            $result = DB::table('products')
                ->where('id', '=', $id)
                ->decrement('stock');
            
            return response("Productc Stock Updated");
        }
    }
}
