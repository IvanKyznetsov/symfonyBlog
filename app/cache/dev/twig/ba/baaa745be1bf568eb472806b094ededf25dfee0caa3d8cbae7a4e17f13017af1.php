<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_0ce18a901046dcab1714fd18ac984fc933dfac322a3c1fd1a3ec9dc05de4aecd extends Twig_Template
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
        $__internal_8158fcfbc722ded2d7a4a1fbeefe220ce5c57ffdc690f8f04aaaa2107cc49c10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8158fcfbc722ded2d7a4a1fbeefe220ce5c57ffdc690f8f04aaaa2107cc49c10->enter($__internal_8158fcfbc722ded2d7a4a1fbeefe220ce5c57ffdc690f8f04aaaa2107cc49c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8158fcfbc722ded2d7a4a1fbeefe220ce5c57ffdc690f8f04aaaa2107cc49c10->leave($__internal_8158fcfbc722ded2d7a4a1fbeefe220ce5c57ffdc690f8f04aaaa2107cc49c10_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_80d3c0a3709f98dae0c4d394cb82d23d15c473cce9baf9efdb9921e098cb0abe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80d3c0a3709f98dae0c4d394cb82d23d15c473cce9baf9efdb9921e098cb0abe->enter($__internal_80d3c0a3709f98dae0c4d394cb82d23d15c473cce9baf9efdb9921e098cb0abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_80d3c0a3709f98dae0c4d394cb82d23d15c473cce9baf9efdb9921e098cb0abe->leave($__internal_80d3c0a3709f98dae0c4d394cb82d23d15c473cce9baf9efdb9921e098cb0abe_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_372b4be09e607bec01a1bcb6f6277708c315c12fcd19233ff2f443406a50237e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_372b4be09e607bec01a1bcb6f6277708c315c12fcd19233ff2f443406a50237e->enter($__internal_372b4be09e607bec01a1bcb6f6277708c315c12fcd19233ff2f443406a50237e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_372b4be09e607bec01a1bcb6f6277708c315c12fcd19233ff2f443406a50237e->leave($__internal_372b4be09e607bec01a1bcb6f6277708c315c12fcd19233ff2f443406a50237e_prof);

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
