<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_49764aece983fec18d490f2fa4f00e65028c381dc0f92002c65e4e875889558f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_d4ac78bc543aab1045c6fedc010114578273971df981d237d574ef2f0b95430a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4ac78bc543aab1045c6fedc010114578273971df981d237d574ef2f0b95430a->enter($__internal_d4ac78bc543aab1045c6fedc010114578273971df981d237d574ef2f0b95430a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4ac78bc543aab1045c6fedc010114578273971df981d237d574ef2f0b95430a->leave($__internal_d4ac78bc543aab1045c6fedc010114578273971df981d237d574ef2f0b95430a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f991e9a1ced5f161ec33565d8a0ee1e9f41963a518361ccee16471405c0e3e8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f991e9a1ced5f161ec33565d8a0ee1e9f41963a518361ccee16471405c0e3e8a->enter($__internal_f991e9a1ced5f161ec33565d8a0ee1e9f41963a518361ccee16471405c0e3e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_f991e9a1ced5f161ec33565d8a0ee1e9f41963a518361ccee16471405c0e3e8a->leave($__internal_f991e9a1ced5f161ec33565d8a0ee1e9f41963a518361ccee16471405c0e3e8a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/html/symfonyBlog/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
