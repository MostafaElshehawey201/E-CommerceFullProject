<?php

namespace App\Services;

use App\Interfaces\CreateNewDepartmentInterface;

class CreateNewDepartmentService implements CreateNewDepartmentInterface
{
    public $SentDataFromServiceToRepositoryByInterface;
    public function __construct(CreateNewDepartmentInterface $createNewDepartmentInterface)
    {
        $this->SentDataFromServiceToRepositoryByInterface = $createNewDepartmentInterface;
    }

    public function MethodCreateNewDepartmentInterface($request){
        return $this->SentDataFromServiceToRepositoryByInterface->MethodCreateNewDepartmentInterface($request);
    }
}
