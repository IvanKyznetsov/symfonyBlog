<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_aa1a6070dfa82e01013b4c9317b963f9a783be77e6bd69de3845f503425ce909 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c15651f9e1b13412875bce856107af33f7bb4d484636dfa133f3947702ddc24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c15651f9e1b13412875bce856107af33f7bb4d484636dfa133f3947702ddc24->enter($__internal_9c15651f9e1b13412875bce856107af33f7bb4d484636dfa133f3947702ddc24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c15651f9e1b13412875bce856107af33f7bb4d484636dfa133f3947702ddc24->leave($__internal_9c15651f9e1b13412875bce856107af33f7bb4d484636dfa133f3947702ddc24_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6c5ea24e5c8a4bb3420be185bf17f44ef280cdb223fa3986344fa4c1688dc5d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c5ea24e5c8a4bb3420be185bf17f44ef280cdb223fa3986344fa4c1688dc5d4->enter($__internal_6c5ea24e5c8a4bb3420be185bf17f44ef280cdb223fa3986344fa4c1688dc5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_6c5ea24e5c8a4bb3420be185bf17f44ef280cdb223fa3986344fa4c1688dc5d4->leave($__internal_6c5ea24e5c8a4bb3420be185bf17f44ef280cdb223fa3986344fa4c1688dc5d4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
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

{% extends base_template %}

{% block field %}
    <span class=\"edit\">
        {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}
    </span>
{% endblock %}
", "SonataAdminBundle:CRUD:edit_array.html.twig", "/var/www/html/symfonyBlog/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_array.html.twig");
    }
}
