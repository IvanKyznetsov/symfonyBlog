<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_69717135f2dc8d6ab0c1e30e84c85aaf5340df28edf8f209f924720f35339d6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52c47bc76080310a5f59a9017af6fcbaf0294cbdcf09932b552a8f4ae069519b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52c47bc76080310a5f59a9017af6fcbaf0294cbdcf09932b552a8f4ae069519b->enter($__internal_52c47bc76080310a5f59a9017af6fcbaf0294cbdcf09932b552a8f4ae069519b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52c47bc76080310a5f59a9017af6fcbaf0294cbdcf09932b552a8f4ae069519b->leave($__internal_52c47bc76080310a5f59a9017af6fcbaf0294cbdcf09932b552a8f4ae069519b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8141e508afe8fe6e905ea5288f68e77b312e8232d2d8f7ccd3c9b9749ca64634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8141e508afe8fe6e905ea5288f68e77b312e8232d2d8f7ccd3c9b9749ca64634->enter($__internal_8141e508afe8fe6e905ea5288f68e77b312e8232d2d8f7ccd3c9b9749ca64634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_8141e508afe8fe6e905ea5288f68e77b312e8232d2d8f7ccd3c9b9749ca64634->leave($__internal_8141e508afe8fe6e905ea5288f68e77b312e8232d2d8f7ccd3c9b9749ca64634_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "SonataAdminBundle:CRUD:show_percent.html.twig", "/var/www/html/symfonyBlog/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_percent.html.twig");
    }
}
