<?php

/* SensioDistributionBundle:Configurator:layout.html.twig */
class __TwigTemplate_3dcff0c385aa225de58fd685df1ce6a7d5cabc958ee74fe98826f4c090e31dfc extends Twig_Template
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
        $__internal_b90b81f03eab4e243aec38724959626a814f72d2581d08788c634642b486a28d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b90b81f03eab4e243aec38724959626a814f72d2581d08788c634642b486a28d->enter($__internal_b90b81f03eab4e243aec38724959626a814f72d2581d08788c634642b486a28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b90b81f03eab4e243aec38724959626a814f72d2581d08788c634642b486a28d->leave($__internal_b90b81f03eab4e243aec38724959626a814f72d2581d08788c634642b486a28d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_550ee25a0dd55ccc2782aa1ebeda842d2c337806a572291734e5620750225558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_550ee25a0dd55ccc2782aa1ebeda842d2c337806a572291734e5620750225558->enter($__internal_550ee25a0dd55ccc2782aa1ebeda842d2c337806a572291734e5620750225558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_550ee25a0dd55ccc2782aa1ebeda842d2c337806a572291734e5620750225558->leave($__internal_550ee25a0dd55ccc2782aa1ebeda842d2c337806a572291734e5620750225558_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1629c3ad829c6bdbaf050e9e3282c318d31fc5db2a1da155899241337739b51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1629c3ad829c6bdbaf050e9e3282c318d31fc5db2a1da155899241337739b51->enter($__internal_b1629c3ad829c6bdbaf050e9e3282c318d31fc5db2a1da155899241337739b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_b1629c3ad829c6bdbaf050e9e3282c318d31fc5db2a1da155899241337739b51->leave($__internal_b1629c3ad829c6bdbaf050e9e3282c318d31fc5db2a1da155899241337739b51_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_86fbff1ca7ac58c392bb4f999f851a93505b25e1a1739072fc2d871a59f38c72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86fbff1ca7ac58c392bb4f999f851a93505b25e1a1739072fc2d871a59f38c72->enter($__internal_86fbff1ca7ac58c392bb4f999f851a93505b25e1a1739072fc2d871a59f38c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_86fbff1ca7ac58c392bb4f999f851a93505b25e1a1739072fc2d871a59f38c72->leave($__internal_86fbff1ca7ac58c392bb4f999f851a93505b25e1a1739072fc2d871a59f38c72_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_4b326dacdb8b6cccc4c553f4e7d091a5d45b41194afa1c7fea27d2faf2501aa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b326dacdb8b6cccc4c553f4e7d091a5d45b41194afa1c7fea27d2faf2501aa0->enter($__internal_4b326dacdb8b6cccc4c553f4e7d091a5d45b41194afa1c7fea27d2faf2501aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_4b326dacdb8b6cccc4c553f4e7d091a5d45b41194afa1c7fea27d2faf2501aa0->leave($__internal_4b326dacdb8b6cccc4c553f4e7d091a5d45b41194afa1c7fea27d2faf2501aa0_prof);

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
