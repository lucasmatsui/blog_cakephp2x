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
        echo "<h1 id=\"main__title\">Posts</h1>
";
        // line 2
        echo $this->getAttribute((isset($context["html"]) ? $context["html"] : null), "link", array(0 => "Adicionar Post", 1 => array("controller" => "posts", "action" => "add"), 2 => array("class" => "button button__addPost")), "method");
        // line 7
        echo "
<table>
    <tr>
        <th>Id</th>
        <th>Titulo</th>
        <th>Criado</th>
        <th>Ações</th>
    </tr>
    ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 16
            echo "        <tr>
            <td>";
            // line 17
            echo $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "Post"), "id");
            echo "</td>
            <td>
                ";
            // line 19
            echo $this->getAttribute((isset($context["html"]) ? $context["html"] : null), "link", array(0 => $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "Post"), "title"), 1 => array("controller" => "posts", "action" => (("view" . "/") . $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "Post"), "id")))), "method");
            // line 23
            echo "
            </td>
            <td>
                ";
            // line 26
            echo twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "Post"), "created"), "d/m/Y H:i");
            echo "
            </td>
            <td>
                ";
            // line 30
            if ((((isset($context["user_role"]) ? $context["user_role"] : null) === "admin") || (($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "Post"), "user_id") === (isset($context["id_user_logged"]) ? $context["id_user_logged"] : null)) && ((isset($context["user_role"]) ? $context["user_role"] : null) === "author")))) {
                // line 34
                echo "                    ";
                echo $this->getAttribute((isset($context["html"]) ? $context["html"] : null), "link", array(0 => "Editar", 1 => array("action" => (("edit" . "/") . $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "Post"), "id"))), 2 => array("class" => "button button__edit")), "method");
                // line 39
                echo "
                    ";
                // line 40
                echo $this->getAttribute((isset($context["html"]) ? $context["html"] : null), "link", array(0 => "Deletar", 1 => array("action" => (("delete" . "/") . $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "Post"), "id"))), 2 => array("class" => "button button__delete", "confirm" => "Você tem certeza?")), "method");
                // line 45
                echo "
                ";
            } else {
                // line 47
                echo "                    ";
                echo "Sem permissões de alteração";
                echo "
                ";
            }
            // line 49
            echo "            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    ";
        echo (!(isset($context["posts"]) ? $context["posts"] : null));
        echo "
</table>
";
    }

    public function getTemplateName()
    {
        return "Posts/index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 52,  79 => 49,  73 => 47,  69 => 45,  67 => 40,  64 => 39,  61 => 34,  59 => 30,  53 => 26,  48 => 23,  46 => 19,  41 => 17,  38 => 16,  34 => 15,  24 => 7,  22 => 2,  19 => 1,);
    }
}
