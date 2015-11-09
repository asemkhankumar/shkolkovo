<?php

/* layout/html.twig */
class __TwigTemplate_9bea5dec494302636cf207eb5eb2b57b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'extrastyles' => array($this, 'block_extrastyles'),
            'extrascripts' => array($this, 'block_extrascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"";
        // line 2
        if (isset($context["_language"])) { $__language_ = $context["_language"]; } else { $__language_ = null; }
        echo twig_escape_filter($this->env, $__language_, "html", null, true);
        echo "\">
    <head>
        <!--Mod DasG-->
        <title>";
        // line 5
        if (isset($context["_metadata"])) { $__metadata_ = $context["_metadata"]; } else { $__metadata_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($__metadata_, "title"), "html", null, true);
        echo "</title>
        <meta charset=\"UTF-8\"/>
        <meta name=\"description\" content=\"";
        // line 7
        if (isset($context["_metadata"])) { $__metadata_ = $context["_metadata"]; } else { $__metadata_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($__metadata_, "description"), "html", null, true);
        echo "\"/>
        <meta property=\"og:description\" content=\"";
        // line 8
        if (isset($context["_metadata"])) { $__metadata_ = $context["_metadata"]; } else { $__metadata_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($__metadata_, "description"), "html", null, true);
        echo "\"/>

        <link rel=\"shortcut icon\" href=\"";
        // line 10
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "/favicon.png"), "method"), "html", null, true);
        echo "\"/>
        <link rel=\"icon\" href=\"";
        // line 11
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "/favicon.png"), "method"), "html", null, true);
        echo "\"/>
        <link rel=\"alternate\" type=\"application/rss+xml\" title=\"RSS\" href=\"";
        // line 12
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "site", array(0 => "rss"), "method"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 13
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/css/bootstrap.min.css"), "method"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 14
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/css/zoomy1.2.css"), "method"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/jouele/jouele.css"), "method"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/css/font-awesome.css"), "method"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 17
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/css/index.css"), "method"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 18
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/css/v1.05.10.15.css"), "method"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 19
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/css/slider.css"), "method"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 20
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/css/fancybox/jquery.fancybox.css"), "method"), "html", null, true);
        echo "\" />
        ";
        // line 21
        $this->displayBlock('extrastyles', $context, $blocks);
        // line 22
        echo "        <script type=\"text/javascript\" src=\"";
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/js/jquery.min.js"), "method"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 23
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/js/bootstrap.js"), "method"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 24
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/js/fancybox/jquery.fancybox.pack.js"), "method"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 25
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/js/fancybox/jquery.fancybox-media.js"), "method"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 26
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/js/jquery-migrate-1.2.1.js"), "method"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 27
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/js/jquery.zoomy1.2.min.js"), "method"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 28
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/jouele/jquery.jplayer.min.js"), "method"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 29
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/jouele/jouele.js"), "method"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 30
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/js/swfupload.js"), "method"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 31
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/js/jcarousellite_1.0.1.min.js"), "method"), "html", null, true);
        echo "\"></script>
        ";
        // line 32
        $this->displayBlock('extrascripts', $context, $blocks);
        // line 33
        echo "        <script type=\"text/javascript\">
            function addLink() {
                var body_element = document.getElementsByTagName('body')[0];
                var selection;
                selection = window.getSelection();
                var pagelink = \"<br /><br /> Источник: <a href='\"+document.location.href+\"'>\"+document.location.href+\"</a><br />© uchebnik.kz\"; // В этой строке поменяйте текст на свой
                var copytext = selection + pagelink;
                var newdiv = document.createElement('div');
                newdiv.style.position='absolute';
                newdiv.style.left='-99999px';
                body_element.appendChild(newdiv);
                newdiv.innerHTML = copytext;
                selection.selectAllChildren(newdiv);
                window.setTimeout(function() {
                    body_element.removeChild(newdiv);
                },0);
            }
            document.oncopy = addLink;
        </script>
        ";
        // line 53
        echo "            ";
        // line 55
        echo "            ";
        // line 56
        echo "                ";
        // line 57
        echo "                    ";
        // line 58
        echo "                        ";
        // line 59
        echo "                        ";
        // line 60
        echo "                ";
        // line 61
        echo "                ";
        // line 62
        echo "                    ";
        // line 63
        echo "                        ";
        // line 64
        echo "                        ";
        // line 65
        echo "                ";
        // line 66
        echo "            ";
        // line 67
        echo "            ";
        // line 68
        echo "            ";
        // line 69
        echo "            ";
        // line 70
        echo "            ";
        // line 71
        echo "            ";
        // line 72
        echo "        ";
        // line 73
        echo "    </head>
    <body>
        <header>
            ";
        // line 76
        $this->env->loadTemplate("layout/header.twig")->display($context);
        // line 77
        echo "        </header>

        <section>
            ";
        // line 80
        $this->displayBlock('content', $context, $blocks);
        // line 81
        echo "        </section>

        <footer>
            ";
        // line 84
        $this->env->loadTemplate("layout/footer.twig")->display($context);
        // line 85
        echo "        </footer>

    </body>
</html>
";
    }

    // line 21
    public function block_extrastyles($context, array $blocks = array())
    {
    }

    // line 32
    public function block_extrascripts($context, array $blocks = array())
    {
    }

    // line 80
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout/html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 80,  252 => 32,  247 => 21,  239 => 85,  237 => 84,  232 => 81,  230 => 80,  225 => 77,  223 => 76,  218 => 73,  216 => 72,  214 => 71,  212 => 70,  210 => 69,  208 => 68,  206 => 67,  204 => 66,  202 => 65,  200 => 64,  198 => 63,  196 => 62,  194 => 61,  192 => 60,  190 => 59,  188 => 58,  186 => 57,  184 => 56,  182 => 55,  180 => 53,  159 => 33,  157 => 32,  152 => 31,  147 => 30,  142 => 29,  137 => 28,  132 => 27,  127 => 26,  122 => 25,  117 => 24,  112 => 23,  106 => 22,  104 => 21,  99 => 20,  94 => 19,  89 => 18,  84 => 17,  79 => 16,  74 => 15,  69 => 14,  64 => 13,  59 => 12,  54 => 11,  49 => 10,  43 => 8,  38 => 7,  32 => 5,  25 => 2,  22 => 1,);
    }
}
