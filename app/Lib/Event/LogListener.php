<?php
App::uses('ConnectionManager', 'Model');
App::uses('CakeEventListener', 'Event');

class LogListener implements CakeEventListener
{
  public function implementedEvents()
  {
    return array(
      'Log.User.afterSave' => 'RegisterLogUserAfterSave',
      'Log.Post.afterSaveCreate' => 'RegisterLogPostAfterSaveCreate',
      'Log.Post.afterSaveUpdate' => 'RegisterLogPostAfterSaveUpdate',
      'Log.Post.beforeDelete' => 'RegisterLogPostBeforeDelete'
    );
  }

  private function saveActionOnTableLogs($id_user, $action_user) 
  {
    $ip = $_SERVER['REMOTE_ADDR'];

    $db = ConnectionManager::getDataSource('default');
    $sql = "INSERT INTO logs SET id_user = ?, action_user = ?, ip = ?";
    $db->query($sql, array($id_user, $action_user, $ip));
  }

  public function RegisterLogUserAfterSave(CakeEvent $Event)
  {
    $id_user = $Event->data['data']['User']['id'];
    $action_user = "[Novo] Usuario ".$Event->data['data']['User']['username']." foi criado com sucesso!";
    $this->saveActionOnTableLogs($id_user, $action_user);
  }

  public function RegisterLogPostAfterSaveCreate(CakeEvent $Event)
  {
    $id_user = $Event->data['data']['Post']['user_id'];
    $id_post = $Event->data['data']['Post']['id'];

    $title = $Event->data['data']['Post']['title'];
    $action_user = "[Postou] id_post:".$id_post.", Titulo do post: ".$title;
    $this->saveActionOnTableLogs($id_user, $action_user);
  }

  public function RegisterLogPostAfterSaveUpdate(CakeEvent $Event)
  {
    $id_user = $Event->data['data']['Post']['user_id'];
    $id_post = $Event->data['data']['Post']['id_post'];

    $title = $Event->data['data']['Post']['title'];
    $action_user = "[Editou] id_post:".$id_post.", Titulo do post: ".$title;;
    $this->saveActionOnTableLogs($id_user, $action_user);
  }

  public function RegisterLogPostBeforeDelete(CakeEvent $Event)
  {
    $id_user = $Event->data['data']['Post']['user_id'];
    $id_post = $Event->data['data']['Post']['id'];

    $title = $Event->data['data']['Post']['title'];
    $action_user = "[Deletado] id_post:".$id_post.", Titulo do post: ".$title;
    $this->saveActionOnTableLogs($id_user, $action_user);
  }
  
}
