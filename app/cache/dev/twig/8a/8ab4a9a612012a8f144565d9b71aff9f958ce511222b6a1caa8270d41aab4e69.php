<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_b99207f3aa213e0ee9180a18cc802b8fd7b58500697b8b59957643241e071844 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_cc3895d9bc3ad801abf6a4188660a1c3aeaebbb478a8056b6bc835c7e989540c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc3895d9bc3ad801abf6a4188660a1c3aeaebbb478a8056b6bc835c7e989540c->enter($__internal_cc3895d9bc3ad801abf6a4188660a1c3aeaebbb478a8056b6bc835c7e989540c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc3895d9bc3ad801abf6a4188660a1c3aeaebbb478a8056b6bc835c7e989540c->leave($__internal_cc3895d9bc3ad801abf6a4188660a1c3aeaebbb478a8056b6bc835c7e989540c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a864685ecfdc58cfd589604e8cdf4787cde8e1d2a418ced11076f0e52ff68230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a864685ecfdc58cfd589604e8cdf4787cde8e1d2a418ced11076f0e52ff68230->enter($__internal_a864685ecfdc58cfd589604e8cdf4787cde8e1d2a418ced11076f0e52ff68230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_a864685ecfdc58cfd589604e8cdf4787cde8e1d2a418ced11076f0e52ff68230->leave($__internal_a864685ecfdc58cfd589604e8cdf4787cde8e1d2a418ced11076f0e52ff68230_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_217963a0025d778da416898c05f66ac6e03198be5db6a35049647d234cc26253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_217963a0025d778da416898c05f66ac6e03198be5db6a35049647d234cc26253->enter($__internal_217963a0025d778da416898c05f66ac6e03198be5db6a35049647d234cc26253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "        ";
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        
        $__internal_217963a0025d778da416898c05f66ac6e03198be5db6a35049647d234cc26253->leave($__internal_217963a0025d778da416898c05f66ac6e03198be5db6a35049647d234cc26253_prof);

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
        {% include \"@FOSUser/Registration/register_content.html.twig\" %}
    {% endblock fos_user_content %}
{% endblock %}
", "@FOSUser/Registration/register.html.twig", "/var/www/html/symfonyBlog/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
