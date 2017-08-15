<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_de5f36a7966fbb0907be7f6bf3a37330ac4cbe7ba66731b5476227d686ddc095 extends Twig_Template
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
        $__internal_319066718332b75cdd1ca5d6cf1f50e9cf8e923fb639c737e1aa2fd66613316c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319066718332b75cdd1ca5d6cf1f50e9cf8e923fb639c737e1aa2fd66613316c->enter($__internal_319066718332b75cdd1ca5d6cf1f50e9cf8e923fb639c737e1aa2fd66613316c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319066718332b75cdd1ca5d6cf1f50e9cf8e923fb639c737e1aa2fd66613316c->leave($__internal_319066718332b75cdd1ca5d6cf1f50e9cf8e923fb639c737e1aa2fd66613316c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9808d8277572039a6064139d0bb8ba765ce2c625f83bfaf5494a3ea862c97c84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9808d8277572039a6064139d0bb8ba765ce2c625f83bfaf5494a3ea862c97c84->enter($__internal_9808d8277572039a6064139d0bb8ba765ce2c625f83bfaf5494a3ea862c97c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9808d8277572039a6064139d0bb8ba765ce2c625f83bfaf5494a3ea862c97c84->leave($__internal_9808d8277572039a6064139d0bb8ba765ce2c625f83bfaf5494a3ea862c97c84_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3e00f81f91fa1746a6dfa708ef90cc5ae9254867f0d71b4e6626cee2538c298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3e00f81f91fa1746a6dfa708ef90cc5ae9254867f0d71b4e6626cee2538c298->enter($__internal_c3e00f81f91fa1746a6dfa708ef90cc5ae9254867f0d71b4e6626cee2538c298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c3e00f81f91fa1746a6dfa708ef90cc5ae9254867f0d71b4e6626cee2538c298->leave($__internal_c3e00f81f91fa1746a6dfa708ef90cc5ae9254867f0d71b4e6626cee2538c298_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbe7203516081a7de4e447509656ef3e21894ac7b39ef2d1977df7bcd7a480f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbe7203516081a7de4e447509656ef3e21894ac7b39ef2d1977df7bcd7a480f7->enter($__internal_bbe7203516081a7de4e447509656ef3e21894ac7b39ef2d1977df7bcd7a480f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_bbe7203516081a7de4e447509656ef3e21894ac7b39ef2d1977df7bcd7a480f7->leave($__internal_bbe7203516081a7de4e447509656ef3e21894ac7b39ef2d1977df7bcd7a480f7_prof);

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
