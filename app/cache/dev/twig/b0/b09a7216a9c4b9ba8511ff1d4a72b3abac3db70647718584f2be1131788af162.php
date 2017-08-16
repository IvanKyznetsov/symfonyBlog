<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_d663e26a31a73d47e9a9937585c6abb472dca1f91f4b7e0d404d6f88eac7c17d extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58483c3fe61ce5a2c8eb52e228dc1545cfdae6dc00d80b73d8b6928e08c49646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58483c3fe61ce5a2c8eb52e228dc1545cfdae6dc00d80b73d8b6928e08c49646->enter($__internal_58483c3fe61ce5a2c8eb52e228dc1545cfdae6dc00d80b73d8b6928e08c49646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58483c3fe61ce5a2c8eb52e228dc1545cfdae6dc00d80b73d8b6928e08c49646->leave($__internal_58483c3fe61ce5a2c8eb52e228dc1545cfdae6dc00d80b73d8b6928e08c49646_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_59846a82a28b28c1b77a181c28cf13b4b300951c54526ac0dff78428b70eccb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59846a82a28b28c1b77a181c28cf13b4b300951c54526ac0dff78428b70eccb5->enter($__internal_59846a82a28b28c1b77a181c28cf13b4b300951c54526ac0dff78428b70eccb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_59846a82a28b28c1b77a181c28cf13b4b300951c54526ac0dff78428b70eccb5->leave($__internal_59846a82a28b28c1b77a181c28cf13b4b300951c54526ac0dff78428b70eccb5_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_currency.html.twig", "/var/www/html/symfonyBlog/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_currency.html.twig");
    }
}
