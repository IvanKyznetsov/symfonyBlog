<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_e4ed4611a00e096279ef8bf8093a5dae4b4adc8fbb9f5005875f164d5a6cd402 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_54131c6020e51bcf54b9fa6081182fc92f7ea8348fa58773c8b2e382f57d7cd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54131c6020e51bcf54b9fa6081182fc92f7ea8348fa58773c8b2e382f57d7cd1->enter($__internal_54131c6020e51bcf54b9fa6081182fc92f7ea8348fa58773c8b2e382f57d7cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54131c6020e51bcf54b9fa6081182fc92f7ea8348fa58773c8b2e382f57d7cd1->leave($__internal_54131c6020e51bcf54b9fa6081182fc92f7ea8348fa58773c8b2e382f57d7cd1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2928d1ab614aefc7196c693d09988d7d08a6a1b9ab43f8789f6723f6ed08f203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2928d1ab614aefc7196c693d09988d7d08a6a1b9ab43f8789f6723f6ed08f203->enter($__internal_2928d1ab614aefc7196c693d09988d7d08a6a1b9ab43f8789f6723f6ed08f203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_2928d1ab614aefc7196c693d09988d7d08a6a1b9ab43f8789f6723f6ed08f203->leave($__internal_2928d1ab614aefc7196c693d09988d7d08a6a1b9ab43f8789f6723f6ed08f203_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0815a85a4c132c1dbae783cc7f271cb516d3d82e57766dff48423a655802be1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0815a85a4c132c1dbae783cc7f271cb516d3d82e57766dff48423a655802be1c->enter($__internal_0815a85a4c132c1dbae783cc7f271cb516d3d82e57766dff48423a655802be1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
    ";
        
        $__internal_0815a85a4c132c1dbae783cc7f271cb516d3d82e57766dff48423a655802be1c->leave($__internal_0815a85a4c132c1dbae783cc7f271cb516d3d82e57766dff48423a655802be1c_prof);

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
        return array (  54 => 5,  41 => 4,  35 => 3,  11 => 1,);
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
        {{ include('@FOSUser/Security/login_content.html.twig') }}
    {% endblock fos_user_content %}
{% endblock %}
", "@FOSUser/Security/login.html.twig", "/var/www/html/symfonyBlog/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
