<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_53257f11de8a8baa409e43e04435711ad386247d1bb36c619f69d761fd2311da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_1911b4037d11c69c2763ce0e79340daf5b8ad41ad8bfc7ffed34d3675e4ec794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1911b4037d11c69c2763ce0e79340daf5b8ad41ad8bfc7ffed34d3675e4ec794->enter($__internal_1911b4037d11c69c2763ce0e79340daf5b8ad41ad8bfc7ffed34d3675e4ec794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1911b4037d11c69c2763ce0e79340daf5b8ad41ad8bfc7ffed34d3675e4ec794->leave($__internal_1911b4037d11c69c2763ce0e79340daf5b8ad41ad8bfc7ffed34d3675e4ec794_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbf0fbd2534130534306382f67604e6d30dd788cd874ee203e531d0745069d9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbf0fbd2534130534306382f67604e6d30dd788cd874ee203e531d0745069d9b->enter($__internal_bbf0fbd2534130534306382f67604e6d30dd788cd874ee203e531d0745069d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_bbf0fbd2534130534306382f67604e6d30dd788cd874ee203e531d0745069d9b->leave($__internal_bbf0fbd2534130534306382f67604e6d30dd788cd874ee203e531d0745069d9b_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_13aa760723df72994c2e38a50560b4be2adac0121526f6f3bfcf7f4d3071a8a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13aa760723df72994c2e38a50560b4be2adac0121526f6f3bfcf7f4d3071a8a3->enter($__internal_13aa760723df72994c2e38a50560b4be2adac0121526f6f3bfcf7f4d3071a8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "        ";
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        
        $__internal_13aa760723df72994c2e38a50560b4be2adac0121526f6f3bfcf7f4d3071a8a3->leave($__internal_13aa760723df72994c2e38a50560b4be2adac0121526f6f3bfcf7f4d3071a8a3_prof);

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
        {% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
    {% endblock fos_user_content %}
{% endblock %}

", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/html/symfonyBlog/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
