<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_1812ffcc9e02e3eeeed628483ed4c8fa81861fa119827d1c999b7ac75aae54cf extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4640477d59a9a6d82b5fdcd33f94dc5bb67d11e1fc8c98141858a280333e76b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4640477d59a9a6d82b5fdcd33f94dc5bb67d11e1fc8c98141858a280333e76b7->enter($__internal_4640477d59a9a6d82b5fdcd33f94dc5bb67d11e1fc8c98141858a280333e76b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4640477d59a9a6d82b5fdcd33f94dc5bb67d11e1fc8c98141858a280333e76b7->leave($__internal_4640477d59a9a6d82b5fdcd33f94dc5bb67d11e1fc8c98141858a280333e76b7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c58b1ee7560d121ec938f7ecb16c797e2953476caa65fb83c5209b57ae3304c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c58b1ee7560d121ec938f7ecb16c797e2953476caa65fb83c5209b57ae3304c0->enter($__internal_c58b1ee7560d121ec938f7ecb16c797e2953476caa65fb83c5209b57ae3304c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_c58b1ee7560d121ec938f7ecb16c797e2953476caa65fb83c5209b57ae3304c0->leave($__internal_c58b1ee7560d121ec938f7ecb16c797e2953476caa65fb83c5209b57ae3304c0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
", "SonataAdminBundle:CRUD:list__batch.html.twig", "/var/www/html/symfonyBlog/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__batch.html.twig");
    }
}
