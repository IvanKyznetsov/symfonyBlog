<?php

/* BloggerBlogBundle:Page:admin.html.twig */
class __TwigTemplate_7f48be82f6f38f483a7e738ed53a549102687c4e5f9933fbab1353755ed93465 extends Twig_Template
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
        $__internal_36b17e9bc5be9de65a7873972bcbd457dafb955e5a5a5699c7047e965929e823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36b17e9bc5be9de65a7873972bcbd457dafb955e5a5a5699c7047e965929e823->enter($__internal_36b17e9bc5be9de65a7873972bcbd457dafb955e5a5a5699c7047e965929e823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36b17e9bc5be9de65a7873972bcbd457dafb955e5a5a5699c7047e965929e823->leave($__internal_36b17e9bc5be9de65a7873972bcbd457dafb955e5a5a5699c7047e965929e823_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_976631e000b614a998fbceeab7a636d280a2dcd89344007ec1495aa6f7cda4d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_976631e000b614a998fbceeab7a636d280a2dcd89344007ec1495aa6f7cda4d8->enter($__internal_976631e000b614a998fbceeab7a636d280a2dcd89344007ec1495aa6f7cda4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin";
        
        $__internal_976631e000b614a998fbceeab7a636d280a2dcd89344007ec1495aa6f7cda4d8->leave($__internal_976631e000b614a998fbceeab7a636d280a2dcd89344007ec1495aa6f7cda4d8_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbf5393a82a53ea134a7209935905f04f60a367cb72aebbc1e73b826f8913650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbf5393a82a53ea134a7209935905f04f60a367cb72aebbc1e73b826f8913650->enter($__internal_cbf5393a82a53ea134a7209935905f04f60a367cb72aebbc1e73b826f8913650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cbf5393a82a53ea134a7209935905f04f60a367cb72aebbc1e73b826f8913650->leave($__internal_cbf5393a82a53ea134a7209935905f04f60a367cb72aebbc1e73b826f8913650_prof);

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
