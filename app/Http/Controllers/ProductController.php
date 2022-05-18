<?php

namespace App\Http\Controllers;

use App\Contracts\ProductInterface;
use App\Http\Resources\ProductResource;
use App\Models\Group;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 *
 */
class ProductController extends Controller implements ProductInterface
{
    /**
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $groups = Group::where('id_parent',0)
            ->with('childrenProducts')
            ->get();
        return view('products.product',compact('groups'));
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function products(Request $request): JsonResponse
    {
        $products = Group::where('id_parent',$request->id ? $request->id : 0)
            ->orWhere(function($query) use ($request) {
                $query
                    ->where('id_parent', '>',1)
                    ->where('id', '=', $request->id);
            })
            ->with('childrenProducts','products')
            ->get();
        return response()->json(ProductResource::collection($products));
    }
    public function test() {
        $array = [
            [399, 9160, 144, 3230, 407, 8875, 1597, 9835],
            [2093, 3279, 21, 9038, 918, 9238, 2592, 7467],
            [3531, 1597, 3225, 153, 9970, 2937, 8, 807],
            [7010, 662, 6005, 4181, 3, 4606, 5, 3980],
            [6367, 2098, 89, 13, 337, 9196, 9950, 5424],
            [7204, 9393, 7149, 8, 89, 6765, 8579, 55],
            [1597, 4360, 8625, 34, 4409, 8034, 2584, 2],
            [920, 3172, 2400, 2326, 3413, 4756, 6453, 8],
            [4914, 21, 4923, 4012, 7960, 2254, 4448, 1]];

        foreach($array as $elem) {
            $one = 0;
            $two = 1;
            $arr = [];
            for ($i = 1; $i <= 10; $i++) {
                $current = $one + $two;
                $one = $two;
                $two = $current;
                $arr[] = $current;
            }
        }
        var_dump($arr);

    }

}
