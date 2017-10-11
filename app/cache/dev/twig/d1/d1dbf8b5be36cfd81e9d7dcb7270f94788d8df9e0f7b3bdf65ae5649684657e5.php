<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_4e57169663d51b9aa6cfeb2340c1e39abd3886ff1cb7d9eee13c30df3c1defa7 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f2cee791c175e219b5037212c0723b9226e80e3df0459e45e326cc1a4abbd06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f2cee791c175e219b5037212c0723b9226e80e3df0459e45e326cc1a4abbd06->enter($__internal_2f2cee791c175e219b5037212c0723b9226e80e3df0459e45e326cc1a4abbd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f2cee791c175e219b5037212c0723b9226e80e3df0459e45e326cc1a4abbd06->leave($__internal_2f2cee791c175e219b5037212c0723b9226e80e3df0459e45e326cc1a4abbd06_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d957fba2a05433ceec542e4ec605138eb949bbbf61678935e0418d67c5435689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d957fba2a05433ceec542e4ec605138eb949bbbf61678935e0418d67c5435689->enter($__internal_d957fba2a05433ceec542e4ec605138eb949bbbf61678935e0418d67c5435689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_d957fba2a05433ceec542e4ec605138eb949bbbf61678935e0418d67c5435689->leave($__internal_d957fba2a05433ceec542e4ec605138eb949bbbf61678935e0418d67c5435689_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "SonataAdminBundle:CRUD:list_percent.html.twig", "/var/www/html/symfonyBlog/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_percent.html.twig");
    }
}
