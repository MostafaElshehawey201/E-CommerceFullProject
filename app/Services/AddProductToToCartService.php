<?php

namespace App\Services;

use App\Interfaces\AddProductToCartInterface;

class AddProductToToCartService implements AddProductToCartInterface
{
    protected $SentDataFromServiceToRepositoryByInterface;
    public function __construct(AddProductToCartInterface $addProductToCartInterface)
    {
        $this->SentDataFromServiceToRepositoryByInterface = $addProductToCartInterface ;
    }

    public function MethodAddProductToCartInterface($request, $product_id){
        return $this->SentDataFromServiceToRepositoryByInterface->MethodAddProductToCartInterface($request , $product_id);
    }
}
