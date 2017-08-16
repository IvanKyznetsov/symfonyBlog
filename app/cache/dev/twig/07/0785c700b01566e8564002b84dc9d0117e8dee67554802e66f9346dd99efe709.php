<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_31613e983fc4eab483e51a870da623123ad3f39046d3c3fb2c90a12a12e7a1f2 extends Twig_Template
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
        $__internal_acb70310a7d073b9b638d49db21f3e4419bf7cf91eba02954a26ac1d9f40cd23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acb70310a7d073b9b638d49db21f3e4419bf7cf91eba02954a26ac1d9f40cd23->enter($__internal_acb70310a7d073b9b638d49db21f3e4419bf7cf91eba02954a26ac1d9f40cd23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acb70310a7d073b9b638d49db21f3e4419bf7cf91eba02954a26ac1d9f40cd23->leave($__internal_acb70310a7d073b9b638d49db21f3e4419bf7cf91eba02954a26ac1d9f40cd23_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f81a5098b0a3c516adbb4c753e42cefbbc32eaecf5c9cf9d2d917bf4b35b1b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f81a5098b0a3c516adbb4c753e42cefbbc32eaecf5c9cf9d2d917bf4b35b1b9->enter($__internal_8f81a5098b0a3c516adbb4c753e42cefbbc32eaecf5c9cf9d2d917bf4b35b1b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_8f81a5098b0a3c516adbb4c753e42cefbbc32eaecf5c9cf9d2d917bf4b35b1b9->leave($__internal_8f81a5098b0a3c516adbb4c753e42cefbbc32eaecf5c9cf9d2d917bf4b35b1b9_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_14d3b6db9e482f657fee7bf137147d7cd594e976f2f277bfbfdb5e3d1d36ae40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14d3b6db9e482f657fee7bf137147d7cd594e976f2f277bfbfdb5e3d1d36ae40->enter($__internal_14d3b6db9e482f657fee7bf137147d7cd594e976f2f277bfbfdb5e3d1d36ae40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "        ";
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        
        $__internal_14d3b6db9e482f657fee7bf137147d7cd594e976f2f277bfbfdb5e3d1d36ae40->leave($__internal_14d3b6db9e482f657fee7bf137147d7cd594e976f2f277bfbfdb5e3d1d36ae40_prof);

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
