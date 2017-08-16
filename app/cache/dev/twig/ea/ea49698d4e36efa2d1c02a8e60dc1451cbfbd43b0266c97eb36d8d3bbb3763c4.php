<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_718e12ee0c3ae56b9e31b321ae66d1fa12855aa694baae30afa4f11bdd867628 extends Twig_Template
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
        $__internal_e0ce96b93477c6703cea4ada0aacb0200df9f1df05acb5de5009741c4f1a0fda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0ce96b93477c6703cea4ada0aacb0200df9f1df05acb5de5009741c4f1a0fda->enter($__internal_e0ce96b93477c6703cea4ada0aacb0200df9f1df05acb5de5009741c4f1a0fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e0ce96b93477c6703cea4ada0aacb0200df9f1df05acb5de5009741c4f1a0fda->leave($__internal_e0ce96b93477c6703cea4ada0aacb0200df9f1df05acb5de5009741c4f1a0fda_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_50606c13e320c72d7e12e8c8133e154a7f6bf346120854809fb71536731339da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50606c13e320c72d7e12e8c8133e154a7f6bf346120854809fb71536731339da->enter($__internal_50606c13e320c72d7e12e8c8133e154a7f6bf346120854809fb71536731339da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_50606c13e320c72d7e12e8c8133e154a7f6bf346120854809fb71536731339da->leave($__internal_50606c13e320c72d7e12e8c8133e154a7f6bf346120854809fb71536731339da_prof);

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
