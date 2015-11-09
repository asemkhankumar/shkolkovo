<?php

/* manage/auth/login.twig */
class __TwigTemplate_6aa281c39731646f8520d73e1e9f5b4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("manage/layout/html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "manage/layout/html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"container\">
   <form class=\"modal\" method=\"post\">
        <div class=\"modal-header\">
        <h4 class=\"form-signin-heading\">Укажите данные для входа</h4>
        </div>
        <div class=\"modal-body\">
            ";
        // line 9
        if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
        if ($_error_) {
            echo "<div class=\"alert alert-error\"><strong>Ошибка!</strong> Имя пользователя или пароль не верны</div>";
        }
        // line 10
        echo "            ";
        if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
        if ($_message_) {
            echo "<div class=\"alert alert-error\"><strong>Ошибка!</strong> Неверно введён проверочный код</div>";
        }
        // line 11
        echo "        <input type=\"text\" name=\"username\" class=\"input-block-level\" placeholder=\"Адрес электронной почты\" value=\"";
        if (isset($context["username"])) { $_username_ = $context["username"]; } else { $_username_ = null; }
        echo twig_escape_filter($this->env, $_username_, "html", null, true);
        echo "\">
        <input type=\"password\" name=\"password\" class=\"input-block-level\" placeholder=\"Пароль\">
        <label class=\"checkbox\">
            <input type=\"checkbox\" name=\"remember\" id=\"remember\" value=\"1\" ";
        // line 14
        if (isset($context["remember"])) { $_remember_ = $context["remember"]; } else { $_remember_ = null; }
        echo twig_escape_filter($this->env, $_remember_, "html", null, true);
        echo "><label for=\"remember\">Запомнить меня</label>
        </label>
        </div>
        <div style=\"padding: 15px\">
            <div style=\"display: inline-block\">
                <label for=\"captcha\">Введите символы с картинки: *</label>
                <input name=\"captcha\" type=\"text\" id=\"captcha\" />
            </div>
            <div style=\"display: inline-block;   margin-left: 15px;  vertical-align: top;\">";
        // line 22
        if (isset($context["captcha"])) { $_captcha_ = $context["captcha"]; } else { $_captcha_ = null; }
        echo $_captcha_;
        echo "</div>
        </div>
        <div class=\"modal-footer\">
        <button class=\"btn btn-large btn-primary\" type=\"submit\">Войти в систему</button>
        </div>
    </form>

</div>
";
    }

    public function getTemplateName()
    {
        return "manage/auth/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 22,  58 => 14,  50 => 11,  44 => 10,  39 => 9,  31 => 3,  28 => 2,);
    }
}
