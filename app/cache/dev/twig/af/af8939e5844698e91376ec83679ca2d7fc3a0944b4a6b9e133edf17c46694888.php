<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_de754361b15ab59179ef00d3e07e39818a431d011886ab04aece0090947652cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a938f4591b6e13f524a06d561fd86784f65d994682ef533081afa8457f38d3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a938f4591b6e13f524a06d561fd86784f65d994682ef533081afa8457f38d3e->enter($__internal_2a938f4591b6e13f524a06d561fd86784f65d994682ef533081afa8457f38d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a938f4591b6e13f524a06d561fd86784f65d994682ef533081afa8457f38d3e->leave($__internal_2a938f4591b6e13f524a06d561fd86784f65d994682ef533081afa8457f38d3e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ce51a74f308ecfd87d2bdb2acceef5c06c7edcac2e40aa89010878775b33b405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce51a74f308ecfd87d2bdb2acceef5c06c7edcac2e40aa89010878775b33b405->enter($__internal_ce51a74f308ecfd87d2bdb2acceef5c06c7edcac2e40aa89010878775b33b405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_ce51a74f308ecfd87d2bdb2acceef5c06c7edcac2e40aa89010878775b33b405->leave($__internal_ce51a74f308ecfd87d2bdb2acceef5c06c7edcac2e40aa89010878775b33b405_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:list_time.html.twig", "/var/www/html/symfonyBlog/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_time.html.twig");
    }
}
