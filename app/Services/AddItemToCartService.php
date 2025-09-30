<?php

namespace App\Services;

use App\Interfaces\AddItemsToCartInterface;

class AddItemToCartService implements AddItemsToCartInterface
{
    public $sentDataFromServiceToRepositoryByInterface;
    public function __construct(AddItemsToCartInterface $addItemsToCartInterface)
    {
        $this->sentDataFromServiceToRepositoryByInterface = $addItemsToCartInterface;
    }

    public function MethodAddItemsToCart($request , $product_id){
       return  $this->sentDataFromServiceToRepositoryByInterface->MethodAddItemsToCart($request , $product_id);
    }
}
