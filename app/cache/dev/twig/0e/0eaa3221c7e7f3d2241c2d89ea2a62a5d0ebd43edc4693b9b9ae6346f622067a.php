<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_3e23be44339aeb4d8b1f16f85213327dd458073283bb82712f2a7f4d76582073 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05bfa5b4ebfc819ae8e6aaed989d5a28fe1d40b9f402ca960e6995839d11dcf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05bfa5b4ebfc819ae8e6aaed989d5a28fe1d40b9f402ca960e6995839d11dcf2->enter($__internal_05bfa5b4ebfc819ae8e6aaed989d5a28fe1d40b9f402ca960e6995839d11dcf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05bfa5b4ebfc819ae8e6aaed989d5a28fe1d40b9f402ca960e6995839d11dcf2->leave($__internal_05bfa5b4ebfc819ae8e6aaed989d5a28fe1d40b9f402ca960e6995839d11dcf2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0b8dbc7c9045846796e7476ffe81f3ab4f215f81e6ede0334ef287e6f99a517c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b8dbc7c9045846796e7476ffe81f3ab4f215f81e6ede0334ef287e6f99a517c->enter($__internal_0b8dbc7c9045846796e7476ffe81f3ab4f215f81e6ede0334ef287e6f99a517c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_0b8dbc7c9045846796e7476ffe81f3ab4f215f81e6ede0334ef287e6f99a517c->leave($__internal_0b8dbc7c9045846796e7476ffe81f3ab4f215f81e6ede0334ef287e6f99a517c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/html/symfonyBlog/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
