<?php

/* BloggerBlogBundle:Admin:update.html.twig */
class __TwigTemplate_b354654462d0f76094af5d15b4d4d76f2d76a8b6fa5859fd6e6839e676cd6cf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Admin:update.html.twig", 2);
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
        $__internal_45ed4ffa1800f784b6f91c76e7c40dbd1d3e560a4e69c79d162736d361b5dba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45ed4ffa1800f784b6f91c76e7c40dbd1d3e560a4e69c79d162736d361b5dba7->enter($__internal_45ed4ffa1800f784b6f91c76e7c40dbd1d3e560a4e69c79d162736d361b5dba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Admin:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45ed4ffa1800f784b6f91c76e7c40dbd1d3e560a4e69c79d162736d361b5dba7->leave($__internal_45ed4ffa1800f784b6f91c76e7c40dbd1d3e560a4e69c79d162736d361b5dba7_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_40f2918c72eb4eb691a0e19a20ff2998c980d5161243e59b99d9fc1844d6a25a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40f2918c72eb4eb691a0e19a20ff2998c980d5161243e59b99d9fc1844d6a25a->enter($__internal_40f2918c72eb4eb691a0e19a20ff2998c980d5161243e59b99d9fc1844d6a25a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin";
        
        $__internal_40f2918c72eb4eb691a0e19a20ff2998c980d5161243e59b99d9fc1844d6a25a->leave($__internal_40f2918c72eb4eb691a0e19a20ff2998c980d5161243e59b99d9fc1844d6a25a_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_56b9a75706077653cc72c00fba05c8df673c4baae062cbb8081137f52d5b0937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56b9a75706077653cc72c00fba05c8df673c4baae062cbb8081137f52d5b0937->enter($__internal_56b9a75706077653cc72c00fba05c8df673c4baae062cbb8081137f52d5b0937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <h2>Update Blog</h2>

    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_blog_update", array("blogId" => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "id", array()))), "method" => "POST", "attr" => array("class" => "blogger")));
        echo "
    ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row', array("value" => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array())));
        echo "
    ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'row', array("value" => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "author", array())));
        echo "
    ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "blog", array()), 'row', array("value" => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "blog", array())));
        echo "
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'row');
        echo " <img class=\"image_update\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_join_filter(array(0 => "images/", 1 => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "image", array())))), "html", null, true);
        echo "\" />
    ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tags", array()), 'row', array("value" => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "tags", array())));
        echo "

    ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    <input type=\"submit\" value=\"Submit\" />
";
        
        $__internal_56b9a75706077653cc72c00fba05c8df673c4baae062cbb8081137f52d5b0937->leave($__internal_56b9a75706077653cc72c00fba05c8df673c4baae062cbb8081137f52d5b0937_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Admin:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 18,  84 => 16,  78 => 15,  74 => 14,  70 => 13,  66 => 12,  61 => 10,  57 => 9,  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
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
    <h2>Update Blog</h2>

    {{ form_start(form, { 'action': path('BloggerBlogBundle_blog_update',{ 'blogId': blog.id }), 'method': 'POST', 'attr': {'class': 'blogger'} }) }}
    {{ form_errors(form) }}

    {{ form_row(form.title, {'value' : blog.title}) }}
    {{ form_row(form.author, {'value' : blog.author}) }}
    {{ form_row(form.blog, {'value' : blog.blog}) }}
    {{ form_row(form.image) }} <img class=\"image_update\" src=\"{{ asset(['images/', blog.image]|join) }}\" />
    {{ form_row(form.tags, {'value' : blog.tags}) }}

    {{ form_rest(form) }}

    <input type=\"submit\" value=\"Submit\" />
{% endblock %}
", "BloggerBlogBundle:Admin:update.html.twig", "/var/www/html/symfonyBlog/src/Blogger/BlogBundle/Resources/views/Admin/update.html.twig");
    }
}
