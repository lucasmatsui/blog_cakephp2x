<?php

App::uses('ModelBehavior', 'Model');

class LogBehavior extends ModelBehavior 
{
  public function afterSave(Model $model, $created, $options = array())
  {
    
  }
  public function registerLog(Model $Model, $action = null, $id_user_logged)
  {
    $ip = $_SERVER['REMOTE_ADDR'];

    $sql="INSERT INTO logs (id_user, action_user, ip) VALUES (?, ?, ?)";
    $sql_params = array($id_user_logged , $action, $ip);
    $Model->query($sql,$sql_params);

  }
}