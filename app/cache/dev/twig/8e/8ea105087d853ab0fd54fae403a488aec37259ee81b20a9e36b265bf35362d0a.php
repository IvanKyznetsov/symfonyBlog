<?php

/* NelmioApiDocBundle:Components:motd.html.twig */
class __TwigTemplate_33fc0c45d0b3ec6833630fc79826046747ef30db5c5e15104e71332a148087be extends Twig_Template
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
        $__internal_fea7e68b96aa08a8edf444f4c7d4c9cc35f0d13462c59431ac76dbc8350f888b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fea7e68b96aa08a8edf444f4c7d4c9cc35f0d13462c59431ac76dbc8350f888b->enter($__internal_fea7e68b96aa08a8edf444f4c7d4c9cc35f0d13462c59431ac76dbc8350f888b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle:Components:motd.html.twig"));

        // line 1
        echo "<div class=\"motd\"></div>
";
        
        $__internal_fea7e68b96aa08a8edf444f4c7d4c9cc35f0d13462c59431ac76dbc8350f888b->leave($__internal_fea7e68b96aa08a8edf444f4c7d4c9cc35f0d13462c59431ac76dbc8350f888b_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle:Components:motd.html.twig";
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
        return new Twig_Source("<div class=\"motd\"></div>
", "NelmioApiDocBundle:Components:motd.html.twig", "/var/www/html/symfonyBlog/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views/Components/motd.html.twig");
    }
}
