<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_a1457b7f844b0c101a29c777d7071486c664bccbbb70ccabdb3e086bd86fbfd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_209d1359d50d9c1e2680c1de6ca1fdc5a64d66e6e7cd8526ea7a39b48ab16791 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_209d1359d50d9c1e2680c1de6ca1fdc5a64d66e6e7cd8526ea7a39b48ab16791->enter($__internal_209d1359d50d9c1e2680c1de6ca1fdc5a64d66e6e7cd8526ea7a39b48ab16791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_209d1359d50d9c1e2680c1de6ca1fdc5a64d66e6e7cd8526ea7a39b48ab16791->leave($__internal_209d1359d50d9c1e2680c1de6ca1fdc5a64d66e6e7cd8526ea7a39b48ab16791_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0b9d8fcc397d67a8d6054593847df4bdf336cbe7a4cb343b2609c1e5ca0919c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0b9d8fcc397d67a8d6054593847df4bdf336cbe7a4cb343b2609c1e5ca0919c->enter($__internal_b0b9d8fcc397d67a8d6054593847df4bdf336cbe7a4cb343b2609c1e5ca0919c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_b0b9d8fcc397d67a8d6054593847df4bdf336cbe7a4cb343b2609c1e5ca0919c->leave($__internal_b0b9d8fcc397d67a8d6054593847df4bdf336cbe7a4cb343b2609c1e5ca0919c_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0c9838137177af2a53a4ad8e82b26fc2efd12d6b73de27bcf788705bf688c842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c9838137177af2a53a4ad8e82b26fc2efd12d6b73de27bcf788705bf688c842->enter($__internal_0c9838137177af2a53a4ad8e82b26fc2efd12d6b73de27bcf788705bf688c842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
    ";
        
        $__internal_0c9838137177af2a53a4ad8e82b26fc2efd12d6b73de27bcf788705bf688c842->leave($__internal_0c9838137177af2a53a4ad8e82b26fc2efd12d6b73de27bcf788705bf688c842_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
", "FOSUserBundle:Security:login.html.twig", "/var/www/html/symfonyBlog/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
