<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_118695142d64f7d615117b67b5330b63be40fc83e93a7e1986bacee8105df756 extends Twig_Template
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
        $__internal_585d023993e7d4ab76f068c0a3626703c382d243706e40879d794455d7701b19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_585d023993e7d4ab76f068c0a3626703c382d243706e40879d794455d7701b19->enter($__internal_585d023993e7d4ab76f068c0a3626703c382d243706e40879d794455d7701b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_585d023993e7d4ab76f068c0a3626703c382d243706e40879d794455d7701b19->leave($__internal_585d023993e7d4ab76f068c0a3626703c382d243706e40879d794455d7701b19_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c43ebf3e8af792757b7dd31f2ec07e5696d2635fb20c64ba1f09a8a341c360f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c43ebf3e8af792757b7dd31f2ec07e5696d2635fb20c64ba1f09a8a341c360f1->enter($__internal_c43ebf3e8af792757b7dd31f2ec07e5696d2635fb20c64ba1f09a8a341c360f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_c43ebf3e8af792757b7dd31f2ec07e5696d2635fb20c64ba1f09a8a341c360f1->leave($__internal_c43ebf3e8af792757b7dd31f2ec07e5696d2635fb20c64ba1f09a8a341c360f1_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_fed924aab0bead92b0d3abb4f39fc0f430835d39f4e40f56f360786c57b68367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed924aab0bead92b0d3abb4f39fc0f430835d39f4e40f56f360786c57b68367->enter($__internal_fed924aab0bead92b0d3abb4f39fc0f430835d39f4e40f56f360786c57b68367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_fed924aab0bead92b0d3abb4f39fc0f430835d39f4e40f56f360786c57b68367->leave($__internal_fed924aab0bead92b0d3abb4f39fc0f430835d39f4e40f56f360786c57b68367_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_41fb0e64b696bb635bab5a6190b8d620045eba034ec38db0f9ed399f2e9f6e08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41fb0e64b696bb635bab5a6190b8d620045eba034ec38db0f9ed399f2e9f6e08->enter($__internal_41fb0e64b696bb635bab5a6190b8d620045eba034ec38db0f9ed399f2e9f6e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_41fb0e64b696bb635bab5a6190b8d620045eba034ec38db0f9ed399f2e9f6e08->leave($__internal_41fb0e64b696bb635bab5a6190b8d620045eba034ec38db0f9ed399f2e9f6e08_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/html/symfonyBlog/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
