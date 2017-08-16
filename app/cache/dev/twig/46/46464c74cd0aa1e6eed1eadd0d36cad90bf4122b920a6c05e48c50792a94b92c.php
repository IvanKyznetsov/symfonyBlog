<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_1d0aac1fd94a7c68d9d9bccafed2c93ec9799f36b276ece139aa2554def0983e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_698f87aeb68e036295425cb45a8680efe869fd893157e6a72f4896bd4a3bdb9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_698f87aeb68e036295425cb45a8680efe869fd893157e6a72f4896bd4a3bdb9f->enter($__internal_698f87aeb68e036295425cb45a8680efe869fd893157e6a72f4896bd4a3bdb9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_698f87aeb68e036295425cb45a8680efe869fd893157e6a72f4896bd4a3bdb9f->leave($__internal_698f87aeb68e036295425cb45a8680efe869fd893157e6a72f4896bd4a3bdb9f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2bf72e844cffbc088d0b1cf4e5d8d8e67fe83fbc776539ec56e242d4b7fc9ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bf72e844cffbc088d0b1cf4e5d8d8e67fe83fbc776539ec56e242d4b7fc9ae5->enter($__internal_2bf72e844cffbc088d0b1cf4e5d8d8e67fe83fbc776539ec56e242d4b7fc9ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_2bf72e844cffbc088d0b1cf4e5d8d8e67fe83fbc776539ec56e242d4b7fc9ae5->leave($__internal_2bf72e844cffbc088d0b1cf4e5d8d8e67fe83fbc776539ec56e242d4b7fc9ae5_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1c29198caebe1760d7386bfa3cf662f60b44a5fd4e7dc6f9bb9835de573a8e39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c29198caebe1760d7386bfa3cf662f60b44a5fd4e7dc6f9bb9835de573a8e39->enter($__internal_1c29198caebe1760d7386bfa3cf662f60b44a5fd4e7dc6f9bb9835de573a8e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "        ";
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        
        $__internal_1c29198caebe1760d7386bfa3cf662f60b44a5fd4e7dc6f9bb9835de573a8e39->leave($__internal_1c29198caebe1760d7386bfa3cf662f60b44a5fd4e7dc6f9bb9835de573a8e39_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
        {% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
    {% endblock fos_user_content %}
{% endblock %}

", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/html/symfonyBlog/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
