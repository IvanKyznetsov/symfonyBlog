<?php

/* BloggerBlogBundle:Comment:create.html.twig */
class __TwigTemplate_8056091f52a3a75e619e10e617ea2dcd3d65917a048ebcd8217b2b6b89d090bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Comment:create.html.twig", 1);
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
        $__internal_5cbb0556b1e044c502e76a47759de6272d3db1e57fee200c178eb07b53cc847e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cbb0556b1e044c502e76a47759de6272d3db1e57fee200c178eb07b53cc847e->enter($__internal_5cbb0556b1e044c502e76a47759de6272d3db1e57fee200c178eb07b53cc847e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Comment:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cbb0556b1e044c502e76a47759de6272d3db1e57fee200c178eb07b53cc847e->leave($__internal_5cbb0556b1e044c502e76a47759de6272d3db1e57fee200c178eb07b53cc847e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b920068ab0e1950d8dc24c7b1d099378607c655ccbed85078c76341068dc842c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b920068ab0e1950d8dc24c7b1d099378607c655ccbed85078c76341068dc842c->enter($__internal_b920068ab0e1950d8dc24c7b1d099378607c655ccbed85078c76341068dc842c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Add Comment";
        
        $__internal_b920068ab0e1950d8dc24c7b1d099378607c655ccbed85078c76341068dc842c->leave($__internal_b920068ab0e1950d8dc24c7b1d099378607c655ccbed85078c76341068dc842c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fd37bcda7cfb42cfe5ff19d7b2e884b0929047acc23391718520951d3b62852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fd37bcda7cfb42cfe5ff19d7b2e884b0929047acc23391718520951d3b62852->enter($__internal_9fd37bcda7cfb42cfe5ff19d7b2e884b0929047acc23391718520951d3b62852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Add comment for blog post \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "blog", array()), "title", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 7
        $this->loadTemplate("BloggerBlogBundle:Comment:form.html.twig", "BloggerBlogBundle:Comment:create.html.twig", 7)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))));
        
        $__internal_9fd37bcda7cfb42cfe5ff19d7b2e884b0929047acc23391718520951d3b62852->leave($__internal_9fd37bcda7cfb42cfe5ff19d7b2e884b0929047acc23391718520951d3b62852_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Comment:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block title %}Add Comment{% endblock%}

{% block body %}
    <h1>Add comment for blog post \"{{ comment.blog.title }}\"</h1>
    {% include 'BloggerBlogBundle:Comment:form.html.twig' with { 'form': form } %}
{% endblock %}", "BloggerBlogBundle:Comment:create.html.twig", "/var/www/html/symfonyBlog/src/Blogger/BlogBundle/Resources/views/Comment/create.html.twig");
    }
}
