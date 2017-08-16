<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_c316ceff57d52fa1c0b03e96dd9cc13af903be06572dbe9c05e3b35e8498f99c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_240e779ee34d0a7b71c8daebcea44a429e885f25bbe37bb34fb6e3ea68823dde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_240e779ee34d0a7b71c8daebcea44a429e885f25bbe37bb34fb6e3ea68823dde->enter($__internal_240e779ee34d0a7b71c8daebcea44a429e885f25bbe37bb34fb6e3ea68823dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_240e779ee34d0a7b71c8daebcea44a429e885f25bbe37bb34fb6e3ea68823dde->leave($__internal_240e779ee34d0a7b71c8daebcea44a429e885f25bbe37bb34fb6e3ea68823dde_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fab800dfa1c6b515059ea2c1e82f96373cd7da1faf941690d65997b8dd7100c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fab800dfa1c6b515059ea2c1e82f96373cd7da1faf941690d65997b8dd7100c4->enter($__internal_fab800dfa1c6b515059ea2c1e82f96373cd7da1faf941690d65997b8dd7100c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_fab800dfa1c6b515059ea2c1e82f96373cd7da1faf941690d65997b8dd7100c4->leave($__internal_fab800dfa1c6b515059ea2c1e82f96373cd7da1faf941690d65997b8dd7100c4_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_08a8baa9ef2bf625977c7a2022e282d0beae9c819dde3fc58f3ff2030bcb6fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08a8baa9ef2bf625977c7a2022e282d0beae9c819dde3fc58f3ff2030bcb6fea->enter($__internal_08a8baa9ef2bf625977c7a2022e282d0beae9c819dde3fc58f3ff2030bcb6fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "        <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        
        $__internal_08a8baa9ef2bf625977c7a2022e282d0beae9c819dde3fc58f3ff2030bcb6fea->leave($__internal_08a8baa9ef2bf625977c7a2022e282d0beae9c819dde3fc58f3ff2030bcb6fea_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 7,  41 => 6,  35 => 5,  11 => 1,);
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
        <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
    {% endblock fos_user_content %}
{% endblock %}", "FOSUserBundle:Registration:check_email.html.twig", "/var/www/html/symfonyBlog/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
