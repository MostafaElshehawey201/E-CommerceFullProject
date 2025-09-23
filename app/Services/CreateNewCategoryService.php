<?php

namespace App\Services;

use App\Interfaces\CreateNewCategoryInterface;

class CreateNewCategoryService implements CreateNewCategoryInterface
{
    public $SentDataFromServiceToRepository;
    public function __construct(CreateNewCategoryInterface $createNewCategoryInterface)
    {
        $this->SentDataFromServiceToRepository = $createNewCategoryInterface ;
    }

    public function MethodCreateNewCategory($request){
        return $this->SentDataFromServiceToRepository->MethodCreateNewCategory($request);
    }
    
}
