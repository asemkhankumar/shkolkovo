<?php

/* manage/links/index.twig */
class __TwigTemplate_c3a6924d4f767556960dcaa3ebbc56c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("manage/layout/manage.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "manage/layout/manage.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"page-header\">
        <div class=\"pull-right\">
            <a class=\"btn btn-success\" href=\"";
        // line 5
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/links/edit"), "method"), "html", null, true);
        echo "\"><i class=\"icon-plus\"></i> ";
        echo twig_escape_filter($this->env, __("Add"), "html", null, true);
        echo "</a>
        </div>
        <form action=\"\" method=\"POST\" style=\"margin: 0\">
            <input type=\"text\" name=\"search\" id=\"search\" class=\"input-xxlarge\" value=\"\" style=\"margin: 0\" placeholder=\"";
        // line 8
        echo twig_escape_filter($this->env, __("Search"), "html", null, true);
        echo "\"/>
        </form>
        <div class=\"clear\"></div>
    </div>
    <div class=\"page\">
        ";
        // line 13
        if (isset($context["list"])) { $_list_ = $context["list"]; } else { $_list_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_list_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "            <div class=\"well well-small\">
                <div class=\"text\">
                    <div class=\"date\">
                        <span class=\"btn-group pull-right\">
                            <a class=\"btn btn-success btn-mini\" href=\"";
            // line 18
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/links/up/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\"><i class=\"icon-arrow-up\"></i></a>
                            <a class=\"btn btn-danger btn-mini\" href=\"";
            // line 19
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/links/down/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\"><i class=\"icon-arrow-down\"></i></a>
                            <a class=\"btn btn-mini\" href=\"";
            // line 20
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/links/edit/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\"><i class=\"icon-edit\"> </i> Редактировать</a>
                            <a class=\"btn btn-mini btn-danger\" href=\"";
            // line 21
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/links/delete/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\"><i class=\"icon-remove\"> </i></a>
                        </span>
                        <div class=\"pull-left\">
                        <a class=\"link\" href=\"";
            // line 24
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "link"), "html", null, true);
            echo "\">";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
            echo "</a>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                    <div>
                        ";
            // line 29
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "desc");
            echo "<br>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 34
        echo "
        ";
        // line 35
        if (isset($context["paginate"])) { $_paginate_ = $context["paginate"]; } else { $_paginate_ = null; }
        echo $_paginate_;
        echo "

    </div>
";
    }

    public function getTemplateName()
    {
        return "manage/links/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 35,  113 => 34,  101 => 29,  89 => 24,  81 => 21,  75 => 20,  69 => 19,  63 => 18,  57 => 14,  52 => 13,  44 => 8,  35 => 5,  31 => 3,  28 => 2,);
    }
}
