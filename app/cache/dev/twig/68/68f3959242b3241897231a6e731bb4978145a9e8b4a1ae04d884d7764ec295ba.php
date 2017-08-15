<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_2efbcc692b270312970f29e45533c96a4e5ffc674785b37ac7add7fc11408f17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_0c0acaa3e70c519853c9cfb7e2acf1a8eabe731a80595911020a6b1a5536bb6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c0acaa3e70c519853c9cfb7e2acf1a8eabe731a80595911020a6b1a5536bb6f->enter($__internal_0c0acaa3e70c519853c9cfb7e2acf1a8eabe731a80595911020a6b1a5536bb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c0acaa3e70c519853c9cfb7e2acf1a8eabe731a80595911020a6b1a5536bb6f->leave($__internal_0c0acaa3e70c519853c9cfb7e2acf1a8eabe731a80595911020a6b1a5536bb6f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6114749bf099b5b9c2ffd2bddaaf6197debf95fa5990cd30de81aaf3bde6e19b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6114749bf099b5b9c2ffd2bddaaf6197debf95fa5990cd30de81aaf3bde6e19b->enter($__internal_6114749bf099b5b9c2ffd2bddaaf6197debf95fa5990cd30de81aaf3bde6e19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_6114749bf099b5b9c2ffd2bddaaf6197debf95fa5990cd30de81aaf3bde6e19b->leave($__internal_6114749bf099b5b9c2ffd2bddaaf6197debf95fa5990cd30de81aaf3bde6e19b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/html/symfonyBlog/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
