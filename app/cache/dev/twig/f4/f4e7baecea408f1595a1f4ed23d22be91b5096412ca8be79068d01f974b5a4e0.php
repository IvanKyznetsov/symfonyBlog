<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_08698fde4ea66a2c2dc04e62cd48d95ba10d59875fd5df3ba043c4dcec89da61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74235a4a4130794f812d6910baa5f02daa539e6946b569c268632bde038c8812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74235a4a4130794f812d6910baa5f02daa539e6946b569c268632bde038c8812->enter($__internal_74235a4a4130794f812d6910baa5f02daa539e6946b569c268632bde038c8812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_74235a4a4130794f812d6910baa5f02daa539e6946b569c268632bde038c8812->leave($__internal_74235a4a4130794f812d6910baa5f02daa539e6946b569c268632bde038c8812_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6b425b19750dce8839fb8e1573e09373bf5374bac694a7ea11eaeb6d87b970a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b425b19750dce8839fb8e1573e09373bf5374bac694a7ea11eaeb6d87b970a8->enter($__internal_6b425b19750dce8839fb8e1573e09373bf5374bac694a7ea11eaeb6d87b970a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_6b425b19750dce8839fb8e1573e09373bf5374bac694a7ea11eaeb6d87b970a8->leave($__internal_6b425b19750dce8839fb8e1573e09373bf5374bac694a7ea11eaeb6d87b970a8_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a2d66217a33a280987e8881e8badb3cfc5dde0fcc3a2b431bd940ef185dafda5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2d66217a33a280987e8881e8badb3cfc5dde0fcc3a2b431bd940ef185dafda5->enter($__internal_a2d66217a33a280987e8881e8badb3cfc5dde0fcc3a2b431bd940ef185dafda5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a2d66217a33a280987e8881e8badb3cfc5dde0fcc3a2b431bd940ef185dafda5->leave($__internal_a2d66217a33a280987e8881e8badb3cfc5dde0fcc3a2b431bd940ef185dafda5_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_38cd4aaa9bdfca6609668a0348b20c74daea3b6582a501e3b529d865ff6ed703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38cd4aaa9bdfca6609668a0348b20c74daea3b6582a501e3b529d865ff6ed703->enter($__internal_38cd4aaa9bdfca6609668a0348b20c74daea3b6582a501e3b529d865ff6ed703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_38cd4aaa9bdfca6609668a0348b20c74daea3b6582a501e3b529d865ff6ed703->leave($__internal_38cd4aaa9bdfca6609668a0348b20c74daea3b6582a501e3b529d865ff6ed703_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/html/symfonyBlog/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
