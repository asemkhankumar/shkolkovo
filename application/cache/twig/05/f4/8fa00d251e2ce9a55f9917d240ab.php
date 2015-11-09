<?php

/* manage/expertopinions/index.twig */
class __TwigTemplate_05f48fa00d251e2ce9a55f9917d240ab extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/expertopinions/edit"), "method"), "html", null, true);
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
        if (isset($context["opinions"])) { $_opinions_ = $context["opinions"]; } else { $_opinions_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_opinions_);
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
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/expertopinions/view/" . $this->getAttribute($_item_, "id")) . "/page-") . $_page_)), "method"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/expertopinions/edit/" . $this->getAttribute($_item_, "id")) . "/page-") . $_page_)), "method"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/expertopinions/delete/" . $this->getAttribute($_item_, "id")) . "/page-") . $_page_)), "method"), "html", null, true);
            echo "\"><i class=\"icon-remove\"> </i></a>
                        </span>
                        <div class=\"pull-left\"><a class=\"link\" href=\"";
            // line 22
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/expertopinions/view/" . $this->getAttribute($_item_, "id")) . "/page-") . $_page_)), "method"), "html", null, true);
            echo "\">";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
            echo "</a>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                    <div>
                        ";
            // line 27
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
        // line 32
        echo "
        ";
        // line 33
        if (isset($context["paginate"])) { $_paginate_ = $context["paginate"]; } else { $_paginate_ = null; }
        echo $_paginate_;
        echo "

    </div>
";
    }

    public function getTemplateName()
    {
        return "manage/expertopinions/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  102 => 27,  88 => 22,  80 => 20,  76 => 19,  69 => 18,  65 => 17,  58 => 16,  52 => 12,  47 => 11,  35 => 5,  31 => 3,  28 => 2,);
    }
}
