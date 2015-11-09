<?php

/* manage/first/index.twig */
class __TwigTemplate_0e85972521808696a6b7d15924735ec0 extends Twig_Template
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
        echo "    <div class=\"page-header\">

        <div class=\"pull-left\">
            <h4>";
        // line 6
        echo twig_escape_filter($this->env, __("Хроника деятельности Первого Президента"), "html", null, true);
        echo "</h4>
        </div>

        <div class=\"pull-right\">
            <a class=\"btn btn-success\" href=\"";
        // line 10
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/first/new"), "method"), "html", null, true);
        echo "\"><i class=\"icon-plus\"></i> ";
        echo twig_escape_filter($this->env, __("Add"), "html", null, true);
        echo "</a>
        </div>

        <div class=\"clear\"></div>
    </div>

    <div class=\"page\">
        <table class=\"table table-striped\">
            ";
        // line 18
        if (isset($context["firstlist"])) { $_firstlist_ = $context["firstlist"]; } else { $_firstlist_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_firstlist_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "                <tr id='";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "id"), "html", null, true);
            echo "'>
                    <td>
                        ";
            // line 21
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
            echo "
                    </td>
                    <td>
                        <div class=\"btn-group pull-right\">

                            ";
            // line 26
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "show_ru")) {
                // line 27
                echo "                                <a class=\"btn btn-mini btn-success\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/first/show_ru/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\">RU</a>
                            ";
            } else {
                // line 29
                echo "                                <a class=\"btn btn-mini btn-warning\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/first/show_ru/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\">RU</a>
                            ";
            }
            // line 31
            echo "
                            ";
            // line 32
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "show_kz")) {
                // line 33
                echo "                                <a class=\"btn btn-mini btn-success\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/first/show_kz/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\">KZ</a>
                            ";
            } else {
                // line 35
                echo "                                <a class=\"btn btn-mini btn-warning\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/first/show_kz/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\">KZ</a>
                            ";
            }
            // line 37
            echo "
                            ";
            // line 38
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "show_en")) {
                // line 39
                echo "                                <a class=\"btn btn-mini btn-success\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/first/show_en/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\">EN</a>
                            ";
            } else {
                // line 41
                echo "                                <a class=\"btn btn-mini btn-warning\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/first/show_en/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\">EN</a>
                            ";
            }
            // line 43
            echo "
                            <a class=\"btn btn-mini\" href=\"";
            // line 44
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/first/edit/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\"><i class=\"icon-edit\"></i> Редактировать</a>

                            ";
            // line 46
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "is_published")) {
                // line 47
                echo "                                <a class=\"btn btn-mini btn-warning\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/first/published/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\">Скрыть</a>
                            ";
            } else {
                // line 49
                echo "                                <a class=\"btn btn-mini btn-success\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/first/published/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\">Отображать</a>
                            ";
            }
            // line 51
            echo "
                            <a class=\"btn btn-mini btn-danger\" href=\"";
            // line 52
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/first/delete/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\"><i class=\"icon-remove icon-white\"></i></a>
                        </div>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 57
        echo "        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "manage/first/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 57,  173 => 52,  170 => 51,  162 => 49,  154 => 47,  151 => 46,  144 => 44,  141 => 43,  133 => 41,  125 => 39,  122 => 38,  119 => 37,  111 => 35,  103 => 33,  100 => 32,  97 => 31,  89 => 29,  81 => 27,  78 => 26,  69 => 21,  62 => 19,  57 => 18,  43 => 10,  36 => 6,  31 => 3,  28 => 2,);
    }
}
