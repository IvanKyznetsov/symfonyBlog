<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_808aa021cdeb720ead0985da3a66b20fff26b554b995c43161c050af8cb68f4b extends Twig_Template
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
        $__internal_25518128cdd42bb3432693b85a57c1e48274cd507a7e5146315c4f3a5ad5ba2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25518128cdd42bb3432693b85a57c1e48274cd507a7e5146315c4f3a5ad5ba2c->enter($__internal_25518128cdd42bb3432693b85a57c1e48274cd507a7e5146315c4f3a5ad5ba2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_25518128cdd42bb3432693b85a57c1e48274cd507a7e5146315c4f3a5ad5ba2c->leave($__internal_25518128cdd42bb3432693b85a57c1e48274cd507a7e5146315c4f3a5ad5ba2c_prof);

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
