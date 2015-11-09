<?php

/* manage/debate/index.twig */
class __TwigTemplate_6a0b07ea46d6fb3f555cea948138ef28 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/debate/new"), "method"), "html", null, true);
        echo "\"><i class=\"icon-plus\"></i> ";
        echo twig_escape_filter($this->env, __("Create"), "html", null, true);
        echo "
            </a>
        </div>
        <div class=\"clear\"></div>
    </div>
    <div class=\"graybox news\" style=\"margin-top: 10px;\">
        ";
        // line 11
        if (isset($context["list"])) { $_list_ = $context["list"]; } else { $_list_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_list_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "            <div class=\"well well-small\">
                <div class=\"text\">
                    <div class=\"date\">

                        <a class=\"link\" target=\"_blank\" href=\"";
            // line 16
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "site", array(0 => ("debate/view/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\">";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
            echo "</a>
                        <sup style=\"color: red;\">
                            ";
            // line 18
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (($this->getAttribute($_item_, "admin_create") == 1)) {
                echo "A
                            ";
            } else {
                // line 19
                echo "П
                            ";
            }
            // line 21
            echo "                        </sup>
                        &nbsp;(";
            // line 22
            if (isset($context["Date"])) { $_Date_ = $context["Date"]; } else { $_Date_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Date_, "translate", array(0 => $this->getAttribute($_item_, "date"), 1 => "d.m.Y H:i"), "method"), "html", null, true);
            echo ")&nbsp;
                        <div class=\"pull-right btn-group\">
                            <a class=\"btn btn-mini\" href=\"";
            // line 24
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (($this->getAttribute($_item_, "admin_create") == 1)) {
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/debate/new/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            } else {
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/debate/edit/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            }
            echo "\"><i class=\"icon-edit\"> </i>
                                ";
            // line 25
            echo twig_escape_filter($this->env, __("Edit "), "html", null, true);
            echo "</a>
                            <a class=\"btn btn-mini btn-";
            // line 26
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (($this->getAttribute($_item_, "is_closed") == 0)) {
                echo "success";
            } else {
                echo "warning";
            }
            echo "\" href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "site", array(0 => ("manage/debate/hide/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\"><i class=\"icon-eye-";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (($this->getAttribute($_item_, "is_closed") == 0)) {
                echo "close";
            } else {
                echo "open";
            }
            echo "\">
                                    ";
            // line 27
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (($this->getAttribute($_item_, "is_closed") == 0)) {
                echo twig_escape_filter($this->env, __("Hide debate"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, __("Display debate"), "html", null, true);
            }
            echo "</i></a>
                        </div>
                        &nbsp;
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "           ";
            echo twig_escape_filter($this->env, __("No debate"), "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 36
        echo "        ";
        if (isset($context["paginate"])) { $_paginate_ = $context["paginate"]; } else { $_paginate_ = null; }
        echo $_paginate_;
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "manage/debate/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 36,  143 => 34,  126 => 27,  106 => 26,  102 => 25,  89 => 24,  82 => 22,  79 => 21,  75 => 19,  69 => 18,  59 => 16,  53 => 12,  47 => 11,  35 => 5,  31 => 3,  28 => 2,);
    }
}
