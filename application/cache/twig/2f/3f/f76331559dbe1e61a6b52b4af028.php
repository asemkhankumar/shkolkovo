<?php

/* manage/layout/manage.twig */
class __TwigTemplate_2f3ff76331559dbe1e61a6b52b4af028 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'extrascripts' => array($this, 'block_extrascripts'),
            'sidebar' => array($this, 'block_sidebar'),
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
    <title>Школково</title>
    <meta charset=\"";
        // line 5
        if (isset($context["_metadata"])) { $__metadata_ = $context["_metadata"]; } else { $__metadata_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($__metadata_, "charset"), "html", null, true);
        echo "\"/>
    <meta http-equiv=\"X-UA-Compatible\" value=\"IE=Edge,chrome=1\" />
    <link rel=\"shortcut icon\" href=\"";
        // line 7
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "/favicon.png"), "method"), "html", null, true);
        echo "\" />
    <link rel=\"icon\" href=\"";
        // line 8
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "/favicon.png"), "method"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 9
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/css/manage/bootstrap.min.css"), "method"), "html", null, true);
        echo "\" media=\"screen\"/>
    <!--[if IE]><![if !IE]><![endif]--><link rel=\"stylesheet\" href=\"";
        // line 10
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/css/font-awesome-embedded.css"), "method"), "html", null, true);
        echo "\"/><!--[if IE]><![endif]><![endif]-->
    <!--[if IE]><link rel=\"stylesheet\" href=\"";
        // line 11
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/css/font-awesome-embedded-ie.css"), "method"), "html", null, true);
        echo "\"/><![endif]-->
    <link rel=\"stylesheet\" href=\"";
        // line 12
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/css/font-awesome.css"), "method"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 13
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/css/redactor/redactor.css"), "method"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 14
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/css/manage.css"), "method"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 15
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/css/bootstrap-datetimepicker.css"), "method"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 16
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/css/zoomy1.2.css"), "method"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/jouele/jouele.css"), "method"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/css/jquery.Jcrop.css"), "method"), "html", null, true);
        echo "\">

    ";
        // line 20
        $this->displayBlock('extrascripts', $context, $blocks);
        // line 24
        echo "    <style type=\"text/css\">
        /* Apply these styles only when #preview-pane has
           been placed within the Jcrop widget */
        .jcrop-holder #preview-pane {
            display: block;
            position: absolute;
            z-index: 2000;
            top: -65px;
            right: -15px;
            padding: 6px;
            border: 1px rgba(0,0,0,.4) solid;
            background-color: white;

            -webkit-border-radius: 6px;
            -moz-border-radius: 6px;
            border-radius: 6px;

            -webkit-box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.2);
            -moz-box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.2);
            box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.2);
        }

        /* The Javascript code will set the aspect ratio of the crop
           area based on the size of the thumbnail preview,
           specified here */
        #preview-pane .preview-container {
            width: 280px;
            height: 186px;
            overflow: hidden;
        }
    </style>

    <script type=\"text/javascript\" src=\"";
        // line 56
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/js/jquery.min.js"), "method"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 57
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/js/jquery-migrate-1.2.1.js"), "method"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 58
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/js/bootstrap-datetimepicker.js"), "method"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 59
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/js/bootstrap-datetimepicker.ru.js"), "method"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 60
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/js/redactor/redactor.min.js"), "method"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 61
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/js/redactor/redactor.ru.js"), "method"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 62
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/js/swfupload.js"), "method"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 63
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/js/bootstrap.js"), "method"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 64
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/js/fancybox/jquery.fancybox.pack.js"), "method"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 65
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/js/jquery.zoomy1.2.min.js"), "method"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 66
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/jouele/jquery.jplayer.min.js"), "method"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 67
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/jouele/jouele.js"), "method"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 68
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/js/jquery.Jcrop.js"), "method"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function (\$) {
            var jcrop_api;
            initJcrop();

            try {
                document.getElementById('cutpic').onclick = cutpicture;
            }
            catch (e) {
            }

            function initJcrop() {
                \$('#target').Jcrop({
                    onRelease: releaseCheck,
                    aspectRatio: 280 / 186,
                    onChange: showCoords
                }, function () {
                    jcrop_api = this;
                });
            }

            function showCoords(c) {
                \$('#x1').val(c.x);
                \$('#y1').val(c.y);
                \$('#h').val(c.h);
                \$('#w').val(c.w);
            }

            function releaseCheck() {
                jcrop_api.setOptions({ allowSelect: true });
            }

            function cutpicture() {
                var str,
                        x1 = \$('#x1').attr('value'),
                        h = \$('#h').attr('value'),
                        y1 = \$('#y1').attr('value'),
                        w = \$('#w').attr('value'),
                        path = \$('#param').attr('value');
                if (h != 0 || w != 0) {
                    \$.ajax({
                        url: '";
        // line 111
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "ajax/picturecut"), "method"), "html", null, true);
        echo "',
                        data: {x1: x1, h: h, y1: y1, w: w, path: path},
                        type: 'POST',
                        success: function (result) {
                            var array = JSON.parse(result);
                            \$('#cutresult').attr('src', \"";
        // line 116
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "site", array(0 => "", 1 => true), "method"), "html", null, true);
        echo "\" + array.path);
                            \$('#carved_id').attr('value', array.id);
                        },
                        error: function () {
                            alert('Произошла ошибка при выборе области изображения!');
                        }
                    });
                }
                else {
                    alert('Область не выбрана');
                }
            }

            \$('#param').change(function () {
                jcrop_api.destroy();
                var path = this.getAttribute('value');
                //\$('#target').attr('src', path);
                initJcrop();
                jcrop_api.setImage(path);
                jcrop_api.setOptions({ bgOpacity: .6 });
                jcrop_api.setOptions({ boxWidth: '734'});

                ";
        // line 138
        if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
        if ((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "publications")) {
            // line 139
            echo "                    document.getElementById('buttondelete').innerHTML = \"<a class='btn btn-info' href='";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "site", array(0 => ((("manage/publications/" . $_type_) . "/clearimage/") . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "'>Удалить изображение? &times;</a>\";
                ";
        }
        // line 141
        echo "                ";
        if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
        if ((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "calendar")) {
            // line 142
            echo "                document.getElementById('buttondelete').innerHTML = \"<a class='btn btn-info' href='";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "site", array(0 => ("manage/calendar/clearimage/" . $this->getAttribute($_item_, "id"))), "method"), "html", null, true);
            echo "'>Удалить изображение? &times;</a>\";
                ";
        }
        // line 144
        echo "                document.getElementById('cutpicture').innerHTML = \"<a class='btn btn-success' id='cutpic' >Вырезать выделенную область</a>\";

                try {
                    document.getElementById('cutpic').onclick = cutpicture;
                }
                catch (e) {
                }

            });
        });
    </script>

    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$(\".redactor\").redactor({lang: 'ru', imageUpload:'";
        // line 158
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "site", array(0 => "filemanager/rimages"), "method"), "html", null, true);
        echo "', fileUpload :'";
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "site", array(0 => "filemanager/fupload"), "method"), "html", null, true);
        echo "' });
            \$('.datepicker').datetimepicker({ autoclose: true, language: 'ru' });
        });
    </script>

</head>
<body>
<div class=\"containter\">
    <div class=\"navbar-inner main-menu\">
        <a class=\"brand pull-left\" href=\"";
        // line 167
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "/manage/"), "method"), "html", null, true);
        echo "\"><img
                src=\"";
        // line 168
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "/favicon.png"), "method"), "html", null, true);
        echo "\" alt=\"\"/></a>
        <ul class=\"nav nav-pills pull-left\">
            <li ";
        // line 170
        if (isset($context["_language"])) { $__language_ = $context["_language"]; } else { $__language_ = null; }
        if (($__language_ == "ru")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "site", array(0 => "manage/language/select/ru"), "method"), "html", null, true);
        echo "?r=";
        if (isset($context["_return_url"])) { $__return_url_ = $context["_return_url"]; } else { $__return_url_ = null; }
        echo twig_escape_filter($this->env, $__return_url_, "html", null, true);
        echo "\">RU</a></li>
            <li ";
        // line 171
        if (isset($context["_language"])) { $__language_ = $context["_language"]; } else { $__language_ = null; }
        if (($__language_ == "kz")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "site", array(0 => "manage/language/select/kz"), "method"), "html", null, true);
        echo "?r=";
        if (isset($context["_return_url"])) { $__return_url_ = $context["_return_url"]; } else { $__return_url_ = null; }
        echo twig_escape_filter($this->env, $__return_url_, "html", null, true);
        echo "\">KZ</a></li>
            <li ";
        // line 172
        if (isset($context["_language"])) { $__language_ = $context["_language"]; } else { $__language_ = null; }
        if (($__language_ == "en")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "site", array(0 => "manage/language/select/en"), "method"), "html", null, true);
        echo "?r=";
        if (isset($context["_return_url"])) { $__return_url_ = $context["_return_url"]; } else { $__return_url_ = null; }
        echo twig_escape_filter($this->env, $__return_url_, "html", null, true);
        echo "\">EN</a></li>
        </ul>
        <ul class=\"nav nav-pills pull-right\">
            <li><a href=\"";
        // line 175
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/auth/logout"), "method"), "html", null, true);
        echo "\"><i class=\"icon-share-alt\"></i> Выход</a></li>
        </ul>
    </div>
</div>
    ";
        // line 179
        if (array_key_exists("basic_message", $context)) {
            // line 180
            echo "        ";
            if (isset($context["basic_message"])) { $_basic_message_ = $context["basic_message"]; } else { $_basic_message_ = null; }
            echo $_basic_message_;
            echo "
    ";
        }
        // line 182
        echo "    <div class=\"well well-small span3\">
        <ul class=\"nav nav-list\">
            <li class=\"nav-header\">Управление</li>
            ";
        // line 185
        if (isset($context["_user"])) { $__user_ = $context["_user"]; } else { $__user_ = null; }
        if ($this->getAttribute($__user_, "has_access", array(0 => "ma"), "method")) {
            // line 186
            echo "            <li><a href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/slogans"), "method"), "html", null, true);
            echo "\"><i class=\"icon-comment\"></i> Слоганы</a></li>
            <li><i class=\"icon-comment\"></i> Комментарии</li>
            <ul class=\"nav nav-list\">
                <li ";
            // line 189
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            if (((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "comments") && ($_type_ == 0))) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/comments"), "method"), "html", null, true);
            echo "\"><i class=\"icon-chevron-right\"></i> Новые ";
            if (isset($context["_countcomm"])) { $__countcomm_ = $context["_countcomm"]; } else { $__countcomm_ = null; }
            echo twig_escape_filter($this->env, $__countcomm_, "html", null, true);
            echo "</a></li> ";
            // line 190
            echo "                <li ";
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            if (((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "comments") && ($_type_ == 1))) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/comments?type=1"), "method"), "html", null, true);
            echo "\"><i class=\"icon-chevron-right\"></i> Одобренные</a></li>
            </ul>
            <li ";
            // line 192
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if ((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "pages")) {
                echo "class=\"active\"";
            }
            echo ">
                <a href=\"";
            // line 193
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/pages"), "method"), "html", null, true);
            echo "\"><i class=\"icon-list\"></i> Страницы</a>
                ";
            // line 194
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if ((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "contents")) {
                // line 195
                echo "                    <ul class=\"nav nav-list\">
                        <li><a style=\"color:#ffffff;text-shadow:0 -1px 0 rgba(0, 0, 0, 0.2);background-color:#0088cc;\" href=\"";
                // line 196
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/contents/index/" . $this->getAttribute($_page_, "id"))), "method"), "html", null, true);
                echo "\"><i class=\"icon-chevron-right\"></i> ";
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_page_, "name"), "html", null, true);
                echo " </a></li>
                    </ul>
                ";
            }
            // line 199
            echo "            </li>
            ";
            // line 201
            echo "            <li ";
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            if (((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "publications") && ($_type_ == "publication"))) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/publications/publication"), "method"), "html", null, true);
            echo "\"><i class=\"icon-file\"></i> Публикации</a></li>
            <li ";
            // line 202
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if ((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "briefings")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/briefings"), "method"), "html", null, true);
            echo "\"><i class=\"icon-bullhorn\"></i> Брифинги</a></li>
            <li ";
            // line 203
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if ((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "biography")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/biography"), "method"), "html", null, true);
            echo "\"><i class=\"icon-user-md\"></i> Персоналии</a></li>
            <li ";
            // line 204
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if ((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "expert")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/expert"), "method"), "html", null, true);
            echo "\"><i class=\"icon-question-sign\"></i> Эксперты</a></li>
                ";
            // line 205
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if (((((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "expert") || (twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "expertopinions")) || (twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "expertcomments")) || (twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "expertquestions"))) {
                // line 206
                echo "                     <ul class=\"nav nav-list\">
                        <li ";
                // line 207
                if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
                if ((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "expertopinions")) {
                    echo "class=\"active\"";
                }
                echo ">
                        <a href=\"";
                // line 208
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/expertopinions"), "method"), "html", null, true);
                echo "\"><i class=\"icon-comment\"></i> Позиция эксперта</a>
                         </li>
                        <li ";
                // line 210
                if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
                if ((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "expertcomments")) {
                    echo "class=\"active\"";
                }
                echo ">
                            <a href=\"";
                // line 211
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/expertcomments"), "method"), "html", null, true);
                echo "\"><i class=\"icon-comments\"></i> Комментарии к позиции эксперта</a>
                        </li>
                        <li ";
                // line 213
                if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
                if ((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "expertquestions")) {
                    echo "class=\"active\"";
                }
                echo ">
                            <a href=\"";
                // line 214
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/expertquestions"), "method"), "html", null, true);
                echo "\"><i class=\"icon-question-sign\"></i> Вопросы экспертам</a>
                        </li>
                    </ul>
                ";
            }
            // line 218
            echo "            <li ";
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if (((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "debate") && ((((twig_lower_filter($this->env, $this->getAttribute($__request_, "action")) == "index") || (twig_lower_filter($this->env, $this->getAttribute($__request_, "action")) == "hide")) || (twig_lower_filter($this->env, $this->getAttribute($__request_, "action")) == "new")) || (twig_lower_filter($this->env, $this->getAttribute($__request_, "action")) == "edit")))) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/debate"), "method"), "html", null, true);
            echo "\"><i class=\"icon-bullhorn\"></i> Управление дебатами</a></li>
                ";
            // line 219
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if ((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "debate")) {
                // line 220
                echo "                    <ul class=\"nav nav-list\">
                        <li ";
                // line 221
                if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
                if (((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "debate") && ((twig_lower_filter($this->env, $this->getAttribute($__request_, "action")) == "opinions") || (twig_lower_filter($this->env, $this->getAttribute($__request_, "action")) == "opinionhide")))) {
                    echo "class=\"active\"";
                }
                echo ">
                            <a href=\"";
                // line 222
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/debate/opinions"), "method"), "html", null, true);
                echo "\"><i class=\"icon-comment\"></i> Управление мнениями в дебатах</a>
                        </li>
                        <li ";
                // line 224
                if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
                if (((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "debate") && ((twig_lower_filter($this->env, $this->getAttribute($__request_, "action")) == "comments") || (twig_lower_filter($this->env, $this->getAttribute($__request_, "action")) == "commenthide")))) {
                    echo "class=\"active\"";
                }
                echo ">
                            <a href=\"";
                // line 225
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/debate/comments"), "method"), "html", null, true);
                echo "\"><i class=\"icon-comments\"></i> Управление комментариями в дебатах</a>
                        </li>
                        ";
                // line 227
                if (isset($context["_user"])) { $__user_ = $context["_user"]; } else { $__user_ = null; }
                if ($this->getAttribute($__user_, "has_access", array(0 => "a"), "method")) {
                    // line 228
                    echo "                            <li ";
                    if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
                    if (((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "debate") && ((twig_lower_filter($this->env, $this->getAttribute($__request_, "action")) == "logs") || (twig_lower_filter($this->env, $this->getAttribute($__request_, "action")) == "view")))) {
                        echo "class=\"active\"";
                    }
                    echo ">
                                <a href=\"";
                    // line 229
                    if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/debate/logs"), "method"), "html", null, true);
                    echo "\"><i class=\"icon-info-sign\"></i> Действия модераторов</a>
                            </li>
                        ";
                }
                // line 232
                echo "                    </ul>
                ";
            }
            // line 234
            echo "            <li ";
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if (((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "calendar") && (twig_lower_filter($this->env, $this->getAttribute($__request_, "action")) == "index"))) {
                echo "class=\"active\"";
            }
            echo ">
                <a href=\"";
            // line 235
            if (array_key_exists("month", $context)) {
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["month"])) { $_month_ = $context["month"]; } else { $_month_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/calendar?m=" . $_month_)), "method"), "html", null, true);
            } else {
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/calendar"), "method"), "html", null, true);
            }
            echo "\"><i class=\"icon-calendar\"></i> Этот день в истории</a>
                ";
            // line 236
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if (((array_key_exists("day", $context) && array_key_exists("month", $context)) && (twig_lower_filter($this->env, $this->getAttribute($__request_, "action")) != "index"))) {
                // line 237
                echo "                    <ul class=\"nav nav-list\">
                        <li><a style=\"color:#ffffff;text-shadow:0 -1px 0 rgba(0, 0, 0, 0.2);background-color:#0088cc;\" href=\"";
                // line 238
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["month"])) { $_month_ = $context["month"]; } else { $_month_ = null; }
                if (isset($context["day"])) { $_day_ = $context["day"]; } else { $_day_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ((("manage/calendar/list?m=" . $_month_) . "&d=") . $_day_)), "method"), "html", null, true);
                echo "\"><i class=\"icon-chevron-right\"></i> ";
                if (isset($context["Date"])) { $_Date_ = $context["Date"]; } else { $_Date_ = null; }
                if (isset($context["month"])) { $_month_ = $context["month"]; } else { $_month_ = null; }
                if (isset($context["day"])) { $_day_ = $context["day"]; } else { $_day_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Date_, "ru_date", array(0 => ((("2013-" . $_month_) . "-") . $_day_), 1 => "j F"), "method"), "html", null, true);
                echo " </a></li>
                    </ul>
                ";
            }
            // line 241
            echo "            </li>
            <li ";
            // line 242
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if ((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "photosets")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/photosets"), "method"), "html", null, true);
            echo "\"><i class=\"icon-camera\"></i> Фотоальбомы</a></li>
            <li ";
            // line 243
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if (((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "video") && (!array_key_exists("category", $context)))) {
                echo "class=\"active\"";
            }
            echo ">
                <a href=\"";
            // line 244
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/video"), "method"), "html", null, true);
            echo "\"><i class=\"icon-play-circle\"></i> Видеогалерея</a>
                ";
            // line 245
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if (((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "video") && array_key_exists("category", $context))) {
                // line 246
                echo "                    <ul class=\"nav nav-list\">
                    ";
                // line 247
                if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                if ($_category_) {
                    // line 248
                    echo "                        <li><a style=\"color:#ffffff;text-shadow:0 -1px 0 rgba(0, 0, 0, 0.2);background-color:#0088cc;\" href=\"";
                    if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                    if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/video/category/" . $this->getAttribute($_category_, "id"))), "method"), "html", null, true);
                    echo "\"><i class=\"icon-chevron-right\"></i> ";
                    if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_category_, "name"), "html", null, true);
                    echo " </a></li>
                    ";
                } else {
                    // line 250
                    echo "                        <li><a style=\"color:#ffffff;text-shadow:0 -1px 0 rgba(0, 0, 0, 0.2);background-color:#0088cc;\" href=\"";
                    if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/video/category/"), "method"), "html", null, true);
                    echo "\"><i class=\"icon-chevron-right\"></i> Без категории </a></li>
                    ";
                }
                // line 252
                echo "                    </ul>
                ";
            }
            // line 254
            echo "            </li>
            <li ";
            // line 255
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if ((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "audio")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/audio"), "method"), "html", null, true);
            echo "\"><i class=\"icon-play-circle\"></i> Аудио</a></li>
            <li ";
            // line 256
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if ((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "exhibits")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/exhibits"), "method"), "html", null, true);
            echo "\"><i class=\"icon-globe\"></i> Электронный архив </a></li>
            <li ";
            // line 257
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            if (((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "sliders") && ($_type_ == "slider"))) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/sliders?type=slider"), "method"), "html", null, true);
            echo "\"><i class=\"icon-camera\"></i> Слайдер </a></li>
           ";
            // line 259
            echo "            <li ";
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            if (((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "sliders") && ($_type_ == "banner"))) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/sliders?type=banner"), "method"), "html", null, true);
            echo "\"><i class=\"icon-link\"></i> Исторические ценности </a></li>
                <li ";
            // line 260
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if ((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "facts")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/facts"), "method"), "html", null, true);
            echo "\"><i class=\"icon-link\"></i> Факты</a></li>


                <li ";
            // line 263
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if ((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "chronology")) {
                echo "class=\"active\"";
            }
            echo ">
                <a href=\"";
            // line 264
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/chronology"), "method"), "html", null, true);
            echo "\"><i class=\"icon-road\"></i> Хронологическая лента </a>
                ";
            // line 265
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if ((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "lines")) {
                // line 266
                echo "                    <ul class=\"nav nav-list\">
                        <li><a style=\"color:#ffffff;text-shadow:0 -1px 0 rgba(0, 0, 0, 0.2);background-color:#0088cc;\" href=\"";
                // line 267
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                if (isset($context["period"])) { $_period_ = $context["period"]; } else { $_period_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => ("manage/lines/list/" . $this->getAttribute($_period_, "id"))), "method"), "html", null, true);
                echo "\"><i class=\"icon-chevron-right\"></i> ";
                if (isset($context["period"])) { $_period_ = $context["period"]; } else { $_period_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_period_, "name"), "html", null, true);
                echo " </a></li>
                    </ul>
                ";
            }
            // line 270
            echo "            </li>
            <li ";
            // line 271
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if ((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "feedback")) {
                echo "class=\"active\"";
            }
            echo ">
                <a href=\"";
            // line 272
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/feedback"), "method"), "html", null, true);
            echo "\"><i class=\"icon-question-sign\"></i> Обратная связь</a></li>
            <li ";
            // line 273
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if (((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "materials") && ((twig_lower_filter($this->env, $this->getAttribute($__request_, "action")) != "index") && (twig_lower_filter($this->env, $this->getAttribute($__request_, "action")) != "ehistory")))) {
                echo "class=\"active\"";
            }
            echo ">
                <a href=\"";
            // line 274
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/materials"), "method"), "html", null, true);
            echo "\"><i class=\"icon-print\"></i> Материалы пользователей</a>
                ";
            // line 275
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if ((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "materials")) {
                // line 276
                echo "                    <ul class=\"nav nav-list\">
                        <li ";
                // line 277
                if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
                if (((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "materials") && (twig_lower_filter($this->env, $this->getAttribute($__request_, "action")) == "index"))) {
                    echo "class=\"active\"";
                }
                echo ">
                            <a href=\"";
                // line 278
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/materials"), "method"), "html", null, true);
                echo "\"><i class=\"icon-print\"></i> Интересные материалы</a>
                        </li>
                        <li ";
                // line 280
                if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
                if (((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "materials") && (twig_lower_filter($this->env, $this->getAttribute($__request_, "action")) == "ehistory"))) {
                    echo "class=\"active\"";
                }
                echo ">
                            <a href=\"";
                // line 281
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/materials/ehistory"), "method"), "html", null, true);
                echo "\"><i class=\"icon-print\"></i> Журнал e-history</a>
                        </li>
                    </ul>
                ";
            }
            // line 285
            echo "            </li>
            ";
            // line 286
            if (isset($context["_user"])) { $__user_ = $context["_user"]; } else { $__user_ = null; }
            if ($this->getAttribute($__user_, "has_access", array(0 => "a"), "method")) {
                echo " <li ";
                if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
                if ((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "users")) {
                    echo "class=\"active\"";
                }
                echo "><a href=\"";
                if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/users"), "method"), "html", null, true);
                echo "\"><i class=\"icon-user\"></i> Пользователи</a></li>";
            }
            // line 287
            echo "            <li ";
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if ((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "maps")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/maps"), "method"), "html", null, true);
            echo "\"><i class=\"icon-map-marker\"></i> Карта</a></li>
            <li ";
            // line 288
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if ((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "infographs")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/infographs"), "method"), "html", null, true);
            echo "\"><i class=\"icon-picture\"></i> Инфографика</a></li>
            <li ";
            // line 289
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if ((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "organization")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/organization"), "method"), "html", null, true);
            echo "\"><i class=\"icon-list\"></i> Организации образования и науки</a></li>
            <li ";
            // line 290
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if ((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "report")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/report"), "method"), "html", null, true);
            echo "\"><i class=\"icon-sign-blank\"></i> Отчет по наполнению</a></li>
            <li ";
            // line 291
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if ((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "links")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/links"), "method"), "html", null, true);
            echo "\"><i class=\"icon-link\"></i> Полезные ссылки</a></li>
            <li ";
            // line 292
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if ((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "first")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/first"), "method"), "html", null, true);
            echo "\"><i class=\"icon-calendar\"></i> Хроника деятельности первого президента</a></li>

            <li><i class=\"icon-book\"></i> Библиотека</li>
            <ul class=\"nav nav-list\">
                <li ";
            // line 296
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            if (((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "library") && ($_type_ == 1))) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/library"), "method"), "html", null, true);
            echo "\"><i class=\"icon-eye-open\"></i> Библиотека </a></li>
                <li ";
            // line 297
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            if (((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "library") && ($_type_ == 0))) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/library?type=0"), "method"), "html", null, true);
            echo "\"><i class=\"icon-eye-close\"></i> Книги без категории ";
            if (isset($context["_uncatcount"])) { $__uncatcount_ = $context["_uncatcount"]; } else { $__uncatcount_ = null; }
            echo twig_escape_filter($this->env, $__uncatcount_, "html", null, true);
            echo " </a></li> ";
            // line 298
            echo "            </ul>

            <li ";
            // line 300
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if ((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "thanks")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/thanks"), "method"), "html", null, true);
            echo "\"><i class=\"icon-thumbs-up\"></i> Благодарности </a></li>
            <li ";
            // line 301
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if ((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "ent")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/ent"), "method"), "html", null, true);
            echo "\"><i class=\"icon-question-sign\"></i> ЕНТ</a></li>
            <li ";
            // line 302
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if ((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "tests")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/tests"), "method"), "html", null, true);
            echo "\"><i class=\"icon-question-sign\"></i> Тесты</a></li>
            <li ";
            // line 303
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if ((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "education")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/education"), "method"), "html", null, true);
            echo "\"><i class=\"icon-book\"></i> ЦОР</a></li>
        ";
        }
        // line 305
        echo "            ";
        if (isset($context["_user"])) { $__user_ = $context["_user"]; } else { $__user_ = null; }
        if ($this->getAttribute($__user_, "has_access", array(0 => "r"), "method")) {
            // line 306
            echo "                <li ";
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if ((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "ehistory")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/ehistory"), "method"), "html", null, true);
            echo "\"><i class=\"icon-print\"></i> Материалы пользователей</a></li>
            ";
        }
        // line 308
        echo "
            ";
        // line 310
        echo "            ";
        if (isset($context["_user"])) { $__user_ = $context["_user"]; } else { $__user_ = null; }
        if ($this->getAttribute($__user_, "has_access", array(0 => "ma"), "method")) {
            // line 311
            echo "                <li ";
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if ((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller", array(), "method")) == "eljournal")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "site", array(0 => "manage/eljournal"), "method"), "html", null, true);
            echo "\"><i class=\"icon-list\"></i> ";
            echo twig_escape_filter($this->env, __("Magazines"), "html", null, true);
            echo "</a></li>
            ";
        }
        // line 313
        echo "

            <li ";
        // line 315
        if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
        if ((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller", array(), "method")) == "project")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "site", array(0 => "manage/project"), "method"), "html", null, true);
        echo "\"><i class=\"icon-list\"></i> ";
        echo twig_escape_filter($this->env, __("Projects"), "html", null, true);
        echo "</a></li>
            <li ";
        // line 316
        if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
        if ((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller", array(), "method")) == "publicationprojects")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "site", array(0 => "manage/publicationprojects/publicationproject"), "method"), "html", null, true);
        echo "\"><i class=\"icon-list\"></i> ";
        echo twig_escape_filter($this->env, __("Projects materials"), "html", null, true);
        echo "</a></li>


            <li>
                <a href=\"";
        // line 320
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/specprojects/1"), "method"), "html", null, true);
        echo "\"><i class=\"icon-th-large\"></i> Спец. проекты</a>
                ";
        // line 321
        if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
        if ((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "specprojects")) {
            // line 322
            echo "                    <ul class=\"nav nav-list\">
                        <li ";
            // line 323
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if (((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "specprojects") && (twig_lower_filter($this->env, $this->getAttribute($__request_, "param", array(0 => "type"), "method")) == "1"))) {
                echo "class=\"active\"";
            }
            echo ">
                            <a href=\"";
            // line 324
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/specprojects/1"), "method"), "html", null, true);
            echo "\"><i class=\"icon-user\"></i>Устная история</a>
                        </li>
                        <li ";
            // line 326
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if (((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "specprojects") && (twig_lower_filter($this->env, $this->getAttribute($__request_, "param", array(0 => "type"), "method")) == "2"))) {
                echo "class=\"active\"";
            }
            echo ">
                            <a href=\"";
            // line 327
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/specprojects/2"), "method"), "html", null, true);
            echo "\"><i class=\"icon-random\"></i>Краеведение</a>
                        </li>
                        <li ";
            // line 329
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if (((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "specprojects") && (twig_lower_filter($this->env, $this->getAttribute($__request_, "param", array(0 => "type"), "method")) == "3"))) {
                echo "class=\"active\"";
            }
            echo ">
                            <a href=\"";
            // line 330
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/specprojects/3"), "method"), "html", null, true);
            echo "\"><i class=\"icon-picture\"></i>Орнаменты</a>
                        </li>
                        <li ";
            // line 332
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if (((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "specprojects") && (twig_lower_filter($this->env, $this->getAttribute($__request_, "param", array(0 => "type"), "method")) == "4"))) {
                echo "class=\"active\"";
            }
            echo ">
                            <a href=\"";
            // line 333
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/specprojects/4"), "method"), "html", null, true);
            echo "\"><i class=\"icon-leaf\"></i>Шежире</a>
                        </li>
                        <li ";
            // line 335
            if (isset($context["_request"])) { $__request_ = $context["_request"]; } else { $__request_ = null; }
            if (((twig_lower_filter($this->env, $this->getAttribute($__request_, "controller")) == "specprojects") && (twig_lower_filter($this->env, $this->getAttribute($__request_, "action")) == "zhuzes"))) {
                echo "class=\"active\"";
            }
            echo ">
                            <a href=\"";
            // line 336
            if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "manage/specprojects/zhuzes"), "method"), "html", null, true);
            echo "\"><i class=\"icon-random\"></i>Жузы</a>
                        </li>
                    </ul>
                ";
        }
        // line 340
        echo "            </li>

        </ul>
        ";
        // line 343
        $this->displayBlock('sidebar', $context, $blocks);
        // line 345
        echo "    </div>
    <div class=\"well well-small well-nopad span8\" style=\"background-color: #fefefe;\">
    ";
        // line 347
        $this->displayBlock('content', $context, $blocks);
        // line 349
        echo "    </div>
</body>
</html>";
    }

    // line 20
    public function block_extrascripts($context, array $blocks = array())
    {
        // line 21
        echo "        <script type=\"text/javascript\" src=\"";
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/js/search.js"), "method"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 22
        if (isset($context["Url"])) { $_Url_ = $context["Url"]; } else { $_Url_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_Url_, "media", array(0 => "media/js/audio.js"), "method"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 343
    public function block_sidebar($context, array $blocks = array())
    {
        // line 344
        echo "        ";
    }

    // line 347
    public function block_content($context, array $blocks = array())
    {
        // line 348
        echo "    ";
    }

    public function getTemplateName()
    {
        return "manage/layout/manage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1213 => 348,  1210 => 347,  1206 => 344,  1203 => 343,  1196 => 22,  1190 => 21,  1187 => 20,  1181 => 349,  1179 => 347,  1175 => 345,  1173 => 343,  1168 => 340,  1160 => 336,  1153 => 335,  1147 => 333,  1140 => 332,  1134 => 330,  1127 => 329,  1121 => 327,  1114 => 326,  1108 => 324,  1101 => 323,  1098 => 322,  1095 => 321,  1090 => 320,  1075 => 316,  1063 => 315,  1059 => 313,  1045 => 311,  1041 => 310,  1038 => 308,  1026 => 306,  1022 => 305,  1011 => 303,  1001 => 302,  991 => 301,  981 => 300,  977 => 298,  964 => 297,  953 => 296,  940 => 292,  930 => 291,  920 => 290,  910 => 289,  900 => 288,  889 => 287,  876 => 286,  873 => 285,  865 => 281,  858 => 280,  852 => 278,  845 => 277,  842 => 276,  839 => 275,  834 => 274,  827 => 273,  822 => 272,  815 => 271,  812 => 270,  801 => 267,  798 => 266,  795 => 265,  790 => 264,  783 => 263,  771 => 260,  759 => 259,  748 => 257,  738 => 256,  728 => 255,  725 => 254,  721 => 252,  714 => 250,  703 => 248,  700 => 247,  697 => 246,  694 => 245,  689 => 244,  682 => 243,  672 => 242,  669 => 241,  655 => 238,  652 => 237,  649 => 236,  638 => 235,  630 => 234,  626 => 232,  619 => 229,  611 => 228,  608 => 227,  602 => 225,  595 => 224,  589 => 222,  582 => 221,  579 => 220,  576 => 219,  565 => 218,  557 => 214,  550 => 213,  544 => 211,  537 => 210,  531 => 208,  524 => 207,  521 => 206,  518 => 205,  508 => 204,  498 => 203,  488 => 202,  476 => 201,  473 => 199,  462 => 196,  459 => 195,  456 => 194,  451 => 193,  444 => 192,  431 => 190,  418 => 189,  410 => 186,  407 => 185,  402 => 182,  395 => 180,  393 => 179,  385 => 175,  370 => 172,  357 => 171,  344 => 170,  338 => 168,  333 => 167,  317 => 158,  301 => 144,  293 => 142,  289 => 141,  280 => 139,  277 => 138,  251 => 116,  242 => 111,  195 => 68,  190 => 67,  185 => 66,  180 => 65,  175 => 64,  170 => 63,  165 => 62,  160 => 61,  155 => 60,  150 => 59,  145 => 58,  140 => 57,  135 => 56,  101 => 24,  99 => 20,  93 => 18,  88 => 17,  83 => 16,  78 => 15,  73 => 14,  68 => 13,  63 => 12,  58 => 11,  53 => 10,  48 => 9,  43 => 8,  38 => 7,  32 => 5,  25 => 2,  22 => 1,);
    }
}
