<?php

/* manage/library/index.twig */
class __TwigTemplate_23d3e6fa73619e8af37835f29aad95b5 extends Twig_Template
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

<div style=\"padding: 20px;\">
    <div class=\"page-header\">
        <h4>";
        // line 15
        echo twig_escape_filter($this->env, __("Library"), "html", null, true);
        echo "</h4>
        ";
        // line 17
        echo "
        <div id=\"cats-container\" style=\"display: none; background: #d3d3d3; padding: 10px;\">
            ";
        // line 19
        if (isset($context["cats"])) { $_cats_ = $context["cats"]; } else { $_cats_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_cats_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 20
            echo "                ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "mama", array(), "method")) {
                // line 21
                echo "                    <div style=\"padding-left: ";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "level"), "html", null, true);
                echo "em\">
                        <span>";
                // line 22
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "name"), "html", null, true);
                echo "</span>
                    </div>
                ";
            } else {
                // line 25
                echo "                    <div style=\"padding-left: ";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "level"), "html", null, true);
                echo "em\">
                        <a href=\"";
                // line 26
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/library?category=" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
                echo "\">";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "name"), "html", null, true);
                echo "</a>
                    </div>
                ";
            }
            // line 29
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 31
        echo "        </div>

        <div class=\"pull-right\">
            ";
        // line 35
        echo "            <a class=\"btn btn-success\" href=\"";
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/library/editbook"), "method"), "html", null, true);
        echo "\"><i class=\"icon-plus\"></i> ";
        echo twig_escape_filter($this->env, __("Add"), "html", null, true);
        echo "</a>
        </div>
        <div class=\"clear\"></div>
    </div>
    <div class=\"page\">
        <div style=\"padding-left: 10px;\">
            ";
        // line 41
        if (array_key_exists("cat", $context)) {
            // line 42
            echo "                ";
            echo twig_escape_filter($this->env, __("Category"), "html", null, true);
            echo ": <span class=\"label label-success\">";
            if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_cat_, "name"), "html", null, true);
            echo "</span>
            ";
        }
        // line 44
        echo "        </div>

        ";
        // line 46
        if (isset($context["books"])) { $_books_ = $context["books"]; } else { $_books_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_books_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 47
            echo "            <div class=\"well well-small\">
                <div class=\"text\">
                    <div class=\"date\">

                        ";
            // line 52
            echo "                            ";
            // line 53
            echo "                                ";
            // line 54
            echo "                            ";
            // line 55
            echo "                                ";
            // line 56
            echo "                            ";
            // line 57
            echo "                            ";
            // line 58
            echo "                                ";
            // line 59
            echo "                            ";
            // line 60
            echo "                                ";
            // line 61
            echo "                            ";
            // line 62
            echo "                            ";
            // line 63
            echo "                                ";
            // line 64
            echo "                            ";
            // line 65
            echo "                                ";
            // line 66
            echo "                            ";
            // line 67
            echo "                        ";
            // line 68
            echo "
                        ";
            // line 69
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_item_, "category"), "tree", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 70
                echo "                            <div style=\"padding: 5px; display: inline;\"><span class=\"label label-info\">";
                if (isset($context["t"])) { $_t_ = $context["t"]; } else { $_t_ = null; }
                echo twig_escape_filter($this->env, $_t_, "html", null, true);
                echo "</span></div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 72
            echo "
                        <img src=\"";
            // line 73
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/theme/uchebnik/mini_book.png"), "method"), "html", null, true);
            echo "\" style=\"width: 45px;\"/>

                        <span class=\"btn-group pull-right\">
                            <a class=\"btn btn-mini\" href=\"";
            // line 76
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/library/book/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\"><i class=\"icon-eye-open\"> </i> ";
            echo twig_escape_filter($this->env, __("View"), "html", null, true);
            echo "</a>
                            <a class=\"btn btn-mini\" href=\"";
            // line 77
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/library/editbook/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\"><i class=\"icon-edit\"> </i> ";
            echo twig_escape_filter($this->env, __("Edit"), "html", null, true);
            echo "</a>
                            ";
            // line 79
            echo "                                ";
            // line 80
            echo "                            ";
            // line 81
            echo "                                ";
            // line 82
            echo "                            ";
            // line 83
            echo "                            ";
            // line 84
            echo "                                ";
            // line 85
            echo "                            ";
            // line 86
            echo "                                ";
            // line 87
            echo "                            ";
            // line 88
            echo "                            <a class=\"btn btn-mini btn-danger\" href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/library/delete/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\"><i class=\"icon-remove\"> </i> ";
            echo twig_escape_filter($this->env, __("Delete"), "html", null, true);
            echo "</a>
                            <br />
                        </span>
                        <br />
                        <a class=\"link\" href=\"";
            // line 92
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/library/book/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\">";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "subject"), "html", null, true);
            echo ", ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "class"), "html", null, true);
            echo " класс, язык обучения: ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "language"), "html", null, true);
            echo " </a>
                        ";
            // line 93
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ((($this->getAttribute($_item_, "type") == "pdf") && $this->getAttribute($this->getAttribute($_item_, "pdf"), "loaded", array(), "method"))) {
                // line 94
                echo "                            (<a href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => $this->getAttribute($this->getAttribute($_item_, "pdf"), "file_path")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, __("download"), "html", null, true);
                echo "</a>)
                        ";
            }
            // line 96
            echo "                    </div>
                    <div>
                        ";
            // line 98
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "description");
            echo "<br>
                    </div>

                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 104
        echo "
        ";
        // line 105
        if (isset($context["paginate"])) { $_paginate_ = $context["paginate"]; } else { $_paginate_ = null; }
        echo $_paginate_;
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "manage/library/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 105,  294 => 104,  281 => 98,  277 => 96,  267 => 94,  264 => 93,  249 => 92,  237 => 88,  235 => 87,  233 => 86,  231 => 85,  229 => 84,  227 => 83,  225 => 82,  223 => 81,  221 => 80,  219 => 79,  211 => 77,  203 => 76,  196 => 73,  193 => 72,  183 => 70,  178 => 69,  175 => 68,  173 => 67,  171 => 66,  169 => 65,  167 => 64,  165 => 63,  163 => 62,  161 => 61,  159 => 60,  157 => 59,  155 => 58,  153 => 57,  151 => 56,  149 => 55,  147 => 54,  145 => 53,  143 => 52,  137 => 47,  132 => 46,  128 => 44,  119 => 42,  117 => 41,  104 => 35,  99 => 31,  92 => 29,  81 => 26,  75 => 25,  68 => 22,  62 => 21,  58 => 20,  53 => 19,  49 => 17,  45 => 15,  31 => 3,  28 => 2,);
    }
}
