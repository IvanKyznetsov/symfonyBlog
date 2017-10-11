<?php

/* NelmioApiDocBundle::Components/motd.html.twig */
class __TwigTemplate_4797df2bb3f1c3da6a846acd05f4d843eaa880d60601475c98d8767c990d745e extends Twig_Template
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
        $__internal_3c890ab39a367ef36d23fa240c6ef0c6205dd6d9bbef3e654adef06bdcc2dc34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c890ab39a367ef36d23fa240c6ef0c6205dd6d9bbef3e654adef06bdcc2dc34->enter($__internal_3c890ab39a367ef36d23fa240c6ef0c6205dd6d9bbef3e654adef06bdcc2dc34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::Components/motd.html.twig"));

        // line 1
        echo "<div class=\"motd\"></div>
";
        
        $__internal_3c890ab39a367ef36d23fa240c6ef0c6205dd6d9bbef3e654adef06bdcc2dc34->leave($__internal_3c890ab39a367ef36d23fa240c6ef0c6205dd6d9bbef3e654adef06bdcc2dc34_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::Components/motd.html.twig";
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
", "NelmioApiDocBundle::Components/motd.html.twig", "/var/www/html/symfonyBlog/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views/Components/motd.html.twig");
    }
}
