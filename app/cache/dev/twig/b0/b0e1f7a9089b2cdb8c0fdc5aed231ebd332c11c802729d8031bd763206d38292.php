<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_f3e8da10893dfb54a9c9e8d946c3eb6b98eafae75e759c9aa2fdc0cb149a1105 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_eb72e895e13aa45bad60dd86e4635e5fa24af807499edcf5cd4b6ec7cca6e1cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb72e895e13aa45bad60dd86e4635e5fa24af807499edcf5cd4b6ec7cca6e1cd->enter($__internal_eb72e895e13aa45bad60dd86e4635e5fa24af807499edcf5cd4b6ec7cca6e1cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb72e895e13aa45bad60dd86e4635e5fa24af807499edcf5cd4b6ec7cca6e1cd->leave($__internal_eb72e895e13aa45bad60dd86e4635e5fa24af807499edcf5cd4b6ec7cca6e1cd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_427b706f47c21d699ae6489e516dcd7695e4fbae12411a2463ddec41b659c56c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_427b706f47c21d699ae6489e516dcd7695e4fbae12411a2463ddec41b659c56c->enter($__internal_427b706f47c21d699ae6489e516dcd7695e4fbae12411a2463ddec41b659c56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_427b706f47c21d699ae6489e516dcd7695e4fbae12411a2463ddec41b659c56c->leave($__internal_427b706f47c21d699ae6489e516dcd7695e4fbae12411a2463ddec41b659c56c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d488105ef2374d3f842d244c59a69f1e465605e0f57491758c22dba07423edd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d488105ef2374d3f842d244c59a69f1e465605e0f57491758c22dba07423edd4->enter($__internal_d488105ef2374d3f842d244c59a69f1e465605e0f57491758c22dba07423edd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_d488105ef2374d3f842d244c59a69f1e465605e0f57491758c22dba07423edd4->leave($__internal_d488105ef2374d3f842d244c59a69f1e465605e0f57491758c22dba07423edd4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
