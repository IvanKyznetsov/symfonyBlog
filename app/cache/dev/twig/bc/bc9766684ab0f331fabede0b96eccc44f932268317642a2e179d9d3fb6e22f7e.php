<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_a0b1f4bf182ee7d8d09d787a571607d1c3cc8047beeaa35dab8b48041ef383ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_324ec474103eefda6dd0450fa6100cf55691e78af2b082176b0c81e710329528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_324ec474103eefda6dd0450fa6100cf55691e78af2b082176b0c81e710329528->enter($__internal_324ec474103eefda6dd0450fa6100cf55691e78af2b082176b0c81e710329528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_324ec474103eefda6dd0450fa6100cf55691e78af2b082176b0c81e710329528->leave($__internal_324ec474103eefda6dd0450fa6100cf55691e78af2b082176b0c81e710329528_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0dfa0c8b066e10a0084d21fec20224683de310a0bcb49ced434e364556ab76fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dfa0c8b066e10a0084d21fec20224683de310a0bcb49ced434e364556ab76fa->enter($__internal_0dfa0c8b066e10a0084d21fec20224683de310a0bcb49ced434e364556ab76fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_0dfa0c8b066e10a0084d21fec20224683de310a0bcb49ced434e364556ab76fa->leave($__internal_0dfa0c8b066e10a0084d21fec20224683de310a0bcb49ced434e364556ab76fa_prof);

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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/html/symfonyBlog/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
