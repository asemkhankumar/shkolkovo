<?php

/* manage/ent/edit.twig */
class __TwigTemplate_5166e241118cda7bff290c0e57ae3738 extends Twig_Template
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
        echo "<div style=\"padding: 20px;\">
    <form action=\"\" method=\"POST\">
        <div>
            <a type=\"button\" href=\"";
        // line 6
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/ent"), "method"), "html", null, true);
        echo "\" class=\"close\">&times;</a>
            <h4>";
        // line 7
        echo twig_escape_filter($this->env, __("Ent edit"), "html", null, true);
        echo "</h4>
        </div>
        <div>
            <label for=\"title\">";
        // line 10
        echo twig_escape_filter($this->env, __("Title"), "html", null, true);
        echo "</label>
            <input type=\"text\" name=\"title\" id=\"title\" class=\"input-block-level\" value=\"";
        // line 11
        if (isset($context["ent"])) { $_ent_ = $context["ent"]; } else { $_ent_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_ent_, "title"), "html", null, true);
        echo "\" />
            <input type=\"hidden\" id=\"language\" name=\"language\" value=\"";
        // line 12
        if (isset($context["ent"])) { $_ent_ = $context["ent"]; } else { $_ent_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_ent_, "language"), "html", null, true);
        echo "\" />
        </div>
        <div class=\"modal-footer\">
            <button class=\"btn btn-success\">";
        // line 15
        echo twig_escape_filter($this->env, __("Save"), "html", null, true);
        echo "</button>
            <a href=\"";
        // line 16
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/ent"), "method"), "html", null, true);
        echo "\" class=\"btn\">";
        echo twig_escape_filter($this->env, __("Cancel"), "html", null, true);
        echo "</a>
        </div>
    </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "manage/ent/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 16,  63 => 15,  56 => 12,  51 => 11,  47 => 10,  41 => 7,  36 => 6,  31 => 3,  28 => 2,);
    }
}
