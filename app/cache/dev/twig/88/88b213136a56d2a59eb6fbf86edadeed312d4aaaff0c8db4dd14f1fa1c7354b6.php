<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_826c14e49bc87b66856a7029d2706d392d3dc363f7c3aeb62b7001233001ba85 extends Twig_Template
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
        $__internal_0905d93ee193602ce5052b37989e9c377c34391f0d2edbfa245a577abf98d952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0905d93ee193602ce5052b37989e9c377c34391f0d2edbfa245a577abf98d952->enter($__internal_0905d93ee193602ce5052b37989e9c377c34391f0d2edbfa245a577abf98d952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_0905d93ee193602ce5052b37989e9c377c34391f0d2edbfa245a577abf98d952->leave($__internal_0905d93ee193602ce5052b37989e9c377c34391f0d2edbfa245a577abf98d952_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
