<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_865299db341eb6f47502c3be05eb25f4bd341c4708835b57ff7d1f01bf209095 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_9c00fe307ca604ea7081de1b5610d7d5e766269de4bb2bd9611ab1ce8b2676a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c00fe307ca604ea7081de1b5610d7d5e766269de4bb2bd9611ab1ce8b2676a0->enter($__internal_9c00fe307ca604ea7081de1b5610d7d5e766269de4bb2bd9611ab1ce8b2676a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c00fe307ca604ea7081de1b5610d7d5e766269de4bb2bd9611ab1ce8b2676a0->leave($__internal_9c00fe307ca604ea7081de1b5610d7d5e766269de4bb2bd9611ab1ce8b2676a0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ba6c298960115f09d099ca552c062b18f812036317d66b6240f06b5b10b884f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ba6c298960115f09d099ca552c062b18f812036317d66b6240f06b5b10b884f->enter($__internal_8ba6c298960115f09d099ca552c062b18f812036317d66b6240f06b5b10b884f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_8ba6c298960115f09d099ca552c062b18f812036317d66b6240f06b5b10b884f->leave($__internal_8ba6c298960115f09d099ca552c062b18f812036317d66b6240f06b5b10b884f_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a4f2f836b8704272ad1708c5b5c9b82cc8e66055258c20bbb044b1aef3608fba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4f2f836b8704272ad1708c5b5c9b82cc8e66055258c20bbb044b1aef3608fba->enter($__internal_a4f2f836b8704272ad1708c5b5c9b82cc8e66055258c20bbb044b1aef3608fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "        ";
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        
        $__internal_a4f2f836b8704272ad1708c5b5c9b82cc8e66055258c20bbb044b1aef3608fba->leave($__internal_a4f2f836b8704272ad1708c5b5c9b82cc8e66055258c20bbb044b1aef3608fba_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
        {% include \"@FOSUser/Profile/edit_content.html.twig\" %}
    {% endblock fos_user_content %}
{% endblock %}

", "@FOSUser/Profile/edit.html.twig", "/var/www/html/symfonyBlog/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
