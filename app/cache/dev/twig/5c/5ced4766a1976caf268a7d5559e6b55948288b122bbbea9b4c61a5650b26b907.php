<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_f5238b9d98e420a301970e9a6023ea043aeb9a339b8c4dc5c9f3e570aac4101e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_784861d7f089da61e2c31e3be153921ae53e9ff578b2ebfb9e3c326130a6bc60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_784861d7f089da61e2c31e3be153921ae53e9ff578b2ebfb9e3c326130a6bc60->enter($__internal_784861d7f089da61e2c31e3be153921ae53e9ff578b2ebfb9e3c326130a6bc60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_784861d7f089da61e2c31e3be153921ae53e9ff578b2ebfb9e3c326130a6bc60->leave($__internal_784861d7f089da61e2c31e3be153921ae53e9ff578b2ebfb9e3c326130a6bc60_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e6b9e535f2881ffa23813e604764c5d4346b000cde7f0f28aa5b92d5606e53d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e6b9e535f2881ffa23813e604764c5d4346b000cde7f0f28aa5b92d5606e53d->enter($__internal_3e6b9e535f2881ffa23813e604764c5d4346b000cde7f0f28aa5b92d5606e53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_3e6b9e535f2881ffa23813e604764c5d4346b000cde7f0f28aa5b92d5606e53d->leave($__internal_3e6b9e535f2881ffa23813e604764c5d4346b000cde7f0f28aa5b92d5606e53d_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c0d17946b5e67b6dfdb0e88084997c8c13edb5b26d85825f9f8e670fb7e97c1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0d17946b5e67b6dfdb0e88084997c8c13edb5b26d85825f9f8e670fb7e97c1a->enter($__internal_c0d17946b5e67b6dfdb0e88084997c8c13edb5b26d85825f9f8e670fb7e97c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "        ";
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        
        $__internal_c0d17946b5e67b6dfdb0e88084997c8c13edb5b26d85825f9f8e670fb7e97c1a->leave($__internal_c0d17946b5e67b6dfdb0e88084997c8c13edb5b26d85825f9f8e670fb7e97c1a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
        {% include \"@FOSUser/Group/show_content.html.twig\" %}
    {% endblock fos_user_content %}
{% endblock %}

", "FOSUserBundle:Group:show.html.twig", "/var/www/html/symfonyBlog/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
