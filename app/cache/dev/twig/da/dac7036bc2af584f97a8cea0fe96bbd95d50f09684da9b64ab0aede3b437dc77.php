<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_45f4b394542f700ae27424ce434493c08a0898e876a1bcba3933a05db1190d19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dfd15f4a2a289a10c9c082582f71e12a377d19f9974b6f84e93b93d553f7867a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd15f4a2a289a10c9c082582f71e12a377d19f9974b6f84e93b93d553f7867a->enter($__internal_dfd15f4a2a289a10c9c082582f71e12a377d19f9974b6f84e93b93d553f7867a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfd15f4a2a289a10c9c082582f71e12a377d19f9974b6f84e93b93d553f7867a->leave($__internal_dfd15f4a2a289a10c9c082582f71e12a377d19f9974b6f84e93b93d553f7867a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c008dc81c3010c9cbcf502d565c024b4fa4bd6273aa62253fe4ead2f5e4db6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c008dc81c3010c9cbcf502d565c024b4fa4bd6273aa62253fe4ead2f5e4db6f->enter($__internal_3c008dc81c3010c9cbcf502d565c024b4fa4bd6273aa62253fe4ead2f5e4db6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_3c008dc81c3010c9cbcf502d565c024b4fa4bd6273aa62253fe4ead2f5e4db6f->leave($__internal_3c008dc81c3010c9cbcf502d565c024b4fa4bd6273aa62253fe4ead2f5e4db6f_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aa98bc9cd79afc096a92601bf64fc9f3b2d6f6ff448ff2973ab42ec0033dba77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa98bc9cd79afc096a92601bf64fc9f3b2d6f6ff448ff2973ab42ec0033dba77->enter($__internal_aa98bc9cd79afc096a92601bf64fc9f3b2d6f6ff448ff2973ab42ec0033dba77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "        ";
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        
        $__internal_aa98bc9cd79afc096a92601bf64fc9f3b2d6f6ff448ff2973ab42ec0033dba77->leave($__internal_aa98bc9cd79afc096a92601bf64fc9f3b2d6f6ff448ff2973ab42ec0033dba77_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 6,  54 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block body %}
    {% block fos_user_content %}
        {% include \"@FOSUser/Group/new_content.html.twig\" %}
    {% endblock fos_user_content %}
{% endblock %}

", "FOSUserBundle:Group:new.html.twig", "/var/www/html/symfonyBlog/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
