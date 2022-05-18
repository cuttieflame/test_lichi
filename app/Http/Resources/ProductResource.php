<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JetBrains\PhpStorm\ArrayShape;

/**
 *
 */
class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    #[ArrayShape(['id' => "mixed", 'id_parent' => "mixed", 'name' => "mixed", 'childrenProducts' => "array", 'products' => "mixed"])] public function toArray($request): array
    {
//        function func($arr)
//        {
//            $sum = [];
//                foreach ($arr->childrenProducts as $elem) {
//                    if ($elem->groups) {
//                        $sum[] = $elem->products->name;
//                        if($elem->groups)
//                        func($elem->groups);
//                    }
//                }
//            return $sum;
//        }
//        $a = func($this);
//         dd($a);
        $arr = [];
        foreach ($this->childrenProducts as $elem) {
            if ($elem->products) {
                foreach($elem->products as $prod1) {
                    $arr[] = $prod1->name;
                }
            }
            if($elem->childrenProducts) {
                foreach ($elem->childrenProducts as $elem1) {
                    foreach($elem1->products as $prod2) {
                        $arr[] = $prod2->name;
                    }
                }
            }
        }
        return [
            'id'=>$this->id,
            'id_parent'=>$this->id_parent,
            'name'=>$this->name,
            'childrenProducts'=>$arr,
            'products'=>$this->products,
        ];
    }
}
