<?php 

App::uses('AuthComponent', 'Controller/Component');


class Post extends AppModel 
{
  public $name = "Post";

  public $validate = array(
    'title' => array(
        'rule' => 'notBlank'
    ),
    'body' => array(
        'rule' => 'notBlank'
    )
  );

  public function isOwnedBy($post, $user) 
  {
    return $this->field('id', array('id' => $post, 'user_id' => $user)) !== false;
  }

  public function afterSave($created, $options = array('fieldList' => array('user_id')))
  {
    $event_name = "";

    if($created === true) {
      $event_name = 'Log.Post.afterSaveCreate';
    } else {
      $event_name = 'Log.Post.afterSaveUpdate';
    }

    $Event = new CakeEvent($event_name, $this, array(
      'data' => $this->data,
    ));    
    
    $this->getEventManager()->dispatch($Event);  
  } 

  public function beforeDelete($cascade = true)
  {
    $data_of_post_deleted = $this->find('first', array(
      "conditions" => array("id" => $this->id)
    ));

    $Event = new CakeEvent('Log.Post.beforeDelete', $this, array(
      'id' => $this->id,
      'data' => $data_of_post_deleted,
    ));
    $this->getEventManager()->dispatch($Event);  
  }


}