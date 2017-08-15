<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_013b26dffa1d131e100616e7eafe66e6e54781777182158ca42fef9be034931b extends Twig_Template
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
        $__internal_73d898c06fcef7582562173133bcb1cbcc6cf28212e47e47ca3ee74b489f7571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d898c06fcef7582562173133bcb1cbcc6cf28212e47e47ca3ee74b489f7571->enter($__internal_73d898c06fcef7582562173133bcb1cbcc6cf28212e47e47ca3ee74b489f7571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73d898c06fcef7582562173133bcb1cbcc6cf28212e47e47ca3ee74b489f7571->leave($__internal_73d898c06fcef7582562173133bcb1cbcc6cf28212e47e47ca3ee74b489f7571_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f8ade6f3d20b313acdfbca70e6114b145fcef81723839fd61f738bd390765258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8ade6f3d20b313acdfbca70e6114b145fcef81723839fd61f738bd390765258->enter($__internal_f8ade6f3d20b313acdfbca70e6114b145fcef81723839fd61f738bd390765258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f8ade6f3d20b313acdfbca70e6114b145fcef81723839fd61f738bd390765258->leave($__internal_f8ade6f3d20b313acdfbca70e6114b145fcef81723839fd61f738bd390765258_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_41cc7de117aa9c571b043abdc762838c5fccfa63ed058a2bc618bdf5eff0a229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41cc7de117aa9c571b043abdc762838c5fccfa63ed058a2bc618bdf5eff0a229->enter($__internal_41cc7de117aa9c571b043abdc762838c5fccfa63ed058a2bc618bdf5eff0a229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_41cc7de117aa9c571b043abdc762838c5fccfa63ed058a2bc618bdf5eff0a229->leave($__internal_41cc7de117aa9c571b043abdc762838c5fccfa63ed058a2bc618bdf5eff0a229_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_00de5e01066fe6e55cbbb4b14221bb1eee8b20ee5e5c19e03efdfaa77319fc19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00de5e01066fe6e55cbbb4b14221bb1eee8b20ee5e5c19e03efdfaa77319fc19->enter($__internal_00de5e01066fe6e55cbbb4b14221bb1eee8b20ee5e5c19e03efdfaa77319fc19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_00de5e01066fe6e55cbbb4b14221bb1eee8b20ee5e5c19e03efdfaa77319fc19->leave($__internal_00de5e01066fe6e55cbbb4b14221bb1eee8b20ee5e5c19e03efdfaa77319fc19_prof);

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
