<?php

/* manage/users/index.twig */
class __TwigTemplate_21cf6eb11971643640d0b24bdae3f8c8 extends Twig_Template
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
        echo "<div class=\"page-header\">
    <form action=\"\" method=\"POST\" style=\"margin: 0;\">
        <input type=\"text\" name=\"search\" id=\"search\" class=\"input-xxlarge\" value=\"";
        // line 5
        if (isset($context["search"])) { $_search_ = $context["search"]; } else { $_search_ = null; }
        echo twig_escape_filter($this->env, $_search_, "html", null, true);
        echo "\" style=\"margin: 0;\" placeholder=\"Поиск пользователя\"/>
        <div class=\"pull-right\">
            <a class=\"btn btn-success\" href=\"";
        // line 7
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/users/new/page-" . $_page_)), "method"), "html", null, true);
        echo "\"><i class=\"icon-plus\"></i> ";
        echo twig_escape_filter($this->env, __("Add"), "html", null, true);
        echo "</a>
        </div>
    </form>

</div>
<div class=\"modal-body\">
    ";
        // line 13
        if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_users_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 14
            echo "        <div class=\"list-row\" style=\"margin-left: 10px;\">
            <span>";
            // line 15
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "username"), "html", null, true);
            echo " (";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "email"), "html", null, true);
            echo ")</span>
            <a href=\"";
            // line 16
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/profiles/edit/" . $this->getAttribute($_user_, "id"))), "method"), "html", null, true);
            echo "\">";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_user_, "profile"), "email"), "html", null, true);
            echo "</a>

            <div class=\"pull-right btn-group\">

                <a class=\"btn btn-mini\" href=\"";
            // line 20
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/users/roles/" . $this->getAttribute($_user_, "id")) . "/page-") . $_page_)), "method"), "html", null, true);
            echo "\"><i class=\"icon-user\"></i> Права</a>

                <a class=\"btn btn-mini\" href=\"";
            // line 22
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/users/edit/" . $this->getAttribute($_user_, "id")) . "/page-") . $_page_)), "method"), "html", null, true);
            echo "\"><i class=\"icon-edit\"></i> ";
            echo twig_escape_filter($this->env, __("Edit"), "html", null, true);
            echo "</a>

                <a class=\"btn btn-mini\" href=\"";
            // line 24
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/users/password/" . $this->getAttribute($_user_, "id")) . "/page-") . $_page_)), "method"), "html", null, true);
            echo "\"><i class=\"icon-asterisk\"></i> Изменить пароль</a>

                ";
            // line 26
            if (isset($context["logins"])) { $_logins_ = $context["logins"]; } else { $_logins_ = null; }
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (($this->getAttribute($_logins_, $this->getAttribute($_user_, "id"), array(), "array") == 1)) {
                // line 27
                echo "                    <a class=\"btn btn-mini btn-danger\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/users/block/" . $this->getAttribute($_user_, "id")) . "/page-") . $_page_)), "method"), "html", null, true);
                echo "\"><i class=\"icon-lock\"></i> Заблокировать</a>
                ";
            } else {
                // line 29
                echo "                    <a class=\"btn btn-mini btn-success\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/users/unblock/" . $this->getAttribute($_user_, "id")) . "/page-") . $_page_)), "method"), "html", null, true);
                echo "\"><i class=\"icon-unlock\"></i> Разблокировать</a>
                ";
            }
            // line 31
            echo "            </div>
            <div class=\"clear\"></div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "        <div class=\"alert alert-info\">Пользователи не найдены</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 37
        echo "    ";
        if (isset($context["paginate"])) { $_paginate_ = $context["paginate"]; } else { $_paginate_ = null; }
        echo $_paginate_;
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "manage/users/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 37,  139 => 35,  131 => 31,  122 => 29,  113 => 27,  109 => 26,  101 => 24,  91 => 22,  83 => 20,  71 => 16,  63 => 15,  60 => 14,  54 => 13,  41 => 7,  35 => 5,  31 => 3,  28 => 2,);
    }
}
