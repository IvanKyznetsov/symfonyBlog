<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_d9347e7563f626c6668f4206f6be6990eb35b92ee458c171563bef43ccc6584c extends Twig_Template
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
        $__internal_435d8c21214068e41edb4f2749f0f711c95fd8cf0bb29b2e95b5bf819369242a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_435d8c21214068e41edb4f2749f0f711c95fd8cf0bb29b2e95b5bf819369242a->enter($__internal_435d8c21214068e41edb4f2749f0f711c95fd8cf0bb29b2e95b5bf819369242a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_435d8c21214068e41edb4f2749f0f711c95fd8cf0bb29b2e95b5bf819369242a->leave($__internal_435d8c21214068e41edb4f2749f0f711c95fd8cf0bb29b2e95b5bf819369242a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_543887782997c55dbec292cbe1fc3420afa16cf1288c45f2c0270d6456add40f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_543887782997c55dbec292cbe1fc3420afa16cf1288c45f2c0270d6456add40f->enter($__internal_543887782997c55dbec292cbe1fc3420afa16cf1288c45f2c0270d6456add40f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_543887782997c55dbec292cbe1fc3420afa16cf1288c45f2c0270d6456add40f->leave($__internal_543887782997c55dbec292cbe1fc3420afa16cf1288c45f2c0270d6456add40f_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e83fbfa9bc5bcc280d355a3d7d48c8f55bda675f8ca2ddf7cc82932b4169df71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e83fbfa9bc5bcc280d355a3d7d48c8f55bda675f8ca2ddf7cc82932b4169df71->enter($__internal_e83fbfa9bc5bcc280d355a3d7d48c8f55bda675f8ca2ddf7cc82932b4169df71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "        <p>
            ";
        // line 8
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
        </p>
    ";
        
        $__internal_e83fbfa9bc5bcc280d355a3d7d48c8f55bda675f8ca2ddf7cc82932b4169df71->leave($__internal_e83fbfa9bc5bcc280d355a3d7d48c8f55bda675f8ca2ddf7cc82932b4169df71_prof);

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
