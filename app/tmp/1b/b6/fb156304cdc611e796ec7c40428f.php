<?php

/* Layouts/default.tpl */
class __TwigTemplate_1bb6fb156304cdc611e796ec7c40428f extends Twig_Template
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
        echo "<?php
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

\$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
\$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
\t";
        // line 23
        echo $this->getAttribute((isset($context["html"]) ? $context["html"] : null), "charset", array(), "method");
        echo "
\t<title>
\t\t";
        // line 25
        echo "DevBlog";
        echo "
\t\t";
        // line 26
        echo $this->getAttribute((isset($context["_view"]) ? $context["_view"] : null), "fetch", array(0 => "title"), "method");
        echo "
\t</title>
\t";
        // line 28
        echo $this->getAttribute((isset($context["html"]) ? $context["html"] : null), "meta", array(0 => "icon"), "method");
        echo "
\t";
        // line 29
        echo $this->getAttribute((isset($context["html"]) ? $context["html"] : null), "css", array(0 => "cake.generic.css"), "method");
        echo "

\t";
        // line 31
        echo $this->getAttribute((isset($context["_view"]) ? $context["_view"] : null), "fetch", array(0 => "meta"), "method");
        echo "
\t";
        // line 32
        echo $this->getAttribute((isset($context["_view"]) ? $context["_view"] : null), "fetch", array(0 => "css"), "method");
        echo "
\t";
        // line 33
        echo $this->getAttribute((isset($context["_view"]) ? $context["_view"] : null), "fetch", array(0 => "script"), "method");
        echo "
</head>
<body>
\t<div id=\"container\">
\t\t<header id=\"header\">
\t\t\t<div class=\"header__logo\">
\t\t\t\t<h1>
\t\t\t\t\t";
        // line 40
        echo $this->getAttribute((isset($context["html"]) ? $context["html"] : null), "link", array(0 => "DevBlog", 1 => array("controller" => "posts", "action" => "index")), "method");
        echo "
\t\t\t\t</h1>
\t\t\t</div>
\t\t\t<div class=\"header__user_logged\">
\t\t\t\t";
        // line 44
        if ((isset($context["username"]) ? $context["username"] : null)) {
            // line 45
            echo "\t\t\t\t\t<span>";
            echo (isset($context["username"]) ? $context["username"] : null);
            echo " (";
            echo (isset($context["user_role"]) ? $context["user_role"] : null);
            echo ")</span>\t\t\t
\t\t\t\t\t";
            // line 46
            echo $this->getAttribute((isset($context["html"]) ? $context["html"] : null), "link", array(0 => "sair", 1 => array("controller" => "users", "action" => "logout"), 2 => array("class" => "button button__logout")), "method");
            // line 51
            echo "
\t\t\t\t";
        } else {
            // line 53
            echo "\t\t\t\t\t\t";
            echo $this->getAttribute((isset($context["html"]) ? $context["html"] : null), "link", array(0 => "Login", 1 => array("controller" => "users", "action" => "login"), 2 => array("class" => "button button__login")), "method");
            // line 58
            echo "
\t\t\t\t\t\t";
            // line 59
            echo $this->getAttribute((isset($context["html"]) ? $context["html"] : null), "link", array(0 => "Cadastrar-se", 1 => array("controller" => "users", "action" => "add"), 2 => array("class" => "button button__signup")), "method");
            // line 64
            echo "
\t\t\t\t";
        }
        // line 66
        echo "\t\t\t</div>
\t\t</header>
\t\t<div id=\"content\">
\t\t\t";
        // line 69
        echo $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "render", array(), "method");
        echo "
\t\t\t";
        // line 70
        echo $this->getAttribute((isset($context["_view"]) ? $context["_view"] : null), "fetch", array(0 => "content"), "method");
        echo "
\t\t</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "Layouts/default.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 70,  123 => 69,  118 => 66,  114 => 64,  112 => 59,  109 => 58,  106 => 53,  102 => 51,  100 => 46,  93 => 45,  91 => 44,  84 => 40,  74 => 33,  70 => 32,  66 => 31,  61 => 29,  57 => 28,  52 => 26,  48 => 25,  43 => 23,  19 => 1,);
    }
}
