<?php

/* welcome/index.twig */
class __TwigTemplate_4983c8be933ac2e16a51aac2369d6c1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout/html.twig");

        $this->blocks = array(
            'extrastyles' => array($this, 'block_extrastyles'),
            'extrascripts' => array($this, 'block_extrascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_extrastyles($context, array $blocks = array())
    {
    }

    // line 5
    public function block_extrascripts($context, array $blocks = array())
    {
        // line 6
        echo "    <script type='text/javascript' >
        \$(function() {
            \$(\".Vwidget  .VjCarouselLite\").jCarouselLite({
                btnNext: \".Vwidget .down\",
                btnPrev: \".Vwidget .up\",
                vertical: true,
                visible: 3,
                auto: 5000,
                speed: 300,
                circular: true
            });
            \$(\".Vwidget2  .VjCarouselLite2\").jCarouselLite({
                btnNext: \".Vwidget2 .down\",
                btnPrev: \".Vwidget2 .up\",
                vertical: true,
                visible: 3,
                auto: 4000,
                speed: 300,
                circular: true
            });
        });
    </script>
";
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        // line 31
        echo "    <div class=\"top-background\">
        <div class=\"wrap abs\" style=\"    position: relative;\">
            <div class=\"obertka-top\">
                <div class=\"content-top\">
                    <div class=\"bg-top abs\">
                        <div class=\"korobka\"></div>
                        ";
        // line 37
        if (isset($context["slogans"])) { $_slogans_ = $context["slogans"]; } else { $_slogans_ = null; }
        if ($_slogans_) {
            // line 38
            echo "                            ";
            if (isset($context["slogans"])) { $_slogans_ = $context["slogans"]; } else { $_slogans_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_slogans_);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 39
                echo "                                <p class=\"sanspro abs text";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "id"), "html", null, true);
                echo "\">";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "text"), "html", null, true);
                echo "</p>
                                ";
                // line 41
                echo "                                <div class=\"abs lamp";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "id"), "html", null, true);
                echo "\"></div>

                                <div>
                                    <div class=\"abs l";
                // line 44
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "id"), "html", null, true);
                echo "\"></div>
                                    <div class=\"abs light_point";
                // line 45
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "id"), "html", null, true);
                echo "\"></div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 48
            echo "                        ";
        }
        // line 49
        echo "                        <div class=\"abs lamp7\"></div>
                        <div class=\"abs lamp8\"></div>
                        <div class=\"abs lamp9\"></div>
                        <div class=\"abs lamp10\"></div>
                    </div>
                    ";
        // line 55
        echo "                        ";
        // line 56
        echo "                            ";
        // line 57
        echo "                        ";
        // line 58
        echo "                    ";
        // line 59
        echo "                    ";
        // line 60
        echo "                        ";
        // line 61
        echo "                    ";
        // line 62
        echo "                    ";
        // line 63
        echo "                        ";
        // line 64
        echo "                    ";
        // line 65
        echo "                </div>
            </div>
            <div class=\"obertka-mid\">
                <div class=\"content-mid\">
                    <div class=\"block-mid\">
                        <div class=\"block-mid-1 inlbl\">
                            <div class=\"block-mid-1_1\">
                                <p>БЫСТРЫЙ СТАРТ</p>
                                <p>Узнай свой уровень и начинай с него</p>
                                <a href=\"#\">
                                    <p>Начать</p>
                                </a>
                            </div>
                            <div class=\"block-mid-1_2\">
                                <p class=\"news-lent\">Новостная лента</p>
                                <a href=\"\">
                                    <div class=\"news-block\">
                                        <p>29.07.15</p>
                                        <div>Действующие запреты приема в вузы, приостановления и </div>
                                    </div>
                                </a>
                                <div class=\"news-block\">
                                    <p>29.07.15</p>
                                    <div>действий лицензий и аккредитацийРособрнадзор выявил 274 вуза, не работающих с ФИдействий лицензий и аккредитацийРособрнадзор выявил 274 вуза, не работающих с ФИ 274 вуза, не работающих с ФИС ЕГЭ и приема</div>
                                </div>
                                <div class=\"news-block\">
                                    <p>29.07.15</p>
                                    <div>Действующие запреты приема в вузы, </div>
                                </div>
                                <div class=\"news-block\">
                                    <p>29.07.15</p>
                                    <div>Действующие запреты приема в вузы, приостановле</div>
                                </div>
                                <div class=\"news-block\">
                                    <p>29.07.15</p>
                                    <div>Действующие запреты приема в вузы, приостановления и прекращения действий лицензий и аккредитацийРособрнадзор выявил 274 вуза, не работающих с ФИС ЕГЭ и приема</div>
                                </div>
                                <div class=\"news-block\">
                                    <p>29.07.15</p>
                                    <div>Действующие запреты приема в вузы, </div>
                                </div>
                                <div class=\"news-block\">
                                    <p>29.07.15</p>
                                    <div>Действующие запреты приема в вузы, приостановле</div>
                                </div>
                                <div class=\"news-block\">
                                    <p>29.07.15</p>
                                    <div>Действующие запреты приема в вузы, приостановления и прекращения действий лицензий и аккредитацийРособрнадзор выявил 274 вуза, не работающих с ФИС ЕГЭ и приема</div>
                                </div>
                                <div class=\"news-block\">
                                    <p>29.07.15</p>
                                    <div>Действующие запреты приема в вузы, приостановления и прекращения действий лицензий и аккредитацийРособрнадзор выявил 274 вуза, не работающих с ФИС ЕГЭ и приема</div>
                                </div>
                                <a href=\"#\">
                                    <p class=\"all-news\">Смотреть все новости</p>
                                </a>
                            </div>
                        </div>
                        <div class=\"block-mid-2 inlbl\">
                            <div class=\"block-mid-2_1\">
                                <div class=\"inlbl block-1\">
                                    <p>Задачи от экспертов</p>
                                    <p>Лучшая профессорская выборка.</p>
                                    <p>Список преподавателей</p>
                                    <div class=\"Vwidget\">
                                        <a href=\"#\" class=\"up\"></a>
                                        <div class=\"VjCarouselLite\">
                                            <ul>
                                                <li>
                                                    <div>
                                                        <div class=\"expert-img img1\">
                                                            ";
        // line 137
        echo "                                                        </div>
                                                        Д. А. Василевский
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        <div class=\"expert-img img2\">
                                                            <img src=\"\" alt=\"\">
                                                        </div>
                                                        у. е. заполярный
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        <div class=\"expert-img img3\">
                                                            <img src=\"\" alt=\"\">
                                                        </div>
                                                        у. н. рогов
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        <div class=\"expert-img img4\">
                                                            <img src=\"\" alt=\"\">
                                                        </div>
                                                        с. а. Власов
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href=\"#\" class=\"down\"></a>
                                    </div>
                                    <a href=\"#\">
                                        <p class=\"ozn_prep\">Перейти</p>
                                    </a>
                                </div>
                                <div class=\"inlbl block-2\">
                                    <p>Олимпиады</p>
                                    <p>Подробное описание об олимпиадах</p>
                                    <p>Победители олимпиад</p>
                                    ";
        // line 178
        echo "                                        ";
        // line 179
        echo "                                        ";
        // line 180
        echo "                                            ";
        // line 181
        echo "                                                ";
        // line 182
        echo "                                                    ";
        // line 183
        echo "                                                        ";
        // line 184
        echo "                                                            ";
        // line 185
        echo "                                                        ";
        // line 186
        echo "                                                        ";
        // line 187
        echo "                                                    ";
        // line 188
        echo "                                                ";
        // line 189
        echo "                                                ";
        // line 190
        echo "                                                    ";
        // line 191
        echo "                                                        ";
        // line 192
        echo "                                                            ";
        // line 193
        echo "                                                        ";
        // line 194
        echo "                                                        ";
        // line 195
        echo "                                                    ";
        // line 196
        echo "                                                ";
        // line 197
        echo "                                                ";
        // line 198
        echo "                                                    ";
        // line 199
        echo "                                                        ";
        // line 200
        echo "                                                            ";
        // line 201
        echo "                                                        ";
        // line 202
        echo "                                                        ";
        // line 203
        echo "                                                    ";
        // line 204
        echo "                                                ";
        // line 205
        echo "                                                ";
        // line 206
        echo "                                                    ";
        // line 207
        echo "                                                        ";
        // line 208
        echo "                                                            ";
        // line 209
        echo "                                                        ";
        // line 210
        echo "                                                        ";
        // line 211
        echo "                                                    ";
        // line 212
        echo "                                                ";
        // line 213
        echo "                                            ";
        // line 214
        echo "                                        ";
        // line 215
        echo "                                        ";
        // line 216
        echo "                                    ";
        // line 217
        echo "                                    <p style=\"font-family: PTSansRegular;font-size: 20px;margin: 98px auto;text-align: center;\">Победителей пока нет!!! НО, СКОРО им можешь стать ТЫ!!!</p>
                                    <a href=\"#\">
                                        <p class=\"ozn_prep\">Перейти</p>
                                    </a>
                                </div>
                            </div>
                            <div class=\"block-mid-2_2\">
                                <div class=\"block-mid-2_1\">
                                    <div class=\"inlbl block-3\">
                                        <p class=\"katalogi\">Каталоги</p>
                                        <div class=\"katal\">
                                            <div style=\"background: url('/media/theme/shkolkovo/katalogi_bg.png') no-repeat center center\" class=\"katalogi-1\"></div>
                                            <div class=\"katalogi-2\">Сборник задач по высшей математике за 2014 г.</div>
                                        </div>
                                        <div class=\"katal\">
                                            <div style=\"background: url('/media/theme/shkolkovo/katalogi_bg.png') no-repeat center center\" class=\"katalogi-1\"></div>
                                            <div class=\"katalogi-2\">Сборник задач по высшей математике за 2014 г.</div>
                                        </div>
                                        <div class=\"katal\">
                                            <div style=\"background: url('/media/theme/shkolkovo/katalogi_bg.png') no-repeat center center\" class=\"katalogi-1\"></div>
                                            <div class=\"katalogi-2\">Сборник задач по высшей математике за 2014 г.</div>
                                        </div>
                                        <a href=\"#\">
                                            <p class=\"katalogi_btn\">Перейти</p>
                                        </a>
                                    </div>
                                    <div class=\"inlbl block-4\">
                                        <div class=\"block-4_1\">
                                            <p class=\"konstr\">Конструктор</p>
                                            <p class=\"konstr_1\">Создайте свой тест из имеющихся заданий</p>
                                            <a href=\"#\">
                                                <p class=\"konstr_btn\">Перейти</p>
                                            </a>
                                        </div>
                                        <div class=\"block-4_2\">
                                            <p class=\"lich_kab\">Личный кабинет</p>
                                            <p class=\"lich_kab_1\">Войдите в личный кабинет и посмотрите статистику своих действий за последнюю неделю</p>
                                            <a href=\"#\">
                                                <p class=\"lich_kab_btn\">Перейти</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"obertka-bot\">
                <div class=\"content-bot\">
                    <div class=\"bg_bot\">
                        <div class=\"bot-1\">
                            <p class=\"bot-1-1\">Рейтинг пользователей</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"list\">
        <div class=\"wrap\">

        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "welcome/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 217,  337 => 216,  335 => 215,  333 => 214,  331 => 213,  329 => 212,  327 => 211,  325 => 210,  323 => 209,  321 => 208,  319 => 207,  317 => 206,  315 => 205,  313 => 204,  311 => 203,  309 => 202,  307 => 201,  305 => 200,  303 => 199,  301 => 198,  299 => 197,  297 => 196,  295 => 195,  293 => 194,  291 => 193,  289 => 192,  287 => 191,  285 => 190,  283 => 189,  281 => 188,  279 => 187,  277 => 186,  275 => 185,  273 => 184,  271 => 183,  269 => 182,  267 => 181,  265 => 180,  263 => 179,  261 => 178,  219 => 137,  146 => 65,  144 => 64,  142 => 63,  140 => 62,  138 => 61,  136 => 60,  134 => 59,  132 => 58,  130 => 57,  128 => 56,  126 => 55,  119 => 49,  116 => 48,  106 => 45,  101 => 44,  93 => 41,  84 => 39,  78 => 38,  75 => 37,  67 => 31,  64 => 30,  38 => 6,  35 => 5,  30 => 3,);
    }
}
