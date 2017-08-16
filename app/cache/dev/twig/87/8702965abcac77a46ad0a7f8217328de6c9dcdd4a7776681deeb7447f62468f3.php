<?php

/* BloggerBlogBundle:Comment:form.html.twig */
class __TwigTemplate_fac5e3626839bae5c76cbde15dec4a2de07df2b007081bb75c5ef4ccfd6d2432 extends Twig_Template
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
        $__internal_99be5798f656ec71d00395e309e8474283ad68021107fe3df1ac8d25502383f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99be5798f656ec71d00395e309e8474283ad68021107fe3df1ac8d25502383f4->enter($__internal_99be5798f656ec71d00395e309e8474283ad68021107fe3df1ac8d25502383f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Comment:form.html.twig"));

        // line 2
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_comment_create", array("blog_id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "blog", array()), "id", array()))), "method" => "POST", "attr" => array("class" => "blogger")));
        echo "

    ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
<p>
    <input type=\"submit\" value=\"Submit\">
</p>";
        
        $__internal_99be5798f656ec71d00395e309e8474283ad68021107fe3df1ac8d25502383f4->leave($__internal_99be5798f656ec71d00395e309e8474283ad68021107fe3df1ac8d25502383f4_prof);

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
        return array (  27 => 4,  22 => 2,);
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
{{ form_start(form, { 'action': path('BloggerBlogBundle_comment_create' , { 'blog_id' : comment.blog.id }), 'method': 'POST', 'attr': {'class': 'blogger'} }) }}

    {{ form_widget(form) }}
<p>
    <input type=\"submit\" value=\"Submit\">
</p>", "BloggerBlogBundle:Comment:form.html.twig", "/var/www/html/symfonyBlog/src/Blogger/BlogBundle/Resources/views/Comment/form.html.twig");
    }
}
