<?php

/* SonataAdminBundle:CRUD:list_email.html.twig */
class __TwigTemplate_41a277e0cfc9f1e4a0c8af2b9930ac5dd34471dc6ec9162bdb699d6613409fee extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6cd0c22c422f4de6c980aeab4352f4a5e9094c8919e912fab34d57cb9188de2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6cd0c22c422f4de6c980aeab4352f4a5e9094c8919e912fab34d57cb9188de2->enter($__internal_d6cd0c22c422f4de6c980aeab4352f4a5e9094c8919e912fab34d57cb9188de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6cd0c22c422f4de6c980aeab4352f4a5e9094c8919e912fab34d57cb9188de2->leave($__internal_d6cd0c22c422f4de6c980aeab4352f4a5e9094c8919e912fab34d57cb9188de2_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_177b1c269e477919ef0464e7c2459600466b21f26047a8b8b3881e931a51e49e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_177b1c269e477919ef0464e7c2459600466b21f26047a8b8b3881e931a51e49e->enter($__internal_177b1c269e477919ef0464e7c2459600466b21f26047a8b8b3881e931a51e49e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_177b1c269e477919ef0464e7c2459600466b21f26047a8b8b3881e931a51e49e->leave($__internal_177b1c269e477919ef0464e7c2459600466b21f26047a8b8b3881e931a51e49e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_email.html.twig";
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
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_email.html.twig", "/var/www/html/symfonyBlog/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_email.html.twig");
    }
}
