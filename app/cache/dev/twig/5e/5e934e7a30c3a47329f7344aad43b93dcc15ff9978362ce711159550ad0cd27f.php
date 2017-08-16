<?php

/* BloggerBlogBundle:Comment:create.html.twig */
class __TwigTemplate_738ab40f9819362a70d703411229ae839b5565a3108f705b754554dcdd88ff29 extends Twig_Template
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
        $__internal_7dd0a061a782fdd74a84534d302790f24f9f08a915357ca5e4dc4d38f3f6c565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dd0a061a782fdd74a84534d302790f24f9f08a915357ca5e4dc4d38f3f6c565->enter($__internal_7dd0a061a782fdd74a84534d302790f24f9f08a915357ca5e4dc4d38f3f6c565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Comment:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dd0a061a782fdd74a84534d302790f24f9f08a915357ca5e4dc4d38f3f6c565->leave($__internal_7dd0a061a782fdd74a84534d302790f24f9f08a915357ca5e4dc4d38f3f6c565_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ba731ed3c42b55092221fc857ac034909c4346b39da9cc15ba463541a26b77a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ba731ed3c42b55092221fc857ac034909c4346b39da9cc15ba463541a26b77a->enter($__internal_0ba731ed3c42b55092221fc857ac034909c4346b39da9cc15ba463541a26b77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Add Comment";
        
        $__internal_0ba731ed3c42b55092221fc857ac034909c4346b39da9cc15ba463541a26b77a->leave($__internal_0ba731ed3c42b55092221fc857ac034909c4346b39da9cc15ba463541a26b77a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_397e8f38ea118c3163ad4b96a9c730835039fb17cee88c7392a1b1942d2be1f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_397e8f38ea118c3163ad4b96a9c730835039fb17cee88c7392a1b1942d2be1f7->enter($__internal_397e8f38ea118c3163ad4b96a9c730835039fb17cee88c7392a1b1942d2be1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Add comment for blog post \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "blog", array()), "title", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 7
        $this->loadTemplate("BloggerBlogBundle:Comment:form.html.twig", "BloggerBlogBundle:Comment:create.html.twig", 7)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))));
        
        $__internal_397e8f38ea118c3163ad4b96a9c730835039fb17cee88c7392a1b1942d2be1f7->leave($__internal_397e8f38ea118c3163ad4b96a9c730835039fb17cee88c7392a1b1942d2be1f7_prof);

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
