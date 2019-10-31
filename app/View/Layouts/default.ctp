<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<header id="header">
			<div class="header__logo">
				<h1>
					<?= 
							$this->Html->link(
								'DevBlog',
								array('controller' => 'posts', 'action' => 'index')
							);
						?>
				</h1>
			</div>
			<div class="header__user_logged">
					<?php if(isset($username) && !empty($username)): ?>

						<span><?= $username." ($user_role)"; ?></span>
							<?= 
								$this->Html->link(
									'sair',
									array('controller' => 'users', 'action' => 'logout'),
									array('class' => 'button button__logout')
								);
							?>
					<?php else:
							echo	$this->Html->link(
											'Login',
											array('controller' => 'users', 'action' => 'login'),
											array('class' => 'button button__login')
										);

							echo	$this->Html->link(
								'Cadastrar-se',
								array('controller' => 'users', 'action' => 'add'),
								array('class' => 'button button__signup')
							);	
					?>
				<?php endif; ?>
			</div>
		</header>
		<div id="content">
			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
</body>
</html>