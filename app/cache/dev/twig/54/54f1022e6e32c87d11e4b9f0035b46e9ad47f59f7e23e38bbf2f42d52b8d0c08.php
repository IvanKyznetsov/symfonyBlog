<?php

/* BloggerBlogBundle:Admin:add.html.twig */
class __TwigTemplate_dce3855972df8744afbdcdd6e2af7d97add34807fdcc40d04a0e625b9dd597ed extends Twig_Template
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
        $__internal_3fdb28b87becd749aefaed189ff884c6bc9c5dee4b6b8ddb1385154c341f6a7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fdb28b87becd749aefaed189ff884c6bc9c5dee4b6b8ddb1385154c341f6a7b->enter($__internal_3fdb28b87becd749aefaed189ff884c6bc9c5dee4b6b8ddb1385154c341f6a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Admin:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fdb28b87becd749aefaed189ff884c6bc9c5dee4b6b8ddb1385154c341f6a7b->leave($__internal_3fdb28b87becd749aefaed189ff884c6bc9c5dee4b6b8ddb1385154c341f6a7b_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c831f5f8a36c9b60ea8116dce296dda9c638a506f7655abc4a345ff322c50db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c831f5f8a36c9b60ea8116dce296dda9c638a506f7655abc4a345ff322c50db->enter($__internal_9c831f5f8a36c9b60ea8116dce296dda9c638a506f7655abc4a345ff322c50db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin";
        
        $__internal_9c831f5f8a36c9b60ea8116dce296dda9c638a506f7655abc4a345ff322c50db->leave($__internal_9c831f5f8a36c9b60ea8116dce296dda9c638a506f7655abc4a345ff322c50db_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fee925e83bd9d8322809170057fade87793740f59248b37682e5cacf6aea657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fee925e83bd9d8322809170057fade87793740f59248b37682e5cacf6aea657->enter($__internal_9fee925e83bd9d8322809170057fade87793740f59248b37682e5cacf6aea657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "blog", array()), 'row');
        echo "
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'row');
        echo "
    ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tags", array()), 'row');
        echo "

    ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    <input type=\"submit\" value=\"Submit\" />
";
        
        $__internal_9fee925e83bd9d8322809170057fade87793740f59248b37682e5cacf6aea657->leave($__internal_9fee925e83bd9d8322809170057fade87793740f59248b37682e5cacf6aea657_prof);

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
        return array (  87 => 18,  82 => 16,  78 => 15,  74 => 14,  70 => 13,  66 => 12,  61 => 10,  57 => 9,  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
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
    {{ form_row(form.blog) }}
    {{ form_row(form.image) }}
    {{ form_row(form.tags) }}

    {{ form_rest(form) }}

    <input type=\"submit\" value=\"Submit\" />
{% endblock %}
", "BloggerBlogBundle:Admin:add.html.twig", "/var/www/html/symfonyBlog/src/Blogger/BlogBundle/Resources/views/Admin/add.html.twig");
    }
}
