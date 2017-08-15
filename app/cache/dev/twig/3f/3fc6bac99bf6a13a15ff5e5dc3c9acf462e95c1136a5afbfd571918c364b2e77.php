<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_c9c3e3704f43e71917ef0032b818def5c10d64bc4c4ce55a33f1b7438d150035 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_63d26c02ce36c70d7d5164521f409444da78dda60b50f584fa9ec53264573631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63d26c02ce36c70d7d5164521f409444da78dda60b50f584fa9ec53264573631->enter($__internal_63d26c02ce36c70d7d5164521f409444da78dda60b50f584fa9ec53264573631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63d26c02ce36c70d7d5164521f409444da78dda60b50f584fa9ec53264573631->leave($__internal_63d26c02ce36c70d7d5164521f409444da78dda60b50f584fa9ec53264573631_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8eea34ceee9029746406cb2f0280b9e0e5d5f39804e9d50b32caedea0beec761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eea34ceee9029746406cb2f0280b9e0e5d5f39804e9d50b32caedea0beec761->enter($__internal_8eea34ceee9029746406cb2f0280b9e0e5d5f39804e9d50b32caedea0beec761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_8eea34ceee9029746406cb2f0280b9e0e5d5f39804e9d50b32caedea0beec761->leave($__internal_8eea34ceee9029746406cb2f0280b9e0e5d5f39804e9d50b32caedea0beec761_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/html/symfonyBlog/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
