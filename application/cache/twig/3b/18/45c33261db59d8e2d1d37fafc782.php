<?php

/* manage/organization/index.twig */
class __TwigTemplate_3b1845c33261db59d8e2d1d37fafc782 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/pages/new?redirect=organization"), "method"), "html", null, true);
        echo "\"><i class=\"icon-plus\"></i> ";
        echo twig_escape_filter($this->env, __("Add"), "html", null, true);
        echo "</a>
        </div>
        <div class=\"clear\"></div>
    </div>
    <div class=\"page\">
        <table class=\"table table-striped\">
             <tr>
                <td>
                    <div style=\"padding-left: ";
        // line 13
        if (isset($context["page_root"])) { $_page_root_ = $context["page_root"]; } else { $_page_root_ = null; }
        echo twig_escape_filter($this->env, ($this->getAttribute($_page_root_, "level") - 2), "html", null, true);
        echo "em\">";
        if (isset($context["page_root"])) { $_page_root_ = $context["page_root"]; } else { $_page_root_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_page_root_, "name"), "html", null, true);
        echo "</div>
                </td>
                 <td></td>
            </tr>
        ";
        // line 17
        if (isset($context["pages"])) { $_pages_ = $context["pages"]; } else { $_pages_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_pages_);
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 18
            echo "            <tr>
                <td>
                    <div style=\"padding-left: ";
            // line 20
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, ($this->getAttribute($_page_, "level") - 2), "html", null, true);
            echo "em\">
                    ";
            // line 21
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
                        <a class=\"btn btn-info btn-mini\" href=\"";
            // line 26
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => (("manage/pages/up/" . $this->getAttribute($_page_, "id")) . "?redirect=organization")), "method"), "html", null, true);
            echo "\"><i class=\"icon-arrow-up\"></i></a>
                        <a class=\"btn btn-info btn-mini\" href=\"";
            // line 27
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => (("manage/pages/down/" . $this->getAttribute($_page_, "id")) . "?redirect=organization")), "method"), "html", null, true);
            echo "\"><i class=\"icon-arrow-down\"></i></a>
                        ";
            // line 28
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            if ((($this->getAttribute($_page_, "lvl") == 4) || ($this->getAttribute($_page_, "lvl") == 5))) {
                // line 29
                echo "                            <a class=\"btn btn-mini\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/organization/edit/" . $this->getAttribute($this->getAttribute($_page_, "organization"), "id")) . "?page=") . $this->getAttribute($_page_, "id"))), "method"), "html", null, true);
                echo "\"><i class=\"icon-pencil\"></i> Описание</a>
                            <a class=\"btn btn-mini\" href=\"";
                // line 30
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/organization/people/" . $this->getAttribute($_page_, "id"))), "method"), "html", null, true);
                echo "\"><i class=\"icon-user\"></i> Сотрудники</a>
                        ";
            }
            // line 32
            echo "                        ";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            if (($this->getAttribute($_page_, "lvl") < 4)) {
                // line 33
                echo "                            <a class=\"btn btn-mini\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => (("manage/pages/new/" . $this->getAttribute($_page_, "id")) . "?redirect=organization")), "method"), "html", null, true);
                echo "\"><i class=\"icon-plus\"></i> Подстраница</a>
                        ";
            }
            // line 35
            echo "                        <a class=\"btn btn-mini\" href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => (("manage/pages/edit/" . $this->getAttribute($_page_, "id")) . "?redirect=organization")), "method"), "html", null, true);
            echo "\"><i class=\"icon-edit\"></i> Редактировать</a>
                        <a class=\"btn btn-mini btn-danger\" href=\"";
            // line 36
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => (("manage/pages/delete/" . $this->getAttribute($_page_, "id")) . "?redirect=organization")), "method"), "html", null, true);
            echo "\"><i class=\"icon-remove icon-white\"></i></a>
                    </div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 41
        echo "        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "manage/organization/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 41,  135 => 36,  128 => 35,  120 => 33,  116 => 32,  109 => 30,  102 => 29,  99 => 28,  93 => 27,  87 => 26,  74 => 21,  69 => 20,  65 => 18,  60 => 17,  49 => 13,  35 => 5,  31 => 3,  28 => 2,);
    }
}
