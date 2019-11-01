<?php

/* Users/add.tpl */
class __TwigTemplate_28c4e8f37e1d2977fc4d9fd39a6fe227 extends Twig_Template
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
<div class=\"users form\">
  ";
        // line 3
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "create", array(0 => "User"), "method");
        echo "
  <fieldset>
    <legend>";
        // line 5
        echo "Cadastrar-se";
        echo "</legend>
    ";
        // line 6
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "username"), "method");
        echo "
    ";
        // line 7
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "password"), "method");
        echo "
    ";
        // line 8
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "role", 1 => array("options" => array("admin" => "Admin", "author" => "Author"))), "method");
        echo "
    ";
        // line 9
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "end", array(0 => "Submit"), "method");
        echo "
  </fieldset>
</div>
";
    }

    public function getTemplateName()
    {
        return "Users/add.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  23 => 3,  19 => 1,);
    }
}
