<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_42bb5fd65848a8493f4de9df513f58b8125f9e25b0825814ee655750ca554bb0 extends Twig_Template
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
        $__internal_d9a73a18cafd991335e604da03a737ec670f36616463a2e5dcb2793231ad18fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9a73a18cafd991335e604da03a737ec670f36616463a2e5dcb2793231ad18fe->enter($__internal_d9a73a18cafd991335e604da03a737ec670f36616463a2e5dcb2793231ad18fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9a73a18cafd991335e604da03a737ec670f36616463a2e5dcb2793231ad18fe->leave($__internal_d9a73a18cafd991335e604da03a737ec670f36616463a2e5dcb2793231ad18fe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5cdb13f0b1e7412d21466dc17b2729de96e94950df30ba169d43163f596d276a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cdb13f0b1e7412d21466dc17b2729de96e94950df30ba169d43163f596d276a->enter($__internal_5cdb13f0b1e7412d21466dc17b2729de96e94950df30ba169d43163f596d276a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5cdb13f0b1e7412d21466dc17b2729de96e94950df30ba169d43163f596d276a->leave($__internal_5cdb13f0b1e7412d21466dc17b2729de96e94950df30ba169d43163f596d276a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_89206d56c40105858d6178140c82eb3fbcfb6b2eb85c3c49d594eca40d1f699f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89206d56c40105858d6178140c82eb3fbcfb6b2eb85c3c49d594eca40d1f699f->enter($__internal_89206d56c40105858d6178140c82eb3fbcfb6b2eb85c3c49d594eca40d1f699f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_89206d56c40105858d6178140c82eb3fbcfb6b2eb85c3c49d594eca40d1f699f->leave($__internal_89206d56c40105858d6178140c82eb3fbcfb6b2eb85c3c49d594eca40d1f699f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c4e9ea0aa52ff11a737fd470ff8b52c50cbd788595ad0b6f6411bf0e1492248d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4e9ea0aa52ff11a737fd470ff8b52c50cbd788595ad0b6f6411bf0e1492248d->enter($__internal_c4e9ea0aa52ff11a737fd470ff8b52c50cbd788595ad0b6f6411bf0e1492248d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c4e9ea0aa52ff11a737fd470ff8b52c50cbd788595ad0b6f6411bf0e1492248d->leave($__internal_c4e9ea0aa52ff11a737fd470ff8b52c50cbd788595ad0b6f6411bf0e1492248d_prof);

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
