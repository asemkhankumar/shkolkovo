<?php

/* manage/feedback/index.twig */
class __TwigTemplate_5bc93a7114e6ac9e6227b30cbab7cb4a extends Twig_Template
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
    <div class=\"titul\" style=\"margin: 10px;\">
        <a href=\"";
        // line 5
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_URL_, "site", array(0 => "manage/feedback"), "method"), "html", null, true);
        echo "?sort=noreply\" ";
        if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
        if (($_sort_ == "noreply")) {
            echo "class=\"active\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, __("Noreply Questions"), "html", null, true);
        echo "</a>
        <a href=\"";
        // line 6
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_URL_, "site", array(0 => "manage/feedback"), "method"), "html", null, true);
        echo "?sort=reply\" ";
        if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
        if (($_sort_ == "reply")) {
            echo "class=\"active\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, __("Reply Questions"), "html", null, true);
        echo "</a>
        <a href=\"";
        // line 7
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_URL_, "site", array(0 => "manage/feedback"), "method"), "html", null, true);
        echo "?sort=spam\" ";
        if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
        if (($_sort_ == "spam")) {
            echo "class=\"active\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, __("Spam"), "html", null, true);
        echo "</a>
        <a href=\"";
        // line 8
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_URL_, "site", array(0 => "manage/feedback"), "method"), "html", null, true);
        echo "?sort=all\" ";
        if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
        if (($_sort_ == "all")) {
            echo "class=\"active\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, __("All Questions"), "html", null, true);
        echo "</a>
    </div>
    <div class=\"graybox news\" style=\"margin-top: 10px;\">
        ";
        // line 11
        if (isset($context["questions"])) { $_questions_ = $context["questions"]; } else { $_questions_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_questions_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "            ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "detect_exist", array(), "method"), "html", null, true);
            echo "
            <div class=\"well well-small\">
                <div class=\"text\">
                    <div class=\"date\">
        <span class=\"btn-group\">
    <a class=\"btn btn-mini\" href=\"";
            // line 17
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "site", array(0 => ("manage/feedback/reply/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\">
        <i class=\"icon-edit\">";
            // line 18
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (($this->getAttribute($_item_, "is_answered") == 0)) {
                echo twig_escape_filter($this->env, __("Reply"), "html", null, true);
                echo " ";
            } else {
                echo twig_escape_filter($this->env, __("See the question"), "html", null, true);
            }
            echo "</i></a>
                    </div>
                    ";
            // line 20
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_item_, "user"), "username"), "html", null, true);
            echo "<br>";
            if (isset($context["Date"])) { $_Date_ = $context["Date"]; } else { $_Date_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Date_, "translate", array(0 => $this->getAttribute($_item_, "date"), 1 => "d F Y G:i:s"), "method"), "html", null, true);
            echo "
                    <br>";
            // line 21
            if (isset($context["Text"])) { $_Text_ = $context["Text"]; } else { $_Text_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Text_, "limit_chars", array(0 => $this->getAttribute($_item_, "question"), 1 => 100), "method"), "html", null, true);
            echo "
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 25
            echo "            <div class=\"text\">";
            echo twig_escape_filter($this->env, __("No questions"), "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 27
        echo "        <br>
        <div style=\"padding: 0 30px 30px 30px;\">
            ";
        // line 29
        if (isset($context["paginate"])) { $_paginate_ = $context["paginate"]; } else { $_paginate_ = null; }
        echo $_paginate_;
        echo "
        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "manage/feedback/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 29,  147 => 27,  138 => 25,  127 => 21,  118 => 20,  107 => 18,  101 => 17,  91 => 12,  85 => 11,  71 => 8,  59 => 7,  47 => 6,  35 => 5,  31 => 3,  28 => 2,);
    }
}