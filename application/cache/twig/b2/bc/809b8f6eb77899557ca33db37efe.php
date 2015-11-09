<?php

/* manage/eljournal/list.twig */
class __TwigTemplate_b2bc809b8f6eb77899557ca33db37efe extends Twig_Template
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
        echo "    <div class=\"graybox news\" style=\"margin-top: 10px;\">
        <div class=\"box-header\">
            <h3> Журнал «Актуальные вопросы национальной истории»
                ";
        // line 6
        if (isset($context["_user"])) { $__user_ = $context["_user"]; } else { $__user_ = null; }
        if (((array_key_exists("_user", $context) && ($__user_ != false)) && $this->getAttribute($__user_, "has_access", array(0 => "mao"), "method"))) {
            // line 7
            echo "                <a class=\"btn btn-small\" href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "site", array(0 => "manage/eljournal/edit/"), "method"), "html", null, true);
            echo "\">
                    <i class=\"icon-plus\"></i> ";
            // line 8
            echo twig_escape_filter($this->env, __("Add a magazine"), "html", null, true);
            echo "</a>";
        }
        // line 9
        echo "            </h3>
        </div>
        ";
        // line 11
        if (isset($context["callings"])) { $_callings_ = $context["callings"]; } else { $_callings_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_callings_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "            ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "detect_exist", array(), "method"), "html", null, true);
            echo "
            <div class=\"well well-small\">
                <div class=\"text\">
                    <span class=\"btn-group pull-right\">
                        <a class=\"btn\"
                           href=\"";
            // line 17
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "site", array(0 => ("manage/eljournal/edit/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\"><i
                                    class=\"icon-edit\"></i> Редактировать</a>
                        <a class=\"btn btn-danger\" onclick=\"return confirm('Удалить этот элемент?');\"
                           href=\"";
            // line 20
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "site", array(0 => ("manage/eljournal/delete/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "\"><i
                                    class=\"icon-remove\"></i> Удалить</a>
                    </span>

                    <div>
                        ";
            // line 25
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
            echo " <br>
                        <span class=\"label label-info\"> ";
            // line 26
            if (isset($context["Date"])) { $_Date_ = $context["Date"]; } else { $_Date_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Date_, "ru_date", array(0 => $this->getAttribute($_item_, "date"), 1 => "d F Y"), "method"), "html", null, true);
            echo " </span> <br>

                        <a href=\"";
            // line 28
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => $this->getAttribute($this->getAttribute($_item_, "file_pdf"), "file_path")), "method"), "html", null, true);
            echo "\"><img
                                    src='";
            // line 29
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("images/w200-si/" . $this->getAttribute($this->getAttribute($_item_, "file_cover"), "file_path"))), "method"), "html", null, true);
            echo "'/></a>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "            <div class=\"text\">";
            echo twig_escape_filter($this->env, __("No magazines"), "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 36
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "manage/eljournal/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 36,  117 => 34,  105 => 29,  99 => 28,  92 => 26,  87 => 25,  77 => 20,  69 => 17,  59 => 12,  53 => 11,  49 => 9,  45 => 8,  39 => 7,  36 => 6,  31 => 3,  28 => 2,);
    }
}
