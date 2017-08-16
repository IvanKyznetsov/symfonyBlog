<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_db821f51a5ad71d9671bd7bc979c98f7bd7921e7ce91a64ce0a7c340c14336b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_da478f53a3c9de46809c008ccfd853f422138e69693f1db3b584bd45e0c0fc52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da478f53a3c9de46809c008ccfd853f422138e69693f1db3b584bd45e0c0fc52->enter($__internal_da478f53a3c9de46809c008ccfd853f422138e69693f1db3b584bd45e0c0fc52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da478f53a3c9de46809c008ccfd853f422138e69693f1db3b584bd45e0c0fc52->leave($__internal_da478f53a3c9de46809c008ccfd853f422138e69693f1db3b584bd45e0c0fc52_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ab4c83072c1f658ab1fc94b5668af665a9a7dda546b148ce2e4792ca9720be64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab4c83072c1f658ab1fc94b5668af665a9a7dda546b148ce2e4792ca9720be64->enter($__internal_ab4c83072c1f658ab1fc94b5668af665a9a7dda546b148ce2e4792ca9720be64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ab4c83072c1f658ab1fc94b5668af665a9a7dda546b148ce2e4792ca9720be64->leave($__internal_ab4c83072c1f658ab1fc94b5668af665a9a7dda546b148ce2e4792ca9720be64_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1091f82167a6d243a8659ec3c8e851837392b82f8ef290726c85ba357e62373e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1091f82167a6d243a8659ec3c8e851837392b82f8ef290726c85ba357e62373e->enter($__internal_1091f82167a6d243a8659ec3c8e851837392b82f8ef290726c85ba357e62373e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1091f82167a6d243a8659ec3c8e851837392b82f8ef290726c85ba357e62373e->leave($__internal_1091f82167a6d243a8659ec3c8e851837392b82f8ef290726c85ba357e62373e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4e7ad44d572b06928ac88dfed1c745a6219cb1811f5afeccab6c4670938e0ba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e7ad44d572b06928ac88dfed1c745a6219cb1811f5afeccab6c4670938e0ba8->enter($__internal_4e7ad44d572b06928ac88dfed1c745a6219cb1811f5afeccab6c4670938e0ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4e7ad44d572b06928ac88dfed1c745a6219cb1811f5afeccab6c4670938e0ba8->leave($__internal_4e7ad44d572b06928ac88dfed1c745a6219cb1811f5afeccab6c4670938e0ba8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
