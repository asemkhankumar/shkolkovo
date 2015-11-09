<?php

/* manage/sliders/index.twig */
class __TwigTemplate_b90c9a77a0f037d7ca72b82f5989a61a extends Twig_Template
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
            <ul class=\"breadcrumb\">
                ";
        // line 6
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo twig_escape_filter($this->env, $_title_, "html", null, true);
        echo "
            </ul>
        </div>        <div class=\"pull-right\">
            <a class=\"btn\" href=\"";
        // line 9
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/sliders/edit?type=" . $_type_)), "method"), "html", null, true);
        echo "\"><i class=\"icon-plus\">";
        echo twig_escape_filter($this->env, __("Add"), "html", null, true);
        echo "</i></a>
        </div>
        <div class=\"clear\"></div>
    </div>
    <div class=\"page\" style=\"padding: 15px;\">
        <table class=\"table table-striped\">
        ";
        // line 15
        if (isset($context["sliders"])) { $_sliders_ = $context["sliders"]; } else { $_sliders_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_sliders_);
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
        foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
            // line 16
            echo "            <tr>
                <td style=\"min-width: 80px;\"><img width=\"80\" height=\"80\" src=\"";
            // line 17
            if (isset($context["slider"])) { $_slider_ = $context["slider"]; } else { $_slider_ = null; }
            if ($this->getAttribute($this->getAttribute($_slider_, "picture", array(), "any", false, true), "file_path", array(), "any", true, true)) {
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["slider"])) { $_slider_ = $context["slider"]; } else { $_slider_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "site", array(0 => $this->getAttribute($this->getAttribute($_slider_, "picture"), "file_path"), 1 => true), "method"), "html", null, true);
            }
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, __("Preview"), "html", null, true);
            echo "\" /></td>
                <td><a href=\"";
            // line 18
            if (isset($context["slider"])) { $_slider_ = $context["slider"]; } else { $_slider_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_slider_, "link"), "html", null, true);
            echo "\">";
            if (isset($context["slider"])) { $_slider_ = $context["slider"]; } else { $_slider_ = null; }
            echo twig_escape_filter($this->env, ((($this->getAttribute($_slider_, "title") . "(") . $this->getAttribute($_slider_, "link")) . ")"), "html", null, true);
            echo "</a></td>
                <td>
                    <div class=\"pull-right btn-group\">
                        ";
            // line 21
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ((!$this->getAttribute($_loop_, "first"))) {
                // line 22
                echo "                            <a class=\"btn btn-success btn-mini\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["slider"])) { $_slider_ = $context["slider"]; } else { $_slider_ = null; }
                if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/sliders/up/" . $this->getAttribute($_slider_, "id")) . "?type=") . $_type_)), "method"), "html", null, true);
                echo "\"><i class=\"icon-arrow-up\"></i></a>
                        ";
            }
            // line 24
            echo "                        ";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ((!$this->getAttribute($_loop_, "last"))) {
                // line 25
                echo "                            <a class=\"btn btn-danger btn-mini\" href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["slider"])) { $_slider_ = $context["slider"]; } else { $_slider_ = null; }
                if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/sliders/down/" . $this->getAttribute($_slider_, "id")) . "?type=") . $_type_)), "method"), "html", null, true);
                echo "\"><i class=\"icon-arrow-down\"></i></a>
                        ";
            }
            // line 27
            echo "                        <a class=\"btn btn-mini\" href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["slider"])) { $_slider_ = $context["slider"]; } else { $_slider_ = null; }
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/sliders/active/" . $this->getAttribute($_slider_, "id")) . "?type=") . $_type_)), "method"), "html", null, true);
            echo "\">";
            if (isset($context["slider"])) { $_slider_ = $context["slider"]; } else { $_slider_ = null; }
            if ($this->getAttribute($_slider_, "is_active")) {
                echo "<i class=\"icon-eye-close\"></i> ";
                echo twig_escape_filter($this->env, __("Скрыть"), "html", null, true);
            } else {
                echo "<i class=\"icon-eye-open\"></i> ";
                echo twig_escape_filter($this->env, __("Показать"), "html", null, true);
            }
            echo "</a>
                        <a class=\"btn btn-mini\" href=\"";
            // line 28
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["slider"])) { $_slider_ = $context["slider"]; } else { $_slider_ = null; }
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/sliders/edit/" . $this->getAttribute($_slider_, "id")) . "?type=") . $_type_)), "method"), "html", null, true);
            echo "\"><i class=\"icon-edit\"></i> ";
            echo twig_escape_filter($this->env, __("Edit"), "html", null, true);
            echo "</a>
                        <a class=\"btn btn-mini btn-danger\" href=\"";
            // line 29
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["slider"])) { $_slider_ = $context["slider"]; } else { $_slider_ = null; }
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/sliders/delete/" . $this->getAttribute($_slider_, "id")) . "?type=") . $_type_)), "method"), "html", null, true);
            echo "\"><i class=\"icon-remove icon-white\"></i> ";
            echo twig_escape_filter($this->env, __("Delete"), "html", null, true);
            echo "</a>
                    </div>
                    <div class=\"clear\"></div>
                </td>
            </tr>

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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 36
        echo "        </table>
    </div>


";
    }

    public function getTemplateName()
    {
        return "manage/sliders/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 36,  149 => 29,  140 => 28,  123 => 27,  114 => 25,  110 => 24,  101 => 22,  98 => 21,  88 => 18,  77 => 17,  74 => 16,  56 => 15,  43 => 9,  36 => 6,  31 => 3,  28 => 2,);
    }
}
