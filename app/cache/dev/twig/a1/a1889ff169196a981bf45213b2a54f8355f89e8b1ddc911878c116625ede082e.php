<?php

/* BloggerBlogBundle:Comment:form.html.twig */
class __TwigTemplate_bda0b8f8ae381cd21280a0548b98bef2218d9b8b939977efdc0ff3f454e2f56f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_197d58b8649c95cfb77c88dfba55040ec084b1b8ce84ab9ccbb8689af0b25cd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_197d58b8649c95cfb77c88dfba55040ec084b1b8ce84ab9ccbb8689af0b25cd9->enter($__internal_197d58b8649c95cfb77c88dfba55040ec084b1b8ce84ab9ccbb8689af0b25cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Comment:form.html.twig"));

        // line 2
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_comment_create", array("blog_id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "blog", array()), "id", array()))), "method" => "POST", "attr" => array("class" => "blogger")));
        echo "

    ";
        // line 5
        echo "
    ";
        // line 7
        echo "
    ";
        // line 9
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
<p>
    <input type=\"submit\" value=\"Submit\" class=\"submit_comment\">
</p>";
        
        $__internal_197d58b8649c95cfb77c88dfba55040ec084b1b8ce84ab9ccbb8689af0b25cd9->leave($__internal_197d58b8649c95cfb77c88dfba55040ec084b1b8ce84ab9ccbb8689af0b25cd9_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Comment:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 9,  30 => 7,  27 => 5,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/Comment/form.html.twig #}
{{ form_start(form, { 'action': path('BloggerBlogBundle_comment_create',{ 'blog_id': comment.blog.id }),  'method': 'POST', 'attr': {'class': 'blogger'} }) }}

    {#{{ form_errors(form) }}#}

    {#{{ form_row(form.comment) }}#}

    {#{{ form_rest(form) }}#}
    {{ form_widget(form) }}
<p>
    <input type=\"submit\" value=\"Submit\" class=\"submit_comment\">
</p>", "BloggerBlogBundle:Comment:form.html.twig", "/var/www/html/symfonyBlog/src/Blogger/BlogBundle/Resources/views/Comment/form.html.twig");
    }
}
