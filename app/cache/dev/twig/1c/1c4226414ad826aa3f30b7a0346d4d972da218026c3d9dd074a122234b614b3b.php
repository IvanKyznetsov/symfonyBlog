<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_3c2c38ad1a09501b3d08519bdc490213c9ef152b73cc524ec134c8ecb557ebba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_a1eefe4cfd4a9cb152c8335349ebbf9551f5201022c7b9c72f09d4fbceb33144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1eefe4cfd4a9cb152c8335349ebbf9551f5201022c7b9c72f09d4fbceb33144->enter($__internal_a1eefe4cfd4a9cb152c8335349ebbf9551f5201022c7b9c72f09d4fbceb33144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1eefe4cfd4a9cb152c8335349ebbf9551f5201022c7b9c72f09d4fbceb33144->leave($__internal_a1eefe4cfd4a9cb152c8335349ebbf9551f5201022c7b9c72f09d4fbceb33144_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb3640c5a4199c94d81fd889c7304721205b450e0c5c7a6a37d5232bcef075a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb3640c5a4199c94d81fd889c7304721205b450e0c5c7a6a37d5232bcef075a3->enter($__internal_fb3640c5a4199c94d81fd889c7304721205b450e0c5c7a6a37d5232bcef075a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_fb3640c5a4199c94d81fd889c7304721205b450e0c5c7a6a37d5232bcef075a3->leave($__internal_fb3640c5a4199c94d81fd889c7304721205b450e0c5c7a6a37d5232bcef075a3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/html/symfonyBlog/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
