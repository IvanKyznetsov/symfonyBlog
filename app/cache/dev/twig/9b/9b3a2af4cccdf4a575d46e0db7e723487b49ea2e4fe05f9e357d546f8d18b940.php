<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_44c2d9abc805857468536eb6f8675d1ae5d2c3ce134b8d1fa8e8ce1425479eb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40250e1ecdcb8004de5c6d992d66e074b25fd35caf69848f8bb742b281e755c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40250e1ecdcb8004de5c6d992d66e074b25fd35caf69848f8bb742b281e755c8->enter($__internal_40250e1ecdcb8004de5c6d992d66e074b25fd35caf69848f8bb742b281e755c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40250e1ecdcb8004de5c6d992d66e074b25fd35caf69848f8bb742b281e755c8->leave($__internal_40250e1ecdcb8004de5c6d992d66e074b25fd35caf69848f8bb742b281e755c8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aec9067703c3a24a8ad99edeaa27cda7af5375b4c8f012b5b3f0b2b022d454c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aec9067703c3a24a8ad99edeaa27cda7af5375b4c8f012b5b3f0b2b022d454c8->enter($__internal_aec9067703c3a24a8ad99edeaa27cda7af5375b4c8f012b5b3f0b2b022d454c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_aec9067703c3a24a8ad99edeaa27cda7af5375b4c8f012b5b3f0b2b022d454c8->leave($__internal_aec9067703c3a24a8ad99edeaa27cda7af5375b4c8f012b5b3f0b2b022d454c8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/html/symfonyBlog/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
