<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_08d8c0a45362ded9299122275e995019a8da2100af490d9644672e47c4f64f3b extends Twig_Template
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
        $__internal_befd5c33719ddd9ad7c7e67c062aaeb36b04254ee78d8e2345f9dc970e720090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_befd5c33719ddd9ad7c7e67c062aaeb36b04254ee78d8e2345f9dc970e720090->enter($__internal_befd5c33719ddd9ad7c7e67c062aaeb36b04254ee78d8e2345f9dc970e720090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_befd5c33719ddd9ad7c7e67c062aaeb36b04254ee78d8e2345f9dc970e720090->leave($__internal_befd5c33719ddd9ad7c7e67c062aaeb36b04254ee78d8e2345f9dc970e720090_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5b29c886749b5c6a01cabb82a14f0e487e2712477e1e7e8df7b3ea7186d6644d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b29c886749b5c6a01cabb82a14f0e487e2712477e1e7e8df7b3ea7186d6644d->enter($__internal_5b29c886749b5c6a01cabb82a14f0e487e2712477e1e7e8df7b3ea7186d6644d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_5b29c886749b5c6a01cabb82a14f0e487e2712477e1e7e8df7b3ea7186d6644d->leave($__internal_5b29c886749b5c6a01cabb82a14f0e487e2712477e1e7e8df7b3ea7186d6644d_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_da771c840b6ad9a0bed6f6fa05d3b0315b45ed2413e238262977195a1c2b24d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da771c840b6ad9a0bed6f6fa05d3b0315b45ed2413e238262977195a1c2b24d7->enter($__internal_da771c840b6ad9a0bed6f6fa05d3b0315b45ed2413e238262977195a1c2b24d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_da771c840b6ad9a0bed6f6fa05d3b0315b45ed2413e238262977195a1c2b24d7->leave($__internal_da771c840b6ad9a0bed6f6fa05d3b0315b45ed2413e238262977195a1c2b24d7_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_03c41112cb78b3addeac389a2a6547cd797d35e2b66d0860f5ea564db803c67c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03c41112cb78b3addeac389a2a6547cd797d35e2b66d0860f5ea564db803c67c->enter($__internal_03c41112cb78b3addeac389a2a6547cd797d35e2b66d0860f5ea564db803c67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_03c41112cb78b3addeac389a2a6547cd797d35e2b66d0860f5ea564db803c67c->leave($__internal_03c41112cb78b3addeac389a2a6547cd797d35e2b66d0860f5ea564db803c67c_prof);

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
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/html/symfonyBlog/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
