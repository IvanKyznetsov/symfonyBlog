<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_55c0137c7abda5ca541394a71660772e6b05106c81d61a53a2f519afa36c7b0f extends Twig_Template
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
        $__internal_4d869016b5b5d61c41938e36489b82e8a22f374ac871c602dcbab2e7e855d395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d869016b5b5d61c41938e36489b82e8a22f374ac871c602dcbab2e7e855d395->enter($__internal_4d869016b5b5d61c41938e36489b82e8a22f374ac871c602dcbab2e7e855d395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d869016b5b5d61c41938e36489b82e8a22f374ac871c602dcbab2e7e855d395->leave($__internal_4d869016b5b5d61c41938e36489b82e8a22f374ac871c602dcbab2e7e855d395_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_07f304bc3ef39e96a355b5dc3cf2fb6707fbbff6660db52326b529aa910e46c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07f304bc3ef39e96a355b5dc3cf2fb6707fbbff6660db52326b529aa910e46c4->enter($__internal_07f304bc3ef39e96a355b5dc3cf2fb6707fbbff6660db52326b529aa910e46c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_07f304bc3ef39e96a355b5dc3cf2fb6707fbbff6660db52326b529aa910e46c4->leave($__internal_07f304bc3ef39e96a355b5dc3cf2fb6707fbbff6660db52326b529aa910e46c4_prof);

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
