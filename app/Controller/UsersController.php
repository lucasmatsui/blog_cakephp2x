<?php

class UsersController extends AppController {
    public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
        $this->Auth->allow('add', 'logout');
    }
    
    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect(array('controller' => 'posts', 'action' => 'index'));
            }
            $this->Flash->error(__('Usuario ou senha invalidos, tente novamente!'));
        }
    }
    
    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('Conta criada com sucesso!'));
                return $this->redirect(array('controller' => 'users', 'action' => 'login'));
            }
            $this->Flash->error(
                __('Algo deu errado, tente novamente!')
            );
        }
    }

}