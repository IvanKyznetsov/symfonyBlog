<?php

/* SonataAdminBundle:CRUD:list_array.html.twig */
class __TwigTemplate_c5fda0d81a911ee12d47c0821317e8979c5380e8849a9a2b2f63f3bd792e3d82 extends Twig_Template
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
        $__internal_eaa511b040ba6e81bbbf934ff3bf746a45d1b511f791bfdcb38440f9e9077518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaa511b040ba6e81bbbf934ff3bf746a45d1b511f791bfdcb38440f9e9077518->enter($__internal_eaa511b040ba6e81bbbf934ff3bf746a45d1b511f791bfdcb38440f9e9077518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        // line 11
        $context["list"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_array_macro.html.twig", "SonataAdminBundle:CRUD:list_array.html.twig", 11);
        // line 13
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaa511b040ba6e81bbbf934ff3bf746a45d1b511f791bfdcb38440f9e9077518->leave($__internal_eaa511b040ba6e81bbbf934ff3bf746a45d1b511f791bfdcb38440f9e9077518_prof);

    }

    // line 15
    public function block_field($context, array $blocks = array())
    {
        $__internal_f09f7086c4b31fdc5fd04b89609859d31d8393d8cdd194c66f828c2ecbb88f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f09f7086c4b31fdc5fd04b89609859d31d8393d8cdd194c66f828c2ecbb88f09->enter($__internal_f09f7086c4b31fdc5fd04b89609859d31d8393d8cdd194c66f828c2ecbb88f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 16
        echo "    ";
        echo $context["list"]->getrender_array((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), ( !$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "inline", array(), "any", true, true) || $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "inline", array())));
        echo "
";
        
        $__internal_f09f7086c4b31fdc5fd04b89609859d31d8393d8cdd194c66f828c2ecbb88f09->leave($__internal_f09f7086c4b31fdc5fd04b89609859d31d8393d8cdd194c66f828c2ecbb88f09_prof);

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
