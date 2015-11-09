<?php

/* manage/debate/comments.twig */
class __TwigTemplate_293fd26642745018f3d1e4fac6ef23ad extends Twig_Template
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
        echo "    <div class=\"graybox news\" style=\"margin-top: 10px;\">
        ";
        // line 4
        if (isset($context["list"])) { $_list_ = $context["list"]; } else { $_list_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_list_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "            <div class=\"well well-small\">
                <div class=\"text\">
                    <div class=\"date\">

                        <a class=\"link\" target=\"_blank\" href=\"";
            // line 9
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "site", array(0 => ("debate/view/" . $this->getAttribute($_item_, "debate_id"))), "method"), "html", null, true);
            echo "\">";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_item_, "debate"), "title"), "html", null, true);
            echo "</a>
                        &nbsp;(";
            // line 10
            if (isset($context["Date"])) { $_Date_ = $context["Date"]; } else { $_Date_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Date_, "translate", array(0 => $this->getAttribute($_item_, "date"), 1 => "d.m.Y H:i"), "method"), "html", null, true);
            echo ")&nbsp;
                        <div class=\"pull-right btn-group\">
                            <a class=\"btn btn-mini btn-";
            // line 12
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (($this->getAttribute($_item_, "hide") == 0)) {
                echo "success";
            } else {
                echo "warning";
            }
            echo "\" href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "site", array(0 => ("manage/debate/commenthide/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\"><i class=\"icon-eye-";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (($this->getAttribute($_item_, "hide") == 0)) {
                echo "close";
            } else {
                echo "open";
            }
            echo "\">
                                    ";
            // line 13
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (($this->getAttribute($_item_, "hide") == 0)) {
                echo twig_escape_filter($this->env, __("Hide comment"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, __("Display the comment"), "html", null, true);
            }
            echo "</i></a>
                        </div>
                        &nbsp;

                    </div>
                    <div>";
            // line 18
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute($this->getAttribute($_item_, "user"), "username")), "html", null, true);
            echo ": ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute($_item_, "comment")), "html", null, true);
            echo "</div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 22
            echo "            ";
            echo twig_escape_filter($this->env, __("No comments"), "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 24
        echo "        ";
        if (isset($context["paginate"])) { $_paginate_ = $context["paginate"]; } else { $_paginate_ = null; }
        echo $_paginate_;
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "manage/debate/comments.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 24,  108 => 22,  95 => 18,  82 => 13,  62 => 12,  55 => 10,  46 => 9,  40 => 5,  34 => 4,  31 => 3,  28 => 2,);
    }
}
