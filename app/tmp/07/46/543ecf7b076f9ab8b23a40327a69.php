<?php

/* Users/login.tpl */
class __TwigTemplate_0746543ecf7b076f9ab8b23a40327a69 extends Twig_Template
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
        echo "<div class=\"users form\">
    <fieldset>
        <legend>";
        // line 3
        echo "Porfavor insira seu usuario e senha";
        echo "</legend>
        ";
        // line 4
        echo $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "render", array(0 => "auth"), "method");
        echo "
        ";
        // line 5
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "create", array(0 => "User"), "method");
        echo "
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
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "end", array(0 => "Logar"), "method");
        echo "
    </fieldset>
</div>";
    }

    public function getTemplateName()
    {
        return "Users/login.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
