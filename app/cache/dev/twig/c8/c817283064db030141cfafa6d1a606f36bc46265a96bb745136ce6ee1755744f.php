<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_c0be71e233d708fc2bceb65e309244282fcbd7ab91b6bc6245b1f29882afade3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_5f99949e28d78bd90fb867d738e8d8894b44ea7dfca6a001dd2fdea8baacb067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f99949e28d78bd90fb867d738e8d8894b44ea7dfca6a001dd2fdea8baacb067->enter($__internal_5f99949e28d78bd90fb867d738e8d8894b44ea7dfca6a001dd2fdea8baacb067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f99949e28d78bd90fb867d738e8d8894b44ea7dfca6a001dd2fdea8baacb067->leave($__internal_5f99949e28d78bd90fb867d738e8d8894b44ea7dfca6a001dd2fdea8baacb067_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_901c113b2dc8de6411fbaaf103e142e3376ac7af65f8298a209b646569fd3bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_901c113b2dc8de6411fbaaf103e142e3376ac7af65f8298a209b646569fd3bf2->enter($__internal_901c113b2dc8de6411fbaaf103e142e3376ac7af65f8298a209b646569fd3bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_901c113b2dc8de6411fbaaf103e142e3376ac7af65f8298a209b646569fd3bf2->leave($__internal_901c113b2dc8de6411fbaaf103e142e3376ac7af65f8298a209b646569fd3bf2_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f2e38105c68124293b327e13156169e60eb2c6506cc1dbe518cc598993eb3e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2e38105c68124293b327e13156169e60eb2c6506cc1dbe518cc598993eb3e30->enter($__internal_f2e38105c68124293b327e13156169e60eb2c6506cc1dbe518cc598993eb3e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "        ";
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        
        $__internal_f2e38105c68124293b327e13156169e60eb2c6506cc1dbe518cc598993eb3e30->leave($__internal_f2e38105c68124293b327e13156169e60eb2c6506cc1dbe518cc598993eb3e30_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
        {% include \"@FOSUser/Group/new_content.html.twig\" %}
    {% endblock fos_user_content %}
{% endblock %}

", "FOSUserBundle:Group:new.html.twig", "/var/www/html/symfonyBlog/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
