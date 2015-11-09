<?php

/* manage/tests/quests.twig */
class __TwigTemplate_fdce203af95012eb76e739e053455b36 extends Twig_Template
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
        echo twig_escape_filter($this->env, __("Tests"), "html", null, true);
        echo " - ";
        if (isset($context["ent"])) { $_ent_ = $context["ent"]; } else { $_ent_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_ent_, "title"), "html", null, true);
        echo ".</h4>
    <div class=\"pull-right\">
        <a class=\"btn\" href=\"";
        // line 7
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        if (isset($context["ent"])) { $_ent_ = $context["ent"]; } else { $_ent_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/tests/questedit/" . $this->getAttribute($_ent_, "id"))), "method"), "html", null, true);
        echo "\"><i class=\"icon-plus\"> ";
        echo twig_escape_filter($this->env, __("Add question"), "html", null, true);
        echo "</i></a>
    </div>
    <div class=\"clear\"></div>
</div>
<div class=\"page\">

    ";
        // line 13
        if (isset($context["quests"])) { $_quests_ = $context["quests"]; } else { $_quests_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_quests_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "        <div class=\"well well-small\">
            <div class=\"text\">
                <div class=\"date\">
                    <span class=\"pull-right btn-group\">
                        ";
            // line 18
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "published")) {
                // line 19
                echo "                            <a class=\"btn btn-mini btn-warning\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/tests/questpublish/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\"><i class=\"icon-eye-close\"> </i> ";
                echo twig_escape_filter($this->env, __("Hide"), "html", null, true);
                echo "</a>
                        ";
            } else {
                // line 21
                echo "                            <a class=\"btn btn-mini btn-success\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/tests/questpublish/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\"><i class=\"icon-eye-open\"> </i> ";
                echo twig_escape_filter($this->env, __("Unhide"), "html", null, true);
                echo "</a>
                        ";
            }
            // line 23
            echo "                        <a class=\"btn btn-mini\" href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["ent"])) { $_ent_ = $context["ent"]; } else { $_ent_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/tests/questedit/" . $this->getAttribute($_ent_, "id")) . "-") . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\"><i class=\"icon-edit\"> </i> ";
            echo twig_escape_filter($this->env, __("Edit"), "html", null, true);
            echo "</a>
                        <a class=\"btn btn-mini btn-danger\" href=\"";
            // line 24
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/tests/questdelete/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\"><i class=\"icon-remove\"> </i> ";
            echo twig_escape_filter($this->env, __("Delete"), "html", null, true);
            echo "</a>
                    </span>

                    <span class=\"pull-right btn-group\">
                        <a class=\"btn btn-mini\" href=\"";
            // line 28
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/tests/questup/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\"><i class=\"icon-arrow-up\"></i></a>
                        <a class=\"btn btn-mini\" href=\"";
            // line 29
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/tests/questdown/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\"><i class=\"icon-arrow-down\"></i></a>
                    </span>

                    <div>
                        <a href=\"";
            // line 33
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["ent"])) { $_ent_ = $context["ent"]; } else { $_ent_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "site", array(0 => ((("manage/tests/questedit/" . $this->getAttribute($_ent_, "id")) . "-") . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, __("Question"), "html", null, true);
            echo " ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "number"), "html", null, true);
            echo ". </a>";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "text");
            echo "
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 39
        echo "
    ";
        // line 40
        if (isset($context["paginate"])) { $_paginate_ = $context["paginate"]; } else { $_paginate_ = null; }
        echo $_paginate_;
        echo "

</div>
";
    }

    public function getTemplateName()
    {
        return "manage/tests/quests.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 40,  149 => 39,  126 => 33,  117 => 29,  111 => 28,  100 => 24,  90 => 23,  80 => 21,  70 => 19,  67 => 18,  61 => 14,  56 => 13,  43 => 7,  35 => 5,  31 => 3,  28 => 2,);
    }
}
