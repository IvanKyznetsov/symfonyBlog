<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_05c69cbb92f69e916125891a998927715a82aaa481205b5ab0e73b4d146cbc1d extends Twig_Template
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
        $__internal_0db6a9a74152cb5e33614cc11fbb08c101556cf2507efdeff8033933f9fd0d0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0db6a9a74152cb5e33614cc11fbb08c101556cf2507efdeff8033933f9fd0d0f->enter($__internal_0db6a9a74152cb5e33614cc11fbb08c101556cf2507efdeff8033933f9fd0d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0db6a9a74152cb5e33614cc11fbb08c101556cf2507efdeff8033933f9fd0d0f->leave($__internal_0db6a9a74152cb5e33614cc11fbb08c101556cf2507efdeff8033933f9fd0d0f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8df0eee89c022254f21ea043f4a0a49faed9762f476b9abe9f66907b08b865d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8df0eee89c022254f21ea043f4a0a49faed9762f476b9abe9f66907b08b865d->enter($__internal_b8df0eee89c022254f21ea043f4a0a49faed9762f476b9abe9f66907b08b865d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_b8df0eee89c022254f21ea043f4a0a49faed9762f476b9abe9f66907b08b865d->leave($__internal_b8df0eee89c022254f21ea043f4a0a49faed9762f476b9abe9f66907b08b865d_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8b4bfe27370076728b629f3c049ad7c6dcc18c2be4a25d25bd95212d818513cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b4bfe27370076728b629f3c049ad7c6dcc18c2be4a25d25bd95212d818513cc->enter($__internal_8b4bfe27370076728b629f3c049ad7c6dcc18c2be4a25d25bd95212d818513cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
    ";
        
        $__internal_8b4bfe27370076728b629f3c049ad7c6dcc18c2be4a25d25bd95212d818513cc->leave($__internal_8b4bfe27370076728b629f3c049ad7c6dcc18c2be4a25d25bd95212d818513cc_prof);

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
