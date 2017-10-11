<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_608f1791bab95bf00bf1fa4903fee05eae194ba55563e8634ee20e0a358d5974 extends Twig_Template
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
        $__internal_29b9c54ecd27e84327a2c88afd02c34bbea61aac1925cc372b0fd31a92a64a4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29b9c54ecd27e84327a2c88afd02c34bbea61aac1925cc372b0fd31a92a64a4a->enter($__internal_29b9c54ecd27e84327a2c88afd02c34bbea61aac1925cc372b0fd31a92a64a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29b9c54ecd27e84327a2c88afd02c34bbea61aac1925cc372b0fd31a92a64a4a->leave($__internal_29b9c54ecd27e84327a2c88afd02c34bbea61aac1925cc372b0fd31a92a64a4a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcc838be830a3060bff8a465f5f5b7b484152867ec1d700e78a91db0c5e4edaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc838be830a3060bff8a465f5f5b7b484152867ec1d700e78a91db0c5e4edaa->enter($__internal_fcc838be830a3060bff8a465f5f5b7b484152867ec1d700e78a91db0c5e4edaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_fcc838be830a3060bff8a465f5f5b7b484152867ec1d700e78a91db0c5e4edaa->leave($__internal_fcc838be830a3060bff8a465f5f5b7b484152867ec1d700e78a91db0c5e4edaa_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_51ab3b6af64860e04afea0739fe4fc8ab19a53e90537dac4cf8b1a6bd5c14c96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51ab3b6af64860e04afea0739fe4fc8ab19a53e90537dac4cf8b1a6bd5c14c96->enter($__internal_51ab3b6af64860e04afea0739fe4fc8ab19a53e90537dac4cf8b1a6bd5c14c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "        ";
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        
        $__internal_51ab3b6af64860e04afea0739fe4fc8ab19a53e90537dac4cf8b1a6bd5c14c96->leave($__internal_51ab3b6af64860e04afea0739fe4fc8ab19a53e90537dac4cf8b1a6bd5c14c96_prof);

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
