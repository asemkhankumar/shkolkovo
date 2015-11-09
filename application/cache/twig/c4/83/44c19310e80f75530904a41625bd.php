<?php

/* manage/layout/html.twig */
class __TwigTemplate_c48344c19310e80f75530904a41625bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
    <meta charset=\"";
        // line 5
        if (isset($context["_metadata"])) { $__metadata_ = $context["_metadata"]; } else { $__metadata_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($__metadata_, "charset"), "html", null, true);
        echo "\"/>
    <meta http-equiv=\"X-UA-Compatible\" value=\"IE=Edge,chrome=1\" />
    <link rel=\"shortcut icon\" href=\"";
        // line 7
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "/favicon.png"), "method"), "html", null, true);
        echo "\" />
    <link rel=\"icon\" href=\"";
        // line 8
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "/favicon.png"), "method"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 9
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/css/manage/bootstrap.min.css"), "method"), "html", null, true);
        echo "\"/>
    <!--[if IE]><![if !IE]><![endif]--><link rel=\"stylesheet\" href=\"";
        // line 10
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/css/font-awesome-embedded.css"), "method"), "html", null, true);
        echo "\"/><!--[if IE]><![endif]><![endif]-->
    <!--[if IE]><link rel=\"stylesheet\" href=\"";
        // line 11
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/css/font-awesome-embedded-ie.css"), "method"), "html", null, true);
        echo "\"/><![endif]-->
    <link rel=\"stylesheet\" href=\"";
        // line 12
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/css/font-awesome.css"), "method"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 13
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/css/redactor/redactor.css"), "method"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 14
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/css/manage.css"), "method"), "html", null, true);
        echo "\"/>
</head>
<body>
    ";
        // line 17
        $this->displayBlock('content', $context, $blocks);
        // line 19
        echo "</body>
</html>";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "    ";
    }

    public function getTemplateName()
    {
        return "manage/layout/html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 18,  89 => 17,  84 => 19,  82 => 17,  75 => 14,  65 => 12,  60 => 11,  55 => 10,  45 => 8,  40 => 7,  34 => 5,  29 => 4,  23 => 2,  20 => 1,  70 => 13,  58 => 14,  50 => 9,  44 => 10,  39 => 9,  31 => 3,  28 => 2,);
    }
}
