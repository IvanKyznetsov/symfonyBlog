<?php

/* BloggerBlogBundle:Page:about.html.twig */
class __TwigTemplate_1a2a60bfa1aaa4b6c4d391b3229c7b13e1d0aa563d9412782ba8fa79cb4a5413 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Page:about.html.twig", 2);
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
        $__internal_5e13ab388dba4fe3a9cc03ed43c42879feeaa31e4c6c772e8f4b2e5326eb86b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e13ab388dba4fe3a9cc03ed43c42879feeaa31e4c6c772e8f4b2e5326eb86b9->enter($__internal_5e13ab388dba4fe3a9cc03ed43c42879feeaa31e4c6c772e8f4b2e5326eb86b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e13ab388dba4fe3a9cc03ed43c42879feeaa31e4c6c772e8f4b2e5326eb86b9->leave($__internal_5e13ab388dba4fe3a9cc03ed43c42879feeaa31e4c6c772e8f4b2e5326eb86b9_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b453ffd49862bb6855e6083695fac1259c8924af38323eb61b0b15e6219a5f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b453ffd49862bb6855e6083695fac1259c8924af38323eb61b0b15e6219a5f8->enter($__internal_0b453ffd49862bb6855e6083695fac1259c8924af38323eb61b0b15e6219a5f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "About";
        
        $__internal_0b453ffd49862bb6855e6083695fac1259c8924af38323eb61b0b15e6219a5f8->leave($__internal_0b453ffd49862bb6855e6083695fac1259c8924af38323eb61b0b15e6219a5f8_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_864c21e9d18e3fb09b8cc974c41e5c3d20be14f876686ecc8920f3f82128c731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_864c21e9d18e3fb09b8cc974c41e5c3d20be14f876686ecc8920f3f82128c731->enter($__internal_864c21e9d18e3fb09b8cc974c41e5c3d20be14f876686ecc8920f3f82128c731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>About symblog</h1>
    </header>
    <article>
        <p>Donec imperdiet ante sed diam consequat et dictum erat faucibus. Aliquam sit
            amet vehicula leo. Morbi urna dui, tempor ac posuere et, rutrum at dui.
            Curabitur neque quam, ultricies ut imperdiet id, ornare varius arcu. Ut congue
            urna sit amet tellus malesuada nec elementum risus molestie. Donec gravida
            tellus sed tortor adipiscing fringilla. Donec nulla mauris, mollis egestas
            condimentum laoreet, lacinia vel lorem. Morbi vitae justo sit amet felis
            vehicula commodo a placerat lacus. Mauris at est elit, nec vehicula urna. Duis a
            lacus nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
            posuere cubilia Curae.</p>
    </article>
";
        
        $__internal_864c21e9d18e3fb09b8cc974c41e5c3d20be14f876686ecc8920f3f82128c731->leave($__internal_864c21e9d18e3fb09b8cc974c41e5c3d20be14f876686ecc8920f3f82128c731_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/Page/about.html.twig #}
{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block title %}About{% endblock%}

{% block body %}
    <header>
        <h1>About symblog</h1>
    </header>
    <article>
        <p>Donec imperdiet ante sed diam consequat et dictum erat faucibus. Aliquam sit
            amet vehicula leo. Morbi urna dui, tempor ac posuere et, rutrum at dui.
            Curabitur neque quam, ultricies ut imperdiet id, ornare varius arcu. Ut congue
            urna sit amet tellus malesuada nec elementum risus molestie. Donec gravida
            tellus sed tortor adipiscing fringilla. Donec nulla mauris, mollis egestas
            condimentum laoreet, lacinia vel lorem. Morbi vitae justo sit amet felis
            vehicula commodo a placerat lacus. Mauris at est elit, nec vehicula urna. Duis a
            lacus nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
            posuere cubilia Curae.</p>
    </article>
{% endblock %}", "BloggerBlogBundle:Page:about.html.twig", "/var/www/html/symfonyBlog/src/Blogger/BlogBundle/Resources/views/Page/about.html.twig");
    }
}
