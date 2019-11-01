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
	{{ html.charset()|raw }}
	<title>
		{{ "DevBlog" }}
		{{ _view.fetch('title')|raw }}
	</title>
	{{ html.meta('icon')|raw }}
	{{ html.css('cake.generic.css') }}

	{{ _view.fetch('meta')|raw }}
	{{ _view.fetch('css')|raw }}
	{{ _view.fetch('script') }}
</head>
<body>
	<div id="container">
		<header id="header">
			<div class="header__logo">
				<h1>
					{{ html.link('DevBlog', {'controller':'posts', 'action': 'index'}) }}
				</h1>
			</div>
			<div class="header__user_logged">
				{% if username %}
					<span>{{ username }} ({{ user_role }})</span>			
					{{
						html.link('sair', 
							{'controller':'users', 'action':'logout'},
							{'class':'button button__logout'}
						)
					}}
				{% else %}
						{{	
							html.link('Login', 
								{'controller':'users', 'action':'login'}, 
								{'class': 'button button__login'}
							)
						}}
						{{
							html.link('Cadastrar-se', 
								{'controller':'users', 'action':'add'},
								{'class':'button button__signup'}
							)
						}}
				{% endif %}
			</div>
		</header>
		<div id="content">
			{{ flash.render() }}
			{{ _view.fetch('content')}}
		</div>
</body>
</html>