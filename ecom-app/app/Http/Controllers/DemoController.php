<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
    function DemoAction(Request $request){

//         $results = DB::table('brands')
//             ->where('id','=',$request->id)
// //            ->increment('price',5);
// //            ->decrement('price',7);
//             ->delete();
//         return $results;
//     }

        // $product=DB::table('products')->pluck('title');
        // dd($product);
    }
}
