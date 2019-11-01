<?php

/* Posts/add.tpl */
class __TwigTemplate_3b976c1b73efb172204813dcdd137a2b extends Twig_Template
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
        echo "<fieldset>
<legend>O que você está pensando ";
        // line 2
        echo (isset($context["username"]) ? $context["username"] : null);
        echo " ?</legend>
";
        // line 3
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "create", array(0 => "Post"), "method");
        echo "
";
        // line 4
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "title"), "method");
        echo "
";
        // line 5
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "body", 1 => array("rows" => "3")), "method");
        echo "
";
        // line 6
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "end", array(0 => "Postar"), "method");
        echo "
</fieldset>



";
    }

    public function getTemplateName()
    {
        return "Posts/add.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  34 => 5,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
