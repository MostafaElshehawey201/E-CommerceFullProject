<?php

namespace App\Services;

use App\Interfaces\CreateNewProductInterface;

class CreateNewProductService implements CreateNewProductInterface
{
    protected $PropertyToSentRequestFromServiceToRepositoryByInterface;
    public function __construct(CreateNewProductInterface $createNewProductInterface)
    {
        $this->PropertyToSentRequestFromServiceToRepositoryByInterface = $createNewProductInterface;
    }

    public function MethodCreateNewProductInterface($request){
        $this->PropertyToSentRequestFromServiceToRepositoryByInterface->MethodCreateNewProductInterface($request);
    }
}
