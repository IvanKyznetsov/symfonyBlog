<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fab6d579105162b77b78b86e49bc939ba19f57c2b57c3708995d07102bc99002 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_479c0c6d68940346ff2198af0546bc09d1fc31b047b8df6c3f84c8fbea910e58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_479c0c6d68940346ff2198af0546bc09d1fc31b047b8df6c3f84c8fbea910e58->enter($__internal_479c0c6d68940346ff2198af0546bc09d1fc31b047b8df6c3f84c8fbea910e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_479c0c6d68940346ff2198af0546bc09d1fc31b047b8df6c3f84c8fbea910e58->leave($__internal_479c0c6d68940346ff2198af0546bc09d1fc31b047b8df6c3f84c8fbea910e58_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3bb5073644beca557bb855ec7eeae528aadd034815d89e64a097708cbadd5bff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bb5073644beca557bb855ec7eeae528aadd034815d89e64a097708cbadd5bff->enter($__internal_3bb5073644beca557bb855ec7eeae528aadd034815d89e64a097708cbadd5bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3bb5073644beca557bb855ec7eeae528aadd034815d89e64a097708cbadd5bff->leave($__internal_3bb5073644beca557bb855ec7eeae528aadd034815d89e64a097708cbadd5bff_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_46ec42b6e743ab62cbbf23f447fa6557e4ee10e1073de00d4fca3010c0e4ab15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46ec42b6e743ab62cbbf23f447fa6557e4ee10e1073de00d4fca3010c0e4ab15->enter($__internal_46ec42b6e743ab62cbbf23f447fa6557e4ee10e1073de00d4fca3010c0e4ab15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_46ec42b6e743ab62cbbf23f447fa6557e4ee10e1073de00d4fca3010c0e4ab15->leave($__internal_46ec42b6e743ab62cbbf23f447fa6557e4ee10e1073de00d4fca3010c0e4ab15_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_34147cec08d155d248be541c23692d43ff4c0f9991d8abd1d9ab86b597d4c503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34147cec08d155d248be541c23692d43ff4c0f9991d8abd1d9ab86b597d4c503->enter($__internal_34147cec08d155d248be541c23692d43ff4c0f9991d8abd1d9ab86b597d4c503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_34147cec08d155d248be541c23692d43ff4c0f9991d8abd1d9ab86b597d4c503->leave($__internal_34147cec08d155d248be541c23692d43ff4c0f9991d8abd1d9ab86b597d4c503_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
