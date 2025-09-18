<?php

namespace App\Services;

use App\Interfaces\ProfileDataUserInterface;

class ProfileDataUserService implements ProfileDataUserInterface
{
    public $DataSentFromServiceToRepositoryByInterface;
    public function __construct(ProfileDataUserInterface $profileDataUserInterface)
    {
        $this->DataSentFromServiceToRepositoryByInterface = $profileDataUserInterface;
    }

    public function EditDataUserInterface($request , $user_id){
        return $this->DataSentFromServiceToRepositoryByInterface->EditDataUserInterface($request , $user_id);
    }
}
