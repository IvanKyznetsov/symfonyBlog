<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_7089c2b6eda0030651dbc28f5173ecdce55399122618a653691eb58d2c53fcc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_8afff45b08aa24ea339dd0a0d4fbae12b9523659f17f13a660f7959c1ddfbe6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8afff45b08aa24ea339dd0a0d4fbae12b9523659f17f13a660f7959c1ddfbe6b->enter($__internal_8afff45b08aa24ea339dd0a0d4fbae12b9523659f17f13a660f7959c1ddfbe6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8afff45b08aa24ea339dd0a0d4fbae12b9523659f17f13a660f7959c1ddfbe6b->leave($__internal_8afff45b08aa24ea339dd0a0d4fbae12b9523659f17f13a660f7959c1ddfbe6b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_20d5a8b073debc20756f827bca8603a06a6c61938f9f473d3af0501430a03379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20d5a8b073debc20756f827bca8603a06a6c61938f9f473d3af0501430a03379->enter($__internal_20d5a8b073debc20756f827bca8603a06a6c61938f9f473d3af0501430a03379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_20d5a8b073debc20756f827bca8603a06a6c61938f9f473d3af0501430a03379->leave($__internal_20d5a8b073debc20756f827bca8603a06a6c61938f9f473d3af0501430a03379_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f3ab470d1a8aff0e40014680a048ab1e59648b1f35fafd95a327fc4ea3e4f83a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3ab470d1a8aff0e40014680a048ab1e59648b1f35fafd95a327fc4ea3e4f83a->enter($__internal_f3ab470d1a8aff0e40014680a048ab1e59648b1f35fafd95a327fc4ea3e4f83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "        <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
        ";
        // line 8
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 9
            echo "        <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
        ";
        }
        // line 11
        echo "    ";
        
        $__internal_f3ab470d1a8aff0e40014680a048ab1e59648b1f35fafd95a327fc4ea3e4f83a->leave($__internal_f3ab470d1a8aff0e40014680a048ab1e59648b1f35fafd95a327fc4ea3e4f83a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 11,  61 => 9,  59 => 8,  54 => 7,  41 => 6,  35 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block body %}
    {% block fos_user_content %}
        <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
        {% if targetUrl %}
        <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
        {% endif %}
    {% endblock fos_user_content %}
{% endblock %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/var/www/html/symfonyBlog/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
