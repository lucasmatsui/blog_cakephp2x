
<fieldset>
<legend>O que você está pensando <?= $username; ?>?</legend>
<?php
  echo $this->Form->create('Post');
  echo $this->Form->input('title');
  echo $this->Form->input('body', array('rows' => '3'));
  echo $this->Form->end('Postar');
?>
</fieldset>



