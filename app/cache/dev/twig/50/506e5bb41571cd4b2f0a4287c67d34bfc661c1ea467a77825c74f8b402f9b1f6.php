<?php

/* BloggerBlogBundle:Admin:add.html.twig */
class __TwigTemplate_94d02a8ee3d08fcd3617bf6603a7c155006906351679a08378abc2e58fdc5d73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Admin:add.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87097ab3835d03e0fb53556a410e1004665edd7393fa7123034299ed75e2113a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87097ab3835d03e0fb53556a410e1004665edd7393fa7123034299ed75e2113a->enter($__internal_87097ab3835d03e0fb53556a410e1004665edd7393fa7123034299ed75e2113a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Admin:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87097ab3835d03e0fb53556a410e1004665edd7393fa7123034299ed75e2113a->leave($__internal_87097ab3835d03e0fb53556a410e1004665edd7393fa7123034299ed75e2113a_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_9fb49149cc9995667db377e95a6c0884b1f367b1d434d5b77e6d05407acfb380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fb49149cc9995667db377e95a6c0884b1f367b1d434d5b77e6d05407acfb380->enter($__internal_9fb49149cc9995667db377e95a6c0884b1f367b1d434d5b77e6d05407acfb380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin";
        
        $__internal_9fb49149cc9995667db377e95a6c0884b1f367b1d434d5b77e6d05407acfb380->leave($__internal_9fb49149cc9995667db377e95a6c0884b1f367b1d434d5b77e6d05407acfb380_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_250b31defc40d2ad97d3720300386f4e6fd27781b8fb876d8dec8043221ed832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_250b31defc40d2ad97d3720300386f4e6fd27781b8fb876d8dec8043221ed832->enter($__internal_250b31defc40d2ad97d3720300386f4e6fd27781b8fb876d8dec8043221ed832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <h2>Add new Blog</h2>

    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_admin_create"), "method" => "POST", "attr" => array("class" => "blogger")));
        echo "
    ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row');
        echo "
    ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'row');
        echo "
    ";
        // line 15
        echo "        ";
        // line 16
        echo "            ";
        // line 17
        echo "            ";
        // line 18
        echo "        ";
        // line 19
        echo "    ";
        // line 20
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "blog", array()), 'row');
        echo "
    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'row');
        echo "
    ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tags", array()), 'row');
        echo "

    ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    <input type=\"submit\" value=\"Submit\" />
";
        
        $__internal_250b31defc40d2ad97d3720300386f4e6fd27781b8fb876d8dec8043221ed832->leave($__internal_250b31defc40d2ad97d3720300386f4e6fd27781b8fb876d8dec8043221ed832_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Admin:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 24,  93 => 22,  89 => 21,  84 => 20,  82 => 19,  80 => 18,  78 => 17,  76 => 16,  74 => 15,  70 => 13,  66 => 12,  61 => 10,  57 => 9,  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/Page/admin.html.twig #}
{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block title %}Admin{% endblock%}

{% block body %}
    <h2>Add new Blog</h2>

    {{ form_start(form, { 'action': path('BloggerBlogBundle_admin_create'), 'method': 'POST', 'attr': {'class': 'blogger'} }) }}
    {{ form_errors(form) }}

    {{ form_row(form.title) }}
    {{ form_row(form.author) }}
    {#{% for emailField in form.author %}#}
        {#<li>#}
            {#{{ form_errors(emailField) }}#}
            {#{{ form_widget(emailField) }}#}
        {#</li>#}
    {#{% endfor %}#}
    {{ form_row(form.blog) }}
    {{ form_row(form.image) }}
    {{ form_row(form.tags) }}

    {{ form_rest(form) }}

    <input type=\"submit\" value=\"Submit\" />
{% endblock %}
", "BloggerBlogBundle:Admin:add.html.twig", "/var/www/html/symfonyBlog/src/Blogger/BlogBundle/Resources/views/Admin/add.html.twig");
    }
}
