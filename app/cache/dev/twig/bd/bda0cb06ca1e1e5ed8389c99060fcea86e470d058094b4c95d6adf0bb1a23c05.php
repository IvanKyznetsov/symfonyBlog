<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_ec0463915d1968adc739cde8449d70292627aff73e8e07ff8ebe55d4d37cf959 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69557bfaef9b7fee39a1c4de06a6f7d02c545a505e74e0ac46c3e074530ba760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69557bfaef9b7fee39a1c4de06a6f7d02c545a505e74e0ac46c3e074530ba760->enter($__internal_69557bfaef9b7fee39a1c4de06a6f7d02c545a505e74e0ac46c3e074530ba760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69557bfaef9b7fee39a1c4de06a6f7d02c545a505e74e0ac46c3e074530ba760->leave($__internal_69557bfaef9b7fee39a1c4de06a6f7d02c545a505e74e0ac46c3e074530ba760_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_12e844a70b8bfd8440fc441567fd6e916ef34b2847f71e7c5cdac8b767d3f547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12e844a70b8bfd8440fc441567fd6e916ef34b2847f71e7c5cdac8b767d3f547->enter($__internal_12e844a70b8bfd8440fc441567fd6e916ef34b2847f71e7c5cdac8b767d3f547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_12e844a70b8bfd8440fc441567fd6e916ef34b2847f71e7c5cdac8b767d3f547->leave($__internal_12e844a70b8bfd8440fc441567fd6e916ef34b2847f71e7c5cdac8b767d3f547_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_500be94ea4cbcf22fe452cfc39cd9c1ab48e0117cac74c7c7c3ba248f55d8bca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_500be94ea4cbcf22fe452cfc39cd9c1ab48e0117cac74c7c7c3ba248f55d8bca->enter($__internal_500be94ea4cbcf22fe452cfc39cd9c1ab48e0117cac74c7c7c3ba248f55d8bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "        ";
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        
        $__internal_500be94ea4cbcf22fe452cfc39cd9c1ab48e0117cac74c7c7c3ba248f55d8bca->leave($__internal_500be94ea4cbcf22fe452cfc39cd9c1ab48e0117cac74c7c7c3ba248f55d8bca_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 6,  54 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block body %}
    {% block fos_user_content %}
        {% include \"@FOSUser/Group/edit_content.html.twig\" %}
    {% endblock fos_user_content %}
{% endblock %}

", "FOSUserBundle:Group:edit.html.twig", "/var/www/html/symfonyBlog/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
