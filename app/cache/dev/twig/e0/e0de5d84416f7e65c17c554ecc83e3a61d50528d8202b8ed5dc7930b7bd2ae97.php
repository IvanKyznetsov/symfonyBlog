<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_4ebb55dbb87199d5934130ee6eebdb3a788e02a38fdae08198f414b92a91efee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0016ca089082796e63beaefd1aeafa04bbc674fdbd58f709601844aff7b2029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0016ca089082796e63beaefd1aeafa04bbc674fdbd58f709601844aff7b2029->enter($__internal_c0016ca089082796e63beaefd1aeafa04bbc674fdbd58f709601844aff7b2029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0016ca089082796e63beaefd1aeafa04bbc674fdbd58f709601844aff7b2029->leave($__internal_c0016ca089082796e63beaefd1aeafa04bbc674fdbd58f709601844aff7b2029_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_65dd1e3302ca840d8019b5a1f5a8aa92747d2b4a4be80c8e4a7839858d80a15d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65dd1e3302ca840d8019b5a1f5a8aa92747d2b4a4be80c8e4a7839858d80a15d->enter($__internal_65dd1e3302ca840d8019b5a1f5a8aa92747d2b4a4be80c8e4a7839858d80a15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_65dd1e3302ca840d8019b5a1f5a8aa92747d2b4a4be80c8e4a7839858d80a15d->leave($__internal_65dd1e3302ca840d8019b5a1f5a8aa92747d2b4a4be80c8e4a7839858d80a15d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_96d211cee6f7afc27c7e07d4e1f21c8b0066bf587523d0b575e18d31127fd9ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96d211cee6f7afc27c7e07d4e1f21c8b0066bf587523d0b575e18d31127fd9ab->enter($__internal_96d211cee6f7afc27c7e07d4e1f21c8b0066bf587523d0b575e18d31127fd9ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_96d211cee6f7afc27c7e07d4e1f21c8b0066bf587523d0b575e18d31127fd9ab->leave($__internal_96d211cee6f7afc27c7e07d4e1f21c8b0066bf587523d0b575e18d31127fd9ab_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac490d0439ff60c9725e9b100c91eee1ea44915462e8d8b8a4043fed4dfbe72d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac490d0439ff60c9725e9b100c91eee1ea44915462e8d8b8a4043fed4dfbe72d->enter($__internal_ac490d0439ff60c9725e9b100c91eee1ea44915462e8d8b8a4043fed4dfbe72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ac490d0439ff60c9725e9b100c91eee1ea44915462e8d8b8a4043fed4dfbe72d->leave($__internal_ac490d0439ff60c9725e9b100c91eee1ea44915462e8d8b8a4043fed4dfbe72d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
