<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_f4aad439218464d07cb4eb69ee7e904130c009b93762f99e5edd902c3a063504 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_4fe1c62ae2ad0d912cd1dcc7119afd8bb5c279dee74344703047ae6e241ce21d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fe1c62ae2ad0d912cd1dcc7119afd8bb5c279dee74344703047ae6e241ce21d->enter($__internal_4fe1c62ae2ad0d912cd1dcc7119afd8bb5c279dee74344703047ae6e241ce21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fe1c62ae2ad0d912cd1dcc7119afd8bb5c279dee74344703047ae6e241ce21d->leave($__internal_4fe1c62ae2ad0d912cd1dcc7119afd8bb5c279dee74344703047ae6e241ce21d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c88e22793e3c5d976992ed28b18698420074cb8d002cf6fc50b7be55513366da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c88e22793e3c5d976992ed28b18698420074cb8d002cf6fc50b7be55513366da->enter($__internal_c88e22793e3c5d976992ed28b18698420074cb8d002cf6fc50b7be55513366da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_c88e22793e3c5d976992ed28b18698420074cb8d002cf6fc50b7be55513366da->leave($__internal_c88e22793e3c5d976992ed28b18698420074cb8d002cf6fc50b7be55513366da_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/html/symfonyBlog/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
