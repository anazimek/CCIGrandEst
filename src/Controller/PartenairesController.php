<?php


namespace App\Controller;


class PartenairesController extends AppController
{

    public function index()
    {

        $this->loadModel('Users');
        $users = $this->paginate($this->Users);
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }
    public function view($id = null)
    {
        $this->loadModel('Users');
        $user = $this->Users->get($id, [
            'contain' => ['Ads']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
        debug($id);
    }
}