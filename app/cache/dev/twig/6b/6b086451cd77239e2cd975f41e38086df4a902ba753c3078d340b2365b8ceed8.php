<?php

/* BloggerBlogBundle:Comment:create.html.twig */
class __TwigTemplate_476005f02929217cb0633b0a31053ae714cd465d9edc9ed763549e474ce3bae0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Comment:create.html.twig", 1);
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
        $__internal_82d40c0bee7a231f768d972e657449440c31b80bf6d857680ab64e49a7bd8442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82d40c0bee7a231f768d972e657449440c31b80bf6d857680ab64e49a7bd8442->enter($__internal_82d40c0bee7a231f768d972e657449440c31b80bf6d857680ab64e49a7bd8442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Comment:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82d40c0bee7a231f768d972e657449440c31b80bf6d857680ab64e49a7bd8442->leave($__internal_82d40c0bee7a231f768d972e657449440c31b80bf6d857680ab64e49a7bd8442_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e23a0aacae79fd97244e4a772f1bf4385553db485a7678c21ebcbe2b3c5fd7e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e23a0aacae79fd97244e4a772f1bf4385553db485a7678c21ebcbe2b3c5fd7e2->enter($__internal_e23a0aacae79fd97244e4a772f1bf4385553db485a7678c21ebcbe2b3c5fd7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Add Comment";
        
        $__internal_e23a0aacae79fd97244e4a772f1bf4385553db485a7678c21ebcbe2b3c5fd7e2->leave($__internal_e23a0aacae79fd97244e4a772f1bf4385553db485a7678c21ebcbe2b3c5fd7e2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c7b6c98341b614e87f8d99693f98126ef8f0ee8324dd909cfe4b4f6fd2b8cd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c7b6c98341b614e87f8d99693f98126ef8f0ee8324dd909cfe4b4f6fd2b8cd5->enter($__internal_4c7b6c98341b614e87f8d99693f98126ef8f0ee8324dd909cfe4b4f6fd2b8cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Add comment for blog post \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "blog", array()), "title", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 7
        $this->loadTemplate("BloggerBlogBundle:Comment:form.html.twig", "BloggerBlogBundle:Comment:create.html.twig", 7)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))));
        
        $__internal_4c7b6c98341b614e87f8d99693f98126ef8f0ee8324dd909cfe4b4f6fd2b8cd5->leave($__internal_4c7b6c98341b614e87f8d99693f98126ef8f0ee8324dd909cfe4b4f6fd2b8cd5_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Comment:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block title %}Add Comment{% endblock%}

{% block body %}
    <h1>Add comment for blog post \"{{ comment.blog.title }}\"</h1>
    {% include 'BloggerBlogBundle:Comment:form.html.twig' with { 'form': form } %}
{% endblock %}", "BloggerBlogBundle:Comment:create.html.twig", "/var/www/html/symfonyBlog/src/Blogger/BlogBundle/Resources/views/Comment/create.html.twig");
    }
}
