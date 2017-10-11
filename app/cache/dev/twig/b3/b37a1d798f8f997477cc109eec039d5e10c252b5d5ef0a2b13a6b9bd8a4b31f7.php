<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_3bc3f77865d3bdaafaf1ba7ef75d96f0488264133849e6be61f58bad291b12f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7ba3ec541ec45e691b60b4d50d47826492cf09e9044147b76005d97a01cbbbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ba3ec541ec45e691b60b4d50d47826492cf09e9044147b76005d97a01cbbbe->enter($__internal_e7ba3ec541ec45e691b60b4d50d47826492cf09e9044147b76005d97a01cbbbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_e7ba3ec541ec45e691b60b4d50d47826492cf09e9044147b76005d97a01cbbbe->leave($__internal_e7ba3ec541ec45e691b60b4d50d47826492cf09e9044147b76005d97a01cbbbe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
