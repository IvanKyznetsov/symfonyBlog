<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_faba36ea620d97ef0dc1837a5e9bd6002c7a0ebc3c37d5131d4cae6372979ee4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93c39a5590d3a27c0c4054af979f5ec58b77de72b875b6b9f9d399cbcd15dc56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93c39a5590d3a27c0c4054af979f5ec58b77de72b875b6b9f9d399cbcd15dc56->enter($__internal_93c39a5590d3a27c0c4054af979f5ec58b77de72b875b6b9f9d399cbcd15dc56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93c39a5590d3a27c0c4054af979f5ec58b77de72b875b6b9f9d399cbcd15dc56->leave($__internal_93c39a5590d3a27c0c4054af979f5ec58b77de72b875b6b9f9d399cbcd15dc56_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_1bb2e1da4f17e28db95332937e4847fcb8592954477f1153b6a51611e46937bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bb2e1da4f17e28db95332937e4847fcb8592954477f1153b6a51611e46937bf->enter($__internal_1bb2e1da4f17e28db95332937e4847fcb8592954477f1153b6a51611e46937bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_1bb2e1da4f17e28db95332937e4847fcb8592954477f1153b6a51611e46937bf->leave($__internal_1bb2e1da4f17e28db95332937e4847fcb8592954477f1153b6a51611e46937bf_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_email.html.twig", "/var/www/html/symfonyBlog/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_email.html.twig");
    }
}
