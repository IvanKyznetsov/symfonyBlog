<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_c771a6a34c0e3d31c6d744ae157063ad18e74028a73e4a856c49694ba0ce36ea extends Twig_Template
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
        $__internal_f00e22221c343156529e9fb9cbefdb0dd36b98a77e6c25390f03750806fe136c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f00e22221c343156529e9fb9cbefdb0dd36b98a77e6c25390f03750806fe136c->enter($__internal_f00e22221c343156529e9fb9cbefdb0dd36b98a77e6c25390f03750806fe136c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f00e22221c343156529e9fb9cbefdb0dd36b98a77e6c25390f03750806fe136c->leave($__internal_f00e22221c343156529e9fb9cbefdb0dd36b98a77e6c25390f03750806fe136c_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_4c23a049ed0645db6b023053a8027d6928bb7bb0b720a528699049c0c33f42f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c23a049ed0645db6b023053a8027d6928bb7bb0b720a528699049c0c33f42f7->enter($__internal_4c23a049ed0645db6b023053a8027d6928bb7bb0b720a528699049c0c33f42f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_4c23a049ed0645db6b023053a8027d6928bb7bb0b720a528699049c0c33f42f7->leave($__internal_4c23a049ed0645db6b023053a8027d6928bb7bb0b720a528699049c0c33f42f7_prof);

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
