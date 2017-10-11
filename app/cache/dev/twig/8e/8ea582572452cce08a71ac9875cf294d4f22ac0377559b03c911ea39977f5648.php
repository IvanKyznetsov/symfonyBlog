<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ca8377f6f3474ba66fe34eda8b50836a59a2a3115354d31632afc75d0abba59f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d7768dd47c1589afa1350a0c876c2f3ea8b7eaf1957aad99233a01486a08a84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d7768dd47c1589afa1350a0c876c2f3ea8b7eaf1957aad99233a01486a08a84->enter($__internal_9d7768dd47c1589afa1350a0c876c2f3ea8b7eaf1957aad99233a01486a08a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d7768dd47c1589afa1350a0c876c2f3ea8b7eaf1957aad99233a01486a08a84->leave($__internal_9d7768dd47c1589afa1350a0c876c2f3ea8b7eaf1957aad99233a01486a08a84_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0187c7bdccae3421c573fb99d102edc12b23342d1a73744eab658260cfb9bfa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0187c7bdccae3421c573fb99d102edc12b23342d1a73744eab658260cfb9bfa4->enter($__internal_0187c7bdccae3421c573fb99d102edc12b23342d1a73744eab658260cfb9bfa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0187c7bdccae3421c573fb99d102edc12b23342d1a73744eab658260cfb9bfa4->leave($__internal_0187c7bdccae3421c573fb99d102edc12b23342d1a73744eab658260cfb9bfa4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b94069d2f54092e601ca9b7c44b3d90c1c9a11d6e866de792e4d136eac42db4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b94069d2f54092e601ca9b7c44b3d90c1c9a11d6e866de792e4d136eac42db4->enter($__internal_7b94069d2f54092e601ca9b7c44b3d90c1c9a11d6e866de792e4d136eac42db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_7b94069d2f54092e601ca9b7c44b3d90c1c9a11d6e866de792e4d136eac42db4->leave($__internal_7b94069d2f54092e601ca9b7c44b3d90c1c9a11d6e866de792e4d136eac42db4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
