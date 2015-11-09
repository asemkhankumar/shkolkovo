<?php

/* manage/video/index.twig */
class __TwigTemplate_1475b6750714c97de9bd711b16ff5356 extends Twig_Template
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
        <strong>Список категорий видео</strong>
        <div class=\"pull-right\">
            <a class=\"btn\" href=\"";
        // line 6
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/video/newcategory"), "method"), "html", null, true);
        echo "\"><i class=\"icon-plus\"> ";
        echo twig_escape_filter($this->env, __("Add"), "html", null, true);
        echo "</i></a>
        </div>
        <div class=\"clear\"></div>
    </div>

    <div class=\"page\">
        <table class=\"table table-striped\">
            <tr>
                <td>
                    <div style=\"padding-left: 1em\">
                        ВИДЕО БЕЗ КАТЕГОРИИ (";
        // line 16
        if (isset($context["count_video_not_category"])) { $_count_video_not_category_ = $context["count_video_not_category"]; } else { $_count_video_not_category_ = null; }
        echo twig_escape_filter($this->env, $_count_video_not_category_, "html", null, true);
        echo ")
                    </div>
                </td>
                <td>
                    <div class=\"btn-group pull-right\">
                        <a class=\"btn btn-mini btn-info\" href=\"";
        // line 21
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/video/category"), "method"), "html", null, true);
        echo "\"><i class=\"icon-play-circle\"></i> Видео (";
        if (isset($context["count_video_not_category"])) { $_count_video_not_category_ = $context["count_video_not_category"]; } else { $_count_video_not_category_ = null; }
        echo twig_escape_filter($this->env, $_count_video_not_category_, "html", null, true);
        echo ")</a>
                    </div>
                </td>
            </tr>
        ";
        // line 25
        if (isset($context["list"])) { $_list_ = $context["list"]; } else { $_list_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_list_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 26
            echo "            <tr>
                <td>
                    <div style=\"padding-left: ";
            // line 28
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "level"), "html", null, true);
            echo "em\">
                        ";
            // line 29
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "name"), "html", null, true);
            echo "
                    </div>
                </td>
                <td>
                    <div class=\"btn-group pull-right\">
                        ";
            // line 34
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (($this->getAttribute($_item_, "lvl") == 1)) {
                // line 35
                echo "                            <a class=\"btn btn-mini\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/video/newcategory/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\"><i class=\"icon-plus\"></i> Подкатегория</a>
                        ";
            } elseif (($this->getAttribute($_item_, "lvl") == 2)) {
                // line 37
                echo "                            <a class=\"btn btn-mini btn-info\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/video/category/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\"><i class=\"icon-play-circle\"></i> Видео (";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_item_, "videos"), "count_all", array(), "method"), "html", null, true);
                echo ")</a>
                            <a class=\"btn btn-mini\" href=\"";
                // line 38
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/video/newcategory/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\"><i class=\"icon-plus\"></i> Подкатегория с названием сериала</a>
                        ";
            } else {
                // line 40
                echo "                            <a class=\"btn btn-mini btn-info\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/video/category/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\"><i class=\"icon-play-circle\"></i> Видео (";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_item_, "videos"), "count_all", array(), "method"), "html", null, true);
                echo ")</a>
                        ";
            }
            // line 42
            echo "                        <a class=\"btn btn-mini\" href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/video/editcategory/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\"><i class=\"icon-edit\"></i> Редактировать</a>
                        <a class=\"btn btn-mini btn-danger\" href=\"";
            // line 43
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/video/deletecategory/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\"><i class=\"icon-remove icon-white\"></i></a>
                    </div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 48
        echo "        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "manage/video/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 48,  141 => 43,  134 => 42,  123 => 40,  116 => 38,  106 => 37,  98 => 35,  95 => 34,  86 => 29,  81 => 28,  77 => 26,  72 => 25,  61 => 21,  52 => 16,  36 => 6,  31 => 3,  28 => 2,);
    }
}
