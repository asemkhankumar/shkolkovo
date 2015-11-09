<?php

/* manage/audio/index.twig */
class __TwigTemplate_bef530f5d44e801bf70017be40ba5485 extends Twig_Template
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
        echo "
<script type=\"text/javascript\">
    \$(document).ready(function(){
        \$('#cats-toggler').click(function(e){
            e.preventDefault();
            \$('#cats-container').toggle();
        });
    });
</script>

<div class=\"page-header\">
    <h4>";
        // line 14
        echo twig_escape_filter($this->env, __("Audio"), "html", null, true);
        echo "</h4>
    <a id=\"cats-toggler\" href=\"#\" style=\"border-bottom: 1px dotted;\">";
        // line 15
        echo twig_escape_filter($this->env, __("select category"), "html", null, true);
        echo "</a>

    <div id=\"cats-container\" style=\"display: none; background: #d3d3d3; padding: 10px;\">
        ";
        // line 18
        if (isset($context["cats"])) { $_cats_ = $context["cats"]; } else { $_cats_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_cats_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "            ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "mama", array(), "method")) {
                // line 20
                echo "                <div style=\"padding-left: ";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "level"), "html", null, true);
                echo "em\">
                    <span>";
                // line 21
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "name"), "html", null, true);
                echo "</span>
                </div>
            ";
            } else {
                // line 24
                echo "                <div style=\"padding-left: ";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "level"), "html", null, true);
                echo "em\">
                    <a href=\"";
                // line 25
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/audio?category=" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\">";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "name"), "html", null, true);
                echo "</a>
                </div>
            ";
            }
            // line 28
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 30
        echo "    </div>

    <div class=\"pull-right\">
        <a class=\"btn\" href=\"";
        // line 33
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/audio/category"), "method"), "html", null, true);
        echo "\"><i class=\"icon-list\"></i> ";
        echo twig_escape_filter($this->env, __("Categories list"), "html", null, true);
        echo "</i></a>
        <a class=\"btn\" href=\"";
        // line 34
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/audio/edit"), "method"), "html", null, true);
        echo "\"><i class=\"icon-plus\"> ";
        echo twig_escape_filter($this->env, __("Add"), "html", null, true);
        echo "</i></a>
    </div>
    <div class=\"clear\"></div>
</div>
<div class=\"page\">
    <div style=\"padding-left: 10px;\">
        ";
        // line 40
        if (array_key_exists("cat", $context)) {
            // line 41
            echo "            ";
            echo twig_escape_filter($this->env, __("Category"), "html", null, true);
            echo ": <span class=\"label label-success\">";
            if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_cat_, "name"), "html", null, true);
            echo "</span>
        ";
        }
        // line 43
        echo "    </div>

    ";
        // line 45
        if (isset($context["audio"])) { $_audio_ = $context["audio"]; } else { $_audio_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_audio_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 46
            echo "        <div class=\"well well-small\">
            <div class=\"text\">
                <div class=\"date\">
                    <div class=\"pull-left btn-group\">
                        ";
            // line 50
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "show_ru")) {
                // line 51
                echo "                            <a class=\"btn btn-mini btn-success\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/audio/show_ru/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\">RU</a>
                        ";
            } else {
                // line 53
                echo "                            <a class=\"btn btn-mini btn-warning\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/audio/show_ru/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\">RU</a>
                        ";
            }
            // line 55
            echo "                        ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "show_kz")) {
                // line 56
                echo "                            <a class=\"btn btn-mini btn-success\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/audio/show_kz/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\">KZ</a>
                        ";
            } else {
                // line 58
                echo "                            <a class=\"btn btn-mini btn-warning\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/audio/show_kz/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\">KZ</a>
                        ";
            }
            // line 60
            echo "                        ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "show_en")) {
                // line 61
                echo "                            <a class=\"btn btn-mini btn-success\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/audio/show_en/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\">EN</a>
                        ";
            } else {
                // line 63
                echo "                            <a class=\"btn btn-mini btn-warning\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/audio/show_en/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\">EN</a>
                        ";
            }
            // line 65
            echo "                    </div>

                    <span class=\"pull-right btn-group\">
                        ";
            // line 68
            if (array_key_exists("cat", $context)) {
                // line 69
                echo "                            <a class=\"btn btn-info btn-mini\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/audio/up/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\"><i class=\"icon-arrow-up\"></i></a>
                            <a class=\"btn btn-info btn-mini\" href=\"";
                // line 70
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/audio/down/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\"><i class=\"icon-arrow-down\"></i></a>
                        ";
            }
            // line 72
            echo "                        ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "is_important")) {
                // line 73
                echo "                            <a class=\"btn btn-mini btn-warning\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/audio/important/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\"><i class=\"icon-eye-close\"> </i> ";
                echo twig_escape_filter($this->env, __("Remove from main"), "html", null, true);
                echo "</a>
                        ";
            } else {
                // line 75
                echo "                            <a class=\"btn btn-mini btn-success\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/audio/important/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\"><i class=\"icon-eye-open\"> </i> ";
                echo twig_escape_filter($this->env, __("On main"), "html", null, true);
                echo "</a>
                        ";
            }
            // line 77
            echo "                        <a class=\"btn btn-mini\" href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/audio/edit/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\"><i class=\"icon-edit\"> </i> ";
            echo twig_escape_filter($this->env, __("Edit"), "html", null, true);
            echo "</a>
                        ";
            // line 78
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "published")) {
                // line 79
                echo "                            <a class=\"btn btn-mini btn-warning\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/audio/published/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\"><i class=\"icon-eye-close\"> </i> ";
                echo twig_escape_filter($this->env, __("Hide"), "html", null, true);
                echo "</a>
                        ";
            } else {
                // line 81
                echo "                            <a class=\"btn btn-mini btn-success\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/audio/published/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\"><i class=\"icon-eye-open\"> </i> ";
                echo twig_escape_filter($this->env, __("Unhide"), "html", null, true);
                echo "</a>
                        ";
            }
            // line 83
            echo "                        <a class=\"btn btn-mini btn-danger\" href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/audio/delete/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\"><i class=\"icon-remove\"> </i> ";
            echo twig_escape_filter($this->env, __("Delete"), "html", null, true);
            echo "</a>
                    </span>

                    <br /><br />

                    ";
            // line 88
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_item_, "category"), "tree", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 89
                echo "                        <span class=\"label label-info\">";
                if (isset($context["t"])) { $_t_ = $context["t"]; } else { $_t_ = null; }
                echo twig_escape_filter($this->env, $_t_, "html", null, true);
                echo "</span>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 91
            echo "                    <div>
                        <a href=\"";
            // line 92
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => $this->getAttribute($this->getAttribute($_item_, "mp3"), "file_path")), "method"), "html", null, true);
            echo "\" class=\"jouele\">
                            ";
            // line 93
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
            echo " (";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "rubric"), "html", null, true);
            echo ")
                        </a>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 100
        echo "
    ";
        // line 101
        if (isset($context["paginate"])) { $_paginate_ = $context["paginate"]; } else { $_paginate_ = null; }
        echo $_paginate_;
        echo "

</div>
";
    }

    public function getTemplateName()
    {
        return "manage/audio/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 101,  340 => 100,  323 => 93,  317 => 92,  314 => 91,  304 => 89,  299 => 88,  286 => 83,  276 => 81,  266 => 79,  263 => 78,  254 => 77,  244 => 75,  234 => 73,  230 => 72,  223 => 70,  216 => 69,  214 => 68,  209 => 65,  201 => 63,  193 => 61,  189 => 60,  181 => 58,  173 => 56,  169 => 55,  161 => 53,  153 => 51,  150 => 50,  144 => 46,  139 => 45,  135 => 43,  126 => 41,  124 => 40,  112 => 34,  105 => 33,  100 => 30,  93 => 28,  82 => 25,  76 => 24,  69 => 21,  63 => 20,  59 => 19,  54 => 18,  48 => 15,  44 => 14,  31 => 3,  28 => 2,);
    }
}
