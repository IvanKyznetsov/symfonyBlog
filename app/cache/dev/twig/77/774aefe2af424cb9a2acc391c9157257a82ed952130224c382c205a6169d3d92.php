<?php

/* BloggerBlogBundle:Page:about.html.twig */
class __TwigTemplate_c94997695b41d53368c1ae98639af74590f4a13634744c2ce7077bcc0d9f735f extends Twig_Template
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
        $__internal_71b272a1eafc235031b30013573476675b7327cb1d5b9f8409a930121264f00c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71b272a1eafc235031b30013573476675b7327cb1d5b9f8409a930121264f00c->enter($__internal_71b272a1eafc235031b30013573476675b7327cb1d5b9f8409a930121264f00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71b272a1eafc235031b30013573476675b7327cb1d5b9f8409a930121264f00c->leave($__internal_71b272a1eafc235031b30013573476675b7327cb1d5b9f8409a930121264f00c_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca02b63a21ac325a8546b918f6e6300225c68b79d666789d4bc70255f49167c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca02b63a21ac325a8546b918f6e6300225c68b79d666789d4bc70255f49167c0->enter($__internal_ca02b63a21ac325a8546b918f6e6300225c68b79d666789d4bc70255f49167c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "About";
        
        $__internal_ca02b63a21ac325a8546b918f6e6300225c68b79d666789d4bc70255f49167c0->leave($__internal_ca02b63a21ac325a8546b918f6e6300225c68b79d666789d4bc70255f49167c0_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfd63aeb4ce2c68c8d15165f2e9f8f6da67684b20021f7a690a0674efd7f2c7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfd63aeb4ce2c68c8d15165f2e9f8f6da67684b20021f7a690a0674efd7f2c7f->enter($__internal_bfd63aeb4ce2c68c8d15165f2e9f8f6da67684b20021f7a690a0674efd7f2c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bfd63aeb4ce2c68c8d15165f2e9f8f6da67684b20021f7a690a0674efd7f2c7f->leave($__internal_bfd63aeb4ce2c68c8d15165f2e9f8f6da67684b20021f7a690a0674efd7f2c7f_prof);

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
