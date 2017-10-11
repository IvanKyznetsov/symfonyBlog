<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_80aea7ed70876b1786d8310450f6a53360f058065db7498d5d03fc6360510f89 extends Twig_Template
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
        $__internal_e1da513b4c3cb7edd90cc8a90253c72cdcc4e41a2e12c401ba3dd077d391bcde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1da513b4c3cb7edd90cc8a90253c72cdcc4e41a2e12c401ba3dd077d391bcde->enter($__internal_e1da513b4c3cb7edd90cc8a90253c72cdcc4e41a2e12c401ba3dd077d391bcde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1da513b4c3cb7edd90cc8a90253c72cdcc4e41a2e12c401ba3dd077d391bcde->leave($__internal_e1da513b4c3cb7edd90cc8a90253c72cdcc4e41a2e12c401ba3dd077d391bcde_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d42ded2433ed2164450cc875c30ca68171d5ba5df5b174f9d3004b6d520704d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d42ded2433ed2164450cc875c30ca68171d5ba5df5b174f9d3004b6d520704d8->enter($__internal_d42ded2433ed2164450cc875c30ca68171d5ba5df5b174f9d3004b6d520704d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_d42ded2433ed2164450cc875c30ca68171d5ba5df5b174f9d3004b6d520704d8->leave($__internal_d42ded2433ed2164450cc875c30ca68171d5ba5df5b174f9d3004b6d520704d8_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_66f2595918eab4edb7fa058662181c4457f3c9b2ec6d00a4ac93d5a285e6cecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66f2595918eab4edb7fa058662181c4457f3c9b2ec6d00a4ac93d5a285e6cecd->enter($__internal_66f2595918eab4edb7fa058662181c4457f3c9b2ec6d00a4ac93d5a285e6cecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "        ";
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        
        $__internal_66f2595918eab4edb7fa058662181c4457f3c9b2ec6d00a4ac93d5a285e6cecd->leave($__internal_66f2595918eab4edb7fa058662181c4457f3c9b2ec6d00a4ac93d5a285e6cecd_prof);

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
