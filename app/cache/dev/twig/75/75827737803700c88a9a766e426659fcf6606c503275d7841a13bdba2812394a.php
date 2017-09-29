<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fab6d579105162b77b78b86e49bc939ba19f57c2b57c3708995d07102bc99002 extends Twig_Template
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
        $__internal_075b8917f8d535063fd9ee280ecf4d7bcd3af7a60c4fb69ded96f043774f7012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_075b8917f8d535063fd9ee280ecf4d7bcd3af7a60c4fb69ded96f043774f7012->enter($__internal_075b8917f8d535063fd9ee280ecf4d7bcd3af7a60c4fb69ded96f043774f7012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_075b8917f8d535063fd9ee280ecf4d7bcd3af7a60c4fb69ded96f043774f7012->leave($__internal_075b8917f8d535063fd9ee280ecf4d7bcd3af7a60c4fb69ded96f043774f7012_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_13676de74aa454781adda26db28a30229593e8c9c2d56a84ea3bb9652403b545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13676de74aa454781adda26db28a30229593e8c9c2d56a84ea3bb9652403b545->enter($__internal_13676de74aa454781adda26db28a30229593e8c9c2d56a84ea3bb9652403b545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_13676de74aa454781adda26db28a30229593e8c9c2d56a84ea3bb9652403b545->leave($__internal_13676de74aa454781adda26db28a30229593e8c9c2d56a84ea3bb9652403b545_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bf13bf70e5eb88e1091d74663f05b53f269cb92f710bdda1bb12953f91533a89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf13bf70e5eb88e1091d74663f05b53f269cb92f710bdda1bb12953f91533a89->enter($__internal_bf13bf70e5eb88e1091d74663f05b53f269cb92f710bdda1bb12953f91533a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bf13bf70e5eb88e1091d74663f05b53f269cb92f710bdda1bb12953f91533a89->leave($__internal_bf13bf70e5eb88e1091d74663f05b53f269cb92f710bdda1bb12953f91533a89_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f0e25842d5a6f3e72814ccf02855d3ddc75e7a8e27baaa7a3cb599d904324dc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0e25842d5a6f3e72814ccf02855d3ddc75e7a8e27baaa7a3cb599d904324dc0->enter($__internal_f0e25842d5a6f3e72814ccf02855d3ddc75e7a8e27baaa7a3cb599d904324dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f0e25842d5a6f3e72814ccf02855d3ddc75e7a8e27baaa7a3cb599d904324dc0->leave($__internal_f0e25842d5a6f3e72814ccf02855d3ddc75e7a8e27baaa7a3cb599d904324dc0_prof);

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
