<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6f1f1515cb0f1ff565ca93b45f6d51ba16fdd4feee514377efdc719ba42f48f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_043b05d5b475729a0d0a3888d59621d7630396c5d7f2275e3abe45f1c3d9180e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_043b05d5b475729a0d0a3888d59621d7630396c5d7f2275e3abe45f1c3d9180e->enter($__internal_043b05d5b475729a0d0a3888d59621d7630396c5d7f2275e3abe45f1c3d9180e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_043b05d5b475729a0d0a3888d59621d7630396c5d7f2275e3abe45f1c3d9180e->leave($__internal_043b05d5b475729a0d0a3888d59621d7630396c5d7f2275e3abe45f1c3d9180e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_34df3f239fc6d65e4a5855160307e749d942e0605bfc860462b4e96f9e02509e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34df3f239fc6d65e4a5855160307e749d942e0605bfc860462b4e96f9e02509e->enter($__internal_34df3f239fc6d65e4a5855160307e749d942e0605bfc860462b4e96f9e02509e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_34df3f239fc6d65e4a5855160307e749d942e0605bfc860462b4e96f9e02509e->leave($__internal_34df3f239fc6d65e4a5855160307e749d942e0605bfc860462b4e96f9e02509e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_aff10678d33029990f5f77f7ea2b5f21a50e3c5b813bb78a53cd9da534012827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aff10678d33029990f5f77f7ea2b5f21a50e3c5b813bb78a53cd9da534012827->enter($__internal_aff10678d33029990f5f77f7ea2b5f21a50e3c5b813bb78a53cd9da534012827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_aff10678d33029990f5f77f7ea2b5f21a50e3c5b813bb78a53cd9da534012827->leave($__internal_aff10678d33029990f5f77f7ea2b5f21a50e3c5b813bb78a53cd9da534012827_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_34d21c831d6b2e3a967978be42384ae3492eb04974febd28706dadf941d9ac69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34d21c831d6b2e3a967978be42384ae3492eb04974febd28706dadf941d9ac69->enter($__internal_34d21c831d6b2e3a967978be42384ae3492eb04974febd28706dadf941d9ac69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_34d21c831d6b2e3a967978be42384ae3492eb04974febd28706dadf941d9ac69->leave($__internal_34d21c831d6b2e3a967978be42384ae3492eb04974febd28706dadf941d9ac69_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
