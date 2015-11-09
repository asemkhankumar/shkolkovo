<?php

/* manage/publicationprojects/index.twig */
class __TwigTemplate_27ed33673eb44eb77b554ee2d2e3967c extends Twig_Template
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
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => (("manage/publicationprojects/" . $_type_) . "/edit")), "method"), "html", null, true);
        echo "\"><i class=\"icon-plus\"></i> ";
        echo twig_escape_filter($this->env, __("Add"), "html", null, true);
        echo "</a>
        </div>
        <form action=\"\" method=\"POST\" style=\"margin: 0\">
            <input type=\"text\" name=\"search\" id=\"search\" class=\"input-xxlarge\" value=\"\" style=\"margin: 0\" placeholder=\"";
        // line 8
        echo twig_escape_filter($this->env, __("Search"), "html", null, true);
        echo "\"/>
        </form>
        <div class=\"clear\"></div>
    </div>
    <div class=\"page\">
        ";
        // line 13
        if (isset($context["list"])) { $_list_ = $context["list"]; } else { $_list_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_list_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "            <div class=\"well well-small\">
                <div class=\"text\">
                    <div class=\"date\">
                        <span class=\"btn-group pull-right\">
                            ";
            // line 18
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            if (($_type_ == "publication")) {
                // line 19
                echo "                                <a class=\"btn btn-info btn-mini\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/publicationprojects/" . $_type_) . "/up/") . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\"><i class=\"icon-arrow-up\"></i></a>
                                <a class=\"btn btn-info btn-mini\" href=\"";
                // line 20
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/publicationprojects/" . $_type_) . "/down/") . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\"><i class=\"icon-arrow-down\"></i></a>
                            ";
            }
            // line 22
            echo "                            <a class=\"btn btn-mini\" href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/publicationprojects/" . $_type_) . "/view/") . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\"><i class=\"icon-eye-open\"> </i> Просмотр</a>
                            <a class=\"btn btn-mini\" href=\"";
            // line 23
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/publicationprojects/" . $_type_) . "/edit/") . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\"><i class=\"icon-edit\"> </i> Редактировать</a>
                            ";
            // line 24
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "published")) {
                // line 25
                echo "                                <a class=\"btn btn-mini btn-warning\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/publicationprojects/" . $_type_) . "/published/") . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\"><i class=\"icon-eye-close\"> </i> Скрыть</a>
                            ";
            } else {
                // line 27
                echo "                                <a class=\"btn btn-mini btn-success\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/publicationprojects/" . $_type_) . "/published/") . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\"><i class=\"icon-eye-open\"> </i> Опубликовать</a>
                            ";
            }
            // line 29
            echo "
                            ";
            // line 30
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            if (($this->getAttribute($_item_, "is_slider") && ($_type_ == "publication"))) {
                // line 31
                echo "                                <a class=\"btn btn-mini btn-warning\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/publicationprojects/" . $_type_) . "/slider/") . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\"><i class=\"icon-eye-close\"> </i> Удалить со слайдера</a>
                            ";
            } elseif (($_type_ == "publication")) {
                // line 33
                echo "                                <a class=\"btn btn-mini btn-success\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/publicationprojects/" . $_type_) . "/slider/") . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\"><i class=\"icon-eye-open\"> </i> Добавить в слайдер</a>
                            ";
            }
            // line 35
            echo "                            <a class=\"btn btn-mini btn-danger\" href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/publicationprojects/" . $_type_) . "/delete/") . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\"><i class=\"icon-remove\"> </i></a>
                        </span>


            ";
            // line 39
            if (isset($context["_language"])) { $__language_ = $context["_language"]; } else { $__language_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ((($__language_ == "en") && ($this->getAttribute($_item_, "date_en") != "0000-00-00 00:00:00"))) {
                // line 40
                echo "                <div class=\"pull-left\">";
                if (isset($context["Date"])) { $_Date_ = $context["Date"]; } else { $_Date_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Date_, "ru_date", array(0 => $this->getAttribute($_item_, "date_en"), 1 => "d F Y, H:i"), "method"), "html", null, true);
                echo " —
                    <a class=\"link\" href=\"";
                // line 41
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/publicationprojects/" . $_type_) . "/view/") . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\">";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                echo "</a>
                </div>
            ";
            } elseif ((($__language_ == "kz") && ($this->getAttribute($_item_, "date_kz") != "0000-00-00 00:00:00"))) {
                // line 44
                echo "                <div class=\"pull-left\">";
                if (isset($context["Date"])) { $_Date_ = $context["Date"]; } else { $_Date_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Date_, "ru_date", array(0 => $this->getAttribute($_item_, "date_kz"), 1 => "d F Y, H:i"), "method"), "html", null, true);
                echo " —
                    <a class=\"link\" href=\"";
                // line 45
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/publicationprojects/" . $_type_) . "/view/") . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\">";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                echo "</a>
                </div>
            ";
            } elseif ((($__language_ == "ru") && ($this->getAttribute($_item_, "date_ru") != "0000-00-00 00:00:00"))) {
                // line 48
                echo "                <div class=\"pull-left\">";
                if (isset($context["Date"])) { $_Date_ = $context["Date"]; } else { $_Date_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Date_, "ru_date", array(0 => $this->getAttribute($_item_, "date_ru"), 1 => "d F Y, H:i"), "method"), "html", null, true);
                echo " —
                    <a class=\"link\" href=\"";
                // line 49
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/publicationprojects/" . $_type_) . "/view/") . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\">";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                echo "</a>
                </div>
                ";
            } else {
                // line 52
                echo "                <div class=\"pull-left\">";
                if (isset($context["Date"])) { $_Date_ = $context["Date"]; } else { $_Date_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Date_, "ru_date", array(0 => $this->getAttribute($_item_, "date"), 1 => "d F Y, H:i"), "method"), "html", null, true);
                echo " —
                    <a class=\"link\" href=\"";
                // line 53
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/publicationprojects/" . $_type_) . "/view/") . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\">";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                echo "</a>
                </div>
            ";
            }
            // line 56
            echo "                        <div class=\"clear\"></div>
                    </div>
                    <div>
                        ";
            // line 59
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
        // line 64
        echo "
        ";
        // line 65
        if (isset($context["paginate"])) { $_paginate_ = $context["paginate"]; } else { $_paginate_ = null; }
        echo $_paginate_;
        echo "

    </div>
";
    }

    public function getTemplateName()
    {
        return "manage/publicationprojects/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 65,  252 => 64,  240 => 59,  235 => 56,  223 => 53,  216 => 52,  204 => 49,  197 => 48,  185 => 45,  178 => 44,  166 => 41,  159 => 40,  155 => 39,  144 => 35,  135 => 33,  126 => 31,  122 => 30,  119 => 29,  110 => 27,  101 => 25,  98 => 24,  91 => 23,  83 => 22,  75 => 20,  67 => 19,  64 => 18,  58 => 14,  53 => 13,  45 => 8,  35 => 5,  31 => 3,  28 => 2,);
    }
}
