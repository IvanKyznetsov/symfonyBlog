<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_b381fc9938e2c0f72745af62793e42891aca5a3c546c00d9d3cfc1f9d2bd28d5 extends Twig_Template
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
        $__internal_9b1999d9244c6556674e7545551bd9988285c491fc0d87f239fb75b5fd3f6172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b1999d9244c6556674e7545551bd9988285c491fc0d87f239fb75b5fd3f6172->enter($__internal_9b1999d9244c6556674e7545551bd9988285c491fc0d87f239fb75b5fd3f6172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b1999d9244c6556674e7545551bd9988285c491fc0d87f239fb75b5fd3f6172->leave($__internal_9b1999d9244c6556674e7545551bd9988285c491fc0d87f239fb75b5fd3f6172_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd9cd7c5f4e9f24db1e49f3c144afa534a53ea9ec7b1d6e8a653cf6c2e5e59f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd9cd7c5f4e9f24db1e49f3c144afa534a53ea9ec7b1d6e8a653cf6c2e5e59f7->enter($__internal_cd9cd7c5f4e9f24db1e49f3c144afa534a53ea9ec7b1d6e8a653cf6c2e5e59f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_cd9cd7c5f4e9f24db1e49f3c144afa534a53ea9ec7b1d6e8a653cf6c2e5e59f7->leave($__internal_cd9cd7c5f4e9f24db1e49f3c144afa534a53ea9ec7b1d6e8a653cf6c2e5e59f7_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bd74837bcdfd6cc86fe40c2162c89ef0c72022e977ba17e23c71c0232ef08129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd74837bcdfd6cc86fe40c2162c89ef0c72022e977ba17e23c71c0232ef08129->enter($__internal_bd74837bcdfd6cc86fe40c2162c89ef0c72022e977ba17e23c71c0232ef08129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
    ";
        
        $__internal_bd74837bcdfd6cc86fe40c2162c89ef0c72022e977ba17e23c71c0232ef08129->leave($__internal_bd74837bcdfd6cc86fe40c2162c89ef0c72022e977ba17e23c71c0232ef08129_prof);

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
