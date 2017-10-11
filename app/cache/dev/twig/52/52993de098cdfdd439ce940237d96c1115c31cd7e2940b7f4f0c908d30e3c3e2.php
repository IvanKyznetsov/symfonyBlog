<?php

/* BloggerBlogBundle:Admin:update.html.twig */
class __TwigTemplate_a2cfad67edc4b7f6a640de3ac9ec87c88598e68a671e474efd5392acdf7c5877 extends Twig_Template
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
        $__internal_15fcbd70b52206646a7722cb97edc2e729ff5913f16d248f181735eb82fa3515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15fcbd70b52206646a7722cb97edc2e729ff5913f16d248f181735eb82fa3515->enter($__internal_15fcbd70b52206646a7722cb97edc2e729ff5913f16d248f181735eb82fa3515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Admin:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15fcbd70b52206646a7722cb97edc2e729ff5913f16d248f181735eb82fa3515->leave($__internal_15fcbd70b52206646a7722cb97edc2e729ff5913f16d248f181735eb82fa3515_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_821bbdad4b999fc707ff7baed6aacbecdbdd64e2688f502dac3137cb59256fab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_821bbdad4b999fc707ff7baed6aacbecdbdd64e2688f502dac3137cb59256fab->enter($__internal_821bbdad4b999fc707ff7baed6aacbecdbdd64e2688f502dac3137cb59256fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin";
        
        $__internal_821bbdad4b999fc707ff7baed6aacbecdbdd64e2688f502dac3137cb59256fab->leave($__internal_821bbdad4b999fc707ff7baed6aacbecdbdd64e2688f502dac3137cb59256fab_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_473b9442a99f9bd1a64f4178d0765e4b8e80003c67e5f214eaa7b6b8e8d379d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_473b9442a99f9bd1a64f4178d0765e4b8e80003c67e5f214eaa7b6b8e8d379d1->enter($__internal_473b9442a99f9bd1a64f4178d0765e4b8e80003c67e5f214eaa7b6b8e8d379d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_join_filter(array(0 => (("images/" . $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "id", array())) . "/"), 1 => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "image", array())))), "html", null, true);
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
        
        $__internal_473b9442a99f9bd1a64f4178d0765e4b8e80003c67e5f214eaa7b6b8e8d379d1->leave($__internal_473b9442a99f9bd1a64f4178d0765e4b8e80003c67e5f214eaa7b6b8e8d379d1_prof);

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
    {{ form_row(form.image) }} <img class=\"image_update\" src=\"{{ asset(['images/' ~ blog.id ~'/', blog.image]|join) }}\" />
    {{ form_row(form.tags, {'value' : blog.tags}) }}

    {{ form_rest(form) }}

    <input type=\"submit\" value=\"Submit\" />
{% endblock %}
", "BloggerBlogBundle:Admin:update.html.twig", "/var/www/html/symfonyBlog/src/Blogger/BlogBundle/Resources/views/Admin/update.html.twig");
    }
}
