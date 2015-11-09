<?php

/* manage/specprojects/title.twig */
class __TwigTemplate_123ddd59bf8644e7589076b0768a8cff extends Twig_Template
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
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 2
        echo "    <h4>";
        if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
        if (((twig_lower_filter($this->env, $this->getAttribute($__request_, "param", array(0 => "type"), "method")) == "1") && (twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "specprojects"))) {
            echo " Спец. проект: \"Устная история\" ";
        }
        // line 3
        echo "        ";
        if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
        if (((twig_lower_filter($this->env, $this->getAttribute($__request_, "param", array(0 => "type"), "method")) == "2") && (twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "specprojects"))) {
            echo " Спец. проект: \"Краеведение\" ";
        }
        // line 4
        echo "        ";
        if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
        if (((twig_lower_filter($this->env, $this->getAttribute($__request_, "param", array(0 => "type"), "method")) == "3") && (twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "specprojects"))) {
            echo " Спец. проект: \"Орнаменты\" ";
        }
        // line 5
        echo "        ";
        if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
        if (((twig_lower_filter($this->env, $this->getAttribute($__request_, "param", array(0 => "type"), "method")) == "4") && (twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "specprojects"))) {
            echo " Спец. проект: \"Шежире\" ";
        }
        // line 6
        echo "    </h4>
";
    }

    public function getTemplateName()
    {
        return "manage/specprojects/title.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 6,  44 => 5,  38 => 4,  32 => 3,  26 => 2,  20 => 1,  233 => 72,  230 => 71,  218 => 66,  204 => 61,  198 => 60,  190 => 58,  187 => 57,  178 => 55,  169 => 53,  166 => 52,  163 => 51,  154 => 49,  145 => 47,  142 => 46,  139 => 45,  130 => 43,  121 => 41,  118 => 40,  115 => 39,  106 => 37,  97 => 35,  94 => 34,  87 => 33,  79 => 32,  73 => 26,  68 => 25,  62 => 21,  53 => 16,  41 => 8,  36 => 5,  34 => 4,  31 => 3,  28 => 2,);
    }
}
