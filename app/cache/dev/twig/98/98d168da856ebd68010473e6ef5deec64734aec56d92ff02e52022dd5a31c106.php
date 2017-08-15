<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_63a04473bc9b4233d88f2bbc7c34c0398318c032e2a027e7cf9009b5d021ea82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54a93e9ed379cd5f96864ce9215e6d7ad648e368173027089ff5ba3cd1098210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54a93e9ed379cd5f96864ce9215e6d7ad648e368173027089ff5ba3cd1098210->enter($__internal_54a93e9ed379cd5f96864ce9215e6d7ad648e368173027089ff5ba3cd1098210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54a93e9ed379cd5f96864ce9215e6d7ad648e368173027089ff5ba3cd1098210->leave($__internal_54a93e9ed379cd5f96864ce9215e6d7ad648e368173027089ff5ba3cd1098210_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4afddd7ae6a7d63836537eae334c08f8307e1c9ac3ed9794bf7fd0a39992fd13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4afddd7ae6a7d63836537eae334c08f8307e1c9ac3ed9794bf7fd0a39992fd13->enter($__internal_4afddd7ae6a7d63836537eae334c08f8307e1c9ac3ed9794bf7fd0a39992fd13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_4afddd7ae6a7d63836537eae334c08f8307e1c9ac3ed9794bf7fd0a39992fd13->leave($__internal_4afddd7ae6a7d63836537eae334c08f8307e1c9ac3ed9794bf7fd0a39992fd13_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c71413c83c3ce0f6b1700036641e4e2901c609a9a3a74be522ceeeaf8cffc09f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c71413c83c3ce0f6b1700036641e4e2901c609a9a3a74be522ceeeaf8cffc09f->enter($__internal_c71413c83c3ce0f6b1700036641e4e2901c609a9a3a74be522ceeeaf8cffc09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "        ";
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        
        $__internal_c71413c83c3ce0f6b1700036641e4e2901c609a9a3a74be522ceeeaf8cffc09f->leave($__internal_c71413c83c3ce0f6b1700036641e4e2901c609a9a3a74be522ceeeaf8cffc09f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 6,  54 => 5,  41 => 4,  35 => 3,  11 => 1,);
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

{% block body %}
    {% block fos_user_content %}
        {% include \"@FOSUser/Resetting/request_content.html.twig\" %}
    {% endblock fos_user_content %}
{% endblock %}
", "@FOSUser/Resetting/request.html.twig", "/var/www/html/symfonyBlog/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
