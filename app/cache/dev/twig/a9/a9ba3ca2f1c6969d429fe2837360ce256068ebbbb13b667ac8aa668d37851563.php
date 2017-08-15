<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_79d2650a4900585cced2525be574ba4d9432d14b968ebd221cbf806560209aba extends Twig_Template
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
        $__internal_f4e7687f61c9b47184e346dc9ff80e283eb7d8f85e23e3df8f7fe0c5a4477290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4e7687f61c9b47184e346dc9ff80e283eb7d8f85e23e3df8f7fe0c5a4477290->enter($__internal_f4e7687f61c9b47184e346dc9ff80e283eb7d8f85e23e3df8f7fe0c5a4477290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f4e7687f61c9b47184e346dc9ff80e283eb7d8f85e23e3df8f7fe0c5a4477290->leave($__internal_f4e7687f61c9b47184e346dc9ff80e283eb7d8f85e23e3df8f7fe0c5a4477290_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_21de615aad27c3c924221bc194a6f98abbb31f17589f7702e4d768eee97bf031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21de615aad27c3c924221bc194a6f98abbb31f17589f7702e4d768eee97bf031->enter($__internal_21de615aad27c3c924221bc194a6f98abbb31f17589f7702e4d768eee97bf031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_21de615aad27c3c924221bc194a6f98abbb31f17589f7702e4d768eee97bf031->leave($__internal_21de615aad27c3c924221bc194a6f98abbb31f17589f7702e4d768eee97bf031_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_08b2b61323da522db89bc97c7a7ee4c177e66a9f97f42b90ade0ecb2b5c9b484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08b2b61323da522db89bc97c7a7ee4c177e66a9f97f42b90ade0ecb2b5c9b484->enter($__internal_08b2b61323da522db89bc97c7a7ee4c177e66a9f97f42b90ade0ecb2b5c9b484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_08b2b61323da522db89bc97c7a7ee4c177e66a9f97f42b90ade0ecb2b5c9b484->leave($__internal_08b2b61323da522db89bc97c7a7ee4c177e66a9f97f42b90ade0ecb2b5c9b484_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b91b472a4677f270bbee7aa3e56f5be16c93d03b6ae86584370b79eea232400d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b91b472a4677f270bbee7aa3e56f5be16c93d03b6ae86584370b79eea232400d->enter($__internal_b91b472a4677f270bbee7aa3e56f5be16c93d03b6ae86584370b79eea232400d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b91b472a4677f270bbee7aa3e56f5be16c93d03b6ae86584370b79eea232400d->leave($__internal_b91b472a4677f270bbee7aa3e56f5be16c93d03b6ae86584370b79eea232400d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
", "@FOSUser/Resetting/email.txt.twig", "/var/www/html/symfonyBlog/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
