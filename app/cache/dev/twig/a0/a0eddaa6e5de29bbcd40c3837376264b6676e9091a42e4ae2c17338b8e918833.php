<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_0aac53063fb5aff7ede0c8b893477c87a928bda0091c0353ed0efe241fa950f0 extends Twig_Template
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
        $__internal_9140435ee224950b03c0217d22901f83f271c6cd83958f6fd01a0c9f94763de9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9140435ee224950b03c0217d22901f83f271c6cd83958f6fd01a0c9f94763de9->enter($__internal_9140435ee224950b03c0217d22901f83f271c6cd83958f6fd01a0c9f94763de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9140435ee224950b03c0217d22901f83f271c6cd83958f6fd01a0c9f94763de9->leave($__internal_9140435ee224950b03c0217d22901f83f271c6cd83958f6fd01a0c9f94763de9_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2c899d13b1977c9cd1fe9b2a17fbdb953b6fc169b8697933dcf91ee86abb34a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c899d13b1977c9cd1fe9b2a17fbdb953b6fc169b8697933dcf91ee86abb34a0->enter($__internal_2c899d13b1977c9cd1fe9b2a17fbdb953b6fc169b8697933dcf91ee86abb34a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_2c899d13b1977c9cd1fe9b2a17fbdb953b6fc169b8697933dcf91ee86abb34a0->leave($__internal_2c899d13b1977c9cd1fe9b2a17fbdb953b6fc169b8697933dcf91ee86abb34a0_prof);

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
