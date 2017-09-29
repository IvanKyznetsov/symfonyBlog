<?php

/* BloggerBlogBundle:Comment:form.html.twig */
class __TwigTemplate_fb8d4ce7f469b2647336642b0692fefcbb2b6039b68cb1bd42543d14c7157c8d extends Twig_Template
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
        $__internal_aee46c14b48986f0ead464607b8256cb2b0fbf3664bd1ea0ff5cab8d405b73ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aee46c14b48986f0ead464607b8256cb2b0fbf3664bd1ea0ff5cab8d405b73ab->enter($__internal_aee46c14b48986f0ead464607b8256cb2b0fbf3664bd1ea0ff5cab8d405b73ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Comment:form.html.twig"));

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
        
        $__internal_aee46c14b48986f0ead464607b8256cb2b0fbf3664bd1ea0ff5cab8d405b73ab->leave($__internal_aee46c14b48986f0ead464607b8256cb2b0fbf3664bd1ea0ff5cab8d405b73ab_prof);

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
