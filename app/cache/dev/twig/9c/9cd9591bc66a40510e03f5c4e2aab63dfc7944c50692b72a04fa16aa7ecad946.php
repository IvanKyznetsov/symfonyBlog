<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_2c4307525ac04e9c73057950cac1e69d20ac0aafee23ae6b1ffd80ab1032fa96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_a55e11725354cac89769ab129338feee0fe182e9d95630dc875fe7a11b0dac19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a55e11725354cac89769ab129338feee0fe182e9d95630dc875fe7a11b0dac19->enter($__internal_a55e11725354cac89769ab129338feee0fe182e9d95630dc875fe7a11b0dac19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a55e11725354cac89769ab129338feee0fe182e9d95630dc875fe7a11b0dac19->leave($__internal_a55e11725354cac89769ab129338feee0fe182e9d95630dc875fe7a11b0dac19_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_00d630dcd16a4c3515991cc1d04270a6b7362c413bd4cd94caffc88b0a93a33e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00d630dcd16a4c3515991cc1d04270a6b7362c413bd4cd94caffc88b0a93a33e->enter($__internal_00d630dcd16a4c3515991cc1d04270a6b7362c413bd4cd94caffc88b0a93a33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_00d630dcd16a4c3515991cc1d04270a6b7362c413bd4cd94caffc88b0a93a33e->leave($__internal_00d630dcd16a4c3515991cc1d04270a6b7362c413bd4cd94caffc88b0a93a33e_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6a3d573e70b5e38a7363174659137dfd252fc3bc34b9bdc6e6db45348cb34300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a3d573e70b5e38a7363174659137dfd252fc3bc34b9bdc6e6db45348cb34300->enter($__internal_6a3d573e70b5e38a7363174659137dfd252fc3bc34b9bdc6e6db45348cb34300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "        ";
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        
        $__internal_6a3d573e70b5e38a7363174659137dfd252fc3bc34b9bdc6e6db45348cb34300->leave($__internal_6a3d573e70b5e38a7363174659137dfd252fc3bc34b9bdc6e6db45348cb34300_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
        {% include \"@FOSUser/Group/edit_content.html.twig\" %}
    {% endblock fos_user_content %}
{% endblock %}

", "FOSUserBundle:Group:edit.html.twig", "/var/www/html/symfonyBlog/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
