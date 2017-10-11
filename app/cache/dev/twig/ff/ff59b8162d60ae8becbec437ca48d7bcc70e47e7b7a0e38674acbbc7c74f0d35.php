<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_6c8ca69430736e741c1776982904c9d17a03bc71f540c794a9f59648cc80d068 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_0b7a841155380915424de6823e09438613afeb1d5e8314f4a25637449d5dbc4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b7a841155380915424de6823e09438613afeb1d5e8314f4a25637449d5dbc4c->enter($__internal_0b7a841155380915424de6823e09438613afeb1d5e8314f4a25637449d5dbc4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b7a841155380915424de6823e09438613afeb1d5e8314f4a25637449d5dbc4c->leave($__internal_0b7a841155380915424de6823e09438613afeb1d5e8314f4a25637449d5dbc4c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd3281f3128cf8a9c77b59414ba561c6777821a14230dbfd1222ce2778b95527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd3281f3128cf8a9c77b59414ba561c6777821a14230dbfd1222ce2778b95527->enter($__internal_cd3281f3128cf8a9c77b59414ba561c6777821a14230dbfd1222ce2778b95527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_cd3281f3128cf8a9c77b59414ba561c6777821a14230dbfd1222ce2778b95527->leave($__internal_cd3281f3128cf8a9c77b59414ba561c6777821a14230dbfd1222ce2778b95527_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0780df35a842497af682fff8686275533f09cd305e19cf3090a0bb5dfc9dbd71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0780df35a842497af682fff8686275533f09cd305e19cf3090a0bb5dfc9dbd71->enter($__internal_0780df35a842497af682fff8686275533f09cd305e19cf3090a0bb5dfc9dbd71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "        ";
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        
        $__internal_0780df35a842497af682fff8686275533f09cd305e19cf3090a0bb5dfc9dbd71->leave($__internal_0780df35a842497af682fff8686275533f09cd305e19cf3090a0bb5dfc9dbd71_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
        {% include \"@FOSUser/Profile/edit_content.html.twig\" %}
    {% endblock fos_user_content %}
{% endblock %}

", "FOSUserBundle:Profile:edit.html.twig", "/var/www/html/symfonyBlog/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
