
<fieldset>
<legend>Editar post</legend>
<?php
  echo $this->Form->create('Post');
  echo $this->Form->input('title', array(
    'value' => $data_post['Post']['title'],
  ));
  echo $this->Form->input('body', array(
    'rows' => '3',
    'value' => $data_post['Post']['body'],
  ));
  echo $this->Form->input('id_post_edit', array(
    'value' => $data_post['Post']['id'],
    'type' => 'hidden'
  ));
  echo $this->Form->end('Atualizar');
  unset($data_post);
  ?>
</fieldset>
