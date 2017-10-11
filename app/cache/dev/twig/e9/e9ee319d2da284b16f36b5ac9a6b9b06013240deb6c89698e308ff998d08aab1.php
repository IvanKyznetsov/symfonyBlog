<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_cfcc3172848a35db8bc41f02f6e974cad6e3e2152f04d89d05c365c93d5612dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db4bdc4d98f41cd2202f731dffcb9d43b888373d4fea1bae9c92b7b4f1a6eafc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db4bdc4d98f41cd2202f731dffcb9d43b888373d4fea1bae9c92b7b4f1a6eafc->enter($__internal_db4bdc4d98f41cd2202f731dffcb9d43b888373d4fea1bae9c92b7b4f1a6eafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_db4bdc4d98f41cd2202f731dffcb9d43b888373d4fea1bae9c92b7b4f1a6eafc->leave($__internal_db4bdc4d98f41cd2202f731dffcb9d43b888373d4fea1bae9c92b7b4f1a6eafc_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_844a15ae958ccf9f209d796ef7409025d8eca0caeee56985bdcaa35e3d9c8d44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_844a15ae958ccf9f209d796ef7409025d8eca0caeee56985bdcaa35e3d9c8d44->enter($__internal_844a15ae958ccf9f209d796ef7409025d8eca0caeee56985bdcaa35e3d9c8d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_844a15ae958ccf9f209d796ef7409025d8eca0caeee56985bdcaa35e3d9c8d44->leave($__internal_844a15ae958ccf9f209d796ef7409025d8eca0caeee56985bdcaa35e3d9c8d44_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
