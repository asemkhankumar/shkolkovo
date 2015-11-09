<?php

/* manage/project/index.twig */
class __TwigTemplate_483e338ea0d3cf585494bcec46e800a7 extends Twig_Template
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <form action=\"\" method=\"POST\" style=\"margin: 0\">
        <div class=\"page-header\">
        <div class=\"pull-right\">
            <a class=\"btn btn-success\" href=\"";
        // line 7
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/project/edit/page-" . $_page_)), "method"), "html", null, true);
        echo "\"><i class=\"icon-plus\"></i> ";
        echo twig_escape_filter($this->env, __("Add"), "html", null, true);
        echo "</a>
        </div>

            <input type=\"text\" name=\"search\" id=\"search\" class=\"input-xxlarge\" value=\"\" style=\"margin: 0\" placeholder=\"";
        // line 10
        echo twig_escape_filter($this->env, __("Search"), "html", null, true);
        echo "\"/>

        <div class=\"clear\"></div>
    </div>



    <div class=\"page\">

        ";
        // line 19
        if (isset($context["list"])) { $_list_ = $context["list"]; } else { $_list_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_list_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 20
            echo "            <div class=\"well well-small\">
                <div class=\"text\">
                    <div class=\"date\">
                        <span class=\"btn-group pull-right\">
                           <a class=\"btn btn-mini btn-success\" href=\"";
            // line 24
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/search/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\"><i class=\"icon-eye-open\"> </i> Поиск</a>

                            <a class=\"btn btn-success btn-mini\" href=\"";
            // line 26
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/project/up/" . $this->getAttribute($_item_, "id")) . "/page-") . $_page_)), "method"), "html", null, true);
            echo "\"><i class=\"icon-arrow-up\"></i></a>
                            <a class=\"btn btn-danger btn-mini\" href=\"";
            // line 27
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/project/down/" . $this->getAttribute($_item_, "id")) . "/page-") . $_page_)), "method"), "html", null, true);
            echo "\"><i class=\"icon-arrow-down\"></i></a>
                            <a class=\"btn btn-mini\" href=\"";
            // line 28
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/project/view/" . $this->getAttribute($_item_, "id")) . "/page-") . $_page_)), "method"), "html", null, true);
            echo "\"><i class=\"icon-eye-open\"> </i> Просмотр</a>
                            <a class=\"btn btn-mini\" href=\"";
            // line 29
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/project/edit/" . $this->getAttribute($_item_, "id")) . "/page-") . $_page_)), "method"), "html", null, true);
            echo "\"><i class=\"icon-edit\"> </i> Редактировать</a>
                            ";
            // line 30
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "published")) {
                // line 31
                echo "                                <a class=\"btn btn-mini btn-warning\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/project/published/" . $this->getAttribute($_item_, "id")) . "/page-") . $_page_)), "method"), "html", null, true);
                echo "\"><i class=\"icon-eye-close\">
                                    </i> Скрыть</a>
                            ";
            } else {
                // line 34
                echo "                                <a class=\"btn btn-mini btn-success\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((((("manage/project/published/" . $this->getAttribute($_item_, "id")) . "/page-") . $_page_) . "/page-") . $_page_)), "method"), "html", null, true);
                echo "\"><i class=\"icon-eye-open\"> </i> Опубликовать</a>
                            ";
            }
            // line 36
            echo "                            ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "is_important")) {
                // line 37
                echo "                                <a class=\"btn btn-mini btn-warning\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/project/important/" . $this->getAttribute($_item_, "id")) . "/page-") . $_page_)), "method"), "html", null, true);
                echo "\"><i class=\"icon-eye-close\"> </i> Убрать с главной</a>
                            ";
            } else {
                // line 39
                echo "                                <a class=\"btn btn-mini btn-success\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/project/important/" . $this->getAttribute($_item_, "id")) . "/page-") . $_page_)), "method"), "html", null, true);
                echo "\"><i class=\"icon-eye-open\"> </i> На главную</a>
                            ";
            }
            // line 41
            echo "                            <a class=\"btn btn-mini btn-danger\" href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/project/delete/" . $this->getAttribute($_item_, "id")) . "/page-") . $_page_)), "method"), "html", null, true);
            echo "\"><i class=\"icon-remove\"> </i></a>
                        </span>
                       <a class=\"link\" href=\"";
            // line 43
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/project/view/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\">";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "name"), "html", null, true);
            echo "</a>
                    </div>
                        <div class=\"clear\"></div>
                </div>
                    <div>
                        ";
            // line 48
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "desc"), "html", null, true);
            echo "<br>
                    </div>
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 53
        echo "
            ";
        // line 54
        if (isset($context["paginate"])) { $_paginate_ = $context["paginate"]; } else { $_paginate_ = null; }
        echo $_paginate_;
        echo "


    </div>
    </form>

";
    }

    public function getTemplateName()
    {
        return "manage/project/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 54,  182 => 53,  170 => 48,  157 => 43,  148 => 41,  139 => 39,  130 => 37,  126 => 36,  117 => 34,  107 => 31,  104 => 30,  97 => 29,  90 => 28,  83 => 27,  76 => 26,  69 => 24,  63 => 20,  58 => 19,  46 => 10,  36 => 7,  31 => 4,  28 => 3,);
    }
}
