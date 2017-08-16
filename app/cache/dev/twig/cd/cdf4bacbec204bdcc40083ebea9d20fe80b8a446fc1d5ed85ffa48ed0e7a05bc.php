<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_d04a21814157e542fe82f98839fec33a24afdeba512658b01f981bfed43383d5 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d87165bf8bb90300500d6a096079192842a7db4e7fbd73873a9743fdadd96e46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d87165bf8bb90300500d6a096079192842a7db4e7fbd73873a9743fdadd96e46->enter($__internal_d87165bf8bb90300500d6a096079192842a7db4e7fbd73873a9743fdadd96e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d87165bf8bb90300500d6a096079192842a7db4e7fbd73873a9743fdadd96e46->leave($__internal_d87165bf8bb90300500d6a096079192842a7db4e7fbd73873a9743fdadd96e46_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2d82b75b86a32b2b01b39512398851eefb984e3f30aab53a8483fc24330a03f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d82b75b86a32b2b01b39512398851eefb984e3f30aab53a8483fc24330a03f0->enter($__internal_2d82b75b86a32b2b01b39512398851eefb984e3f30aab53a8483fc24330a03f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_2d82b75b86a32b2b01b39512398851eefb984e3f30aab53a8483fc24330a03f0->leave($__internal_2d82b75b86a32b2b01b39512398851eefb984e3f30aab53a8483fc24330a03f0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
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
", "SonataAdminBundle:CRUD:edit_string.html.twig", "/var/www/html/symfonyBlog/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_string.html.twig");
    }
}
