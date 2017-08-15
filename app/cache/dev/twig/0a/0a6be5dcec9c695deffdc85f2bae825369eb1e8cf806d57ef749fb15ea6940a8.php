<?php

/* BloggerBlogBundle:Page:about.html.twig */
class __TwigTemplate_e5b94f800afffa5e3de2bea50420d6d3e9ca74306682f07fd9b8eee3e1b50cf9 extends Twig_Template
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
        $__internal_b459d3283530d54b8ac1c9bc22a87fc56f4abdd0bfed3e7337f29e35596c3f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b459d3283530d54b8ac1c9bc22a87fc56f4abdd0bfed3e7337f29e35596c3f43->enter($__internal_b459d3283530d54b8ac1c9bc22a87fc56f4abdd0bfed3e7337f29e35596c3f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b459d3283530d54b8ac1c9bc22a87fc56f4abdd0bfed3e7337f29e35596c3f43->leave($__internal_b459d3283530d54b8ac1c9bc22a87fc56f4abdd0bfed3e7337f29e35596c3f43_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5baee89a045b048d1baeb026b027211ce52ae5c3e85404ddb472d2d2e89e5ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5baee89a045b048d1baeb026b027211ce52ae5c3e85404ddb472d2d2e89e5ed->enter($__internal_b5baee89a045b048d1baeb026b027211ce52ae5c3e85404ddb472d2d2e89e5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "About";
        
        $__internal_b5baee89a045b048d1baeb026b027211ce52ae5c3e85404ddb472d2d2e89e5ed->leave($__internal_b5baee89a045b048d1baeb026b027211ce52ae5c3e85404ddb472d2d2e89e5ed_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_f58b0f615706268340060a02291ae9ccd219ec6cc81b32a524fe1ebf92750175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f58b0f615706268340060a02291ae9ccd219ec6cc81b32a524fe1ebf92750175->enter($__internal_f58b0f615706268340060a02291ae9ccd219ec6cc81b32a524fe1ebf92750175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f58b0f615706268340060a02291ae9ccd219ec6cc81b32a524fe1ebf92750175->leave($__internal_f58b0f615706268340060a02291ae9ccd219ec6cc81b32a524fe1ebf92750175_prof);

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
