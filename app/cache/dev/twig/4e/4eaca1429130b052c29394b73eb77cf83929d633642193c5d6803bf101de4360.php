<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_a6942625a9c06526eb4cf26416d31a5d786e0d40eec5078217cefafd61336cb9 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db7de92719a7708b8317bbde924375b212e67cb601546d19c5d09a22819a1297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db7de92719a7708b8317bbde924375b212e67cb601546d19c5d09a22819a1297->enter($__internal_db7de92719a7708b8317bbde924375b212e67cb601546d19c5d09a22819a1297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db7de92719a7708b8317bbde924375b212e67cb601546d19c5d09a22819a1297->leave($__internal_db7de92719a7708b8317bbde924375b212e67cb601546d19c5d09a22819a1297_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4f1c05c91eed3769be275fbe380e05220c344c2af49c887ea33c6dbee0bfa1ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f1c05c91eed3769be275fbe380e05220c344c2af49c887ea33c6dbee0bfa1ec->enter($__internal_4f1c05c91eed3769be275fbe380e05220c344c2af49c887ea33c6dbee0bfa1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_4f1c05c91eed3769be275fbe380e05220c344c2af49c887ea33c6dbee0bfa1ec->leave($__internal_4f1c05c91eed3769be275fbe380e05220c344c2af49c887ea33c6dbee0bfa1ec_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
", "SonataAdminBundle:CRUD:edit_string.html.twig", "/var/www/html/symfonyBlog/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_string.html.twig");
    }
}
