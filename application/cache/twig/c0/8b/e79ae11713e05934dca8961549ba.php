<?php

/* manage/tests/questedit.twig */
class __TwigTemplate_c08be79ae11713e05934dca8961549ba extends Twig_Template
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
        echo "<form action=\"\" style=\"margin:0\" method=\"post\">
    <div class=\"modal-header\">
        <h4>";
        // line 5
        echo twig_escape_filter($this->env, __("Edit question"), "html", null, true);
        echo "</h4>
    </div>
    <div class=\"modal-body\">
        <label for=\"name\">";
        // line 8
        echo twig_escape_filter($this->env, __("Question text"), "html", null, true);
        echo "</label>
        ";
        // line 9
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ($this->getAttribute($_errors_, "text", array(), "any", true, true)) {
            // line 10
            echo "            <span class=\"alert\">";
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_errors_, "text"), "html", null, true);
            echo "</span>
        ";
        }
        // line 12
        echo "        <textarea class=\"redactor\" name=\"text\" id=\"text\" style=\"width: 98%;\">";
        if (isset($context["quest"])) { $_quest_ = $context["quest"]; } else { $_quest_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_quest_, "text"), "html", null, true);
        echo "</textarea>

        <label for=\"name\"> Пояснние</label>
        ";
        // line 15
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ($this->getAttribute($_errors_, "text", array(), "any", true, true)) {
            // line 16
            echo "            <span class=\"alert\">";
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_errors_, "text"), "html", null, true);
            echo "</span>
        ";
        }
        // line 18
        echo "        <textarea class=\"redactor\" name=\"description\" id=\"text_2\" style=\"width: 98%;\">";
        if (isset($context["quest"])) { $_quest_ = $context["quest"]; } else { $_quest_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_quest_, "description"), "html", null, true);
        echo "</textarea>

        <input type=\"hidden\" name=\"right\" value=\"0\" />
        <label for=\"right\">Верно</label>
        <input type=\"checkbox\" name=\"right\" id=\"right\" value=\"1\" ";
        // line 22
        if (isset($context["quest"])) { $_quest_ = $context["quest"]; } else { $_quest_ = null; }
        if ((array_key_exists("quest", $context) && ($this->getAttribute($_quest_, "right") == 1))) {
            echo "checked=\"checked\"";
        }
        echo " />

    </div>



    <div class=\"modal-footer\">
        <a href=\"";
        // line 29
        if (isset($context["cancel_url"])) { $_cancel_url_ = $context["cancel_url"]; } else { $_cancel_url_ = null; }
        echo twig_escape_filter($this->env, $_cancel_url_, "html", null, true);
        echo "\" class=\"btn btn-link\">";
        echo twig_escape_filter($this->env, __("Cancel"), "html", null, true);
        echo "</a>
        <button class=\"btn btn-success\"><i class=\"icon-ok\"></i> ";
        // line 30
        echo twig_escape_filter($this->env, __("Save"), "html", null, true);
        echo "</button>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "manage/tests/questedit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 30,  95 => 29,  82 => 22,  73 => 18,  66 => 16,  63 => 15,  55 => 12,  48 => 10,  45 => 9,  41 => 8,  35 => 5,  31 => 3,  28 => 2,);
    }
}
