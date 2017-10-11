<?php

/* BloggerBlogBundle:Page:about.html.twig */
class __TwigTemplate_fdbbae532aa33bc8688134b3b807ea83078887a3bea9551ab798259d0c48e994 extends Twig_Template
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
        $__internal_5233732adae4b6631387f158899ee0f468a7f8f9b47485f16a2d4ed15454d205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5233732adae4b6631387f158899ee0f468a7f8f9b47485f16a2d4ed15454d205->enter($__internal_5233732adae4b6631387f158899ee0f468a7f8f9b47485f16a2d4ed15454d205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5233732adae4b6631387f158899ee0f468a7f8f9b47485f16a2d4ed15454d205->leave($__internal_5233732adae4b6631387f158899ee0f468a7f8f9b47485f16a2d4ed15454d205_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4ceb2c5731e48d0461a135b3c7eea8def044a0350ee1f8468c279807cf6bf9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4ceb2c5731e48d0461a135b3c7eea8def044a0350ee1f8468c279807cf6bf9d->enter($__internal_a4ceb2c5731e48d0461a135b3c7eea8def044a0350ee1f8468c279807cf6bf9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "About";
        
        $__internal_a4ceb2c5731e48d0461a135b3c7eea8def044a0350ee1f8468c279807cf6bf9d->leave($__internal_a4ceb2c5731e48d0461a135b3c7eea8def044a0350ee1f8468c279807cf6bf9d_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_201c390e4a979b5bcc6567eb1ac35a8605d5ffca9f4e5f9f4191f486bbab1b9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_201c390e4a979b5bcc6567eb1ac35a8605d5ffca9f4e5f9f4191f486bbab1b9e->enter($__internal_201c390e4a979b5bcc6567eb1ac35a8605d5ffca9f4e5f9f4191f486bbab1b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_201c390e4a979b5bcc6567eb1ac35a8605d5ffca9f4e5f9f4191f486bbab1b9e->leave($__internal_201c390e4a979b5bcc6567eb1ac35a8605d5ffca9f4e5f9f4191f486bbab1b9e_prof);

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
