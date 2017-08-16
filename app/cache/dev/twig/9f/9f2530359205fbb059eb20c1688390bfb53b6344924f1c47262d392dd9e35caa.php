<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_f832772c6fe6a93bc117d4020ba0db87edaeb2cc0d6a08fb32f5d01ab33979a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_410eb5a582f5ab3f8d3444419e57acad5cd228f12f5208f1b5d9b53a9d0a1ed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_410eb5a582f5ab3f8d3444419e57acad5cd228f12f5208f1b5d9b53a9d0a1ed3->enter($__internal_410eb5a582f5ab3f8d3444419e57acad5cd228f12f5208f1b5d9b53a9d0a1ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_410eb5a582f5ab3f8d3444419e57acad5cd228f12f5208f1b5d9b53a9d0a1ed3->leave($__internal_410eb5a582f5ab3f8d3444419e57acad5cd228f12f5208f1b5d9b53a9d0a1ed3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_67ba49187ae0bd1e4b893a75710b95195f40dd4bc48621bb37c14c13cda01238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67ba49187ae0bd1e4b893a75710b95195f40dd4bc48621bb37c14c13cda01238->enter($__internal_67ba49187ae0bd1e4b893a75710b95195f40dd4bc48621bb37c14c13cda01238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_67ba49187ae0bd1e4b893a75710b95195f40dd4bc48621bb37c14c13cda01238->leave($__internal_67ba49187ae0bd1e4b893a75710b95195f40dd4bc48621bb37c14c13cda01238_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_26202a6c3c9b82093b826af3a3e4601e4a0638e8b13a6e63c6f356352fb846e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26202a6c3c9b82093b826af3a3e4601e4a0638e8b13a6e63c6f356352fb846e6->enter($__internal_26202a6c3c9b82093b826af3a3e4601e4a0638e8b13a6e63c6f356352fb846e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "        ";
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        
        $__internal_26202a6c3c9b82093b826af3a3e4601e4a0638e8b13a6e63c6f356352fb846e6->leave($__internal_26202a6c3c9b82093b826af3a3e4601e4a0638e8b13a6e63c6f356352fb846e6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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

", "FOSUserBundle:Profile:show.html.twig", "/var/www/html/symfonyBlog/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
