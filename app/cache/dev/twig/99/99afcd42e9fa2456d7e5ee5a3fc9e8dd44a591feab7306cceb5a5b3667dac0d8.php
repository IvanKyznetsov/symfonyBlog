<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_eb31c97cc9156bdbfa3e980aad356167296fa7e0aaeee5f1b5c9377e3574185a extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_777ae9a5cd5f2ae3c15a34f210c557b5290373b8983435320e3126126c80be82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_777ae9a5cd5f2ae3c15a34f210c557b5290373b8983435320e3126126c80be82->enter($__internal_777ae9a5cd5f2ae3c15a34f210c557b5290373b8983435320e3126126c80be82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_777ae9a5cd5f2ae3c15a34f210c557b5290373b8983435320e3126126c80be82->leave($__internal_777ae9a5cd5f2ae3c15a34f210c557b5290373b8983435320e3126126c80be82_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f6efcad9e4221ab942dbed8d28a58941c034a6fd3c5b01ea6bf0b9028fd0bf8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6efcad9e4221ab942dbed8d28a58941c034a6fd3c5b01ea6bf0b9028fd0bf8c->enter($__internal_f6efcad9e4221ab942dbed8d28a58941c034a6fd3c5b01ea6bf0b9028fd0bf8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_f6efcad9e4221ab942dbed8d28a58941c034a6fd3c5b01ea6bf0b9028fd0bf8c->leave($__internal_f6efcad9e4221ab942dbed8d28a58941c034a6fd3c5b01ea6bf0b9028fd0bf8c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
", "SonataAdminBundle:CRUD:edit_integer.html.twig", "/var/www/html/symfonyBlog/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_integer.html.twig");
    }
}
