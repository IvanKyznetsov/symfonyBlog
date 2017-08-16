<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_9b2d1dbc89ec9c42ae3ac06e4c2bdca5b89a4ab887ded6c482aadb9a6844f2c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc2e8a827b2c1bf688b0a7a9aae147e2d650ca59f88d347463d61b85869d46ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc2e8a827b2c1bf688b0a7a9aae147e2d650ca59f88d347463d61b85869d46ad->enter($__internal_bc2e8a827b2c1bf688b0a7a9aae147e2d650ca59f88d347463d61b85869d46ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc2e8a827b2c1bf688b0a7a9aae147e2d650ca59f88d347463d61b85869d46ad->leave($__internal_bc2e8a827b2c1bf688b0a7a9aae147e2d650ca59f88d347463d61b85869d46ad_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_97283f62cc240d609cbf1c458b4342b176829667c081407a158fd20a7b7112cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97283f62cc240d609cbf1c458b4342b176829667c081407a158fd20a7b7112cb->enter($__internal_97283f62cc240d609cbf1c458b4342b176829667c081407a158fd20a7b7112cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_97283f62cc240d609cbf1c458b4342b176829667c081407a158fd20a7b7112cb->leave($__internal_97283f62cc240d609cbf1c458b4342b176829667c081407a158fd20a7b7112cb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
", "SonataAdminBundle:CRUD:list__batch.html.twig", "/var/www/html/symfonyBlog/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__batch.html.twig");
    }
}
