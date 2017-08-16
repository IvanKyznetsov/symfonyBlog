<?php

/* SonataAdminBundle::ajax_layout.html.twig */
class __TwigTemplate_84e0bc1a53281a5607116b88d84aee26b212bcf0b173442126a209be505b920e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
            'list' => array($this, 'block_list'),
            'show' => array($this, 'block_show'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd228f0f045f8d8b979c32a680b6a3c979480ef8a3da0d5beac88815420be1c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd228f0f045f8d8b979c32a680b6a3c979480ef8a3da0d5beac88815420be1c1->enter($__internal_cd228f0f045f8d8b979c32a680b6a3c979480ef8a3da0d5beac88815420be1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::ajax_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_cd228f0f045f8d8b979c32a680b6a3c979480ef8a3da0d5beac88815420be1c1->leave($__internal_cd228f0f045f8d8b979c32a680b6a3c979480ef8a3da0d5beac88815420be1c1_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_d97f09628b54658259165447d147042b1ce06cb3c2bbd67392e9fd938cdfaec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d97f09628b54658259165447d147042b1ce06cb3c2bbd67392e9fd938cdfaec8->enter($__internal_d97f09628b54658259165447d147042b1ce06cb3c2bbd67392e9fd938cdfaec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    ";
        $context["_list_table"] = ((        $this->hasBlock("list_table", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_table", $context, $blocks))) : (null));
        // line 14
        echo "    ";
        $context["_list_filters"] = ((        $this->hasBlock("list_filters", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters", $context, $blocks))) : (null));
        // line 15
        echo "    ";
        $context["_list_filters_actions"] = ((        $this->hasBlock("list_filters_actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters_actions", $context, $blocks))) : (null));
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('preview', $context, $blocks);
        // line 18
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 19
        echo "    ";
        $this->displayBlock('list', $context, $blocks);
        // line 20
        echo "    ";
        $this->displayBlock('show', $context, $blocks);
        // line 21
        echo "
    ";
        // line 22
        if (( !twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"))) ||  !twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))))) {
            // line 23
            echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"navbar navbar-default sonata-list-table\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-collapse\">
                        ";
            // line 28
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && ((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 29
                echo "                            <div class=\"nav navbar-right btn-group\">
                                ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 31
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "                            </div>
                        ";
            }
            // line 35
            echo "
                        ";
            // line 36
            if ( !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions")))) {
                // line 37
                echo "                            ";
                echo (isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"));
                echo "
                        ";
            }
            // line 39
            echo "                    </div>
                </div>
            </div>
        </div>

        ";
            // line 44
            if (twig_trim_filter((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                // line 45
                echo "            <div class=\"row\">
                ";
                // line 46
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
            </div>
        ";
            }
            // line 49
            echo "
        <div class=\"row\">
            ";
            // line 51
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
        </div>
    </div>
    ";
        }
        
        $__internal_d97f09628b54658259165447d147042b1ce06cb3c2bbd67392e9fd938cdfaec8->leave($__internal_d97f09628b54658259165447d147042b1ce06cb3c2bbd67392e9fd938cdfaec8_prof);

    }

    // line 17
    public function block_preview($context, array $blocks = array())
    {
        $__internal_6e4b6be13e8a75eb061c65d6ca4f5f216e73fb61f6fa1e7d78fd07a0a76eaa60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e4b6be13e8a75eb061c65d6ca4f5f216e73fb61f6fa1e7d78fd07a0a76eaa60->enter($__internal_6e4b6be13e8a75eb061c65d6ca4f5f216e73fb61f6fa1e7d78fd07a0a76eaa60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        
        $__internal_6e4b6be13e8a75eb061c65d6ca4f5f216e73fb61f6fa1e7d78fd07a0a76eaa60->leave($__internal_6e4b6be13e8a75eb061c65d6ca4f5f216e73fb61f6fa1e7d78fd07a0a76eaa60_prof);

    }

    // line 18
    public function block_form($context, array $blocks = array())
    {
        $__internal_42f6c0376008a58f18a34acccceb8dfc8ad32eaec79cc449fd01b2df499b0e3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f6c0376008a58f18a34acccceb8dfc8ad32eaec79cc449fd01b2df499b0e3c->enter($__internal_42f6c0376008a58f18a34acccceb8dfc8ad32eaec79cc449fd01b2df499b0e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_42f6c0376008a58f18a34acccceb8dfc8ad32eaec79cc449fd01b2df499b0e3c->leave($__internal_42f6c0376008a58f18a34acccceb8dfc8ad32eaec79cc449fd01b2df499b0e3c_prof);

    }

    // line 19
    public function block_list($context, array $blocks = array())
    {
        $__internal_3b7c3b2dad28aafc5094571251201b9f6634125d9c9eea4cbe3d860b8cd07529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b7c3b2dad28aafc5094571251201b9f6634125d9c9eea4cbe3d860b8cd07529->enter($__internal_3b7c3b2dad28aafc5094571251201b9f6634125d9c9eea4cbe3d860b8cd07529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        
        $__internal_3b7c3b2dad28aafc5094571251201b9f6634125d9c9eea4cbe3d860b8cd07529->leave($__internal_3b7c3b2dad28aafc5094571251201b9f6634125d9c9eea4cbe3d860b8cd07529_prof);

    }

    // line 20
    public function block_show($context, array $blocks = array())
    {
        $__internal_64fe510f87720c987d79bf4f32400d6865fbb97076b5380a02ce291daecb227b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64fe510f87720c987d79bf4f32400d6865fbb97076b5380a02ce291daecb227b->enter($__internal_64fe510f87720c987d79bf4f32400d6865fbb97076b5380a02ce291daecb227b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        
        $__internal_64fe510f87720c987d79bf4f32400d6865fbb97076b5380a02ce291daecb227b->leave($__internal_64fe510f87720c987d79bf4f32400d6865fbb97076b5380a02ce291daecb227b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  183 => 20,  172 => 19,  161 => 18,  150 => 17,  138 => 51,  134 => 49,  128 => 46,  125 => 45,  123 => 44,  116 => 39,  110 => 37,  108 => 36,  105 => 35,  101 => 33,  86 => 31,  82 => 30,  79 => 29,  77 => 28,  70 => 23,  68 => 22,  65 => 21,  62 => 20,  59 => 19,  56 => 18,  54 => 17,  51 => 16,  48 => 15,  45 => 14,  42 => 13,  30 => 12,  27 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% block content %}
    {% set _list_table = block('list_table') is defined ? block('list_table')|trim : null %}
    {% set _list_filters = block('list_filters') is defined ? block('list_filters')|trim : null %}
    {% set _list_filters_actions = block('list_filters_actions') is defined ? block('list_filters_actions')|trim : null %}

    {% block preview %}{% endblock %}
    {% block form %}{% endblock %}
    {% block list %}{% endblock %}
    {% block show %}{% endblock %}

    {% if _list_table is not empty or _list_filters is not empty %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"navbar navbar-default sonata-list-table\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-collapse\">
                        {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                            <div class=\"nav navbar-right btn-group\">
                                {% for mode, settings in admin.listModes %}
                                    <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\"><i class=\"{{ settings.class }}\"></i></a>
                                {% endfor %}
                            </div>
                        {% endif %}

                        {% if _list_filters_actions is not empty %}
                            {{ _list_filters_actions|raw }}
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>

        {% if _list_filters|trim %}
            <div class=\"row\">
                {{ _list_filters|raw }}
            </div>
        {% endif %}

        <div class=\"row\">
            {{ _list_table|raw }}
        </div>
    </div>
    {% endif %}
{% endblock %}
", "SonataAdminBundle::ajax_layout.html.twig", "/var/www/html/symfonyBlog/vendor/sonata-project/admin-bundle/Resources/views/ajax_layout.html.twig");
    }
}
