<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_011a9076c9e5c29fe82a00ccc4d4c093af4c71b331b4b25c22715812419cb715 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45938a32cec7f0766bd155bdabcdf4a9ccea2d39eafb631cb7b6e9078d8a4b89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45938a32cec7f0766bd155bdabcdf4a9ccea2d39eafb631cb7b6e9078d8a4b89->enter($__internal_45938a32cec7f0766bd155bdabcdf4a9ccea2d39eafb631cb7b6e9078d8a4b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45938a32cec7f0766bd155bdabcdf4a9ccea2d39eafb631cb7b6e9078d8a4b89->leave($__internal_45938a32cec7f0766bd155bdabcdf4a9ccea2d39eafb631cb7b6e9078d8a4b89_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3df52f9f2b691abfeb7784a01b5be4480685241b7095413818924c5ddc3c0553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3df52f9f2b691abfeb7784a01b5be4480685241b7095413818924c5ddc3c0553->enter($__internal_3df52f9f2b691abfeb7784a01b5be4480685241b7095413818924c5ddc3c0553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_3df52f9f2b691abfeb7784a01b5be4480685241b7095413818924c5ddc3c0553->leave($__internal_3df52f9f2b691abfeb7784a01b5be4480685241b7095413818924c5ddc3c0553_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
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
", "SonataAdminBundle:CRUD:edit_file.html.twig", "/var/www/html/symfonyBlog/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_file.html.twig");
    }
}
