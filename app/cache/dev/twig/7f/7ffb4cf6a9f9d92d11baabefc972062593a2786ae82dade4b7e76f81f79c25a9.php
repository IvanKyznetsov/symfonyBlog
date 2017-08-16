<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_0c8b490d452139e3ef93fc18e98d14019e56a215a875b0ceeff47a81bc093c8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_3c52d6cf301ea8f942d783a29e99db945de277e7ae5d4f494859917e1abc24ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c52d6cf301ea8f942d783a29e99db945de277e7ae5d4f494859917e1abc24ff->enter($__internal_3c52d6cf301ea8f942d783a29e99db945de277e7ae5d4f494859917e1abc24ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c52d6cf301ea8f942d783a29e99db945de277e7ae5d4f494859917e1abc24ff->leave($__internal_3c52d6cf301ea8f942d783a29e99db945de277e7ae5d4f494859917e1abc24ff_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_510eec455d2cbe03ad9fd0dfb78ca07e9b8f7364dd1e1ea0027ec922f3ced6fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_510eec455d2cbe03ad9fd0dfb78ca07e9b8f7364dd1e1ea0027ec922f3ced6fa->enter($__internal_510eec455d2cbe03ad9fd0dfb78ca07e9b8f7364dd1e1ea0027ec922f3ced6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_510eec455d2cbe03ad9fd0dfb78ca07e9b8f7364dd1e1ea0027ec922f3ced6fa->leave($__internal_510eec455d2cbe03ad9fd0dfb78ca07e9b8f7364dd1e1ea0027ec922f3ced6fa_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b915150edfc0301df57379a0ded9ef1b55c1d4da5e01c7ad69b9f962fb089600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b915150edfc0301df57379a0ded9ef1b55c1d4da5e01c7ad69b9f962fb089600->enter($__internal_b915150edfc0301df57379a0ded9ef1b55c1d4da5e01c7ad69b9f962fb089600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "        ";
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        
        $__internal_b915150edfc0301df57379a0ded9ef1b55c1d4da5e01c7ad69b9f962fb089600->leave($__internal_b915150edfc0301df57379a0ded9ef1b55c1d4da5e01c7ad69b9f962fb089600_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
        {% include \"@FOSUser/Resetting/request_content.html.twig\" %}
    {% endblock fos_user_content %}
{% endblock %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/html/symfonyBlog/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
