<?php


namespace App\Controller;

use App\Controller\AppController;

class PartenairesController extends AppController
{

    public function index()
    {

        $this->loadModel('Users');

        $users = $this->paginate($this->Users->findAllByIsMember(1));
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    public function view($companyName)
    {
        echo 'buuuuugggg';

        $this->loadModel('Users');
        $user = $this->Users->findAllByCompanyName($companyName)->toArray();
        debug($user);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }
}