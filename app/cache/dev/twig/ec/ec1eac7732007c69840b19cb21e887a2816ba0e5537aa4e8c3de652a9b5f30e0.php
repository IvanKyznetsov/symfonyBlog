<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_79c4790e1342a28f2b6a385d743baca3f91aeb6a1f892b70e33ba02f3158564c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_8f448d20e94803b2839c825ce6155cbf594d84b7be47164b4cb680a098fffc19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f448d20e94803b2839c825ce6155cbf594d84b7be47164b4cb680a098fffc19->enter($__internal_8f448d20e94803b2839c825ce6155cbf594d84b7be47164b4cb680a098fffc19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f448d20e94803b2839c825ce6155cbf594d84b7be47164b4cb680a098fffc19->leave($__internal_8f448d20e94803b2839c825ce6155cbf594d84b7be47164b4cb680a098fffc19_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fa54b26d6b6ad2c908d161b785f3449077af34c87341cacb08b9512268aabea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fa54b26d6b6ad2c908d161b785f3449077af34c87341cacb08b9512268aabea->enter($__internal_0fa54b26d6b6ad2c908d161b785f3449077af34c87341cacb08b9512268aabea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_0fa54b26d6b6ad2c908d161b785f3449077af34c87341cacb08b9512268aabea->leave($__internal_0fa54b26d6b6ad2c908d161b785f3449077af34c87341cacb08b9512268aabea_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4c87854d7cb203aa4a86c7b621298529ac0591b90e9dcc1d251a70bdc6b4e291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c87854d7cb203aa4a86c7b621298529ac0591b90e9dcc1d251a70bdc6b4e291->enter($__internal_4c87854d7cb203aa4a86c7b621298529ac0591b90e9dcc1d251a70bdc6b4e291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "        ";
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        
        $__internal_4c87854d7cb203aa4a86c7b621298529ac0591b90e9dcc1d251a70bdc6b4e291->leave($__internal_4c87854d7cb203aa4a86c7b621298529ac0591b90e9dcc1d251a70bdc6b4e291_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
        {% include \"@FOSUser/Group/list_content.html.twig\" %}
    {% endblock fos_user_content %}
{% endblock %}

", "FOSUserBundle:Group:list.html.twig", "/var/www/html/symfonyBlog/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
