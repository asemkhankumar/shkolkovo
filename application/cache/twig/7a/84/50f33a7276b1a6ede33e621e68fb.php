<?php

/* manage/calendar/index.twig */
class __TwigTemplate_7a8450f33a7276b1a6ede33e621e68fb extends Twig_Template
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
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/css/calendar.css"), "method"), "html", null, true);
        echo "\" />
    <script type=\"text/javascript\" src=\"";
        // line 4
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/js/event_calendar/jquery.calendar-widget.js"), "method"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 5
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/js/event_calendar/calendar.js"), "method"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        document.BASE_URL = '";
        // line 7
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/calendar/list"), "method"), "html", null, true);
        echo "';
        function show_event(month)
        {
            \$.ajax({
                url     : \"";
        // line 11
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "ajax/calendar"), "method"), "html", null, true);
        echo "\",
                type    : \"POST\",
                dataType: \"json\",
                data    : { 'language': '";
        // line 14
        if (isset($context["_language"])) { $__language_ = $context["_language"]; } else { $__language_ = null; }
        echo twig_escape_filter($this->env, $__language_, "html", null, true);
        echo "', 'month':month },
                success : function (data)
                {
                    \$(\"#list-event\").empty();
                    \$(\"#list-event\").append('<a class=\"btn btn-mini btn-success\" href=\"";
        // line 18
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "/manage/calendar/list"), "method"), "html", null, true);
        echo "'+'?m='+month+'&d='+day+'\">Добавить / Редактировать события</a><br><br>');
                    for (var i=1;i<=31;i++)
                    {
                        \$(\"#div_day\"+i).empty();
                    }
                    \$.each(data, function (i, value)
                    {
                        \$(\"#div_day\"+value['day']).append('<a href=\"";
        // line 25
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/calendar/view"), "method"), "html", null, true);
        echo "/'+value['id']+'\">'+value['title']+'</a><hr style=\"margin: 5px 0\">');
                    });
                },
                error   : function ()
                {
                    // alert('error')
                }
            });
        }

        \$(document).ready(function(){
            show_event(";
        // line 36
        if (isset($context["month"])) { $_month_ = $context["month"]; } else { $_month_ = null; }
        echo twig_escape_filter($this->env, $_month_, "html", null, true);
        echo ");
        });
    </script>

    <div class=\"page-header\">
        <h3>Дни в истории</h3>
        <div class=\"clear\"></div>
    </div>
    <div class=\"page\">
        <div id=\"calendar-block\">
            <span id=\"selectedDay\">";
        // line 46
        if (isset($context["day"])) { $_day_ = $context["day"]; } else { $_day_ = null; }
        echo twig_escape_filter($this->env, $_day_, "html", null, true);
        echo "</span>
            <span id=\"selectedMonth\">";
        // line 47
        if (isset($context["month"])) { $_month_ = $context["month"]; } else { $_month_ = null; }
        echo twig_escape_filter($this->env, $_month_, "html", null, true);
        echo "</span>
        </div>
        <a name=\"list-event\"></a>
        <div id=\"list-event\"style=\"padding:10px; display: none;\">
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "manage/calendar/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 47,  111 => 46,  97 => 36,  82 => 25,  71 => 18,  63 => 14,  56 => 11,  48 => 7,  42 => 5,  37 => 4,  31 => 3,  28 => 2,);
    }
}
