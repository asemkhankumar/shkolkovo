<?php

/* manage/report/index.twig */
class __TwigTemplate_ed7caa02b329fbe498f55500d06d02e2 extends Twig_Template
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
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$('.total').click(function(e){
                e.preventDefault();
                var counter = \$(this).data('counter');

                \$('.history').hide();
                \$('.history-'+counter).fadeIn(400);
            });
        });
    </script>

    <div class=\"page-header\">
        <h4>";
        // line 16
        echo twig_escape_filter($this->env, __("Report"), "html", null, true);
        echo " ";
        if (isset($context["dates"])) { $_dates_ = $context["dates"]; } else { $_dates_ = null; }
        if (($this->getAttribute($_dates_, "start") == $this->getAttribute($_dates_, "end"))) {
            if (isset($context["dates"])) { $_dates_ = $context["dates"]; } else { $_dates_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_dates_, "start"), "html", null, true);
        } else {
            if (isset($context["dates"])) { $_dates_ = $context["dates"]; } else { $_dates_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_dates_, "start"), "html", null, true);
            echo " - ";
            if (isset($context["dates"])) { $_dates_ = $context["dates"]; } else { $_dates_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_dates_, "end"), "html", null, true);
        }
        echo "</h4>
        <form action=\"\" method=\"POST\">
            <div>
                ";
        // line 19
        echo twig_escape_filter($this->env, __("Start date"), "html", null, true);
        echo ": <input type=\"text\" name=\"start\" value=\"";
        if (isset($context["dates"])) { $_dates_ = $context["dates"]; } else { $_dates_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_dates_, "start"), "html", null, true);
        echo "\" class=\"datepicker\" />
            </div>
            <div>
                ";
        // line 22
        echo twig_escape_filter($this->env, __("End date"), "html", null, true);
        echo ": <input type=\"text\" name=\"end\" value=\"";
        if (isset($context["dates"])) { $_dates_ = $context["dates"]; } else { $_dates_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_dates_, "end"), "html", null, true);
        echo "\" class=\"datepicker\" />
            </div>
            <div>
                <button class=\"btn btn-info btn-mini\">";
        // line 25
        echo twig_escape_filter($this->env, __("Filter by date"), "html", null, true);
        echo " <i class=\"icon-filter\"></i></button>
            </div>
        </form>
    </div>
    <div class=\"page\">
        <table class=\"table\">
            <tr>
                <th>";
        // line 32
        echo twig_escape_filter($this->env, __("Section"), "html", null, true);
        echo "</th>
                <th>";
        // line 33
        echo twig_escape_filter($this->env, __("Author"), "html", null, true);
        echo "</th>
                <th>";
        // line 34
        echo twig_escape_filter($this->env, __("Count of publications"), "html", null, true);
        echo "</th>
                <th>";
        // line 35
        echo twig_escape_filter($this->env, __("Count of words"), "html", null, true);
        echo "</th>
            </tr>
            ";
        // line 37
        $context["counter"] = 0;
        // line 38
        echo "            ";
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_data_);
        foreach ($context['_seq'] as $context["k"] => $context["item"]) {
            // line 39
            echo "                ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_item_);
            foreach ($context['_seq'] as $context["u"] => $context["row"]) {
                // line 40
                echo "                    ";
                if (isset($context["counter"])) { $_counter_ = $context["counter"]; } else { $_counter_ = null; }
                $context["counter"] = ($_counter_ + 1);
                // line 41
                echo "                    <tr>
                        <td>";
                // line 42
                if (isset($context["models"])) { $_models_ = $context["models"]; } else { $_models_ = null; }
                if (isset($context["k"])) { $_k_ = $context["k"]; } else { $_k_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_models_, $_k_, array(), "array"), "html", null, true);
                echo "<br />
                            <span title=\"";
                // line 43
                echo twig_escape_filter($this->env, __("Report today"), "html", null, true);
                echo "\" style=\"padding-right: 5px;\" class=\"label label-info\">";
                if (isset($context["today"])) { $_today_ = $context["today"]; } else { $_today_ = null; }
                if (isset($context["k"])) { $_k_ = $context["k"]; } else { $_k_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_today_, $_k_, array(), "array"), "html", null, true);
                echo "</span>
                            <span title=\"";
                // line 44
                echo twig_escape_filter($this->env, __("Report all"), "html", null, true);
                echo "\" style=\"padding-right: 5px;\" class=\"label label-success\">";
                if (isset($context["all"])) { $_all_ = $context["all"]; } else { $_all_ = null; }
                if (isset($context["k"])) { $_k_ = $context["k"]; } else { $_k_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_all_, $_k_, array(), "array"), "html", null, true);
                echo "</span>
                        </td>
                        <td>";
                // line 46
                if (isset($context["u"])) { $_u_ = $context["u"]; } else { $_u_ = null; }
                echo twig_escape_filter($this->env, $_u_, "html", null, true);
                echo "</td>
                        <td><a href=\"#\" class=\"total\" data-counter=\"";
                // line 47
                if (isset($context["counter"])) { $_counter_ = $context["counter"]; } else { $_counter_ = null; }
                echo twig_escape_filter($this->env, $_counter_, "html", null, true);
                echo "\">";
                if (isset($context["row"])) { $_row_ = $context["row"]; } else { $_row_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_row_, "count"), "html", null, true);
                echo "</a></td>
                        <td>";
                // line 48
                if (isset($context["row"])) { $_row_ = $context["row"]; } else { $_row_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_row_, "words"), "html", null, true);
                echo "</td>
                    <tr>
                    <tr class=\"history history-";
                // line 50
                if (isset($context["counter"])) { $_counter_ = $context["counter"]; } else { $_counter_ = null; }
                echo twig_escape_filter($this->env, $_counter_, "html", null, true);
                echo "\" style=\"display: none;\">
                        <td colspan=\"4\">
                            ";
                // line 52
                if (isset($context["row"])) { $_row_ = $context["row"]; } else { $_row_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_row_, "pubs"));
                foreach ($context['_seq'] as $context["i"] => $context["pub"]) {
                    // line 53
                    echo "                                <b>";
                    if (isset($context["row"])) { $_row_ = $context["row"]; } else { $_row_ = null; }
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, __($this->getAttribute($this->getAttribute($_row_, "event"), $_i_, array(), "array")), "html", null, true);
                    echo "</b>
                                ";
                    // line 54
                    if (isset($context["row"])) { $_row_ = $context["row"]; } else { $_row_ = null; }
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    if (($this->getAttribute($this->getAttribute($_row_, "event"), $_i_, array(), "array") == "delete")) {
                        // line 55
                        echo "                                    <span style=\"color: red\">";
                        if (isset($context["row"])) { $_row_ = $context["row"]; } else { $_row_ = null; }
                        if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_row_, "title"), $_i_, array(), "array"), "html", null, true);
                        echo "</span><br/>
                                ";
                    } else {
                        // line 57
                        echo "                                    ";
                        if (isset($context["row"])) { $_row_ = $context["row"]; } else { $_row_ = null; }
                        if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                        if ($this->getAttribute($this->getAttribute($_row_, "has"), $_i_, array(), "array")) {
                            // line 58
                            echo "                                        ";
                            if (isset($context["pub"])) { $_pub_ = $context["pub"]; } else { $_pub_ = null; }
                            echo $_pub_;
                            echo " <br />
                                    ";
                        } else {
                            // line 60
                            echo "                                        ";
                            if (isset($context["row"])) { $_row_ = $context["row"]; } else { $_row_ = null; }
                            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_row_, "title"), $_i_, array(), "array"), "html", null, true);
                            echo "<br />
                                    ";
                        }
                        // line 62
                        echo "
                                ";
                    }
                    // line 64
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['pub'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 65
                echo "                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['u'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 68
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 69
        echo "        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "manage/report/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 69,  240 => 68,  232 => 65,  226 => 64,  222 => 62,  214 => 60,  207 => 58,  202 => 57,  194 => 55,  190 => 54,  183 => 53,  178 => 52,  172 => 50,  166 => 48,  158 => 47,  153 => 46,  144 => 44,  136 => 43,  130 => 42,  127 => 41,  123 => 40,  117 => 39,  111 => 38,  109 => 37,  104 => 35,  100 => 34,  96 => 33,  92 => 32,  82 => 25,  73 => 22,  64 => 19,  46 => 16,  31 => 3,  28 => 2,);
    }
}
