<?php

class UsersController extends AppController {
    public $helpers = array('Html', 'Form');


    public function beforeFilter() {             
        parent::beforeFilter();
        $this->Auth->allow('add', 'logout');
    }
    
    public function login() {

        if (!$this->request->is('post')) {
            return false;
        }

        if (!$this->Auth->login()) {
            return $this->Flash->error(__('Usuario ou senha invalidos, tente novamente!'));
        }
        
        $this->redirect(array('controller' => 'posts', 'action' => 'index'));
    }
    
    public function logout() {
        $this->redirect($this->Auth->logout());
    }

    public function add() {

        if(!$this->request->is('post')) {
            return false;
        }

        if($this->User->findAllByUsername($this->request->data['User']['username'])) {
            return $this->Flash->error(__('Esse usuario já existe'));
        }
        
        if (!$this->User->save($this->request->data)) {
            return $this->Flash->error(__('Preencha os campos corretamente!')); 
        }

        $this->Flash->success(__('Conta criada com sucesso!'));
        $this->redirect(array('controller' => 'users', 'action' => 'login'));  
    }
}