<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_f7d9a73aecee8badf88e99ad33fd70af6d9d557c0d515f4ea041d35f48a25e80 extends Twig_Template
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
        $__internal_66279c0f0193b9fdb59fbd6861aedefe03611662cdce0cf6b4b03e82da2e2e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66279c0f0193b9fdb59fbd6861aedefe03611662cdce0cf6b4b03e82da2e2e7c->enter($__internal_66279c0f0193b9fdb59fbd6861aedefe03611662cdce0cf6b4b03e82da2e2e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66279c0f0193b9fdb59fbd6861aedefe03611662cdce0cf6b4b03e82da2e2e7c->leave($__internal_66279c0f0193b9fdb59fbd6861aedefe03611662cdce0cf6b4b03e82da2e2e7c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e0a7944e0a29476203700be2319ba151dbbe4298aebbc32b6bdbddd803cfef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e0a7944e0a29476203700be2319ba151dbbe4298aebbc32b6bdbddd803cfef3->enter($__internal_6e0a7944e0a29476203700be2319ba151dbbe4298aebbc32b6bdbddd803cfef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_6e0a7944e0a29476203700be2319ba151dbbe4298aebbc32b6bdbddd803cfef3->leave($__internal_6e0a7944e0a29476203700be2319ba151dbbe4298aebbc32b6bdbddd803cfef3_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb4d755d4e53c619125b6e5a74eab77fcbb933dbef4a79dc5add08e7e51fb5a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb4d755d4e53c619125b6e5a74eab77fcbb933dbef4a79dc5add08e7e51fb5a3->enter($__internal_fb4d755d4e53c619125b6e5a74eab77fcbb933dbef4a79dc5add08e7e51fb5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "        <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        
        $__internal_fb4d755d4e53c619125b6e5a74eab77fcbb933dbef4a79dc5add08e7e51fb5a3->leave($__internal_fb4d755d4e53c619125b6e5a74eab77fcbb933dbef4a79dc5add08e7e51fb5a3_prof);

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
