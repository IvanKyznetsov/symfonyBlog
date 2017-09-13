<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_0db75f9c835f7395f86c89e84ca43864b3f0de70d0c10965141db04e3156eb2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_059506552fbafba12ddcc67ca1808c083e44f521c16538cdc08e435ecbdacaa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_059506552fbafba12ddcc67ca1808c083e44f521c16538cdc08e435ecbdacaa8->enter($__internal_059506552fbafba12ddcc67ca1808c083e44f521c16538cdc08e435ecbdacaa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_059506552fbafba12ddcc67ca1808c083e44f521c16538cdc08e435ecbdacaa8->leave($__internal_059506552fbafba12ddcc67ca1808c083e44f521c16538cdc08e435ecbdacaa8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e26fa325f09a69d27251e5c091d6f8b760ed049c47f1d3002b8b2ae0a627f93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e26fa325f09a69d27251e5c091d6f8b760ed049c47f1d3002b8b2ae0a627f93->enter($__internal_4e26fa325f09a69d27251e5c091d6f8b760ed049c47f1d3002b8b2ae0a627f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_4e26fa325f09a69d27251e5c091d6f8b760ed049c47f1d3002b8b2ae0a627f93->leave($__internal_4e26fa325f09a69d27251e5c091d6f8b760ed049c47f1d3002b8b2ae0a627f93_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b3e48f2de1f21c8ecaf11f1ee7be5c9fdb9a34d89c086625f3a00f3d129ba9e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3e48f2de1f21c8ecaf11f1ee7be5c9fdb9a34d89c086625f3a00f3d129ba9e4->enter($__internal_b3e48f2de1f21c8ecaf11f1ee7be5c9fdb9a34d89c086625f3a00f3d129ba9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "        ";
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        
        $__internal_b3e48f2de1f21c8ecaf11f1ee7be5c9fdb9a34d89c086625f3a00f3d129ba9e4->leave($__internal_b3e48f2de1f21c8ecaf11f1ee7be5c9fdb9a34d89c086625f3a00f3d129ba9e4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 6,  54 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block body %}
    {% block fos_user_content %}
        {% include \"@FOSUser/Profile/show_content.html.twig\" %}
    {% endblock fos_user_content %}
{% endblock %}

", "@FOSUser/Profile/show.html.twig", "/var/www/html/symfonyBlog/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
