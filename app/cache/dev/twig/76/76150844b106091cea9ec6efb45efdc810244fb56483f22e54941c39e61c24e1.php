<?php

/* SonataAdminBundle:CRUD:list_array.html.twig */
class __TwigTemplate_28e0360bd19c12296163735dcfa7d5ecab8fb8372e98c30c01c701c783bc02f9 extends Twig_Template
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
        // line 13
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_array.html.twig", 13);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a09aef0b3016864a252bc95e21208ef402e56323e21fdce8ac9dbc8491b1e71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a09aef0b3016864a252bc95e21208ef402e56323e21fdce8ac9dbc8491b1e71->enter($__internal_0a09aef0b3016864a252bc95e21208ef402e56323e21fdce8ac9dbc8491b1e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        // line 11
        $context["list"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_array_macro.html.twig", "SonataAdminBundle:CRUD:list_array.html.twig", 11);
        // line 13
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a09aef0b3016864a252bc95e21208ef402e56323e21fdce8ac9dbc8491b1e71->leave($__internal_0a09aef0b3016864a252bc95e21208ef402e56323e21fdce8ac9dbc8491b1e71_prof);

    }

    // line 15
    public function block_field($context, array $blocks = array())
    {
        $__internal_b4c9bebf295bc0d61811f521698382ddc4e5efdf2bbf0eec2e62df13c265d83e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4c9bebf295bc0d61811f521698382ddc4e5efdf2bbf0eec2e62df13c265d83e->enter($__internal_b4c9bebf295bc0d61811f521698382ddc4e5efdf2bbf0eec2e62df13c265d83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 16
        echo "    ";
        echo $context["list"]->getrender_array((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), ( !$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "inline", array(), "any", true, true) || $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "inline", array())));
        echo "
";
        
        $__internal_b4c9bebf295bc0d61811f521698382ddc4e5efdf2bbf0eec2e62df13c265d83e->leave($__internal_b4c9bebf295bc0d61811f521698382ddc4e5efdf2bbf0eec2e62df13c265d83e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  36 => 15,  29 => 13,  27 => 11,  18 => 13,);
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
{% import 'SonataAdminBundle:CRUD:base_array_macro.html.twig' as list %}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {{ list.render_array(value, field_description.options.inline is not defined or field_description.options.inline) }}
{% endblock %}
", "SonataAdminBundle:CRUD:list_array.html.twig", "/var/www/html/symfonyBlog/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_array.html.twig");
    }
}
