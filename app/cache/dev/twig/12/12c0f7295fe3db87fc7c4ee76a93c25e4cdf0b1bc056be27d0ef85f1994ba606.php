<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_82e6e672261bdc3670cb0a412ceac28cc116a47c3227e62c93bda229592cefe3 extends Twig_Template
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
        $__internal_aab8c7f8c02b48cd4c7172529b91fe69002da3240812b58c86d26227ca714f3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aab8c7f8c02b48cd4c7172529b91fe69002da3240812b58c86d26227ca714f3d->enter($__internal_aab8c7f8c02b48cd4c7172529b91fe69002da3240812b58c86d26227ca714f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aab8c7f8c02b48cd4c7172529b91fe69002da3240812b58c86d26227ca714f3d->leave($__internal_aab8c7f8c02b48cd4c7172529b91fe69002da3240812b58c86d26227ca714f3d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eb78237a200fdff1e8cb6e738528d5ad3d03e27b087cd0f57c4e52970e17ac49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb78237a200fdff1e8cb6e738528d5ad3d03e27b087cd0f57c4e52970e17ac49->enter($__internal_eb78237a200fdff1e8cb6e738528d5ad3d03e27b087cd0f57c4e52970e17ac49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_eb78237a200fdff1e8cb6e738528d5ad3d03e27b087cd0f57c4e52970e17ac49->leave($__internal_eb78237a200fdff1e8cb6e738528d5ad3d03e27b087cd0f57c4e52970e17ac49_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_32f843de76cf30571cf4865ce1c719ab1143523e445eb61939637369776f2ce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32f843de76cf30571cf4865ce1c719ab1143523e445eb61939637369776f2ce2->enter($__internal_32f843de76cf30571cf4865ce1c719ab1143523e445eb61939637369776f2ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_32f843de76cf30571cf4865ce1c719ab1143523e445eb61939637369776f2ce2->leave($__internal_32f843de76cf30571cf4865ce1c719ab1143523e445eb61939637369776f2ce2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_08ae0c6aa51f3f3f3c19464db9097338f20eacee96bf386153c2fb165cae15b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08ae0c6aa51f3f3f3c19464db9097338f20eacee96bf386153c2fb165cae15b1->enter($__internal_08ae0c6aa51f3f3f3c19464db9097338f20eacee96bf386153c2fb165cae15b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_08ae0c6aa51f3f3f3c19464db9097338f20eacee96bf386153c2fb165cae15b1->leave($__internal_08ae0c6aa51f3f3f3c19464db9097338f20eacee96bf386153c2fb165cae15b1_prof);

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
