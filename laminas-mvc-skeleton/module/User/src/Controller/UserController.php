<?php

namespace User\Controller;

use User\Model\UserTable;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class UserController extends AbstractActionController {
     // Add this property:
     private $table;

     // Add this constructor:
     public function __construct(UserTable $table)
     {
         $this->table = $table;
     } 




    public function indexAction()
    {
        return new ViewModel([
            'users' => $this->table->fetchAll(),
        ]);
    }

    public function addAction(){

    }

    public function editAction(){


    }

    public function deleteAction(){

    }


}