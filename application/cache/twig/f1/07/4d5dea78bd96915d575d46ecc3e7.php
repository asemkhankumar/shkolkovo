<?php

/* auth/enter.twig */
class __TwigTemplate_f1074d5dea78bd96915d575d46ecc3e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout/html.twig");

        $this->blocks = array(
            'extrastyles' => array($this, 'block_extrastyles'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_extrastyles($context, array $blocks = array())
    {
        // line 3
        echo "    <style>
        section{
            background-color: #faf9f5;
        }
        footer .whole-footer{
            margin: 0!important;
        }
        form{
            margin: 0;
        }
    </style>
";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "    <div class=\"wrap\">
        <form method=\"post\" action=\"";
        // line 17
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "site", array(0 => "auth/enter"), "method"), "html", null, true);
        echo "\" style=\"margin-top: 138px; width: 800px; text-align: right;\">
            <input type=\"hidden\" name=\"token_auth\" value=\"";
        // line 18
        if (isset($context["_token"])) { $__token_ = $context["_token"]; } else { $__token_ = null; }
        echo twig_escape_filter($this->env, $__token_, "html", null, true);
        echo "\">
            <div class=\"modal-header\">
                ";
        // line 21
        echo "                <h4 class=\"form-signin-heading\">";
        echo twig_escape_filter($this->env, __("Enter login information"), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"modal-body reg_form\">
                <div>
                    ";
        // line 25
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ($this->getAttribute($_errors_, "username", array(), "any", true, true)) {
            // line 26
            echo "                        <div class=\"alert\">";
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_errors_, "username"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 28
        echo "                    <label for=\"username\">";
        echo twig_escape_filter($this->env, __("E-mail"), "html", null, true);
        echo "</label>
                    <input type=\"text\" name=\"username\" class=\"input-block-level\" value=\"\" id =\"username\" required=\"required\">
                </div>
                <div>
                    <label for=\"password\">";
        // line 32
        echo twig_escape_filter($this->env, __("Password"), "html", null, true);
        echo "</label>
                    <input type=\"password\" name=\"password\" class=\"input-block-level\" id=\"password\" required>
                </div>
                ";
        // line 35
        if (isset($context["captcha"])) { $_captcha_ = $context["captcha"]; } else { $_captcha_ = null; }
        if ($_captcha_) {
            // line 36
            echo "                    <img src=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "/captcha/default"), "method"), "html", null, true);
            echo "\" width=\"150\" height=\"50\" alt=\"Captcha\" class=\"captcha_old\"/>
                    <input type=\"text\" name=\"captcha\" required style=\"margin: 0; width: 147px; height: 42px; font-size:35px\" autocomplete=\"off\">
                    <a onclick=\"reload()\" style=\"cursor: pointer;\"><img src=\"";
            // line 38
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/theme/refresh.png"), "method"), "html", null, true);
            echo "\" width=\"16px\" height=\"16px\"></a>
                    ";
            // line 39
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            if ($this->getAttribute($_errors_, "captcha", array(), "any", true, true)) {
                // line 40
                echo "                        <div class=\"alert\">";
                if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_errors_, "captcha"), "html", null, true);
                echo "</div>
                    ";
            }
            // line 42
            echo "                    <script type=\"text/javascript\">
                        function reload(){
                            var id=Math.floor(Math.random()*1000000);
                            \$(\"img.captcha_old\").attr(\"src\",\"";
            // line 45
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "/captcha/default?id="), "method"), "html", null, true);
            echo "\"+id);
                        }
                    </script>
                ";
        }
        // line 49
        echo "                <a href=\"";
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "site", array(0 => "auth/reminder"), "method"), "html", null, true);
        echo "\" class=\"font-eleven\">";
        echo twig_escape_filter($this->env, __("Forgot Password?"), "html", null, true);
        echo "</a>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-large btn-primary\" type=\"submit\">";
        // line 52
        echo twig_escape_filter($this->env, __("Do Login"), "html", null, true);
        echo "</button>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "auth/enter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 52,  134 => 49,  126 => 45,  121 => 42,  114 => 40,  111 => 39,  106 => 38,  99 => 36,  96 => 35,  90 => 32,  82 => 28,  75 => 26,  72 => 25,  64 => 21,  58 => 18,  53 => 17,  50 => 16,  47 => 15,  32 => 3,  29 => 2,);
    }
}
