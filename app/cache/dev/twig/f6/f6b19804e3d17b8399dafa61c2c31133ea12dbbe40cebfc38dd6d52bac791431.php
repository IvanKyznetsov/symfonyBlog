<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_40e1399c1bebd535f2041429396b1338b9eaa8ec0c70f3679fae79e6016559ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_7c1584021d1c37ec334420c4e42bd6c104eb90cebedcedf62b49491a24d76db1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c1584021d1c37ec334420c4e42bd6c104eb90cebedcedf62b49491a24d76db1->enter($__internal_7c1584021d1c37ec334420c4e42bd6c104eb90cebedcedf62b49491a24d76db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c1584021d1c37ec334420c4e42bd6c104eb90cebedcedf62b49491a24d76db1->leave($__internal_7c1584021d1c37ec334420c4e42bd6c104eb90cebedcedf62b49491a24d76db1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8bc385f4c21c95b1895c1665393408eb95e5ef66157ac5d43c2fcdc06d49de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8bc385f4c21c95b1895c1665393408eb95e5ef66157ac5d43c2fcdc06d49de8->enter($__internal_f8bc385f4c21c95b1895c1665393408eb95e5ef66157ac5d43c2fcdc06d49de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_f8bc385f4c21c95b1895c1665393408eb95e5ef66157ac5d43c2fcdc06d49de8->leave($__internal_f8bc385f4c21c95b1895c1665393408eb95e5ef66157ac5d43c2fcdc06d49de8_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_393e57be233d3a0003588d8cbbc17123286d7f5b6beffa3a1e9ec9cc192adf75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_393e57be233d3a0003588d8cbbc17123286d7f5b6beffa3a1e9ec9cc192adf75->enter($__internal_393e57be233d3a0003588d8cbbc17123286d7f5b6beffa3a1e9ec9cc192adf75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "        ";
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        
        $__internal_393e57be233d3a0003588d8cbbc17123286d7f5b6beffa3a1e9ec9cc192adf75->leave($__internal_393e57be233d3a0003588d8cbbc17123286d7f5b6beffa3a1e9ec9cc192adf75_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
        {% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
    {% endblock fos_user_content %}
{% endblock %}

", "@FOSUser/ChangePassword/change_password.html.twig", "/var/www/html/symfonyBlog/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
