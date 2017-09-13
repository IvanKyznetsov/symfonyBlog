<?php

/* BloggerBlogBundle:Comment:form.html.twig */
class __TwigTemplate_e797f247f73ed7644aff8c60a12b0afcec0123eadae06f6d819811e8f692757d extends Twig_Template
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
        $__internal_0d8bd97416784b4a3ac5717cb1474d2f8ab2b3c43789c8d09fb5aaf84d82cd59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d8bd97416784b4a3ac5717cb1474d2f8ab2b3c43789c8d09fb5aaf84d82cd59->enter($__internal_0d8bd97416784b4a3ac5717cb1474d2f8ab2b3c43789c8d09fb5aaf84d82cd59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Comment:form.html.twig"));

        // line 2
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST", "attr" => array("class" => "blogger")));
        echo "

    ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment", array()), 'row');
        echo "

    ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    ";
        // line 10
        echo "<p>
    <input type=\"submit\" value=\"Submit\" class=\"submit_comment\">
</p>";
        
        $__internal_0d8bd97416784b4a3ac5717cb1474d2f8ab2b3c43789c8d09fb5aaf84d82cd59->leave($__internal_0d8bd97416784b4a3ac5717cb1474d2f8ab2b3c43789c8d09fb5aaf84d82cd59_prof);

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
        return array (  41 => 10,  37 => 8,  32 => 6,  27 => 4,  22 => 2,);
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
{{ form_start(form, {  'method': 'POST', 'attr': {'class': 'blogger'} }) }}

    {{ form_errors(form) }}

    {{ form_row(form.comment) }}

    {{ form_rest(form) }}
    {#{{ form_widget(form) }}#}
<p>
    <input type=\"submit\" value=\"Submit\" class=\"submit_comment\">
</p>", "BloggerBlogBundle:Comment:form.html.twig", "/var/www/html/symfonyBlog/src/Blogger/BlogBundle/Resources/views/Comment/form.html.twig");
    }
}
