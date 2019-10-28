<div class="users form">
    <fieldset>
        <legend>
            <?php echo __('Porfavor insira seu usuario e senha'); ?>
        </legend>
        <?php echo $this->Flash->render('auth'); ?>
        <?php echo $this->Form->create('User'); ?>
        <?php 
            echo $this->Form->input('username');
            echo $this->Form->input('password');
        ?>
    <?php echo $this->Form->end(__('Login')); ?>
    </fieldset>
</div>