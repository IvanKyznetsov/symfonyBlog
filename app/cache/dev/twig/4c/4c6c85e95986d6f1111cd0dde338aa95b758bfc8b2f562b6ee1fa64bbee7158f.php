<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_d397a64c06c900e4b4d0d023646865b93439295c9caa6d3714ff5948401ec104 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_1727050ed8dea95c5bf6cc85625cccad0c9d5a8a6ad1fc8237ff725079985cf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1727050ed8dea95c5bf6cc85625cccad0c9d5a8a6ad1fc8237ff725079985cf0->enter($__internal_1727050ed8dea95c5bf6cc85625cccad0c9d5a8a6ad1fc8237ff725079985cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1727050ed8dea95c5bf6cc85625cccad0c9d5a8a6ad1fc8237ff725079985cf0->leave($__internal_1727050ed8dea95c5bf6cc85625cccad0c9d5a8a6ad1fc8237ff725079985cf0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_18f77833de4c4ed5bbea223100c028d1c1aaaa1be7509673a71eaa744fd2a978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f77833de4c4ed5bbea223100c028d1c1aaaa1be7509673a71eaa744fd2a978->enter($__internal_18f77833de4c4ed5bbea223100c028d1c1aaaa1be7509673a71eaa744fd2a978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_18f77833de4c4ed5bbea223100c028d1c1aaaa1be7509673a71eaa744fd2a978->leave($__internal_18f77833de4c4ed5bbea223100c028d1c1aaaa1be7509673a71eaa744fd2a978_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/html/symfonyBlog/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
