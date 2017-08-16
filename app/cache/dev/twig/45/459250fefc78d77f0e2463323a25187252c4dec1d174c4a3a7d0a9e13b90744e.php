<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_c121c5dff2bac458e680ed7d6b0fa1f176e030099e2588e6ae2658561c7e3036 extends Twig_Template
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
        $__internal_1f4575e84241034eedd6efaf84af5434d5092f6e48a40c0b34a162722d1ed329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f4575e84241034eedd6efaf84af5434d5092f6e48a40c0b34a162722d1ed329->enter($__internal_1f4575e84241034eedd6efaf84af5434d5092f6e48a40c0b34a162722d1ed329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f4575e84241034eedd6efaf84af5434d5092f6e48a40c0b34a162722d1ed329->leave($__internal_1f4575e84241034eedd6efaf84af5434d5092f6e48a40c0b34a162722d1ed329_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c9942a6604a98287d3baaced733160d179d3ada96f1e9c522e1c8b24f9436fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9942a6604a98287d3baaced733160d179d3ada96f1e9c522e1c8b24f9436fcf->enter($__internal_c9942a6604a98287d3baaced733160d179d3ada96f1e9c522e1c8b24f9436fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_c9942a6604a98287d3baaced733160d179d3ada96f1e9c522e1c8b24f9436fcf->leave($__internal_c9942a6604a98287d3baaced733160d179d3ada96f1e9c522e1c8b24f9436fcf_prof);

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
