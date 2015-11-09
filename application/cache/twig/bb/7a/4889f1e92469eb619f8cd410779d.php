<?php

/* manage/biography/index.twig */
class __TwigTemplate_bb7a4889f1e92469eb619f8cd410779d extends Twig_Template
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
        <div class=\"pull-right\">
            <a class=\"btn btn-success\" href=\"";
        // line 5
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/biography/category"), "method"), "html", null, true);
        echo "\"><i class=\"icon-list\"></i> ";
        echo twig_escape_filter($this->env, __("All categories"), "html", null, true);
        echo "</a>
            <a class=\"btn btn-success\" href=\"";
        // line 6
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/biography/edit/page-" . $_page_)), "method"), "html", null, true);
        echo "\"><i class=\"icon-plus\"></i> ";
        echo twig_escape_filter($this->env, __("Add"), "html", null, true);
        echo "</a>
        </div>
        <form action=\"\" method=\"POST\" style=\"margin: 0\">
            <input type=\"text\" name=\"search\" id=\"search\" class=\"input-xxlarge\" value=\"\" style=\"margin: 0\" placeholder=\"";
        // line 9
        echo twig_escape_filter($this->env, __("Search"), "html", null, true);
        echo "\"/>
        </form>
        <div class=\"clear\"></div>
    </div>
    <div class=\"page\">
        <form action=\"\" method=\"POST\" style=\"margin: 0\">
            <select id=\"category\" name=\"category\" onchange=\"submit();\">
                <option value=\"0\" ";
        // line 16
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if (($_category_ == 0)) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, __("All categories"), "html", null, true);
        echo "</option>
                ";
        // line 17
        if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_categories_);
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 18
            echo "                    <option value=";
            if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_cat_, "id"), "html", null, true);
            echo " ";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
            if (($_category_ == $this->getAttribute($_cat_, "id"))) {
                echo "selected";
            }
            echo ">";
            if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_cat_, "title"), "html", null, true);
            if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
            if (($this->getAttribute($_cat_, "era") == 1)) {
                echo "(Ист.Л.)";
            } else {
                echo "(Совр.)";
            }
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 20
        echo "            </select>
        </form>
        ";
        // line 22
        if (isset($context["list"])) { $_list_ = $context["list"]; } else { $_list_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_list_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            echo "            <div class=\"well well-small\">
                <div class=\"text\">
                    <div class=\"date\">
                        <span class=\"btn-group pull-right\">
                            <a class=\"btn btn-success btn-mini\" href=\"";
            // line 27
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            if (($_category_ != 0)) {
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((((("manage/biography/up/" . $this->getAttribute($_item_, "id")) . "/") . $_category_) . "/page-") . $_page_)), "method"), "html", null, true);
            } else {
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/biography/up/" . $this->getAttribute($_item_, "id")) . "/page-") . $_page_)), "method"), "html", null, true);
            }
            echo "\"><i class=\"icon-arrow-up\"></i></a>
                            <a class=\"btn btn-danger btn-mini\" href=\"";
            // line 28
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            if (($_category_ != 0)) {
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/biography/down/" . $this->getAttribute($_item_, "id")) . "/") . $_category_)), "method"), "html", null, true);
            } else {
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/biography/down/" . $this->getAttribute($_item_, "id")) . "/page-") . $_page_)), "method"), "html", null, true);
            }
            echo "\"><i class=\"icon-arrow-down\"></i></a>
                            <a class=\"btn btn-mini\" href=\"";
            // line 29
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/biography/view/" . $this->getAttribute($_item_, "id")) . "/page-") . $_page_)), "method"), "html", null, true);
            echo "\"><i class=\"icon-eye-open\"> </i> Просмотр</a>
                            <a class=\"btn btn-mini\" href=\"";
            // line 30
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/biography/edit/" . $this->getAttribute($_item_, "id")) . "/page-") . $_page_)), "method"), "html", null, true);
            echo "\"><i class=\"icon-edit\"> </i> Редактировать</a>
                            ";
            // line 31
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "published")) {
                // line 32
                echo "                                <a class=\"btn btn-mini btn-warning\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/biography/published/" . $this->getAttribute($_item_, "id")) . "/page-") . $_page_)), "method"), "html", null, true);
                echo "\"><i class=\"icon-eye-close\"> </i> Скрыть</a>
                            ";
            } else {
                // line 34
                echo "                                <a class=\"btn btn-mini btn-success\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((((("manage/biography/published/" . $this->getAttribute($_item_, "id")) . "/page-") . $_page_) . "/page-") . $_page_)), "method"), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/biography/important/" . $this->getAttribute($_item_, "id")) . "/page-") . $_page_)), "method"), "html", null, true);
                echo "\"><i class=\"icon-eye-close\"> </i> Убрать с главной</a>
                            ";
            } else {
                // line 39
                echo "                                <a class=\"btn btn-mini btn-success\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/biography/important/" . $this->getAttribute($_item_, "id")) . "/page-") . $_page_)), "method"), "html", null, true);
                echo "\"><i class=\"icon-eye-open\"> </i> На главную</a>
                            ";
            }
            // line 41
            echo "                            <a class=\"btn btn-mini btn-danger\" href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/biography/delete/" . $this->getAttribute($_item_, "id")) . "/page-") . $_page_)), "method"), "html", null, true);
            echo "\"><i class=\"icon-remove\"> </i></a>
                        </span>
                        <div class=\"pull-left\">(";
            // line 43
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "getYear", array(0 => "date_start"), "method"), "html", null, true);
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "getYear", array(0 => "date_finish"), "method")) {
                echo " — ";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "getYear", array(0 => "date_finish"), "method"), "html", null, true);
            }
            echo ")
                        <a class=\"link\" href=\"";
            // line 44
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/biography/view/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\">";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "name"), "html", null, true);
            echo "</a>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                    <div>
                        ";
            // line 49
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "desc"), "html", null, true);
            echo "<br>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 54
        echo "        ";
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        if (($_category_ == 0)) {
            // line 55
            echo "            ";
            if (isset($context["paginate"])) { $_paginate_ = $context["paginate"]; } else { $_paginate_ = null; }
            echo $_paginate_;
            echo "
        ";
        }
        // line 57
        echo "
    </div>


";
    }

    public function getTemplateName()
    {
        return "manage/biography/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 57,  253 => 55,  249 => 54,  237 => 49,  224 => 44,  213 => 43,  204 => 41,  195 => 39,  186 => 37,  182 => 36,  173 => 34,  164 => 32,  161 => 31,  154 => 30,  147 => 29,  132 => 28,  116 => 27,  110 => 23,  105 => 22,  101 => 20,  76 => 18,  71 => 17,  62 => 16,  52 => 9,  42 => 6,  35 => 5,  31 => 3,  28 => 2,);
    }
}
