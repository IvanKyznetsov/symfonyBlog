<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_beeb4446eb9e958e77e4ee3b12b5d7b8f740c4a743743d26e5fc7b6738da3239 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_25a0c9acc06edcd2f2775047baccb2a036508a6fde988c39960933b45d89628c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a0c9acc06edcd2f2775047baccb2a036508a6fde988c39960933b45d89628c->enter($__internal_25a0c9acc06edcd2f2775047baccb2a036508a6fde988c39960933b45d89628c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25a0c9acc06edcd2f2775047baccb2a036508a6fde988c39960933b45d89628c->leave($__internal_25a0c9acc06edcd2f2775047baccb2a036508a6fde988c39960933b45d89628c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9050da8b4b7036b2ae11179bafc2ae57cb615026ccaed1f9ba7c29d582701810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9050da8b4b7036b2ae11179bafc2ae57cb615026ccaed1f9ba7c29d582701810->enter($__internal_9050da8b4b7036b2ae11179bafc2ae57cb615026ccaed1f9ba7c29d582701810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9050da8b4b7036b2ae11179bafc2ae57cb615026ccaed1f9ba7c29d582701810->leave($__internal_9050da8b4b7036b2ae11179bafc2ae57cb615026ccaed1f9ba7c29d582701810_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a4972370e332c08d2bd8f3361756aa84fde740c472dd125e0b90617e013d4ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4972370e332c08d2bd8f3361756aa84fde740c472dd125e0b90617e013d4ee5->enter($__internal_a4972370e332c08d2bd8f3361756aa84fde740c472dd125e0b90617e013d4ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a4972370e332c08d2bd8f3361756aa84fde740c472dd125e0b90617e013d4ee5->leave($__internal_a4972370e332c08d2bd8f3361756aa84fde740c472dd125e0b90617e013d4ee5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a31c7661e53c21bb8ba77125f7fa212a820fa4c20ab746aa51abdc0b0f615cd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a31c7661e53c21bb8ba77125f7fa212a820fa4c20ab746aa51abdc0b0f615cd1->enter($__internal_a31c7661e53c21bb8ba77125f7fa212a820fa4c20ab746aa51abdc0b0f615cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a31c7661e53c21bb8ba77125f7fa212a820fa4c20ab746aa51abdc0b0f615cd1->leave($__internal_a31c7661e53c21bb8ba77125f7fa212a820fa4c20ab746aa51abdc0b0f615cd1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
