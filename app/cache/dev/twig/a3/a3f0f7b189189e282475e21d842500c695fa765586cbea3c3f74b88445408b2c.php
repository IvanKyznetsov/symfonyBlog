<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7b9908e053c77a7014ba373efc26f31350d7db488f2c3c4f401f78ef5e1f65f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1eae7fdfffcd3023fb42ff1ed63262202dbae240c025f710f2fb25eb5665e16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1eae7fdfffcd3023fb42ff1ed63262202dbae240c025f710f2fb25eb5665e16->enter($__internal_b1eae7fdfffcd3023fb42ff1ed63262202dbae240c025f710f2fb25eb5665e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1eae7fdfffcd3023fb42ff1ed63262202dbae240c025f710f2fb25eb5665e16->leave($__internal_b1eae7fdfffcd3023fb42ff1ed63262202dbae240c025f710f2fb25eb5665e16_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_57c481b9606167f83a90d52d3a7b203800367661d5ef18c77d298e744c394177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57c481b9606167f83a90d52d3a7b203800367661d5ef18c77d298e744c394177->enter($__internal_57c481b9606167f83a90d52d3a7b203800367661d5ef18c77d298e744c394177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_57c481b9606167f83a90d52d3a7b203800367661d5ef18c77d298e744c394177->leave($__internal_57c481b9606167f83a90d52d3a7b203800367661d5ef18c77d298e744c394177_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8ad2971f692726fd643b9f9785e478ab4e8e1e5271ca4b2aa1be37fe7a418979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ad2971f692726fd643b9f9785e478ab4e8e1e5271ca4b2aa1be37fe7a418979->enter($__internal_8ad2971f692726fd643b9f9785e478ab4e8e1e5271ca4b2aa1be37fe7a418979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8ad2971f692726fd643b9f9785e478ab4e8e1e5271ca4b2aa1be37fe7a418979->leave($__internal_8ad2971f692726fd643b9f9785e478ab4e8e1e5271ca4b2aa1be37fe7a418979_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bb814351bd97fae2c12771af5acdef243eeee0d535ad55f90b195a73d75cba57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb814351bd97fae2c12771af5acdef243eeee0d535ad55f90b195a73d75cba57->enter($__internal_bb814351bd97fae2c12771af5acdef243eeee0d535ad55f90b195a73d75cba57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bb814351bd97fae2c12771af5acdef243eeee0d535ad55f90b195a73d75cba57->leave($__internal_bb814351bd97fae2c12771af5acdef243eeee0d535ad55f90b195a73d75cba57_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
