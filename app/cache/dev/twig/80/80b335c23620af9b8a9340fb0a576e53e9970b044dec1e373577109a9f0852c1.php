<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_76c094dc0ce5ec972b6f7d33ee2cae9a5cfde3969bfd7b4b1ff3d482f7f47b07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_57d68e3aa939473035e32b26ef17c233b40b8bb4b73b2ad83716b1166da08341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57d68e3aa939473035e32b26ef17c233b40b8bb4b73b2ad83716b1166da08341->enter($__internal_57d68e3aa939473035e32b26ef17c233b40b8bb4b73b2ad83716b1166da08341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57d68e3aa939473035e32b26ef17c233b40b8bb4b73b2ad83716b1166da08341->leave($__internal_57d68e3aa939473035e32b26ef17c233b40b8bb4b73b2ad83716b1166da08341_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3b46444ff0875fd235f8712824ee7c492390e475592491edfba5677e434b6401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b46444ff0875fd235f8712824ee7c492390e475592491edfba5677e434b6401->enter($__internal_3b46444ff0875fd235f8712824ee7c492390e475592491edfba5677e434b6401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_3b46444ff0875fd235f8712824ee7c492390e475592491edfba5677e434b6401->leave($__internal_3b46444ff0875fd235f8712824ee7c492390e475592491edfba5677e434b6401_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/var/www/html/symfonyBlog/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
