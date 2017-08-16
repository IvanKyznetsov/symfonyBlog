<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_f135b4aeaab44d09fe511781cba1d526dfac5652ea1d4b58a696a4bdc4dd0bd2 extends Twig_Template
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
        $__internal_d811f3ab7f240d2969dc32f9cd0a329952c9ab2aad62a99804d22abf0a26eba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d811f3ab7f240d2969dc32f9cd0a329952c9ab2aad62a99804d22abf0a26eba6->enter($__internal_d811f3ab7f240d2969dc32f9cd0a329952c9ab2aad62a99804d22abf0a26eba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d811f3ab7f240d2969dc32f9cd0a329952c9ab2aad62a99804d22abf0a26eba6->leave($__internal_d811f3ab7f240d2969dc32f9cd0a329952c9ab2aad62a99804d22abf0a26eba6_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_167ee0b1d92b689fb94ad71d8f0b2ce71b6e7d726a361d6630f28df4960cec47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_167ee0b1d92b689fb94ad71d8f0b2ce71b6e7d726a361d6630f28df4960cec47->enter($__internal_167ee0b1d92b689fb94ad71d8f0b2ce71b6e7d726a361d6630f28df4960cec47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_167ee0b1d92b689fb94ad71d8f0b2ce71b6e7d726a361d6630f28df4960cec47->leave($__internal_167ee0b1d92b689fb94ad71d8f0b2ce71b6e7d726a361d6630f28df4960cec47_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_5ee46405968e8a632158b18726b0b9f59eb8971b09c5d6378fad797fa7ff974e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ee46405968e8a632158b18726b0b9f59eb8971b09c5d6378fad797fa7ff974e->enter($__internal_5ee46405968e8a632158b18726b0b9f59eb8971b09c5d6378fad797fa7ff974e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_5ee46405968e8a632158b18726b0b9f59eb8971b09c5d6378fad797fa7ff974e->leave($__internal_5ee46405968e8a632158b18726b0b9f59eb8971b09c5d6378fad797fa7ff974e_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_5e43f6ccb6059b4577984592f91ded7d4273c22fb963d5b5763de819e55fcbdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e43f6ccb6059b4577984592f91ded7d4273c22fb963d5b5763de819e55fcbdf->enter($__internal_5e43f6ccb6059b4577984592f91ded7d4273c22fb963d5b5763de819e55fcbdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_5e43f6ccb6059b4577984592f91ded7d4273c22fb963d5b5763de819e55fcbdf->leave($__internal_5e43f6ccb6059b4577984592f91ded7d4273c22fb963d5b5763de819e55fcbdf_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_15f915a509189436229fc10191a5b08929737ce5e58479a6be10f2a911944a2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15f915a509189436229fc10191a5b08929737ce5e58479a6be10f2a911944a2a->enter($__internal_15f915a509189436229fc10191a5b08929737ce5e58479a6be10f2a911944a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_15f915a509189436229fc10191a5b08929737ce5e58479a6be10f2a911944a2a->leave($__internal_15f915a509189436229fc10191a5b08929737ce5e58479a6be10f2a911944a2a_prof);

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
