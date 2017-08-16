<?php

/* BloggerBlogBundle:Page:contact.html.twig */
class __TwigTemplate_b545447e0c738b1bdf8a4d2bf1c3034b403edaa6b5d451ed07435dcd187c6317 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Page:contact.html.twig", 2);
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
        $__internal_8c22214a4b3fed44e727683ef58b4b665667740e8a41be4e2945e6de7327e3b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c22214a4b3fed44e727683ef58b4b665667740e8a41be4e2945e6de7327e3b7->enter($__internal_8c22214a4b3fed44e727683ef58b4b665667740e8a41be4e2945e6de7327e3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c22214a4b3fed44e727683ef58b4b665667740e8a41be4e2945e6de7327e3b7->leave($__internal_8c22214a4b3fed44e727683ef58b4b665667740e8a41be4e2945e6de7327e3b7_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_6aa195c0eea81af16984c3018175787790f5b2ebf5d64818852fc1d45b6fef94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aa195c0eea81af16984c3018175787790f5b2ebf5d64818852fc1d45b6fef94->enter($__internal_6aa195c0eea81af16984c3018175787790f5b2ebf5d64818852fc1d45b6fef94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_6aa195c0eea81af16984c3018175787790f5b2ebf5d64818852fc1d45b6fef94->leave($__internal_6aa195c0eea81af16984c3018175787790f5b2ebf5d64818852fc1d45b6fef94_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_6aa79ea5ce58e2889f824db3c3b08217ae92451498b69d48223579fb964b4539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aa79ea5ce58e2889f824db3c3b08217ae92451498b69d48223579fb964b4539->enter($__internal_6aa79ea5ce58e2889f824db3c3b08217ae92451498b69d48223579fb964b4539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>Contact symblog</h1>
    </header>

    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "blogger-notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"blogger-notice\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    <p>Want to contact symblog?</p>

    ";
        // line 19
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_contact"), "method" => "POST", "attr" => array("class" => "blogger")));
        echo "
    ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
    ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
    ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject", array()), 'row');
        echo "
    ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'row');
        echo "

    ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    <input type=\"submit\" value=\"Submit\" />

";
        
        $__internal_6aa79ea5ce58e2889f824db3c3b08217ae92451498b69d48223579fb964b4539->leave($__internal_6aa79ea5ce58e2889f824db3c3b08217ae92451498b69d48223579fb964b4539_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 27,  101 => 25,  97 => 24,  93 => 23,  89 => 22,  84 => 20,  80 => 19,  75 => 16,  66 => 13,  63 => 12,  59 => 11,  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/Page/contact.html.twig #}
{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block title %}Contact{% endblock%}

{% block body %}
    <header>
        <h1>Contact symblog</h1>
    </header>

    {% for flashMessage in app.session.flashbag.get('blogger-notice') %}
        <div class=\"blogger-notice\">
            {{ flashMessage }}
        </div>
    {% endfor %}

    <p>Want to contact symblog?</p>

    {{ form_start(form, { 'action': path('BloggerBlogBundle_contact'), 'method': 'POST', 'attr': {'class': 'blogger'} }) }}
    {{ form_errors(form) }}

    {{ form_row(form.name) }}
    {{ form_row(form.email) }}
    {{ form_row(form.subject) }}
    {{ form_row(form.body) }}

    {{ form_rest(form) }}

    <input type=\"submit\" value=\"Submit\" />

{% endblock %}", "BloggerBlogBundle:Page:contact.html.twig", "/var/www/html/symfonyBlog/src/Blogger/BlogBundle/Resources/views/Page/contact.html.twig");
    }
}
