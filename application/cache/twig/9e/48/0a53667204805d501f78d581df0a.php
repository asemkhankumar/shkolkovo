<?php

/* manage/expert/index.twig */
class __TwigTemplate_9e480a53667204805d501f78d581df0a extends Twig_Template
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
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/expert/edit/page-" . $_page_)), "method"), "html", null, true);
        echo "\"><i class=\"icon-plus\"></i> ";
        echo twig_escape_filter($this->env, __("Add"), "html", null, true);
        echo "
            </a>
        </div>
        <div class=\"clear\"></div>
    </div>
    <div class=\"page\">
        ";
        // line 11
        if (isset($context["experts"])) { $_experts_ = $context["experts"]; } else { $_experts_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_experts_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "            <div class=\"well well-small\">
                <div class=\"text\">
                    <div class=\"date\">
                        <span class=\"btn-group pull-right\">
                            <a class=\"btn btn-mini\" href=\"";
            // line 16
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/expert/view/" . $this->getAttribute($_item_, "id")) . "/page-") . $_page_)), "method"), "html", null, true);
            echo "\"><i class=\"icon-eye-open\"> </i>
                                ";
            // line 17
            echo twig_escape_filter($this->env, __("Show"), "html", null, true);
            echo "</a>
                            <a class=\"btn btn-mini\" href=\"";
            // line 18
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/expert/edit/" . $this->getAttribute($_item_, "id")) . "/page-") . $_page_)), "method"), "html", null, true);
            echo "\"><i class=\"icon-edit\"> </i>
                                ";
            // line 19
            echo twig_escape_filter($this->env, __("Edit "), "html", null, true);
            echo "</a>
                            <a class=\"btn btn-mini btn-danger\" href=\"";
            // line 20
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/expert/delete/" . $this->getAttribute($_item_, "id")) . "/page-") . $_page_)), "method"), "html", null, true);
            echo "\"><i class=\"icon-remove\"> </i></a>
                        </span>
                        <div class=\"pull-left\"><a class=\"link\" href=\"";
            // line 22
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/expert/view/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\">";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "name"), "html", null, true);
            echo "</a> —
                            ";
            // line 23
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "position"), "html", null, true);
            echo "
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                    <div>
                        ";
            // line 28
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute($_item_, "description")), "html", null, true);
            echo "<br>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 33
        echo "
        ";
        // line 34
        if (isset($context["paginate"])) { $_paginate_ = $context["paginate"]; } else { $_paginate_ = null; }
        echo $_paginate_;
        echo "

    </div>
";
    }

    public function getTemplateName()
    {
        return "manage/expert/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 34,  119 => 33,  107 => 28,  98 => 23,  89 => 22,  81 => 20,  77 => 19,  70 => 18,  66 => 17,  59 => 16,  53 => 12,  48 => 11,  35 => 5,  31 => 3,  28 => 2,);
    }
}
