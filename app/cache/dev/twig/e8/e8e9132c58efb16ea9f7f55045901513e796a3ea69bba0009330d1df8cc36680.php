<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_9a369c1a6cadee0df676a3dcca0eb0fbe129923009380a875f6fa48367a174f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d2256b8d50d9c9b19d2752c20366809a0259453f85a98440af0d6d7a5057c80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d2256b8d50d9c9b19d2752c20366809a0259453f85a98440af0d6d7a5057c80->enter($__internal_4d2256b8d50d9c9b19d2752c20366809a0259453f85a98440af0d6d7a5057c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d2256b8d50d9c9b19d2752c20366809a0259453f85a98440af0d6d7a5057c80->leave($__internal_4d2256b8d50d9c9b19d2752c20366809a0259453f85a98440af0d6d7a5057c80_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_031d301401399f527e30feae3f5530eef2db2c05f127613532e264a60072075f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_031d301401399f527e30feae3f5530eef2db2c05f127613532e264a60072075f->enter($__internal_031d301401399f527e30feae3f5530eef2db2c05f127613532e264a60072075f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_031d301401399f527e30feae3f5530eef2db2c05f127613532e264a60072075f->leave($__internal_031d301401399f527e30feae3f5530eef2db2c05f127613532e264a60072075f_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_03873c558685becfcdf34d42bac4d3a7c355a0679f8214532c053487a41ef828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03873c558685becfcdf34d42bac4d3a7c355a0679f8214532c053487a41ef828->enter($__internal_03873c558685becfcdf34d42bac4d3a7c355a0679f8214532c053487a41ef828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_03873c558685becfcdf34d42bac4d3a7c355a0679f8214532c053487a41ef828->leave($__internal_03873c558685becfcdf34d42bac4d3a7c355a0679f8214532c053487a41ef828_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_5537d5c600a084b7fdb76c9f94ba3c0489b79320115f2d066cd3c8591db781f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5537d5c600a084b7fdb76c9f94ba3c0489b79320115f2d066cd3c8591db781f6->enter($__internal_5537d5c600a084b7fdb76c9f94ba3c0489b79320115f2d066cd3c8591db781f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_5537d5c600a084b7fdb76c9f94ba3c0489b79320115f2d066cd3c8591db781f6->leave($__internal_5537d5c600a084b7fdb76c9f94ba3c0489b79320115f2d066cd3c8591db781f6_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_a4e7a6afb1c6f8f9ad64c1a395a30b0afde4f189cfe41660e3b47d648ce92b9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4e7a6afb1c6f8f9ad64c1a395a30b0afde4f189cfe41660e3b47d648ce92b9e->enter($__internal_a4e7a6afb1c6f8f9ad64c1a395a30b0afde4f189cfe41660e3b47d648ce92b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_a4e7a6afb1c6f8f9ad64c1a395a30b0afde4f189cfe41660e3b47d648ce92b9e->leave($__internal_a4e7a6afb1c6f8f9ad64c1a395a30b0afde4f189cfe41660e3b47d648ce92b9e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 25,  85 => 24,  75 => 22,  69 => 21,  61 => 24,  58 => 21,  52 => 20,  45 => 15,  39 => 14,  32 => 12,  30 => 18,  21 => 12,);
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

{% extends base_template %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% import 'SonataAdminBundle:CRUD:base_acl_macro.html.twig' as acl %}

{% block form %}
    {% block form_acl_roles %}
        {{ acl.render_form(aclRolesForm, permissions, 'td_role', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
    {% block form_acl_users %}
        {{ acl.render_form(aclUsersForm, permissions, 'td_username', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_acl.html.twig", "/var/www/html/symfonyBlog/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_acl.html.twig");
    }
}
