<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_b4f55bc7a4698b6c05672fb05851a3ff5e1d9c08381ec735a1a2484faa4d0c6e extends Twig_Template
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
        $__internal_cae7c540c88b0678fc8aa495375dd35f35c8264d26973f53257a63d22a479107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cae7c540c88b0678fc8aa495375dd35f35c8264d26973f53257a63d22a479107->enter($__internal_cae7c540c88b0678fc8aa495375dd35f35c8264d26973f53257a63d22a479107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_cae7c540c88b0678fc8aa495375dd35f35c8264d26973f53257a63d22a479107->leave($__internal_cae7c540c88b0678fc8aa495375dd35f35c8264d26973f53257a63d22a479107_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_de7ed659a3f7d8b48a4625c878ed815e941d6f967e343f9209c3cf2bb77bb59a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de7ed659a3f7d8b48a4625c878ed815e941d6f967e343f9209c3cf2bb77bb59a->enter($__internal_de7ed659a3f7d8b48a4625c878ed815e941d6f967e343f9209c3cf2bb77bb59a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_de7ed659a3f7d8b48a4625c878ed815e941d6f967e343f9209c3cf2bb77bb59a->leave($__internal_de7ed659a3f7d8b48a4625c878ed815e941d6f967e343f9209c3cf2bb77bb59a_prof);

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
