<?php 

App::uses('CakeTime', 'Utility');

class PostsController extends AppController
{
  public $helpers = array('Html', 'Form');

  public function isAuthorized($user) {
    // All registered users can add posts
    if ($this->action === 'add') {
        return true;
    }
    // The owner of a post can edit and delete it
    if (in_array($this->action, array('edit', 'delete'))) {
        $postId = (int) $this->request->params['pass'][0];
        if ($this->Post->isOwnedBy($postId, $user['id'])) {
            return true;
        }
    }
    return parent::isAuthorized($user);
  }
  

  public function index()
  {
    $this->set('posts', $this->Post->find('all'));
  }

  public function view($id = null)
  {
    if (!$id) {
      return $this->redirect(array('action' => 'index'));
    }

    $data_post = $this->Post->findById($id);

    if (!$data_post) {
      return $this->redirect(array('action' => 'index'));
    }
    
    $this->set('post', $data_post);
  }

  public function add()
  {
    if ($this->request->is('post')) {
      $this->request->data['Post']['user_id'] = $this->Auth->user('id');
      if ($this->Post->save($this->request->data)) {

        $this->Flash->success('Postado com sucesso!');
        return $this->redirect(array('action' => 'index'));
      }
      $this->Flash->error('Não foi possivel realizar o post');
    }
  }

  public function edit($id = null)
  {
    if (!$id) {
      return $this->redirect(array('action' => 'index'));
    }

    $data_post = $this->Post->findById($id);

    if (!$data_post) {
      return $this->redirect(array('action' => 'index'));
    }

    if ($this->request->is('post', 'put')) {
      $this->Post->id = $id;
      if($this->Post->save($this->request->data)) {

        $this->Flash->success('Post atualizado com sucesso!');
        return $this->redirect(array('action' => 'index'));
      }
      $this->Flash->error('Post não foi atualizado, tente novamente');
    }

    $this->set('data_post', $data_post);
  }

  public function delete($id = null)
  {
    if (!$id) {
      $this->Flash->error('Post não encontrado!');      
      $this->redirect(array('controller' => 'posts', 'action' => 'index'));
    }
    
    if (!$this->Post->findById($id)) {
      $this->Flash->error('Post não encontrado!');
      return $this->redirect(array('controller' => 'posts','action' => 'index'));
    }

    if ($this->Post->delete($id)) {
      $this->Flash->success('Deletado com sucesso');
      return $this->redirect(array('controller' => 'posts','action' => 'index'));
    }
  }

}