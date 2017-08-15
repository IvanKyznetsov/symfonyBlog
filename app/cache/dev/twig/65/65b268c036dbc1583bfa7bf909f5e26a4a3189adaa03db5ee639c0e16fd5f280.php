<?php

/* BloggerBlogBundle:Blog:add.html.twig */
class __TwigTemplate_680a29478484754dfd4772c6305aa64f8ecce102998fedebab69e0a68f69913c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Blog:add.html.twig", 2);
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
        $__internal_f7f306b7788a8cb867b011c42b911654602d4330aad75c2562a0baf707f02d27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7f306b7788a8cb867b011c42b911654602d4330aad75c2562a0baf707f02d27->enter($__internal_f7f306b7788a8cb867b011c42b911654602d4330aad75c2562a0baf707f02d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Blog:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7f306b7788a8cb867b011c42b911654602d4330aad75c2562a0baf707f02d27->leave($__internal_f7f306b7788a8cb867b011c42b911654602d4330aad75c2562a0baf707f02d27_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b773f8f0caa40eab90318b15692c78e6a427792b077be88c65995e5201d6bcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b773f8f0caa40eab90318b15692c78e6a427792b077be88c65995e5201d6bcd->enter($__internal_0b773f8f0caa40eab90318b15692c78e6a427792b077be88c65995e5201d6bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0b773f8f0caa40eab90318b15692c78e6a427792b077be88c65995e5201d6bcd->leave($__internal_0b773f8f0caa40eab90318b15692c78e6a427792b077be88c65995e5201d6bcd_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_343920fd5fdee1f1cfc3d168b2d179694198a2c0acc34f1f217ed5f4cd86b54a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_343920fd5fdee1f1cfc3d168b2d179694198a2c0acc34f1f217ed5f4cd86b54a->enter($__internal_343920fd5fdee1f1cfc3d168b2d179694198a2c0acc34f1f217ed5f4cd86b54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_blog_create");
        echo "\" method=\"post\">



        <p>
            <label for=\"username\">Title</label>
            <input type=\"text\" name=\"title\" required=\"required\" />
        </p>
        <p>
            <label for=\"password\">Author</label>
            <input type=\"password\" name=\"author\" required=\"required\" />
        </p>
        <p>
            <label for=\"password\">Blog</label>
            <input type=\"password\" name=\"blog\" required=\"required\" />
        </p>
        <p>
            <label for=\"password\">Image</label>
            <input type=\"password\" name=\"image\" required=\"required\" />
        </p>
        <p>
            <label for=\"password\">Tags</label>
            <input type=\"password\" name=\"tags\" required=\"required\" />
        </p>

        <input type=\"submit\" name=\"_submit\" value=\"Add\" />
    </form>
";
        
        $__internal_343920fd5fdee1f1cfc3d168b2d179694198a2c0acc34f1f217ed5f4cd86b54a->leave($__internal_343920fd5fdee1f1cfc3d168b2d179694198a2c0acc34f1f217ed5f4cd86b54a_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Blog:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  46 => 6,  35 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resouces/views/Blog/add.html.twig #}
{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block title %}{% endblock %}

{% block body %}
    <form action=\"{{ path(\"BloggerBlogBundle_blog_create\") }}\" method=\"post\">



        <p>
            <label for=\"username\">Title</label>
            <input type=\"text\" name=\"title\" required=\"required\" />
        </p>
        <p>
            <label for=\"password\">Author</label>
            <input type=\"password\" name=\"author\" required=\"required\" />
        </p>
        <p>
            <label for=\"password\">Blog</label>
            <input type=\"password\" name=\"blog\" required=\"required\" />
        </p>
        <p>
            <label for=\"password\">Image</label>
            <input type=\"password\" name=\"image\" required=\"required\" />
        </p>
        <p>
            <label for=\"password\">Tags</label>
            <input type=\"password\" name=\"tags\" required=\"required\" />
        </p>

        <input type=\"submit\" name=\"_submit\" value=\"Add\" />
    </form>
{% endblock %}", "BloggerBlogBundle:Blog:add.html.twig", "/var/www/html/symfonyBlog/src/Blogger/BlogBundle/Resources/views/Blog/add.html.twig");
    }
}
