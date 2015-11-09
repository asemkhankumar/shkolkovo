<?php

/* layout/header.twig */
class __TwigTemplate_848991bc663a62219338fcf015c028d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"whole-header\">
    <div class=\"dark-header\" style=\"    width: 1099px; margin: auto;\">
        <div class=\"top-wrap\" style=\"    background-color: rgba(255, 255, 255, 1);\">
            <div class=\"wrap\" >
            <div class=\"div100\">
                ";
        // line 7
        echo "                    ";
        // line 8
        echo "                        ";
        // line 9
        echo "                    ";
        // line 10
        echo "                    ";
        // line 11
        echo "                        ";
        // line 12
        echo "                    ";
        // line 13
        echo "                ";
        // line 14
        echo "                <a class=\"ru_logo\" href=\"";
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "site", array(0 => "/"), "method"), "html", null, true);
        echo "\" ";
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        if (isset($context["nofollowlink"])) { $_nofollowlink_ = $context["nofollowlink"]; } else { $_nofollowlink_ = null; }
        if (($this->getAttribute($_Url_, "site", array(0 => "/"), "method") == $_nofollowlink_)) {
            echo "rel=\"nofollow\"";
        }
        echo ">
                    <p class=\"logo_p\" style=\"\">Школково</p>
                    <p class=\"logo_p_2\">Твой помощник по математике</p>
                </a>
                <div class=\"search\" style=\"\">
                    <form>
                        <input class=\"find\" type=\"text\" name=\"search\" value=\"\" placeholder=\"";
        // line 20
        echo twig_escape_filter($this->env, __("Поиск"), "html", null, true);
        echo "\" style=\"\"/>
                        <input type=\"image\" src = \"";
        // line 21
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/theme/shkolkovo/search.png"), "method"), "html", null, true);
        echo "\" class = 'search-button'>
                    </form>
                </div>
                ";
        // line 25
        echo "                    ";
        // line 26
        echo "                        ";
        // line 27
        echo "                            ";
        // line 28
        echo "                                ";
        // line 29
        echo "                                    ";
        // line 30
        echo "                                ";
        // line 31
        echo "                            ";
        // line 32
        echo "                            ";
        // line 33
        echo "                                ";
        // line 34
        echo "                                    ";
        // line 35
        echo "                                ";
        // line 36
        echo "                            ";
        // line 37
        echo "                        ";
        // line 38
        echo "                            ";
        // line 39
        echo "                                ";
        // line 40
        echo "                            ";
        // line 41
        echo "                            ";
        // line 42
        echo "                                ";
        // line 43
        echo "                                    ";
        // line 44
        echo "                                    ";
        // line 45
        echo "                                    ";
        // line 46
        echo "                                        ";
        // line 47
        echo "                                           ";
        // line 48
        echo "                                        ";
        // line 49
        echo "                                    ";
        // line 50
        echo "                                ";
        // line 51
        echo "                            ";
        // line 52
        echo "                        ";
        // line 53
        echo "                    ";
        // line 54
        echo "                ";
        // line 55
        echo "                <div class=\"clear\"></div>
            </div>
        </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "layout/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 55,  126 => 54,  124 => 53,  122 => 52,  120 => 51,  118 => 50,  116 => 49,  114 => 48,  112 => 47,  110 => 46,  108 => 45,  106 => 44,  104 => 43,  102 => 42,  100 => 41,  98 => 40,  96 => 39,  94 => 38,  92 => 37,  90 => 36,  88 => 35,  86 => 34,  84 => 33,  82 => 32,  80 => 31,  78 => 30,  76 => 29,  74 => 28,  72 => 27,  70 => 26,  68 => 25,  61 => 21,  57 => 20,  40 => 14,  38 => 13,  36 => 12,  34 => 11,  32 => 10,  30 => 9,  28 => 8,  26 => 7,  19 => 1,);
    }
}
