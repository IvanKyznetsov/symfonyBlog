<?php

/* SensioDistributionBundle:Configurator:layout.html.twig */
class __TwigTemplate_8a7ed90cab06c9b4151a4a8e209ceab26ac00ccad5eefb3e1e608e4a1df07df7 extends Twig_Template
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
        $__internal_075f0e72ffee19283a9bd4e11ab4463fe071674cb279fb5204984eb95c015439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_075f0e72ffee19283a9bd4e11ab4463fe071674cb279fb5204984eb95c015439->enter($__internal_075f0e72ffee19283a9bd4e11ab4463fe071674cb279fb5204984eb95c015439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_075f0e72ffee19283a9bd4e11ab4463fe071674cb279fb5204984eb95c015439->leave($__internal_075f0e72ffee19283a9bd4e11ab4463fe071674cb279fb5204984eb95c015439_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bb97fd723b6230e972de54660cc25ebd567a3483f864229c5a7f7b763c0e6dbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb97fd723b6230e972de54660cc25ebd567a3483f864229c5a7f7b763c0e6dbb->enter($__internal_bb97fd723b6230e972de54660cc25ebd567a3483f864229c5a7f7b763c0e6dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_bb97fd723b6230e972de54660cc25ebd567a3483f864229c5a7f7b763c0e6dbb->leave($__internal_bb97fd723b6230e972de54660cc25ebd567a3483f864229c5a7f7b763c0e6dbb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_059a8e469668a6cc6f08adf0ef0dac424263d4661ebb97569bbb9a763a03255c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_059a8e469668a6cc6f08adf0ef0dac424263d4661ebb97569bbb9a763a03255c->enter($__internal_059a8e469668a6cc6f08adf0ef0dac424263d4661ebb97569bbb9a763a03255c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_059a8e469668a6cc6f08adf0ef0dac424263d4661ebb97569bbb9a763a03255c->leave($__internal_059a8e469668a6cc6f08adf0ef0dac424263d4661ebb97569bbb9a763a03255c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b37e4bc6da02d99abbe9ad7d7c1f9519f8b961e81f14e13adb7a30a7b5c07af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b37e4bc6da02d99abbe9ad7d7c1f9519f8b961e81f14e13adb7a30a7b5c07af->enter($__internal_9b37e4bc6da02d99abbe9ad7d7c1f9519f8b961e81f14e13adb7a30a7b5c07af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9b37e4bc6da02d99abbe9ad7d7c1f9519f8b961e81f14e13adb7a30a7b5c07af->leave($__internal_9b37e4bc6da02d99abbe9ad7d7c1f9519f8b961e81f14e13adb7a30a7b5c07af_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_1b60598cd9280dccb9799e76e44cb861cbac072717109ba5a491abeafe231566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b60598cd9280dccb9799e76e44cb861cbac072717109ba5a491abeafe231566->enter($__internal_1b60598cd9280dccb9799e76e44cb861cbac072717109ba5a491abeafe231566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_1b60598cd9280dccb9799e76e44cb861cbac072717109ba5a491abeafe231566->leave($__internal_1b60598cd9280dccb9799e76e44cb861cbac072717109ba5a491abeafe231566_prof);

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
