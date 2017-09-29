<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_32ffba5ce546270853fbe131c9c97ced82742045b4c791604233f1241fa3e3bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_79de90efcda9230b563e70a799484f4d95afe7ea467c4591a4a502b9aba8acb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79de90efcda9230b563e70a799484f4d95afe7ea467c4591a4a502b9aba8acb0->enter($__internal_79de90efcda9230b563e70a799484f4d95afe7ea467c4591a4a502b9aba8acb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79de90efcda9230b563e70a799484f4d95afe7ea467c4591a4a502b9aba8acb0->leave($__internal_79de90efcda9230b563e70a799484f4d95afe7ea467c4591a4a502b9aba8acb0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2bc19b497f6162fbdcda79455690f014f79e4b8dcda6a21c75a1b98fb171eca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2bc19b497f6162fbdcda79455690f014f79e4b8dcda6a21c75a1b98fb171eca->enter($__internal_e2bc19b497f6162fbdcda79455690f014f79e4b8dcda6a21c75a1b98fb171eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_e2bc19b497f6162fbdcda79455690f014f79e4b8dcda6a21c75a1b98fb171eca->leave($__internal_e2bc19b497f6162fbdcda79455690f014f79e4b8dcda6a21c75a1b98fb171eca_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5d969eae0a4e919c82b10488d9d8d5fbe3e58424646e16d29f65157d97969073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d969eae0a4e919c82b10488d9d8d5fbe3e58424646e16d29f65157d97969073->enter($__internal_5d969eae0a4e919c82b10488d9d8d5fbe3e58424646e16d29f65157d97969073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "        ";
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        
        $__internal_5d969eae0a4e919c82b10488d9d8d5fbe3e58424646e16d29f65157d97969073->leave($__internal_5d969eae0a4e919c82b10488d9d8d5fbe3e58424646e16d29f65157d97969073_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
        {% include \"@FOSUser/Profile/show_content.html.twig\" %}
    {% endblock fos_user_content %}
{% endblock %}

", "@FOSUser/Profile/show.html.twig", "/var/www/html/symfonyBlog/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
