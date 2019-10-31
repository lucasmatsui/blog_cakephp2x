<?php

/* Posts/index.tpl */
class __TwigTemplate_1460729a23dca81fa9b771d7a598e654 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<h1 id=\"main__title\">Posts</h1>
<?= \$this->Html->link(
        'Adicionar Post', 
        array('controller' => 'posts', 'action' => 'add'),
        array('class' => 'button button__addPost')
    ); 
?>
<table>
    <tr>
        <th>Id</th>
        <th>Titulo</th>
        <th>Criado</th>
        <th>Ações</th>
    </tr>

    <?php foreach (\$posts as \$post): ?>
        <tr>
            <td><?= \$post['Post']['id']; ?></td>
            <td>
                <?= \$this->Html->link(\$post['Post']['title'],
                array('controller' => 'posts', 'action' => 'view', \$post['Post']['id'])); ?>
            </td>
            <td><?= CakeTime::format(\$post['Post']['created'], '%d/%m/%Y %H:%M:%p'); ?></td>
            <td>
                <?php 
                    if(\$user_role === 'admin' 
                    || \$post['Post']['user_id'] === \$id_user_logged && \$user_role === 'author') {
                        echo \$this->Html->link(
                            'Editar', 
                            array('action' => 'edit', \$post['Post']['id']),
                            array('class' => 'button button__edit')
                        );
                        echo \$this->Form->postLink(
                                'Deletar',
                                array('action' => 'delete', \$post['Post']['id']),
                                array('class' => 'button button__delete', 'confirm' => 'Você tem certeza?')
                        );
                    } else {
                        echo\"Sem permissões de alteração\";
                    }
                ?>
            </td>
        </tr>
    <?php endforeach; ?>
    <?php unset(\$post); ?>
</table>";
    }

    public function getTemplateName()
    {
        return "Posts/index.tpl";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
