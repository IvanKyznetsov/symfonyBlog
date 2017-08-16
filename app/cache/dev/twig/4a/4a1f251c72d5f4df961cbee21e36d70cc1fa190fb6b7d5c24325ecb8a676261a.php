<?php

/* BloggerBlogBundle:Blog:show.html.twig */
class __TwigTemplate_acda5ac9acad9f56ca680fb6cc3b12fbee4a3403feeecf114716f451f4c8883a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Blog:show.html.twig", 2);
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
        $__internal_9824b42ef747deafb2c6c80bb88cf64c56f4f3a4fbb2dd16bdd0ea00a3575a5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9824b42ef747deafb2c6c80bb88cf64c56f4f3a4fbb2dd16bdd0ea00a3575a5d->enter($__internal_9824b42ef747deafb2c6c80bb88cf64c56f4f3a4fbb2dd16bdd0ea00a3575a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Blog:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9824b42ef747deafb2c6c80bb88cf64c56f4f3a4fbb2dd16bdd0ea00a3575a5d->leave($__internal_9824b42ef747deafb2c6c80bb88cf64c56f4f3a4fbb2dd16bdd0ea00a3575a5d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a2f4af070d390fc80b8eb1d3b8bc9a2163eae6d7c9eab0c763021783cb26e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a2f4af070d390fc80b8eb1d3b8bc9a2163eae6d7c9eab0c763021783cb26e7c->enter($__internal_4a2f4af070d390fc80b8eb1d3b8bc9a2163eae6d7c9eab0c763021783cb26e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        
        $__internal_4a2f4af070d390fc80b8eb1d3b8bc9a2163eae6d7c9eab0c763021783cb26e7c->leave($__internal_4a2f4af070d390fc80b8eb1d3b8bc9a2163eae6d7c9eab0c763021783cb26e7c_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba686ff6f2e1cbec39047f25b0c1ddfe9cd1b751088733dacdd8b4590f968085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba686ff6f2e1cbec39047f25b0c1ddfe9cd1b751088733dacdd8b4590f968085->enter($__internal_ba686ff6f2e1cbec39047f25b0c1ddfe9cd1b751088733dacdd8b4590f968085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <article class=\"blog\">
        <header>
            <div class=\"date\"><time datetime=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "created", array()), "c"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "created", array()), "l, F j, Y"), "html", null, true);
        echo "</time></div>
            <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        echo "</h2>
        </header>
        <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_join_filter(array(0 => "images/", 1 => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "image", array())))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        echo " image not found\" class=\"large\" />
        <div>
            <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "blog", array()), "html", null, true);
        echo "</p>
        </div>
    </article>
    <section class=\"comments\" id=\"comments\">
        <section class=\"previous-comments\">
            <h3>Comments</h3>
            ";
        // line 20
        $this->loadTemplate("BloggerBlogBundle:Comment:index.html.twig", "BloggerBlogBundle:Blog:show.html.twig", 20)->display(array_merge($context, array("comments" => (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")))));
        // line 21
        echo "        </section>
        ";
        // line 22
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 23
            echo "            <h3>Add Comment</h3>
            ";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("BloggerBlogBundle:Comment:new", array("blog_id" => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "id", array()))));
            echo "
        ";
        }
        // line 26
        echo "    </section>
";
        
        $__internal_ba686ff6f2e1cbec39047f25b0c1ddfe9cd1b751088733dacdd8b4590f968085->leave($__internal_ba686ff6f2e1cbec39047f25b0c1ddfe9cd1b751088733dacdd8b4590f968085_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Blog:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 26,  94 => 24,  91 => 23,  89 => 22,  86 => 21,  84 => 20,  75 => 14,  68 => 12,  63 => 10,  57 => 9,  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resouces/views/Blog/show.html.twig #}
{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block title %}{{ blog.title }}{% endblock %}

{% block body %}
    <article class=\"blog\">
        <header>
            <div class=\"date\"><time datetime=\"{{ blog.created|date('c') }}\">{{ blog.created|date('l, F j, Y') }}</time></div>
            <h2>{{ blog.title }}</h2>
        </header>
        <img src=\"{{ asset(['images/', blog.image]|join) }}\" alt=\"{{ blog.title }} image not found\" class=\"large\" />
        <div>
            <p>{{ blog.blog }}</p>
        </div>
    </article>
    <section class=\"comments\" id=\"comments\">
        <section class=\"previous-comments\">
            <h3>Comments</h3>
            {% include 'BloggerBlogBundle:Comment:index.html.twig' with { 'comments': comments } %}
        </section>
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            <h3>Add Comment</h3>
            {{ render(controller('BloggerBlogBundle:Comment:new',{ 'blog_id': blog.id })) }}
        {% endif %}
    </section>
{% endblock %}", "BloggerBlogBundle:Blog:show.html.twig", "/var/www/html/symfonyBlog/src/Blogger/BlogBundle/Resources/views/Blog/show.html.twig");
    }
}
