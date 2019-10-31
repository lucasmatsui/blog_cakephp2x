<?php

/* Posts/view.tpl */
class __TwigTemplate_8f65c6f2f8086df66cf7e5966bf1390e extends Twig_Template
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
        echo "<div id=\"view__post\">
  <h1>";
        // line 2
        echo $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "Post", array(), "array"), "title", array(), "array");
        echo "</h1>

  <p><small>Criado em: ";
        // line 4
        echo $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "Post", array(), "array"), "created", array(), "array");
        echo " </small></p>

  <p>";
        // line 6
        echo $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "Post", array(), "array"), "body", array(), "array");
        echo "</p>
</div>";
    }

    public function getTemplateName()
    {
        return "Posts/view.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  27 => 4,  22 => 2,  19 => 1,);
    }
}
