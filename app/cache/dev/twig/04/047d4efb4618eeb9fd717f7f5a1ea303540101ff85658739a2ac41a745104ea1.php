<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_38d60b93618d27fe39d0cea665cc2156f943d9183c26f87b53bceae7c92bc2c4 extends Twig_Template
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
        $__internal_012f4736c3baacb71aecaeb6fb49766cdfc5dae0dd21fb7b4ad3f4ae264f7a07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_012f4736c3baacb71aecaeb6fb49766cdfc5dae0dd21fb7b4ad3f4ae264f7a07->enter($__internal_012f4736c3baacb71aecaeb6fb49766cdfc5dae0dd21fb7b4ad3f4ae264f7a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_012f4736c3baacb71aecaeb6fb49766cdfc5dae0dd21fb7b4ad3f4ae264f7a07->leave($__internal_012f4736c3baacb71aecaeb6fb49766cdfc5dae0dd21fb7b4ad3f4ae264f7a07_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8dc886bff78122d214e514e04e78d7e766fdb544ef1084b65051e62a852cd1bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc886bff78122d214e514e04e78d7e766fdb544ef1084b65051e62a852cd1bc->enter($__internal_8dc886bff78122d214e514e04e78d7e766fdb544ef1084b65051e62a852cd1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_8dc886bff78122d214e514e04e78d7e766fdb544ef1084b65051e62a852cd1bc->leave($__internal_8dc886bff78122d214e514e04e78d7e766fdb544ef1084b65051e62a852cd1bc_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4d55954a5c909881a73c0d1252a02354bc15ad8771ac03fcf391869135224774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d55954a5c909881a73c0d1252a02354bc15ad8771ac03fcf391869135224774->enter($__internal_4d55954a5c909881a73c0d1252a02354bc15ad8771ac03fcf391869135224774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4d55954a5c909881a73c0d1252a02354bc15ad8771ac03fcf391869135224774->leave($__internal_4d55954a5c909881a73c0d1252a02354bc15ad8771ac03fcf391869135224774_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e088ba34ecae40e42de6126ed73f933d00c6eb1b1d7d3b235828d9b8915e0abb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e088ba34ecae40e42de6126ed73f933d00c6eb1b1d7d3b235828d9b8915e0abb->enter($__internal_e088ba34ecae40e42de6126ed73f933d00c6eb1b1d7d3b235828d9b8915e0abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e088ba34ecae40e42de6126ed73f933d00c6eb1b1d7d3b235828d9b8915e0abb->leave($__internal_e088ba34ecae40e42de6126ed73f933d00c6eb1b1d7d3b235828d9b8915e0abb_prof);

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
