<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_737cfc7cc68784713c9c11eaa2153233eea7f0f525bbcf806844673189afbad0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_52ec433167066a3bb193a977bf86545340e65200fe8c9cb2577b849917f61467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52ec433167066a3bb193a977bf86545340e65200fe8c9cb2577b849917f61467->enter($__internal_52ec433167066a3bb193a977bf86545340e65200fe8c9cb2577b849917f61467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52ec433167066a3bb193a977bf86545340e65200fe8c9cb2577b849917f61467->leave($__internal_52ec433167066a3bb193a977bf86545340e65200fe8c9cb2577b849917f61467_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_833df642272ee20685bd5c79e737d61ea1fa216edab111790b3ef584432cabd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_833df642272ee20685bd5c79e737d61ea1fa216edab111790b3ef584432cabd9->enter($__internal_833df642272ee20685bd5c79e737d61ea1fa216edab111790b3ef584432cabd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_833df642272ee20685bd5c79e737d61ea1fa216edab111790b3ef584432cabd9->leave($__internal_833df642272ee20685bd5c79e737d61ea1fa216edab111790b3ef584432cabd9_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0dca040450330e8bfc5c99ee2ee1e1544a407608541485843ac4e6006f3591a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dca040450330e8bfc5c99ee2ee1e1544a407608541485843ac4e6006f3591a4->enter($__internal_0dca040450330e8bfc5c99ee2ee1e1544a407608541485843ac4e6006f3591a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
    ";
        
        $__internal_0dca040450330e8bfc5c99ee2ee1e1544a407608541485843ac4e6006f3591a4->leave($__internal_0dca040450330e8bfc5c99ee2ee1e1544a407608541485843ac4e6006f3591a4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 5,  41 => 4,  35 => 3,  11 => 1,);
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
        {{ include('@FOSUser/Security/login_content.html.twig') }}
    {% endblock fos_user_content %}
{% endblock %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/html/symfonyBlog/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
