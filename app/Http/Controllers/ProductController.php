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


}
