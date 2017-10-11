<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_68be4418c3d97a6a1b0b223c33a8c40cb8b57d3a24c35c46ebfa6a08defe0535 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4bd9530590ab42eafe29d6c54cda48abd296d4ba9b73570c5a6e94d02c8cad0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bd9530590ab42eafe29d6c54cda48abd296d4ba9b73570c5a6e94d02c8cad0f->enter($__internal_4bd9530590ab42eafe29d6c54cda48abd296d4ba9b73570c5a6e94d02c8cad0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bd9530590ab42eafe29d6c54cda48abd296d4ba9b73570c5a6e94d02c8cad0f->leave($__internal_4bd9530590ab42eafe29d6c54cda48abd296d4ba9b73570c5a6e94d02c8cad0f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d9dd602f86d53ca4342e4315b21612fbc0b0b7310283c787242adacde4552069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9dd602f86d53ca4342e4315b21612fbc0b0b7310283c787242adacde4552069->enter($__internal_d9dd602f86d53ca4342e4315b21612fbc0b0b7310283c787242adacde4552069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_d9dd602f86d53ca4342e4315b21612fbc0b0b7310283c787242adacde4552069->leave($__internal_d9dd602f86d53ca4342e4315b21612fbc0b0b7310283c787242adacde4552069_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
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
", "SonataAdminBundle:CRUD:edit_integer.html.twig", "/var/www/html/symfonyBlog/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_integer.html.twig");
    }
}
