<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_d48cdbb96397987a849163eb59bd2f3c576c781949a2bbe9c5fb6de10e9cbe45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5229b23148b879dc89c2a1b308f81e8d0708fbc1efbec72abbe7d21ede832a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5229b23148b879dc89c2a1b308f81e8d0708fbc1efbec72abbe7d21ede832a7->enter($__internal_d5229b23148b879dc89c2a1b308f81e8d0708fbc1efbec72abbe7d21ede832a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5229b23148b879dc89c2a1b308f81e8d0708fbc1efbec72abbe7d21ede832a7->leave($__internal_d5229b23148b879dc89c2a1b308f81e8d0708fbc1efbec72abbe7d21ede832a7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}
", "SonataAdminBundle:CRUD:edit.html.twig", "/var/www/html/symfonyBlog/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit.html.twig");
    }
}
