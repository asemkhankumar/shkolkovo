<?php

/* manage/slogans/index.twig */
class __TwigTemplate_6dacb37b854f16a8adca2b312ccd3775 extends Twig_Template
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
    <form action=\"\" method=\"POST\">
        <div class=\"page-header\">

        </div>
        <div class=\"page\">
            ";
        // line 9
        if (isset($context["slogans"])) { $_slogans_ = $context["slogans"]; } else { $_slogans_ = null; }
        if ($_slogans_) {
            // line 10
            echo "                ";
            if (isset($context["slogans"])) { $_slogans_ = $context["slogans"]; } else { $_slogans_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_slogans_);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 11
                echo "                    <input name=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "id"), "html", null, true);
                echo "\" class=\"manage_slogan\" type=\"text\" value=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "text"), "html", null, true);
                echo "\">
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 13
            echo "            ";
        }
        // line 14
        echo "
            <button class=\"btn btn-success\">";
        // line 15
        echo twig_escape_filter($this->env, __("Save"), "html", null, true);
        echo "</button>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "manage/slogans/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 15,  64 => 14,  61 => 13,  48 => 11,  42 => 10,  39 => 9,  31 => 3,  28 => 2,);
    }
}
