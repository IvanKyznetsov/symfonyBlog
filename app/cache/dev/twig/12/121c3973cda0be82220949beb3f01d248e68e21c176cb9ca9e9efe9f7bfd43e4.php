<?php

/* NelmioApiDocBundle::resource.html.twig */
class __TwigTemplate_6702b97dee87cbc010932240e8b2c11bce87dfbc90ed7e822ce2c78b131be37c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NelmioApiDocBundle::layout.html.twig", "NelmioApiDocBundle::resource.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NelmioApiDocBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57dd5339f9219f5ad2b10a1dc992babf9bab741342126478c27a9fa42de409a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57dd5339f9219f5ad2b10a1dc992babf9bab741342126478c27a9fa42de409a3->enter($__internal_57dd5339f9219f5ad2b10a1dc992babf9bab741342126478c27a9fa42de409a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57dd5339f9219f5ad2b10a1dc992babf9bab741342126478c27a9fa42de409a3->leave($__internal_57dd5339f9219f5ad2b10a1dc992babf9bab741342126478c27a9fa42de409a3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_fa0199d32b1868559176128fef962ed0c34015d3a445c1413abd5224e2ac13b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa0199d32b1868559176128fef962ed0c34015d3a445c1413abd5224e2ac13b9->enter($__internal_fa0199d32b1868559176128fef962ed0c34015d3a445c1413abd5224e2ac13b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <li class=\"resource\">
        <ul class=\"endpoints\">
            <li class=\"endpoint\">
                <ul class=\"operations\">
                    ";
        // line 8
        $this->loadTemplate("NelmioApiDocBundle::method.html.twig", "NelmioApiDocBundle::resource.html.twig", 8)->display($context);
        // line 9
        echo "                </ul>
            </li>
        </ul>
    </li>
";
        
        $__internal_fa0199d32b1868559176128fef962ed0c34015d3a445c1413abd5224e2ac13b9->leave($__internal_fa0199d32b1868559176128fef962ed0c34015d3a445c1413abd5224e2ac13b9_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::resource.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"NelmioApiDocBundle::layout.html.twig\" %}

{% block content %}
    <li class=\"resource\">
        <ul class=\"endpoints\">
            <li class=\"endpoint\">
                <ul class=\"operations\">
                    {% include 'NelmioApiDocBundle::method.html.twig' %}
                </ul>
            </li>
        </ul>
    </li>
{% endblock content %}
", "NelmioApiDocBundle::resource.html.twig", "/var/www/html/symfonyBlog/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views/resource.html.twig");
    }
}
