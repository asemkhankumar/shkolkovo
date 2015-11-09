<?php

/* auth/register.twig */
class __TwigTemplate_63b5295cfe5801e084cbf714ef15d171 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "site", array(0 => "auth/register"), "method"), "html", null, true);
        echo "\" style=\"margin-top: 138px; width: 800px; text-align: right; padding: 30px 0;\">
                <div>
                    <h4 class=\"form-signin-heading\">";
        // line 19
        echo twig_escape_filter($this->env, __("РЕГИСТРАЦИЯ ПОЛЬЗОВАТЕЛЯ"), "html", null, true);
        echo "</h4>
                </div>
                <div class=\"reg_form\">
                    <div>
                        <label for=\"username\">";
        // line 23
        echo twig_escape_filter($this->env, __("Имя пользователя:"), "html", null, true);
        echo "</label>
                        <input type=\"text\" name=\"username\" class=\"input-block-level ";
        // line 24
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ($this->getAttribute($_errors_, "username", array(), "any", true, true)) {
            echo "error";
        }
        echo "\" value=\"";
        if (isset($context["username"])) { $_username_ = $context["username"]; } else { $_username_ = null; }
        echo twig_escape_filter($this->env, $_username_, "html", null, true);
        echo "\" required id=\"username\">
                        ";
        // line 25
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ($this->getAttribute($_errors_, "username", array(), "any", true, true)) {
            // line 26
            echo "                            <div class=\"alert\">
                                ";
            // line 27
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            if (($this->getAttribute($_errors_, "username") == "Такой \"Имя пользователя\" уже существует")) {
                // line 28
                echo "                                    ";
                echo twig_escape_filter($this->env, __("The user with the same name already exists"), "html", null, true);
                echo "
                                ";
            } else {
                // line 30
                echo "                                    ";
                if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_errors_, "username"), "html", null, true);
                echo "
                                ";
            }
            // line 32
            echo "                            </div>
                        ";
        }
        // line 34
        echo "                    </div>
                    <div>
                    <label for=\"email\">";
        // line 36
        echo twig_escape_filter($this->env, __("E-mail:"), "html", null, true);
        echo "</label>
                    <input type=\"text\" name=\"email\" class=\"input-block-level ";
        // line 37
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ($this->getAttribute($_errors_, "email", array(), "any", true, true)) {
            echo "error";
        }
        echo "\" value=\"";
        if (isset($context["email"])) { $_email_ = $context["email"]; } else { $_email_ = null; }
        echo twig_escape_filter($this->env, $_email_, "html", null, true);
        echo "\" required id=\"email\">
                    ";
        // line 38
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ($this->getAttribute($_errors_, "email", array(), "any", true, true)) {
            // line 39
            echo "                        <div class=\"alert\">
                            ";
            // line 40
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            if (($this->getAttribute($_errors_, "email") == "Такой \"Электронная почта\" уже существует")) {
                // line 41
                echo "                                ";
                echo twig_escape_filter($this->env, __("This email already exists"), "html", null, true);
                echo "
                            ";
            } else {
                // line 43
                echo "                                ";
                if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_errors_, "email"), "html", null, true);
                echo "
                            ";
            }
            // line 45
            echo "                        </div>
                    ";
        }
        // line 47
        echo "                    </div>
                    <div>
                    <label for=\"password\">";
        // line 49
        echo twig_escape_filter($this->env, __("Пароль:"), "html", null, true);
        echo "</label>
                    <input type=\"password\" name=\"password\" class=\"input-block-level ";
        // line 50
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ($this->getAttribute($_errors_, "password", array(), "any", true, true)) {
            echo "error";
        }
        echo "\" required id=\"password\">
                    ";
        // line 51
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ($this->getAttribute($_errors_, "password", array(), "any", true, true)) {
            // line 52
            echo "                        <div class=\"alert\">";
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_errors_, "password"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 54
        echo "                    </div>
                    <div>
                    <label for=\"password_confirm\">";
        // line 56
        echo twig_escape_filter($this->env, __("Подтверждение пароля:"), "html", null, true);
        echo "</label>
                    <input type=\"password\" name=\"password_confirm\" class=\"input-block-level ";
        // line 57
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ($this->getAttribute($_errors_, "password_confirm", array(), "any", true, true)) {
            echo "error";
        }
        echo "\" required id=\"password_confirm\">
                    ";
        // line 58
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ($this->getAttribute($_errors_, "password_confirm", array(), "any", true, true)) {
            // line 59
            echo "                        <div class=\"alert\">";
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_errors_, "password_confirm"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 61
        echo "                    </div>
            <img src=\"";
        // line 62
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "/captcha/default"), "method"), "html", null, true);
        echo "\" width=\"150\" height=\"50\" alt=\"Captcha\" class=\"captcha_old\" />
            <input type=\"text\" name=\"captcha\" required style=\"margin: 0; width: 147px; height: 42px; font-size:35px\" autocomplete=\"off\" class=\"";
        // line 63
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ($this->getAttribute($_errors_, "captcha", array(), "any", true, true)) {
            echo "error";
        }
        echo "\">
            <a onclick=\"reload()\" style=\"cursor: pointer;\"><img src=\"";
        // line 64
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/theme/refresh.png"), "method"), "html", null, true);
        echo "\" width=\"16px\" height=\"16px\"></a>
            ";
        // line 65
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ($this->getAttribute($_errors_, "captcha", array(), "any", true, true)) {
            // line 66
            echo "                <div class=\"alert\">";
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_errors_, "captcha"), "html", null, true);
            echo "</div>
            ";
        }
        // line 68
        echo "            <script type=\"text/javascript\">
                function reload(){
                    id=Math.floor(Math.random()*1000000);
                    \$(\"img.captcha_old\").attr(\"src\",\"";
        // line 71
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "/captcha/default?id="), "method"), "html", null, true);
        echo "\"+id);
                }
            </script>
        </div>
        <div class=\"modal-footer\">

            <button class=\"btn btn-large btn-primary\" type=\"submit\">";
        // line 77
        echo twig_escape_filter($this->env, __("Зарегистрироваться"), "html", null, true);
        echo "</button>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "auth/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 77,  235 => 71,  230 => 68,  223 => 66,  220 => 65,  215 => 64,  208 => 63,  203 => 62,  200 => 61,  193 => 59,  190 => 58,  183 => 57,  179 => 56,  175 => 54,  168 => 52,  165 => 51,  158 => 50,  154 => 49,  150 => 47,  146 => 45,  139 => 43,  133 => 41,  130 => 40,  127 => 39,  124 => 38,  114 => 37,  110 => 36,  106 => 34,  102 => 32,  95 => 30,  89 => 28,  86 => 27,  83 => 26,  80 => 25,  70 => 24,  66 => 23,  59 => 19,  53 => 17,  50 => 16,  47 => 15,  32 => 3,  29 => 2,);
    }
}
