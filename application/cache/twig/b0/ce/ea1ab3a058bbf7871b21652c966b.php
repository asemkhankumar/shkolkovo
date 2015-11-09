<?php

/* manage/pages/index.twig */
class __TwigTemplate_b0ceea1ab3a058bbf7871b21652c966b extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/pages/new"), "method"), "html", null, true);
        echo "\"><i class=\"icon-plus\"></i> ";
        echo twig_escape_filter($this->env, __("Add"), "html", null, true);
        echo "</a>
        </div>

        <form action=\"\" method=\"POST\" style=\"margin: 0\">
            <input type=\"text\" name=\"search\" id=\"search\" class=\"input-xxlarge\" value=\"\" style=\"margin: 0\" placeholder=\"Поиск\" />
        </form>

        <div class=\"clear\"></div>
    </div>
    <div class=\"page\">
        <table class=\"table table-striped\">
        ";
        // line 16
        if (isset($context["pages"])) { $_pages_ = $context["pages"]; } else { $_pages_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_pages_);
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 17
            echo "            <tr id='";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_page_, "id"), "html", null, true);
            echo "'>
                <td>
                    <div style=\"padding-left: ";
            // line 19
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_page_, "level"), "html", null, true);
            echo "em\">
                    ";
            // line 20
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            if ($this->getAttribute($_page_, "static")) {
                echo "<i class=\"icon-file\" style=\"color: darkred\"></i> ";
            }
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_page_, "name"), "html", null, true);
            echo "
                    </div>
                </td>
                <td>
                    <div class=\"btn-group pull-right\">
                        ";
            // line 25
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            if (($this->getAttribute($_page_, "parent_id") != 0)) {
                // line 26
                echo "                            <a class=\"btn btn-info btn-mini\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/pages/up/" . $this->getAttribute($_page_, "id"))), "method"), "html", null, true);
                echo "\"><i class=\"icon-arrow-up\"></i></a>
                            <a class=\"btn btn-info btn-mini\" href=\"";
                // line 27
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/pages/down/" . $this->getAttribute($_page_, "id"))), "method"), "html", null, true);
                echo "\"><i class=\"icon-arrow-down\"></i></a>
                        ";
            }
            // line 29
            echo "                        ";
            echo "<a class=\"btn btn-mini\" href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/contents/index/" . $this->getAttribute($_page_, "id"))), "method"), "html", null, true);
            echo "\"><i class=\"icon-pencil\"></i> Содержимое</a>";
            // line 30
            echo "                        <a class=\"btn btn-mini\" href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/pages/new/" . $this->getAttribute($_page_, "id"))), "method"), "html", null, true);
            echo "\"><i class=\"icon-plus\"></i> Подстраница</a>
                        <a class=\"btn btn-mini\" href=\"";
            // line 31
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/pages/edit/" . $this->getAttribute($_page_, "id"))), "method"), "html", null, true);
            echo "\"><i class=\"icon-edit\"></i> Редактировать</a>
                        <a class=\"btn btn-mini btn-danger\" href=\"";
            // line 32
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/pages/delete/" . $this->getAttribute($_page_, "id"))), "method"), "html", null, true);
            echo "\"><i class=\"icon-remove icon-white\"></i></a>
                    </div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 37
        echo "        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "manage/pages/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 37,  119 => 32,  113 => 31,  106 => 30,  99 => 29,  92 => 27,  85 => 26,  82 => 25,  69 => 20,  64 => 19,  57 => 17,  52 => 16,  35 => 5,  31 => 3,  28 => 2,);
    }
}
