<?php

/* BloggerBlogBundle:Page:about.html.twig */
class __TwigTemplate_b87b48b0a081829cd7d822bd9d53c0e3b216166a72a90a31446d92e1044c0add extends Twig_Template
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
        $__internal_00ee236cc9af2618ef9789f896fecbfbed405f43a24a36528cb082ee49c9d370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ee236cc9af2618ef9789f896fecbfbed405f43a24a36528cb082ee49c9d370->enter($__internal_00ee236cc9af2618ef9789f896fecbfbed405f43a24a36528cb082ee49c9d370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00ee236cc9af2618ef9789f896fecbfbed405f43a24a36528cb082ee49c9d370->leave($__internal_00ee236cc9af2618ef9789f896fecbfbed405f43a24a36528cb082ee49c9d370_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_035b01fb97dd4647ee1c259edc6b8d0063c63b0ffa873f150884754e5ab2eac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_035b01fb97dd4647ee1c259edc6b8d0063c63b0ffa873f150884754e5ab2eac4->enter($__internal_035b01fb97dd4647ee1c259edc6b8d0063c63b0ffa873f150884754e5ab2eac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "About";
        
        $__internal_035b01fb97dd4647ee1c259edc6b8d0063c63b0ffa873f150884754e5ab2eac4->leave($__internal_035b01fb97dd4647ee1c259edc6b8d0063c63b0ffa873f150884754e5ab2eac4_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fb28ee63251b73b52f2786bc52d620e19c953d3c81581322b66418f305226f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fb28ee63251b73b52f2786bc52d620e19c953d3c81581322b66418f305226f7->enter($__internal_2fb28ee63251b73b52f2786bc52d620e19c953d3c81581322b66418f305226f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2fb28ee63251b73b52f2786bc52d620e19c953d3c81581322b66418f305226f7->leave($__internal_2fb28ee63251b73b52f2786bc52d620e19c953d3c81581322b66418f305226f7_prof);

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
