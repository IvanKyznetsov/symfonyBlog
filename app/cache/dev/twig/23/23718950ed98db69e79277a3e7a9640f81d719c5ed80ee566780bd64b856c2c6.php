<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_5d48b7fa02f7bd2482128073706f774959cef53a0fe812503aa6ca0b6a773b72 extends Twig_Template
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
        $__internal_c7951f9bedaabd123dbd91ae5eb89f7c0b8f4458a768c577dcf9fac3c0bcf8d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7951f9bedaabd123dbd91ae5eb89f7c0b8f4458a768c577dcf9fac3c0bcf8d2->enter($__internal_c7951f9bedaabd123dbd91ae5eb89f7c0b8f4458a768c577dcf9fac3c0bcf8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c7951f9bedaabd123dbd91ae5eb89f7c0b8f4458a768c577dcf9fac3c0bcf8d2->leave($__internal_c7951f9bedaabd123dbd91ae5eb89f7c0b8f4458a768c577dcf9fac3c0bcf8d2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
