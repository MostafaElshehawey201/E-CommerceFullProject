<?php

namespace App\Services;

use App\Interfaces\EditDataCategoryDataInterface;

class EditDataCategoryService implements EditDataCategoryDataInterface
{
    public $SentDataFromServiceToRepositoryByInterface;
    public function __construct(EditDataCategoryDataInterface $editDataCategoryDataInterface)
    {
        $this->SentDataFromServiceToRepositoryByInterface = $editDataCategoryDataInterface;
    }

    public function MethodEditDataCategoryInterface($request , $category_id){
        return $this->SentDataFromServiceToRepositoryByInterface->MethodEditDataCategoryInterface($request , $category_id);
    }
}
