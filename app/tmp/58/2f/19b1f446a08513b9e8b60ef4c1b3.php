<?php

/* Posts/edit.tpl */
class __TwigTemplate_582f19b1f446a08513b9e8b60ef4c1b3 extends Twig_Template
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
<legend>Editar post</legend>
";
        // line 3
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "create", array(0 => "Post"), "method");
        echo "
";
        // line 4
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "title", 1 => array("value" => $this->getAttribute($this->getAttribute((isset($context["data_post"]) ? $context["data_post"] : null), "Post"), "title"))), "method");
        echo "
";
        // line 5
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "body", 1 => array("rows" => "3", "value" => $this->getAttribute($this->getAttribute((isset($context["data_post"]) ? $context["data_post"] : null), "Post"), "body"))), "method");
        // line 9
        echo "
";
        // line 10
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "id_post", 1 => array("type" => "hidden", "value" => $this->getAttribute($this->getAttribute((isset($context["data_post"]) ? $context["data_post"] : null), "Post"), "id"))), "method");
        // line 14
        echo "
";
        // line 15
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "input", array(0 => "user_id", 1 => array("type" => "hidden", "value" => $this->getAttribute($this->getAttribute((isset($context["data_post"]) ? $context["data_post"] : null), "Post"), "user_id"))), "method");
        // line 19
        echo "
";
        // line 20
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "end", array(0 => "Atualizar"), "method");
        echo "
";
        // line 21
        echo (!(isset($context["data_post"]) ? $context["data_post"] : null));
        echo "
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "Posts/edit.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 21,  46 => 20,  43 => 19,  41 => 15,  38 => 14,  36 => 10,  33 => 9,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
