<?php

/* BloggerBlogBundle:User:form.html.twig */
class __TwigTemplate_df8f875019b8f64d88a5c8188b9686d35452b09c56dc96c2c28c0a4e8f268d80 extends Twig_Template
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
        $__internal_f1a22b3719d7523af0cf4917cf12ce49176a75fa92df0a95bbb17e3da1d71f7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1a22b3719d7523af0cf4917cf12ce49176a75fa92df0a95bbb17e3da1d71f7a->enter($__internal_f1a22b3719d7523af0cf4917cf12ce49176a75fa92df0a95bbb17e3da1d71f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:User:form.html.twig"));

        // line 2
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_profile_image", array("user_id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "method" => "POST", "attr" => array("class" => "blogger")));
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
    <input type=\"submit\" value=\"Submit\">
</p>";
        
        $__internal_f1a22b3719d7523af0cf4917cf12ce49176a75fa92df0a95bbb17e3da1d71f7a->leave($__internal_f1a22b3719d7523af0cf4917cf12ce49176a75fa92df0a95bbb17e3da1d71f7a_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:User:form.html.twig";
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
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/User/form.html.twig #}
{{ form_start(form, { 'action': path('BloggerBlogBundle_profile_image',{ 'user_id': user.id }),  'method': 'POST', 'attr': {'class': 'blogger'} }) }}

    {#{{ form_errors(form) }}#}

    {#{{ form_row(form.comment) }}#}

    {#{{ form_rest(form) }}#}
    {{ form_widget(form) }}
<p>
    <input type=\"submit\" value=\"Submit\">
</p>", "BloggerBlogBundle:User:form.html.twig", "/var/www/html/symfonyBlog/src/Blogger/BlogBundle/Resources/views/User/form.html.twig");
    }
}
