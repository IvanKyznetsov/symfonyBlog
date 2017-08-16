<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_73fc1d292c1a9572df4161108c6483f2039e0968151073affb0d070e9f5f340f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5377dfc262d0761032385ba2b47f70f0d357618f0ca82f963e7ffbc7ffbe066d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5377dfc262d0761032385ba2b47f70f0d357618f0ca82f963e7ffbc7ffbe066d->enter($__internal_5377dfc262d0761032385ba2b47f70f0d357618f0ca82f963e7ffbc7ffbe066d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_5377dfc262d0761032385ba2b47f70f0d357618f0ca82f963e7ffbc7ffbe066d->leave($__internal_5377dfc262d0761032385ba2b47f70f0d357618f0ca82f963e7ffbc7ffbe066d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7e7d49587beab15b63a68acaae8bf88fd20c9d3cdc7904195d7ab07b5888ebf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e7d49587beab15b63a68acaae8bf88fd20c9d3cdc7904195d7ab07b5888ebf7->enter($__internal_7e7d49587beab15b63a68acaae8bf88fd20c9d3cdc7904195d7ab07b5888ebf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_7e7d49587beab15b63a68acaae8bf88fd20c9d3cdc7904195d7ab07b5888ebf7->leave($__internal_7e7d49587beab15b63a68acaae8bf88fd20c9d3cdc7904195d7ab07b5888ebf7_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_3b18ad4a4520079ac4c25fcccd1aabfc5ff59b467949ab3be95b0531a8e1eebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b18ad4a4520079ac4c25fcccd1aabfc5ff59b467949ab3be95b0531a8e1eebb->enter($__internal_3b18ad4a4520079ac4c25fcccd1aabfc5ff59b467949ab3be95b0531a8e1eebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 16
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 17
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
            ";
        } else {
            // line 19
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
            echo "
            ";
        }
        // line 21
        echo "            <br>
        ";
        
        $__internal_3b18ad4a4520079ac4c25fcccd1aabfc5ff59b467949ab3be95b0531a8e1eebb->leave($__internal_3b18ad4a4520079ac4c25fcccd1aabfc5ff59b467949ab3be95b0531a8e1eebb_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_bd3b6121c33296050997bcdf7a244bf90d3c87aaf6a00ece1dd2d97bbc349eec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd3b6121c33296050997bcdf7a244bf90d3c87aaf6a00ece1dd2d97bbc349eec->enter($__internal_bd3b6121c33296050997bcdf7a244bf90d3c87aaf6a00ece1dd2d97bbc349eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_bd3b6121c33296050997bcdf7a244bf90d3c87aaf6a00ece1dd2d97bbc349eec->leave($__internal_bd3b6121c33296050997bcdf7a244bf90d3c87aaf6a00ece1dd2d97bbc349eec_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  90 => 21,  84 => 19,  78 => 17,  75 => 16,  69 => 15,  57 => 14,  46 => 26,  44 => 25,  40 => 23,  37 => 15,  35 => 14,  29 => 13,  25 => 11,);
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

<div>
    <div class=\"sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(field_element) }}{% endblock %}
        {% block label %}
            {% if field_description.options.name is defined %}
                {{ form_label(field_element, field_description.options.name) }}
            {% else %}
                {{ form_label(field_element) }}
            {% endif %}
            <br>
        {% endblock %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
", "SonataAdminBundle:CRUD:edit_boolean.html.twig", "/var/www/html/symfonyBlog/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_boolean.html.twig");
    }
}
