<?php

/* manage/materials/ehistory.twig */
class __TwigTemplate_cc5d89e0b2eeec2299bcce4680fcd427 extends Twig_Template
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
    <div class=\"graybox news\" style=\"margin-top: 10px;\">
        ";
        // line 5
        if (isset($context["materials"])) { $_materials_ = $context["materials"]; } else { $_materials_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_materials_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "            ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "detect_exist", array(), "method"), "html", null, true);
            echo "
            <div class=\"well well-small\">
                <div class=\"text\">
                    <div class=\"pull-right\">
                        <div class=\"btn-group\">
                            <a class=\"btn btn-mini\" href=\"";
            // line 11
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "site", array(0 => ("manage/materials/view/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\">
                                <i class=\"icon-edit\"></i> ";
            // line 12
            echo twig_escape_filter($this->env, __("See"), "html", null, true);
            echo "</a>
                            <a class=\"btn btn-mini btn-";
            // line 13
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (($this->getAttribute($_item_, "mod_public") == 1)) {
                echo "success";
            } else {
                echo "warning";
            }
            echo "\" href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "site", array(0 => ("manage/materials/show/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\"><i class=\"icon-eye-";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (($this->getAttribute($_item_, "mod_public") == 1)) {
                echo "open";
            } else {
                echo "close";
            }
            echo "\"></i> ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (($this->getAttribute($_item_, "mod_public") == 1)) {
                echo twig_escape_filter($this->env, __("Published"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, __("Unpublished"), "html", null, true);
            }
            echo "</a>
                        </div>
                    </div>
                    ";
            // line 16
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_item_, "user"), "username"), "html", null, true);
            echo "<br>";
            if (isset($context["Date"])) { $_Date_ = $context["Date"]; } else { $_Date_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Date_, "translate", array(0 => $this->getAttribute($_item_, "date"), 1 => "d F Y G:i:s"), "method"), "html", null, true);
            echo "
                    <br>";
            // line 17
            if (isset($context["Text"])) { $_Text_ = $context["Text"]; } else { $_Text_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Text_, "limit_chars", array(0 => strip_tags($this->getAttribute($_item_, "theme")), 1 => 100), "method"), "html", null, true);
            echo "
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 21
            echo "            <div class=\"text\">";
            echo twig_escape_filter($this->env, __("No materials"), "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 23
        echo "        <br>
        <div style=\"padding: 0 30px 30px 30px;\">
            ";
        // line 25
        if (isset($context["paginate"])) { $_paginate_ = $context["paginate"]; } else { $_paginate_ = null; }
        echo $_paginate_;
        echo "
        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "manage/materials/ehistory.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 25,  119 => 23,  110 => 21,  99 => 17,  90 => 16,  61 => 13,  57 => 12,  51 => 11,  41 => 6,  35 => 5,  31 => 3,  28 => 2,);
    }
}
