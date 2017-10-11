<?php

/* SensioDistributionBundle:Configurator:layout.html.twig */
class __TwigTemplate_74d2f03971d97851aa5f0cc78e580b1fc2ac72c9fba5dcf3a932d41a136cd584 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle:Configurator:layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_939731ceac41ef55f70d42c28d32ec7306797212d25953e67cef0811d4c7a395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_939731ceac41ef55f70d42c28d32ec7306797212d25953e67cef0811d4c7a395->enter($__internal_939731ceac41ef55f70d42c28d32ec7306797212d25953e67cef0811d4c7a395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_939731ceac41ef55f70d42c28d32ec7306797212d25953e67cef0811d4c7a395->leave($__internal_939731ceac41ef55f70d42c28d32ec7306797212d25953e67cef0811d4c7a395_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0f4adb18e9f1e48f27aa4c7915d07fd9d1b5522b954c658b48e202be9dc431aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f4adb18e9f1e48f27aa4c7915d07fd9d1b5522b954c658b48e202be9dc431aa->enter($__internal_0f4adb18e9f1e48f27aa4c7915d07fd9d1b5522b954c658b48e202be9dc431aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_0f4adb18e9f1e48f27aa4c7915d07fd9d1b5522b954c658b48e202be9dc431aa->leave($__internal_0f4adb18e9f1e48f27aa4c7915d07fd9d1b5522b954c658b48e202be9dc431aa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2fc9a203b1e5e95983dfc8101d189bda8b6c97fd7a4cae0b81719bb297fe90f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2fc9a203b1e5e95983dfc8101d189bda8b6c97fd7a4cae0b81719bb297fe90f->enter($__internal_a2fc9a203b1e5e95983dfc8101d189bda8b6c97fd7a4cae0b81719bb297fe90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_a2fc9a203b1e5e95983dfc8101d189bda8b6c97fd7a4cae0b81719bb297fe90f->leave($__internal_a2fc9a203b1e5e95983dfc8101d189bda8b6c97fd7a4cae0b81719bb297fe90f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fd01bb4702450eff4fc95944c81ac2cb5ecc11374eb544bfe893513d3c121bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fd01bb4702450eff4fc95944c81ac2cb5ecc11374eb544bfe893513d3c121bd->enter($__internal_2fd01bb4702450eff4fc95944c81ac2cb5ecc11374eb544bfe893513d3c121bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_2fd01bb4702450eff4fc95944c81ac2cb5ecc11374eb544bfe893513d3c121bd->leave($__internal_2fd01bb4702450eff4fc95944c81ac2cb5ecc11374eb544bfe893513d3c121bd_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_b9b75f07e58acdbb3efaf2385424b4dfef4975110281ba20993a08512c6406ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b75f07e58acdbb3efaf2385424b4dfef4975110281ba20993a08512c6406ff->enter($__internal_b9b75f07e58acdbb3efaf2385424b4dfef4975110281ba20993a08512c6406ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_b9b75f07e58acdbb3efaf2385424b4dfef4975110281ba20993a08512c6406ff->leave($__internal_b9b75f07e58acdbb3efaf2385424b4dfef4975110281ba20993a08512c6406ff_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle:Configurator:layout.html.twig", "/var/www/html/symfonyBlog/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
