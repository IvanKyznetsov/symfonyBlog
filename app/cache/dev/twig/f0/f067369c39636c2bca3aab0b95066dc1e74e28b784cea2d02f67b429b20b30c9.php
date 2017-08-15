<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_8413fbcef688fa2705d3782e2299e6cb67ebc560d0b4f63caef6f9c41c49a868 extends Twig_Template
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
        $__internal_dc2b21ac5d5f261f99e06476094930a991d915381e97f76005ec20cc73793dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc2b21ac5d5f261f99e06476094930a991d915381e97f76005ec20cc73793dc8->enter($__internal_dc2b21ac5d5f261f99e06476094930a991d915381e97f76005ec20cc73793dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_dc2b21ac5d5f261f99e06476094930a991d915381e97f76005ec20cc73793dc8->leave($__internal_dc2b21ac5d5f261f99e06476094930a991d915381e97f76005ec20cc73793dc8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b3c67ca67595c9081bf1a42917f689b4183527d767d89113d11e3d45d88ad266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3c67ca67595c9081bf1a42917f689b4183527d767d89113d11e3d45d88ad266->enter($__internal_b3c67ca67595c9081bf1a42917f689b4183527d767d89113d11e3d45d88ad266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_b3c67ca67595c9081bf1a42917f689b4183527d767d89113d11e3d45d88ad266->leave($__internal_b3c67ca67595c9081bf1a42917f689b4183527d767d89113d11e3d45d88ad266_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_104b112a1917e74a6d142e7b170e3e376dc02ad255419b6b878e89fcc13fc7f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_104b112a1917e74a6d142e7b170e3e376dc02ad255419b6b878e89fcc13fc7f7->enter($__internal_104b112a1917e74a6d142e7b170e3e376dc02ad255419b6b878e89fcc13fc7f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_104b112a1917e74a6d142e7b170e3e376dc02ad255419b6b878e89fcc13fc7f7->leave($__internal_104b112a1917e74a6d142e7b170e3e376dc02ad255419b6b878e89fcc13fc7f7_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8e74860baaa034447fad91f179f38da52c154cd57b19cea3684b6a228d59c78c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e74860baaa034447fad91f179f38da52c154cd57b19cea3684b6a228d59c78c->enter($__internal_8e74860baaa034447fad91f179f38da52c154cd57b19cea3684b6a228d59c78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8e74860baaa034447fad91f179f38da52c154cd57b19cea3684b6a228d59c78c->leave($__internal_8e74860baaa034447fad91f179f38da52c154cd57b19cea3684b6a228d59c78c_prof);

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
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/html/symfonyBlog/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
