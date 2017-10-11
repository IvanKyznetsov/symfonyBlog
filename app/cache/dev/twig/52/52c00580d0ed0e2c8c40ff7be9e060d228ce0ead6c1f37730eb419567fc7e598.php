<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_b88cf8cf50098d604dedf70fe1884aacd91ad3fc0d5b08627dbd75ac5025b471 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_e9236822b849dd21700b35c941b176fac2abca1863d52ae1b738f1e6e8425ee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9236822b849dd21700b35c941b176fac2abca1863d52ae1b738f1e6e8425ee1->enter($__internal_e9236822b849dd21700b35c941b176fac2abca1863d52ae1b738f1e6e8425ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9236822b849dd21700b35c941b176fac2abca1863d52ae1b738f1e6e8425ee1->leave($__internal_e9236822b849dd21700b35c941b176fac2abca1863d52ae1b738f1e6e8425ee1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9b70206206b078cb9e79721382343ccd5a76dd86ecd2981246b86cc812cba64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9b70206206b078cb9e79721382343ccd5a76dd86ecd2981246b86cc812cba64->enter($__internal_f9b70206206b078cb9e79721382343ccd5a76dd86ecd2981246b86cc812cba64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_f9b70206206b078cb9e79721382343ccd5a76dd86ecd2981246b86cc812cba64->leave($__internal_f9b70206206b078cb9e79721382343ccd5a76dd86ecd2981246b86cc812cba64_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_85580d51a3c67c8533d74d00c95153ac61c479a586530e11aac51c78020559b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85580d51a3c67c8533d74d00c95153ac61c479a586530e11aac51c78020559b7->enter($__internal_85580d51a3c67c8533d74d00c95153ac61c479a586530e11aac51c78020559b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "        ";
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        
        $__internal_85580d51a3c67c8533d74d00c95153ac61c479a586530e11aac51c78020559b7->leave($__internal_85580d51a3c67c8533d74d00c95153ac61c479a586530e11aac51c78020559b7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
", "FOSUserBundle:Registration:register.html.twig", "/var/www/html/symfonyBlog/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
