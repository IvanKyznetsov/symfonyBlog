<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_3fc15a6b5dd549f27af3f30a93f3d9dba50b33dece0c97dda9125aaf779f3369 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9b90f932758264073ff9e9fc0a1f076fa7eb3d3961dfc2bcff844008bc669b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9b90f932758264073ff9e9fc0a1f076fa7eb3d3961dfc2bcff844008bc669b9->enter($__internal_f9b90f932758264073ff9e9fc0a1f076fa7eb3d3961dfc2bcff844008bc669b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9b90f932758264073ff9e9fc0a1f076fa7eb3d3961dfc2bcff844008bc669b9->leave($__internal_f9b90f932758264073ff9e9fc0a1f076fa7eb3d3961dfc2bcff844008bc669b9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0b075fa889e9eb1c6121c8b45afbbf424e2a8b07953d5cd6b6fdaf7375103efb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b075fa889e9eb1c6121c8b45afbbf424e2a8b07953d5cd6b6fdaf7375103efb->enter($__internal_0b075fa889e9eb1c6121c8b45afbbf424e2a8b07953d5cd6b6fdaf7375103efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_0b075fa889e9eb1c6121c8b45afbbf424e2a8b07953d5cd6b6fdaf7375103efb->leave($__internal_0b075fa889e9eb1c6121c8b45afbbf424e2a8b07953d5cd6b6fdaf7375103efb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/var/www/html/symfonyBlog/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
