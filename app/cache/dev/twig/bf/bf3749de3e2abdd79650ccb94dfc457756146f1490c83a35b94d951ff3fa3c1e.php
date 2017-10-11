<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_fb4e7bacb648b618a98fa7deb48bc1377896e0c5df4e60250071c5d7634e11d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 32);
        // line 32
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_abc457d08c407da56351d470b2032cb431c9dad50ad0251fe3f70c617799bc03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abc457d08c407da56351d470b2032cb431c9dad50ad0251fe3f70c617799bc03->enter($__internal_abc457d08c407da56351d470b2032cb431c9dad50ad0251fe3f70c617799bc03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abc457d08c407da56351d470b2032cb431c9dad50ad0251fe3f70c617799bc03->leave($__internal_abc457d08c407da56351d470b2032cb431c9dad50ad0251fe3f70c617799bc03_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_89a18dab1d81bb52a32ff3e11767cd99d37dabd3d5f6995c75f2275eed4e1a01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89a18dab1d81bb52a32ff3e11767cd99d37dabd3d5f6995c75f2275eed4e1a01->enter($__internal_89a18dab1d81bb52a32ff3e11767cd99d37dabd3d5f6995c75f2275eed4e1a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_89a18dab1d81bb52a32ff3e11767cd99d37dabd3d5f6995c75f2275eed4e1a01->leave($__internal_89a18dab1d81bb52a32ff3e11767cd99d37dabd3d5f6995c75f2275eed4e1a01_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_47ddd0d803ee2bd0f8923759ff297fe39a392facd9b9210452d1b68dbc8d59b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47ddd0d803ee2bd0f8923759ff297fe39a392facd9b9210452d1b68dbc8d59b0->enter($__internal_47ddd0d803ee2bd0f8923759ff297fe39a392facd9b9210452d1b68dbc8d59b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_47ddd0d803ee2bd0f8923759ff297fe39a392facd9b9210452d1b68dbc8d59b0->leave($__internal_47ddd0d803ee2bd0f8923759ff297fe39a392facd9b9210452d1b68dbc8d59b0_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_37ae3643e60145abf0065dae29ed1c3926e59f00365dec4e0b0da5b4cc05f173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37ae3643e60145abf0065dae29ed1c3926e59f00365dec4e0b0da5b4cc05f173->enter($__internal_37ae3643e60145abf0065dae29ed1c3926e59f00365dec4e0b0da5b4cc05f173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_37ae3643e60145abf0065dae29ed1c3926e59f00365dec4e0b0da5b4cc05f173->leave($__internal_37ae3643e60145abf0065dae29ed1c3926e59f00365dec4e0b0da5b4cc05f173_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_a6cddf33b9ab22e79f8e11a404ec5f01b62f4b7b73effbd96824c10b8ab4c833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6cddf33b9ab22e79f8e11a404ec5f01b62f4b7b73effbd96824c10b8ab4c833->enter($__internal_a6cddf33b9ab22e79f8e11a404ec5f01b62f4b7b73effbd96824c10b8ab4c833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_a6cddf33b9ab22e79f8e11a404ec5f01b62f4b7b73effbd96824c10b8ab4c833->leave($__internal_a6cddf33b9ab22e79f8e11a404ec5f01b62f4b7b73effbd96824c10b8ab4c833_prof);

    }

    // line 34
    public function block_form($context, array $blocks = array())
    {
        $__internal_f4fb742cdb4c6f56a6f1177fe8fe83f60293344669e791c1ed582911f1405114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4fb742cdb4c6f56a6f1177fe8fe83f60293344669e791c1ed582911f1405114->enter($__internal_f4fb742cdb4c6f56a6f1177fe8fe83f60293344669e791c1ed582911f1405114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 35
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_f4fb742cdb4c6f56a6f1177fe8fe83f60293344669e791c1ed582911f1405114->leave($__internal_f4fb742cdb4c6f56a6f1177fe8fe83f60293344669e791c1ed582911f1405114_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 35,  122 => 34,  110 => 30,  103 => 27,  97 => 26,  87 => 23,  81 => 22,  70 => 18,  64 => 16,  61 => 15,  55 => 14,  40 => 12,  12 => 32,);
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

{% block title %}
    {% if admin.id(object) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
", "SonataAdminBundle:CRUD:base_edit.html.twig", "/var/www/html/symfonyBlog/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_edit.html.twig");
    }
}
