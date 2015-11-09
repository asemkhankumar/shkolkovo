<?php

/* errors/404.twig */
class __TwigTemplate_df7b675173c8de50c520bf61056f3dbf extends Twig_Template
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
        echo "<!doctype html>
<html lang=\"";
        // line 2
        if (isset($context["_language"])) { $__language_ = $context["_language"]; } else { $__language_ = null; }
        echo twig_escape_filter($this->env, $__language_, "html", null, true);
        echo "\">
    <head>
        <title>";
        // line 4
        if (isset($context["_metadata"])) { $__metadata_ = $context["_metadata"]; } else { $__metadata_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($__metadata_, "title"), "html", null, true);
        echo "</title>
        <meta charset=\"UTF-8\"/>
        <link rel=\"shortcut icon\" href=\"";
        // line 6
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "/favicon.png"), "method"), "html", null, true);
        echo "\"/>
        <link rel=\"icon\" href=\"";
        // line 7
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "/favicon.png"), "method"), "html", null, true);
        echo "\"/>
        <link rel=\"alternate\" type=\"application/rss+xml\" title=\"RSS\" href=\"";
        // line 8
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "site", array(0 => "rss"), "method"), "html", null, true);
        echo "\" />
        
        <link rel=\"stylesheet\" href=\"";
        // line 10
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/css/base.css"), "method"), "html", null, true);
        echo "\"/>
        <!--[if IE]><![if !IE]><![endif]--><link rel=\"stylesheet\" href=\"";
        // line 11
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/css/pt-serif-embedded.css"), "method"), "html", null, true);
        echo "\"/><!--[if IE]><![endif]><![endif]-->
        <!--[if IE]><![if !IE]><![endif]--><link rel=\"stylesheet\" href=\"";
        // line 12
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/css/pt-sans-embedded.css"), "method"), "html", null, true);
        echo "\"/><!--[if IE]><![endif]><![endif]-->
        <!--[if IE]><link rel=\"stylesheet\" href=\"";
        // line 13
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/css/pt-sans-embedded-ie.css"), "method"), "html", null, true);
        echo "\"/><![endif]-->
        <!--[if IE]><link rel=\"stylesheet\" href=\"";
        // line 14
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/css/pt-serif-embedded-ie.css"), "method"), "html", null, true);
        echo "\"/><![endif]-->
        <!--[if IE]><link rel=\"stylesheet\" href=\"";
        // line 15
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/css/pt-serif-bold-embedded-ie.css"), "method"), "html", null, true);
        echo "\"/><![endif]-->
        <!--[if IE]><link rel=\"stylesheet\" href=\"";
        // line 16
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/css/pt-serif-italic-embedded-ie.css"), "method"), "html", null, true);
        echo "\"/><![endif]-->
        <link rel=\"stylesheet\" href=\"";
        // line 17
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/css/errors.css"), "method"), "html", null, true);
        echo "\"/>

        <!--[if lt IE 9]><script type=\"text/javascript\" async=\"async\" src=\"";
        // line 19
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/js/html5fix.js"), "method"), "html", null, true);
        echo "\"></script><![endif]-->
        <script type=\"text/javascript\" src=\"";
        // line 20
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/js/jquery.min.js"), "method"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 21
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/js/errors.js"), "method"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        <div id=\"content\">
            <div id=\"error-bg\" style=\"background: url('/media/theme/uchebnik/background.jpg') no-repeat; background-size: 100%;\">
                ";
        // line 27
        echo "            </div>
            
            <div id=\"main-block\" style=\"margin: auto;    left: 0;    right: 0;\">
                ";
        // line 31
        echo "                <div id=\"logo-text\">
                    ";
        // line 33
        echo "                    ";
        // line 34
        echo "                </div>
                <div id=\"error-name\">";
        // line 35
        echo __("Error 404");
        echo "</div>
                
                <div id=\"error-text\">
                    ";
        // line 38
        if (isset($context["no_translation"])) { $_no_translation_ = $context["no_translation"]; } else { $_no_translation_ = null; }
        if (($_no_translation_ != "no_translation")) {
            // line 39
            echo "                        <p>";
            echo twig_escape_filter($this->env, __("Page does not exist or has been removed"), "html", null, true);
            echo "</p>
                        <p>";
            // line 40
            echo twig_escape_filter($this->env, __("You can go"), "html", null, true);
            echo " <a href=\"/\">";
            echo twig_escape_filter($this->env, __("to home"), "html", null, true);
            echo "</a>.</p>
                    ";
        } else {
            // line 42
            echo "                        <p>";
            echo twig_escape_filter($this->env, __("Sorry translation of this publication does not exist"), "html", null, true);
            echo ".</p>
                        <p>";
            // line 43
            echo twig_escape_filter($this->env, __("You can go"), "html", null, true);
            echo " <a href=\"javascript:history.back()\">";
            echo twig_escape_filter($this->env, __("back"), "html", null, true);
            echo "</a> ";
            echo twig_escape_filter($this->env, __("or go"), "html", null, true);
            echo " <a href=\"/\">";
            echo twig_escape_filter($this->env, __("to home"), "html", null, true);
            echo "</a></p>
                    ";
        }
        // line 45
        echo "                </div>
                
                ";
        // line 48
        echo "                    ";
        // line 49
        echo "                        ";
        // line 50
        echo "                        ";
        // line 51
        echo "                    ";
        // line 52
        echo "                ";
        // line 53
        echo "            </div>
        </div>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "errors/404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 53,  172 => 52,  170 => 51,  168 => 50,  166 => 49,  164 => 48,  160 => 45,  149 => 43,  144 => 42,  137 => 40,  132 => 39,  129 => 38,  123 => 35,  120 => 34,  118 => 33,  115 => 31,  110 => 27,  101 => 21,  96 => 20,  91 => 19,  85 => 17,  80 => 16,  75 => 15,  70 => 14,  65 => 13,  60 => 12,  55 => 11,  50 => 10,  44 => 8,  39 => 7,  34 => 6,  28 => 4,  22 => 2,  19 => 1,);
    }
}
