<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_7df3923b8658155c2ac76f9bc7a6cd7ef49ac835acbf0619f59246a68ae19f4a extends Twig_Template
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
        $__internal_d74f41cd7f13667171e014a5ff5224d8e87a014b83c38e17ba65f5e20d6f6d72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d74f41cd7f13667171e014a5ff5224d8e87a014b83c38e17ba65f5e20d6f6d72->enter($__internal_d74f41cd7f13667171e014a5ff5224d8e87a014b83c38e17ba65f5e20d6f6d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d74f41cd7f13667171e014a5ff5224d8e87a014b83c38e17ba65f5e20d6f6d72->leave($__internal_d74f41cd7f13667171e014a5ff5224d8e87a014b83c38e17ba65f5e20d6f6d72_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b0fedf3f6e50c6213f6e9fc739211e2d8951a6a227e00d40c6db4449b2caef69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0fedf3f6e50c6213f6e9fc739211e2d8951a6a227e00d40c6db4449b2caef69->enter($__internal_b0fedf3f6e50c6213f6e9fc739211e2d8951a6a227e00d40c6db4449b2caef69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_b0fedf3f6e50c6213f6e9fc739211e2d8951a6a227e00d40c6db4449b2caef69->leave($__internal_b0fedf3f6e50c6213f6e9fc739211e2d8951a6a227e00d40c6db4449b2caef69_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a55ab3398a0844e7715e20fa2fc554ff2914538b3ae6bb4c77ec42c6ca8777a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a55ab3398a0844e7715e20fa2fc554ff2914538b3ae6bb4c77ec42c6ca8777a2->enter($__internal_a55ab3398a0844e7715e20fa2fc554ff2914538b3ae6bb4c77ec42c6ca8777a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a55ab3398a0844e7715e20fa2fc554ff2914538b3ae6bb4c77ec42c6ca8777a2->leave($__internal_a55ab3398a0844e7715e20fa2fc554ff2914538b3ae6bb4c77ec42c6ca8777a2_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e68124d93c7132147735850e9779eed1ace5f39018c641ec738df6a25d0eb826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e68124d93c7132147735850e9779eed1ace5f39018c641ec738df6a25d0eb826->enter($__internal_e68124d93c7132147735850e9779eed1ace5f39018c641ec738df6a25d0eb826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e68124d93c7132147735850e9779eed1ace5f39018c641ec738df6a25d0eb826->leave($__internal_e68124d93c7132147735850e9779eed1ace5f39018c641ec738df6a25d0eb826_prof);

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
