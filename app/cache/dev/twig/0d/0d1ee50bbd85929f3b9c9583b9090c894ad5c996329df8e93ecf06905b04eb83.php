<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_3dee2dd1705a241a4b06c42ab78ac1458be79425fccfcb7705725d61071dd851 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_be9651d47c641a43358c32668d462da1d1e531f2c876f49c8807273e924828c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be9651d47c641a43358c32668d462da1d1e531f2c876f49c8807273e924828c3->enter($__internal_be9651d47c641a43358c32668d462da1d1e531f2c876f49c8807273e924828c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be9651d47c641a43358c32668d462da1d1e531f2c876f49c8807273e924828c3->leave($__internal_be9651d47c641a43358c32668d462da1d1e531f2c876f49c8807273e924828c3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b51e9d7bae8e4ab88c9fa4ac1323daca6f5f844223e78763ee325167ee81323d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b51e9d7bae8e4ab88c9fa4ac1323daca6f5f844223e78763ee325167ee81323d->enter($__internal_b51e9d7bae8e4ab88c9fa4ac1323daca6f5f844223e78763ee325167ee81323d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_b51e9d7bae8e4ab88c9fa4ac1323daca6f5f844223e78763ee325167ee81323d->leave($__internal_b51e9d7bae8e4ab88c9fa4ac1323daca6f5f844223e78763ee325167ee81323d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/html/symfonyBlog/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
