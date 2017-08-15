<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_4ef93329206cbfb3d081fec296638fa007ac2fb35d21186ece25c286e1c0b314 extends Twig_Template
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
        $__internal_b45a001c2e7b5053d76d4053c40447fa793e15d1da7212a9ab89a3f0a86030ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b45a001c2e7b5053d76d4053c40447fa793e15d1da7212a9ab89a3f0a86030ec->enter($__internal_b45a001c2e7b5053d76d4053c40447fa793e15d1da7212a9ab89a3f0a86030ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b45a001c2e7b5053d76d4053c40447fa793e15d1da7212a9ab89a3f0a86030ec->leave($__internal_b45a001c2e7b5053d76d4053c40447fa793e15d1da7212a9ab89a3f0a86030ec_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d31d759c2d31554b1fee75884889fb647564a7edfeba8beab2df71c6c3364204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d31d759c2d31554b1fee75884889fb647564a7edfeba8beab2df71c6c3364204->enter($__internal_d31d759c2d31554b1fee75884889fb647564a7edfeba8beab2df71c6c3364204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_d31d759c2d31554b1fee75884889fb647564a7edfeba8beab2df71c6c3364204->leave($__internal_d31d759c2d31554b1fee75884889fb647564a7edfeba8beab2df71c6c3364204_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4fa8a14fa358e3702209719b79a28635894862676126d294e675483a469b1cf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa8a14fa358e3702209719b79a28635894862676126d294e675483a469b1cf4->enter($__internal_4fa8a14fa358e3702209719b79a28635894862676126d294e675483a469b1cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "        ";
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        
        $__internal_4fa8a14fa358e3702209719b79a28635894862676126d294e675483a469b1cf4->leave($__internal_4fa8a14fa358e3702209719b79a28635894862676126d294e675483a469b1cf4_prof);

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
