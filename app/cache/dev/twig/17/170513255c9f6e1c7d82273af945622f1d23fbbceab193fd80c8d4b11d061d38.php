<?php

/* SonataAdminBundle:CRUD:show_array.html.twig */
class __TwigTemplate_b709cab467e3d1bee3114d47c84241c80493b60b8c1c4fd22c7f1cc3affd40f1 extends Twig_Template
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
        $__internal_9c7feb9fddb90e86ec23e137ab4c2d7a00a574097d13de112ba4bb83c7f48080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c7feb9fddb90e86ec23e137ab4c2d7a00a574097d13de112ba4bb83c7f48080->enter($__internal_9c7feb9fddb90e86ec23e137ab4c2d7a00a574097d13de112ba4bb83c7f48080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_array.html.twig"));

        // line 11
        $context["show"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_array_macro.html.twig", "SonataAdminBundle:CRUD:show_array.html.twig", 11);
        // line 13
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c7feb9fddb90e86ec23e137ab4c2d7a00a574097d13de112ba4bb83c7f48080->leave($__internal_9c7feb9fddb90e86ec23e137ab4c2d7a00a574097d13de112ba4bb83c7f48080_prof);

    }

    // line 15
    public function block_field($context, array $blocks = array())
    {
        $__internal_feb20131eeefdb3dd0ad28172093e49f1ecc5fad2fe4753fe5e72983a4057c14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feb20131eeefdb3dd0ad28172093e49f1ecc5fad2fe4753fe5e72983a4057c14->enter($__internal_feb20131eeefdb3dd0ad28172093e49f1ecc5fad2fe4753fe5e72983a4057c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 16
        echo "    ";
        echo $context["show"]->getrender_array((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "inline", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "inline", array()), false)) : (false)));
        echo "
";
        
        $__internal_feb20131eeefdb3dd0ad28172093e49f1ecc5fad2fe4753fe5e72983a4057c14->leave($__internal_feb20131eeefdb3dd0ad28172093e49f1ecc5fad2fe4753fe5e72983a4057c14_prof);

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
