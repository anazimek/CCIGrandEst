<?php


namespace App\Controller;

use App\Controller\AppController;

class PartenairesController extends AppController
{

    public function index()
    {

        $this->loadModel('Users');

        $users = $this->Users->findAllByIsMember(1);
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    public function view($companyName)
    {
        $companyName = str_replace("-", " ", $companyName);
        $this->loadModel('Users');
        $user = $this->Users->findByCompanyName($companyName)->toArray();

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }
    public function add() {

    }
}