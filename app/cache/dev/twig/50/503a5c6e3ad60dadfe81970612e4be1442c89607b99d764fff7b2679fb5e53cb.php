<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_a8ed47b1c6886f2240126d155a1e4f7c276c52631ff98c10c7acd4f6ff73d388 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_a3eb01fe653be2fb09868ba0315f77da28cf3c319fff7b1e6cff28927fae6c9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3eb01fe653be2fb09868ba0315f77da28cf3c319fff7b1e6cff28927fae6c9f->enter($__internal_a3eb01fe653be2fb09868ba0315f77da28cf3c319fff7b1e6cff28927fae6c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3eb01fe653be2fb09868ba0315f77da28cf3c319fff7b1e6cff28927fae6c9f->leave($__internal_a3eb01fe653be2fb09868ba0315f77da28cf3c319fff7b1e6cff28927fae6c9f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bdf9f3687b6f8a371bde0f4dc11f3ea4166359a51ae6a32fc1a81300afd768b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdf9f3687b6f8a371bde0f4dc11f3ea4166359a51ae6a32fc1a81300afd768b7->enter($__internal_bdf9f3687b6f8a371bde0f4dc11f3ea4166359a51ae6a32fc1a81300afd768b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_bdf9f3687b6f8a371bde0f4dc11f3ea4166359a51ae6a32fc1a81300afd768b7->leave($__internal_bdf9f3687b6f8a371bde0f4dc11f3ea4166359a51ae6a32fc1a81300afd768b7_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2e86f96cb95cc5b1d7605f69fd9d7c6977f7b14a17936c866d493256a4826c88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e86f96cb95cc5b1d7605f69fd9d7c6977f7b14a17936c866d493256a4826c88->enter($__internal_2e86f96cb95cc5b1d7605f69fd9d7c6977f7b14a17936c866d493256a4826c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "        ";
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        
        $__internal_2e86f96cb95cc5b1d7605f69fd9d7c6977f7b14a17936c866d493256a4826c88->leave($__internal_2e86f96cb95cc5b1d7605f69fd9d7c6977f7b14a17936c866d493256a4826c88_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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

", "FOSUserBundle:Profile:edit.html.twig", "/var/www/html/symfonyBlog/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
