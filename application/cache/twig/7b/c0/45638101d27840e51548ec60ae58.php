<?php

/* manage/photosets/index.twig */
class __TwigTemplate_7bc045638101d27840e51548ec60ae58 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/photosets/category"), "method"), "html", null, true);
        echo "\"><i class=\"icon-list\"></i> ";
        echo twig_escape_filter($this->env, __("All categories"), "html", null, true);
        echo "</a>
            <a class=\"btn\" href=\"";
        // line 6
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/photosets/edit"), "method"), "html", null, true);
        echo "\"><i class=\"icon-plus\"> ";
        echo twig_escape_filter($this->env, __("Add"), "html", null, true);
        echo "</i></a>
        </div>
        <div class=\"clear\"></div>
    </div>
    <div class=\"page\">
        ";
        // line 11
        if (isset($context["photosets"])) { $_photosets_ = $context["photosets"]; } else { $_photosets_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_photosets_);
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "            <div class=\"well well-small\">
                <div class=\"text\">
                    <div class=\"date\">

                        <span class=\"btn-group\">
                            ";
            // line 17
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ((!$this->getAttribute($_loop_, "first"))) {
                // line 18
                echo "                                <a class=\"btn btn-success btn-mini\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => (("manage/photosets/up/" . $this->getAttribute($_item_, "id")) . "")), "method"), "html", null, true);
                echo "\"><i class=\"icon-arrow-up\"></i></a>
                            ";
            }
            // line 20
            echo "                            ";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ((!$this->getAttribute($_loop_, "last"))) {
                // line 21
                echo "                                <a class=\"btn btn-danger btn-mini\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => (("manage/photosets/down/" . $this->getAttribute($_item_, "id")) . "")), "method"), "html", null, true);
                echo "\"><i class=\"icon-arrow-down\"></i></a>
                            ";
            }
            // line 23
            echo "                            ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "show_ru")) {
                // line 24
                echo "                                <a class=\"btn btn-mini btn-success\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/photosets/show_ru/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\">RU</a>
                            ";
            } else {
                // line 26
                echo "                                <a class=\"btn btn-mini btn-warning\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/photosets/show_ru/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\">RU</a>
                            ";
            }
            // line 28
            echo "                            ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "show_kz")) {
                // line 29
                echo "                                <a class=\"btn btn-mini btn-success\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/photosets/show_kz/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\">KZ</a>
                            ";
            } else {
                // line 31
                echo "                                <a class=\"btn btn-mini btn-warning\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/photosets/show_kz/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\">KZ</a>
                            ";
            }
            // line 33
            echo "                            ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "show_en")) {
                // line 34
                echo "                                <a class=\"btn btn-mini btn-success\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/photosets/show_en/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\">EN</a>
                            ";
            } else {
                // line 36
                echo "                                <a class=\"btn btn-mini btn-warning\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/photosets/show_en/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\">EN</a>
                            ";
            }
            // line 38
            echo "                            <a class=\"btn btn-mini\" href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/photosets/view/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\"><i class=\"icon-eye-open\"> </i> Просмотр</a>
                            <a class=\"btn btn-mini\" href=\"";
            // line 39
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/photosets/edit/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\"><i class=\"icon-edit\"> </i> Редактировать</a>
                            ";
            // line 40
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "published")) {
                // line 41
                echo "                                <a class=\"btn btn-mini btn-warning\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/photosets/published/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\"><i class=\"icon-eye-close\"> </i> Скрыть</a>
                            ";
            } else {
                // line 43
                echo "                                <a class=\"btn btn-mini btn-success\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/photosets/published/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\"><i class=\"icon-eye-open\"> </i> Опубликовать</a>
                            ";
            }
            // line 45
            echo "                            ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "is_important")) {
                // line 46
                echo "                                <a class=\"btn btn-mini btn-warning\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/photosets/important/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\"><i class=\"icon-eye-close\"> </i> Убрать с главной</a>
                            ";
            } else {
                // line 48
                echo "                                <a class=\"btn btn-mini btn-success\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/photosets/important/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\"><i class=\"icon-eye-open\"> </i> На главную</a>
                            ";
            }
            // line 50
            echo "                            <a class=\"btn btn-mini btn-danger\" href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/photosets/delete/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\"><i class=\"icon-remove\"> </i> Удалить</a>
                        </span>
                        <br>(";
            // line 52
            if (isset($context["Date"])) { $_Date_ = $context["Date"]; } else { $_Date_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Date_, "ru_date", array(0 => $this->getAttribute($_item_, "date"), 1 => "d F Y H:i:s"), "method"), "html", null, true);
            echo ", ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "location"), "html", null, true);
            echo ")&nbsp;
                        <a class=\"link\" href=\"";
            // line 53
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/photosets/view/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\">";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "name"), "html", null, true);
            echo "</a>
                    </div>
               </div>
            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 58
        echo "
        ";
        // line 59
        if (isset($context["paginate"])) { $_paginate_ = $context["paginate"]; } else { $_paginate_ = null; }
        echo $_paginate_;
        echo "

    </div>
";
    }

    public function getTemplateName()
    {
        return "manage/photosets/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 59,  254 => 58,  230 => 53,  221 => 52,  213 => 50,  205 => 48,  197 => 46,  193 => 45,  185 => 43,  177 => 41,  174 => 40,  168 => 39,  161 => 38,  153 => 36,  145 => 34,  141 => 33,  133 => 31,  125 => 29,  121 => 28,  113 => 26,  105 => 24,  101 => 23,  93 => 21,  89 => 20,  81 => 18,  78 => 17,  71 => 12,  53 => 11,  42 => 6,  35 => 5,  31 => 3,  28 => 2,);
    }
}
