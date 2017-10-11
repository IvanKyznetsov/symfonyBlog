<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_55b04478899ea7ac3b463173978141b39757da520bfe996ed9e7a4823d362173 extends Twig_Template
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
        $__internal_8c09c2188240ce7be621b11c6d68058c0880fec4a57144e752c57f2ee1bd48d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c09c2188240ce7be621b11c6d68058c0880fec4a57144e752c57f2ee1bd48d6->enter($__internal_8c09c2188240ce7be621b11c6d68058c0880fec4a57144e752c57f2ee1bd48d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c09c2188240ce7be621b11c6d68058c0880fec4a57144e752c57f2ee1bd48d6->leave($__internal_8c09c2188240ce7be621b11c6d68058c0880fec4a57144e752c57f2ee1bd48d6_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_26dee1b149c0617ca66d671c2987a6b48ea148d2571ab202880d7058e09ecf25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26dee1b149c0617ca66d671c2987a6b48ea148d2571ab202880d7058e09ecf25->enter($__internal_26dee1b149c0617ca66d671c2987a6b48ea148d2571ab202880d7058e09ecf25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_26dee1b149c0617ca66d671c2987a6b48ea148d2571ab202880d7058e09ecf25->leave($__internal_26dee1b149c0617ca66d671c2987a6b48ea148d2571ab202880d7058e09ecf25_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_32c6a187bbbc7d2fe27778b8ed719071d1ae91dcc3d20203b09fb0a8b1203529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32c6a187bbbc7d2fe27778b8ed719071d1ae91dcc3d20203b09fb0a8b1203529->enter($__internal_32c6a187bbbc7d2fe27778b8ed719071d1ae91dcc3d20203b09fb0a8b1203529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_32c6a187bbbc7d2fe27778b8ed719071d1ae91dcc3d20203b09fb0a8b1203529->leave($__internal_32c6a187bbbc7d2fe27778b8ed719071d1ae91dcc3d20203b09fb0a8b1203529_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_3a064df6476e25e3310d6a27ef582ce865adfab3c9b54faf1125321ef06ccbf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a064df6476e25e3310d6a27ef582ce865adfab3c9b54faf1125321ef06ccbf2->enter($__internal_3a064df6476e25e3310d6a27ef582ce865adfab3c9b54faf1125321ef06ccbf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_3a064df6476e25e3310d6a27ef582ce865adfab3c9b54faf1125321ef06ccbf2->leave($__internal_3a064df6476e25e3310d6a27ef582ce865adfab3c9b54faf1125321ef06ccbf2_prof);

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
