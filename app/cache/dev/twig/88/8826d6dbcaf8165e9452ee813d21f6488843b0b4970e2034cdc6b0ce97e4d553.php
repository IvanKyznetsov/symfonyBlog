<?php

/* BloggerBlogBundle:Blog:show.html.twig */
class __TwigTemplate_e67447b7b74a4994eeb26f28160e07521f7cd76baa08eacfbcbd1e9aafa0267f extends Twig_Template
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
        $__internal_8eefd949760d6e3cfdebb80693a5a585bc347b65ca8571855bcb32a51d4664f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eefd949760d6e3cfdebb80693a5a585bc347b65ca8571855bcb32a51d4664f9->enter($__internal_8eefd949760d6e3cfdebb80693a5a585bc347b65ca8571855bcb32a51d4664f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Blog:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8eefd949760d6e3cfdebb80693a5a585bc347b65ca8571855bcb32a51d4664f9->leave($__internal_8eefd949760d6e3cfdebb80693a5a585bc347b65ca8571855bcb32a51d4664f9_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_32f3883278c80a1012954318ef2bf1391e270119213975c9687199e475b0fcc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32f3883278c80a1012954318ef2bf1391e270119213975c9687199e475b0fcc9->enter($__internal_32f3883278c80a1012954318ef2bf1391e270119213975c9687199e475b0fcc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        
        $__internal_32f3883278c80a1012954318ef2bf1391e270119213975c9687199e475b0fcc9->leave($__internal_32f3883278c80a1012954318ef2bf1391e270119213975c9687199e475b0fcc9_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_793255c448e16459f331502226355f83ad5d6b9fca237d28d9a68bdd5dc8bd76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_793255c448e16459f331502226355f83ad5d6b9fca237d28d9a68bdd5dc8bd76->enter($__internal_793255c448e16459f331502226355f83ad5d6b9fca237d28d9a68bdd5dc8bd76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((("images/" . $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "id", array())) . "/") . $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "image", array()))), "html", null, true);
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
        
        $__internal_793255c448e16459f331502226355f83ad5d6b9fca237d28d9a68bdd5dc8bd76->leave($__internal_793255c448e16459f331502226355f83ad5d6b9fca237d28d9a68bdd5dc8bd76_prof);

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
        <img src=\"{{ asset('images/' ~ blog.id ~'/' ~ blog.image) }}\" alt=\"{{ blog.title }} image not found\" class=\"large\" />
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
