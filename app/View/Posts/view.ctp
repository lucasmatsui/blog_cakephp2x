<div id="view__post">
  <h1><?php echo $post['Post']['title'] ;?></h1>

  <p><small>Criado em: <?= CakeTime::format($post['Post']['created'], '%d/%m/%Y %H:%M:%p'); ?></small></p>

  <p><?php echo $post['Post']['body'] ;?></p>
</div>
