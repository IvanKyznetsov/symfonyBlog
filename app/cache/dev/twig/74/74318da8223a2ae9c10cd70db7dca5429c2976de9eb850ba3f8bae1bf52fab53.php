<?php

/* SonataAdminBundle:CRUD:show_array.html.twig */
class __TwigTemplate_6c90e4795a7d11dc78298783791c23c4003becc43a8cb783095b3fc4e126ce2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 13
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_array.html.twig", 13);
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
        $__internal_b756f55191291dbb67450426f0664fd774f1fb47c540fd898ecb42e6942d6e49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b756f55191291dbb67450426f0664fd774f1fb47c540fd898ecb42e6942d6e49->enter($__internal_b756f55191291dbb67450426f0664fd774f1fb47c540fd898ecb42e6942d6e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_array.html.twig"));

        // line 11
        $context["show"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_array_macro.html.twig", "SonataAdminBundle:CRUD:show_array.html.twig", 11);
        // line 13
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b756f55191291dbb67450426f0664fd774f1fb47c540fd898ecb42e6942d6e49->leave($__internal_b756f55191291dbb67450426f0664fd774f1fb47c540fd898ecb42e6942d6e49_prof);

    }

    // line 15
    public function block_field($context, array $blocks = array())
    {
        $__internal_a24537433f4f869af8d1e4488246ec35ab11cd35bee5810f371630355224b283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a24537433f4f869af8d1e4488246ec35ab11cd35bee5810f371630355224b283->enter($__internal_a24537433f4f869af8d1e4488246ec35ab11cd35bee5810f371630355224b283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 16
        echo "    ";
        echo $context["show"]->getrender_array((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "inline", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "inline", array()), false)) : (false)));
        echo "
";
        
        $__internal_a24537433f4f869af8d1e4488246ec35ab11cd35bee5810f371630355224b283->leave($__internal_a24537433f4f869af8d1e4488246ec35ab11cd35bee5810f371630355224b283_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  37 => 15,  30 => 13,  28 => 11,  11 => 13,);
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
{% import 'SonataAdminBundle:CRUD:base_array_macro.html.twig' as show %}

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field%}
    {{ show.render_array(value, field_description.options.inline|default(false)) }}
{% endblock %}
", "SonataAdminBundle:CRUD:show_array.html.twig", "/var/www/html/symfonyBlog/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_array.html.twig");
    }
}
