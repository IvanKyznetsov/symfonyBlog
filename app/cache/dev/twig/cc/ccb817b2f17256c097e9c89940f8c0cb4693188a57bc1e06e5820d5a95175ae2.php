<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2f52a894756398c61d9b2e9fef0c056c006e8c79e181085cd7323374e0c8c57c extends Twig_Template
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
        $__internal_af55afa73ab6e504b8f95eb117fa308e442b23a034c29b537e4ddb31775def04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af55afa73ab6e504b8f95eb117fa308e442b23a034c29b537e4ddb31775def04->enter($__internal_af55afa73ab6e504b8f95eb117fa308e442b23a034c29b537e4ddb31775def04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af55afa73ab6e504b8f95eb117fa308e442b23a034c29b537e4ddb31775def04->leave($__internal_af55afa73ab6e504b8f95eb117fa308e442b23a034c29b537e4ddb31775def04_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e6ddcda611c80eaa240264643c3301cb3a457eadef077fcb9c5982542199f2bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6ddcda611c80eaa240264643c3301cb3a457eadef077fcb9c5982542199f2bb->enter($__internal_e6ddcda611c80eaa240264643c3301cb3a457eadef077fcb9c5982542199f2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e6ddcda611c80eaa240264643c3301cb3a457eadef077fcb9c5982542199f2bb->leave($__internal_e6ddcda611c80eaa240264643c3301cb3a457eadef077fcb9c5982542199f2bb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_908d4fe146b5cdd0df6e8679c1e4f0aebd9c10249c8c4739d770cbb032d07999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_908d4fe146b5cdd0df6e8679c1e4f0aebd9c10249c8c4739d770cbb032d07999->enter($__internal_908d4fe146b5cdd0df6e8679c1e4f0aebd9c10249c8c4739d770cbb032d07999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_908d4fe146b5cdd0df6e8679c1e4f0aebd9c10249c8c4739d770cbb032d07999->leave($__internal_908d4fe146b5cdd0df6e8679c1e4f0aebd9c10249c8c4739d770cbb032d07999_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2e0adfb1452d5125eb2648a4473dd4e3ae5c7ae41a0151dc38cc1777a2847581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e0adfb1452d5125eb2648a4473dd4e3ae5c7ae41a0151dc38cc1777a2847581->enter($__internal_2e0adfb1452d5125eb2648a4473dd4e3ae5c7ae41a0151dc38cc1777a2847581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2e0adfb1452d5125eb2648a4473dd4e3ae5c7ae41a0151dc38cc1777a2847581->leave($__internal_2e0adfb1452d5125eb2648a4473dd4e3ae5c7ae41a0151dc38cc1777a2847581_prof);

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
