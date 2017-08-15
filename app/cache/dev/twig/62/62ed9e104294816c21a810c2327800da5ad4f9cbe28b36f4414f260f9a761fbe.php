<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_eb968fa488977b81d5e0e2f97eb056dc559c4e47599ee204fce1126df9fdf1e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_56bfc92c7b1a836f3d241eda6ebedb6b0869115389b4468499d6efaa5af70b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56bfc92c7b1a836f3d241eda6ebedb6b0869115389b4468499d6efaa5af70b66->enter($__internal_56bfc92c7b1a836f3d241eda6ebedb6b0869115389b4468499d6efaa5af70b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56bfc92c7b1a836f3d241eda6ebedb6b0869115389b4468499d6efaa5af70b66->leave($__internal_56bfc92c7b1a836f3d241eda6ebedb6b0869115389b4468499d6efaa5af70b66_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_37ab583600df3a226575c337592e926d65d358af4f44d13b29a42fcaa3800a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37ab583600df3a226575c337592e926d65d358af4f44d13b29a42fcaa3800a8d->enter($__internal_37ab583600df3a226575c337592e926d65d358af4f44d13b29a42fcaa3800a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_37ab583600df3a226575c337592e926d65d358af4f44d13b29a42fcaa3800a8d->leave($__internal_37ab583600df3a226575c337592e926d65d358af4f44d13b29a42fcaa3800a8d_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_31a724f2870a3ce2fefed38ac2d0e061fb696b39f4f7222fb60b33df773581d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31a724f2870a3ce2fefed38ac2d0e061fb696b39f4f7222fb60b33df773581d6->enter($__internal_31a724f2870a3ce2fefed38ac2d0e061fb696b39f4f7222fb60b33df773581d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
    ";
        
        $__internal_31a724f2870a3ce2fefed38ac2d0e061fb696b39f4f7222fb60b33df773581d6->leave($__internal_31a724f2870a3ce2fefed38ac2d0e061fb696b39f4f7222fb60b33df773581d6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 5,  41 => 4,  35 => 3,  11 => 1,);
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
        {{ include('@FOSUser/Security/login_content.html.twig') }}
    {% endblock fos_user_content %}
{% endblock %}
", "@FOSUser/Security/login.html.twig", "/var/www/html/symfonyBlog/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
