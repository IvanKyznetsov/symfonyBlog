<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a8d26e4d2fecc5b12add7b816f14b0713a4814839453cea7819fcfc54cd69b87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_324216cfdef501cc35905a6305b45d6133f4ae1dc76e2785455436e73c045ae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_324216cfdef501cc35905a6305b45d6133f4ae1dc76e2785455436e73c045ae2->enter($__internal_324216cfdef501cc35905a6305b45d6133f4ae1dc76e2785455436e73c045ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_324216cfdef501cc35905a6305b45d6133f4ae1dc76e2785455436e73c045ae2->leave($__internal_324216cfdef501cc35905a6305b45d6133f4ae1dc76e2785455436e73c045ae2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_224997d10513839101128fc3f67ea521609a3804604a8385eded10b510b35a6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_224997d10513839101128fc3f67ea521609a3804604a8385eded10b510b35a6a->enter($__internal_224997d10513839101128fc3f67ea521609a3804604a8385eded10b510b35a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_224997d10513839101128fc3f67ea521609a3804604a8385eded10b510b35a6a->leave($__internal_224997d10513839101128fc3f67ea521609a3804604a8385eded10b510b35a6a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_33f5e414358e63ee445f3f7dd55c2f0ca33bd5e6e910bd390532fba7ec4b3527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f5e414358e63ee445f3f7dd55c2f0ca33bd5e6e910bd390532fba7ec4b3527->enter($__internal_33f5e414358e63ee445f3f7dd55c2f0ca33bd5e6e910bd390532fba7ec4b3527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_33f5e414358e63ee445f3f7dd55c2f0ca33bd5e6e910bd390532fba7ec4b3527->leave($__internal_33f5e414358e63ee445f3f7dd55c2f0ca33bd5e6e910bd390532fba7ec4b3527_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b49640e9de0e72aa94232f3341a02e80b6bfa52d2d573d289f576e17622082af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b49640e9de0e72aa94232f3341a02e80b6bfa52d2d573d289f576e17622082af->enter($__internal_b49640e9de0e72aa94232f3341a02e80b6bfa52d2d573d289f576e17622082af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b49640e9de0e72aa94232f3341a02e80b6bfa52d2d573d289f576e17622082af->leave($__internal_b49640e9de0e72aa94232f3341a02e80b6bfa52d2d573d289f576e17622082af_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
