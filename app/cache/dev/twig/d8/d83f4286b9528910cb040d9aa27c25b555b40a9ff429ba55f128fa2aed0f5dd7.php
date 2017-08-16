<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_a938297ca807bf178314b3f139a66de367f5622219c0df07218f527f45a52f0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_37b03eb79557da9e036e59151299d7ec241af323208c8b12f95fb55918dbf798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37b03eb79557da9e036e59151299d7ec241af323208c8b12f95fb55918dbf798->enter($__internal_37b03eb79557da9e036e59151299d7ec241af323208c8b12f95fb55918dbf798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37b03eb79557da9e036e59151299d7ec241af323208c8b12f95fb55918dbf798->leave($__internal_37b03eb79557da9e036e59151299d7ec241af323208c8b12f95fb55918dbf798_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_72f147da42e004b34dbd608652a4f779a2e3ed55e303017003691d5a31ac3844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f147da42e004b34dbd608652a4f779a2e3ed55e303017003691d5a31ac3844->enter($__internal_72f147da42e004b34dbd608652a4f779a2e3ed55e303017003691d5a31ac3844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_72f147da42e004b34dbd608652a4f779a2e3ed55e303017003691d5a31ac3844->leave($__internal_72f147da42e004b34dbd608652a4f779a2e3ed55e303017003691d5a31ac3844_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_06165b8926fea1473470ce7f2a8070a87457137797c50efa6acdfb5c6861d84f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06165b8926fea1473470ce7f2a8070a87457137797c50efa6acdfb5c6861d84f->enter($__internal_06165b8926fea1473470ce7f2a8070a87457137797c50efa6acdfb5c6861d84f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "        <p>
            ";
        // line 8
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
        </p>
    ";
        
        $__internal_06165b8926fea1473470ce7f2a8070a87457137797c50efa6acdfb5c6861d84f->leave($__internal_06165b8926fea1473470ce7f2a8070a87457137797c50efa6acdfb5c6861d84f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  54 => 7,  41 => 6,  35 => 5,  11 => 1,);
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
        <p>
            {{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
        </p>
    {% endblock %}
{% endblock %}", "FOSUserBundle:Resetting:check_email.html.twig", "/var/www/html/symfonyBlog/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
