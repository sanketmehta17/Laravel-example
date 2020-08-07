<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name'=> $this->name,
            'description'=>$this->detail,
            'price'=>$this->price,
            'stock'=>$this->stock == 0 ? 'Out of stock!' : $this->stock,
            'discount'=>$this->discount,
            'totalPrice'=>(1-(($this->discount)/100))*$this->price,
            'ratings'=>$this->reviews->count()>0 ? $this->reviews->sum('star')/$this->reviews->count() : 'No ratings yet!',
            'href'=>[
                'reviews'=>route('reviews.index',$this->id)
            ],
        ];
    }
}
