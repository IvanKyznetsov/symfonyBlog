<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_2e0591b83babd36505fb032a4e77e1933ad0a1afa6969a6df082a4b87f1aba39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54496941da1308913e3f7fe3dd5f06c9ca09e804ec21d6f13806bd9f5aa6f20d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54496941da1308913e3f7fe3dd5f06c9ca09e804ec21d6f13806bd9f5aa6f20d->enter($__internal_54496941da1308913e3f7fe3dd5f06c9ca09e804ec21d6f13806bd9f5aa6f20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54496941da1308913e3f7fe3dd5f06c9ca09e804ec21d6f13806bd9f5aa6f20d->leave($__internal_54496941da1308913e3f7fe3dd5f06c9ca09e804ec21d6f13806bd9f5aa6f20d_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_8f06566ad3a75c5ae66a7fdd84704c9503c176418eca31ff9dd8d654244f6940 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f06566ad3a75c5ae66a7fdd84704c9503c176418eca31ff9dd8d654244f6940->enter($__internal_8f06566ad3a75c5ae66a7fdd84704c9503c176418eca31ff9dd8d654244f6940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_8f06566ad3a75c5ae66a7fdd84704c9503c176418eca31ff9dd8d654244f6940->leave($__internal_8f06566ad3a75c5ae66a7fdd84704c9503c176418eca31ff9dd8d654244f6940_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_c149b77283fb9982867f822de09d12b2a4f3de6d9494ff106dd889bbdbe65088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c149b77283fb9982867f822de09d12b2a4f3de6d9494ff106dd889bbdbe65088->enter($__internal_c149b77283fb9982867f822de09d12b2a4f3de6d9494ff106dd889bbdbe65088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_c149b77283fb9982867f822de09d12b2a4f3de6d9494ff106dd889bbdbe65088->leave($__internal_c149b77283fb9982867f822de09d12b2a4f3de6d9494ff106dd889bbdbe65088_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_6f63e9ecb749910d8e6cd6af861dd0df86d1578cdab4c4537e5e3084c6bbee33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f63e9ecb749910d8e6cd6af861dd0df86d1578cdab4c4537e5e3084c6bbee33->enter($__internal_6f63e9ecb749910d8e6cd6af861dd0df86d1578cdab4c4537e5e3084c6bbee33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_6f63e9ecb749910d8e6cd6af861dd0df86d1578cdab4c4537e5e3084c6bbee33->leave($__internal_6f63e9ecb749910d8e6cd6af861dd0df86d1578cdab4c4537e5e3084c6bbee33_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 25,  68 => 24,  57 => 20,  54 => 19,  48 => 18,  41 => 15,  35 => 14,  20 => 12,);
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

{% extends base_template %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}
    {% if action is defined %}
        {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}
    {% endif %}
{% endblock %}

{% block content %}

    Redefine the content block in your action template

{% endblock %}
", "SonataAdminBundle:CRUD:action.html.twig", "/var/www/html/symfonyBlog/vendor/sonata-project/admin-bundle/Resources/views/CRUD/action.html.twig");
    }
}
