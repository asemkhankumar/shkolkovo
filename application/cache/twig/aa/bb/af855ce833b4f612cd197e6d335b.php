<?php

/* manage/ent/index.twig */
class __TwigTemplate_aabbaf855ce833b4f612cd197e6d335b extends Twig_Template
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
        echo "
<div class=\"page-header\">
    <h4>";
        // line 5
        echo twig_escape_filter($this->env, __("ENT"), "html", null, true);
        echo "</h4>

    <div class=\"pull-right\">
        <a class=\"btn\" href=\"";
        // line 8
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/ent/edit/ru"), "method"), "html", null, true);
        echo "\"><i class=\"icon-plus\"> ";
        echo twig_escape_filter($this->env, __("Add RU variant"), "html", null, true);
        echo "</i></a>
        <a class=\"btn\" href=\"";
        // line 9
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/ent/edit/kz"), "method"), "html", null, true);
        echo "\"><i class=\"icon-plus\"> ";
        echo twig_escape_filter($this->env, __("Add KZ variant"), "html", null, true);
        echo "</i></a>
    </div>
    <div class=\"clear\"></div>
</div>
<div class=\"page\">

    ";
        // line 15
        if (isset($context["ent"])) { $_ent_ = $context["ent"]; } else { $_ent_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_ent_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 16
            echo "        <div class=\"well well-small\">
            <div class=\"text\">
                <div class=\"date\">
                    <span class=\"pull-right btn-group\">
                        <a class=\"btn btn-mini\" href=\"";
            // line 20
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/ent/edit/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\"><i class=\"icon-edit\"> </i> ";
            echo twig_escape_filter($this->env, __("Edit"), "html", null, true);
            echo "</a>
                        ";
            // line 21
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (($this->getAttribute($_item_, "language") == "ru")) {
                // line 22
                echo "                            <a class=\"btn btn-mini btn-success\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/ent/show_ru/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\">RU</a>
                        ";
            } else {
                // line 24
                echo "                            <a class=\"btn btn-mini btn-warning\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/ent/show_ru/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\">RU</a>
                        ";
            }
            // line 26
            echo "                        ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (($this->getAttribute($_item_, "language") == "kz")) {
                // line 27
                echo "                            <a class=\"btn btn-mini btn-success\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/ent/show_kz/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\">KZ</a>
                        ";
            } else {
                // line 29
                echo "                            <a class=\"btn btn-mini btn-warning\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/ent/show_kz/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\">KZ</a>
                        ";
            }
            // line 31
            echo "                        ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "published")) {
                // line 32
                echo "                            <a class=\"btn btn-mini btn-warning\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/ent/published/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\"><i class=\"icon-eye-close\"> </i> ";
                echo twig_escape_filter($this->env, __("Hide"), "html", null, true);
                echo "</a>
                        ";
            } else {
                // line 34
                echo "                            <a class=\"btn btn-mini btn-success\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/ent/published/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\"><i class=\"icon-eye-open\"> </i> ";
                echo twig_escape_filter($this->env, __("Unhide"), "html", null, true);
                echo "</a>
                        ";
            }
            // line 36
            echo "                        <a class=\"btn btn-mini btn-danger\" href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/ent/delete/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\"><i class=\"icon-remove\"> </i> ";
            echo twig_escape_filter($this->env, __("Delete"), "html", null, true);
            echo "</a>
                    </span>

                    <div>
                        <a href=\"";
            // line 40
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "site", array(0 => ("manage/ent/quests/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\">";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
            echo ". ";
            echo twig_escape_filter($this->env, __("Language"), "html", null, true);
            echo ": ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, __(twig_upper_filter($this->env, $this->getAttribute($_item_, "language"))), "html", null, true);
            echo "</a>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 46
        echo "
    ";
        // line 47
        if (isset($context["paginate"])) { $_paginate_ = $context["paginate"]; } else { $_paginate_ = null; }
        echo $_paginate_;
        echo "

</div>
";
    }

    public function getTemplateName()
    {
        return "manage/ent/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 47,  176 => 46,  154 => 40,  142 => 36,  132 => 34,  122 => 32,  118 => 31,  110 => 29,  102 => 27,  98 => 26,  90 => 24,  82 => 22,  79 => 21,  71 => 20,  65 => 16,  60 => 15,  48 => 9,  41 => 8,  35 => 5,  31 => 3,  28 => 2,);
    }
}
