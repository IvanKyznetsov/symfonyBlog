<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_32ffba5ce546270853fbe131c9c97ced82742045b4c791604233f1241fa3e3bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_6716a0646869544ff975cb8fa27746fd80e36f7cc30a4f1fd7e38f9c1e566a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6716a0646869544ff975cb8fa27746fd80e36f7cc30a4f1fd7e38f9c1e566a70->enter($__internal_6716a0646869544ff975cb8fa27746fd80e36f7cc30a4f1fd7e38f9c1e566a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6716a0646869544ff975cb8fa27746fd80e36f7cc30a4f1fd7e38f9c1e566a70->leave($__internal_6716a0646869544ff975cb8fa27746fd80e36f7cc30a4f1fd7e38f9c1e566a70_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b97b5a1edb353d1e141bccbbe385cdc6ae76f32433e787a3c1c3d2efccfb44bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b97b5a1edb353d1e141bccbbe385cdc6ae76f32433e787a3c1c3d2efccfb44bf->enter($__internal_b97b5a1edb353d1e141bccbbe385cdc6ae76f32433e787a3c1c3d2efccfb44bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_b97b5a1edb353d1e141bccbbe385cdc6ae76f32433e787a3c1c3d2efccfb44bf->leave($__internal_b97b5a1edb353d1e141bccbbe385cdc6ae76f32433e787a3c1c3d2efccfb44bf_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2ef23e7c88e98832aa1fb7dd6c685e0c30ea03152ff85629cd11520b203bd2e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef23e7c88e98832aa1fb7dd6c685e0c30ea03152ff85629cd11520b203bd2e8->enter($__internal_2ef23e7c88e98832aa1fb7dd6c685e0c30ea03152ff85629cd11520b203bd2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "        ";
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        
        $__internal_2ef23e7c88e98832aa1fb7dd6c685e0c30ea03152ff85629cd11520b203bd2e8->leave($__internal_2ef23e7c88e98832aa1fb7dd6c685e0c30ea03152ff85629cd11520b203bd2e8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
        {% include \"@FOSUser/Profile/show_content.html.twig\" %}
    {% endblock fos_user_content %}
{% endblock %}

", "@FOSUser/Profile/show.html.twig", "/var/www/html/symfonyBlog/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
