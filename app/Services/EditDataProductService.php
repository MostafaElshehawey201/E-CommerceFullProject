<?php

namespace App\Services;

use App\Interfaces\EditDataProductInterface;

class EditDataProductService implements EditDataProductInterface
{
    protected $sentDataProductFromServiceToRepositoryByInterface;
  
    public function __construct(EditDataProductInterface $editDataProductInterface)
    {
        $this->sentDataProductFromServiceToRepositoryByInterface = $editDataProductInterface ;
    }

    public function MethodEditDataProductInterface($request , $Product_id){
        $this->sentDataProductFromServiceToRepositoryByInterface->MethodEditDataProductInterface($request , $Product_id);
    }
}
