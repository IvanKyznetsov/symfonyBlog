<?php

/* BloggerBlogBundle:Page:admin.html.twig */
class __TwigTemplate_bf594bc6780c77a96c11fcbee8320659bc219764c7cc4a65508a7e7625f78974 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Page:admin.html.twig", 2);
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
        $__internal_9d937bb92c4706efeccbda935e57cb49759c4989bad8f225896ac29ff3f73c70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d937bb92c4706efeccbda935e57cb49759c4989bad8f225896ac29ff3f73c70->enter($__internal_9d937bb92c4706efeccbda935e57cb49759c4989bad8f225896ac29ff3f73c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d937bb92c4706efeccbda935e57cb49759c4989bad8f225896ac29ff3f73c70->leave($__internal_9d937bb92c4706efeccbda935e57cb49759c4989bad8f225896ac29ff3f73c70_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_643294c4254b20716767c8756cbac0ed02045dcbae829584e8a2abe5cd9a8f08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_643294c4254b20716767c8756cbac0ed02045dcbae829584e8a2abe5cd9a8f08->enter($__internal_643294c4254b20716767c8756cbac0ed02045dcbae829584e8a2abe5cd9a8f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin";
        
        $__internal_643294c4254b20716767c8756cbac0ed02045dcbae829584e8a2abe5cd9a8f08->leave($__internal_643294c4254b20716767c8756cbac0ed02045dcbae829584e8a2abe5cd9a8f08_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_b00ac4f6d5d85bcb1cc92cf7cfab8fcefd853232022cfcc101ed952ef106c796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b00ac4f6d5d85bcb1cc92cf7cfab8fcefd853232022cfcc101ed952ef106c796->enter($__internal_b00ac4f6d5d85bcb1cc92cf7cfab8fcefd853232022cfcc101ed952ef106c796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_admin_add");
        echo "\">Add Blog</a><hr>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blogs"]) ? $context["blogs"] : $this->getContext($context, "blogs")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 9
            echo "        <article class=\"blog\">
            <div class=\"delete_blog\">
                ";
            // line 11
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 12
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_blog_delete", array("blogId" => $this->getAttribute($context["blog"], "id", array()))), "html", null, true);
                echo "\">X</a>
                    <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_blog_change", array("blogId" => $this->getAttribute($context["blog"], "id", array()))), "html", null, true);
                echo "\">Update</a>
                ";
            }
            // line 15
            echo "            </div>
            <div class=\"blog_show\">
                <h3><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($context["blog"], "id", array()), "slug" => $this->getAttribute($context["blog"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "title", array()), "html", null, true);
            echo "</a></h3>
                <p>Author: <span class=\"highlight\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "author", array()), "html", null, true);
            echo "</span> at ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blog"], "created", array()), "h:iA"), "html", null, true);
            echo "</p>
            </div>
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 22
            echo "        <p>There are no blog entries for symblog</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b00ac4f6d5d85bcb1cc92cf7cfab8fcefd853232022cfcc101ed952ef106c796->leave($__internal_b00ac4f6d5d85bcb1cc92cf7cfab8fcefd853232022cfcc101ed952ef106c796_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 22,  89 => 18,  83 => 17,  79 => 15,  74 => 13,  69 => 12,  67 => 11,  63 => 9,  58 => 8,  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
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
    <a href=\"{{ path('BloggerBlogBundle_admin_add') }}\">Add Blog</a><hr>
    {% for blog in blogs %}
        <article class=\"blog\">
            <div class=\"delete_blog\">
                {% if is_granted('ROLE_ADMIN') %}
                    <a href=\"{{ path('BloggerBlogBundle_blog_delete',{ 'blogId': blog.id }) }}\">X</a>
                    <a href=\"{{ path('BloggerBlogBundle_blog_change',{ 'blogId': blog.id }) }}\">Update</a>
                {% endif %}
            </div>
            <div class=\"blog_show\">
                <h3><a href=\"{{ path('BloggerBlogBundle_blog_show', { 'id': blog.id, 'slug': blog.slug }) }}\">{{ blog.title }}</a></h3>
                <p>Author: <span class=\"highlight\">{{ blog.author }}</span> at {{ blog.created|date('h:iA') }}</p>
            </div>
        </article>
    {% else %}
        <p>There are no blog entries for symblog</p>
    {% endfor %}
{% endblock %}
", "BloggerBlogBundle:Page:admin.html.twig", "/var/www/html/symfonyBlog/src/Blogger/BlogBundle/Resources/views/Page/admin.html.twig");
    }
}
