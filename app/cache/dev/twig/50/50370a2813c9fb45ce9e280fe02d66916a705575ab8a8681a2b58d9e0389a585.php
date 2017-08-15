<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_6c272bb4bac9126c0fb5802b2c5a7974e6bd536eaa154fcc2b05fa42ae9399cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_eb9b38a0d29b0d79a6c12ec50cfbaf460bfbbd2d935013f818c53f70783c78e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb9b38a0d29b0d79a6c12ec50cfbaf460bfbbd2d935013f818c53f70783c78e6->enter($__internal_eb9b38a0d29b0d79a6c12ec50cfbaf460bfbbd2d935013f818c53f70783c78e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb9b38a0d29b0d79a6c12ec50cfbaf460bfbbd2d935013f818c53f70783c78e6->leave($__internal_eb9b38a0d29b0d79a6c12ec50cfbaf460bfbbd2d935013f818c53f70783c78e6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e5aa84237be711e69a8b75ec5694753ae989f257dc7ac83ce62e902da305d48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e5aa84237be711e69a8b75ec5694753ae989f257dc7ac83ce62e902da305d48->enter($__internal_1e5aa84237be711e69a8b75ec5694753ae989f257dc7ac83ce62e902da305d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_1e5aa84237be711e69a8b75ec5694753ae989f257dc7ac83ce62e902da305d48->leave($__internal_1e5aa84237be711e69a8b75ec5694753ae989f257dc7ac83ce62e902da305d48_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d450e88a933bde32dcdd357a88d4d4500187084877d760a35a55b5e4384f309f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d450e88a933bde32dcdd357a88d4d4500187084877d760a35a55b5e4384f309f->enter($__internal_d450e88a933bde32dcdd357a88d4d4500187084877d760a35a55b5e4384f309f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "        <p>
            ";
        // line 8
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
        </p>
    ";
        
        $__internal_d450e88a933bde32dcdd357a88d4d4500187084877d760a35a55b5e4384f309f->leave($__internal_d450e88a933bde32dcdd357a88d4d4500187084877d760a35a55b5e4384f309f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  54 => 7,  41 => 6,  35 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block body %}
    {% block fos_user_content %}
        <p>
            {{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
        </p>
    {% endblock %}
{% endblock %}", "@FOSUser/Resetting/check_email.html.twig", "/var/www/html/symfonyBlog/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
