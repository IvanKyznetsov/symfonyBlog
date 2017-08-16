<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_46091b84935ebb1fded85a29c38371252b660f174cd441dab272639e1b41ab85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49d644978a3923d11edb5348e01a3f905898c1b20c2d8cc7c65ca738c7847384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49d644978a3923d11edb5348e01a3f905898c1b20c2d8cc7c65ca738c7847384->enter($__internal_49d644978a3923d11edb5348e01a3f905898c1b20c2d8cc7c65ca738c7847384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49d644978a3923d11edb5348e01a3f905898c1b20c2d8cc7c65ca738c7847384->leave($__internal_49d644978a3923d11edb5348e01a3f905898c1b20c2d8cc7c65ca738c7847384_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_b433d36cade7f3a584148b07616a365e134df1020743e25f873896fd911601f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b433d36cade7f3a584148b07616a365e134df1020743e25f873896fd911601f2->enter($__internal_b433d36cade7f3a584148b07616a365e134df1020743e25f873896fd911601f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_b433d36cade7f3a584148b07616a365e134df1020743e25f873896fd911601f2->leave($__internal_b433d36cade7f3a584148b07616a365e134df1020743e25f873896fd911601f2_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_51b8fbb1dfec99605673bef0bdef41e1d96cf7ca10f8ef22310ef985c9d82557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51b8fbb1dfec99605673bef0bdef41e1d96cf7ca10f8ef22310ef985c9d82557->enter($__internal_51b8fbb1dfec99605673bef0bdef41e1d96cf7ca10f8ef22310ef985c9d82557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_51b8fbb1dfec99605673bef0bdef41e1d96cf7ca10f8ef22310ef985c9d82557->leave($__internal_51b8fbb1dfec99605673bef0bdef41e1d96cf7ca10f8ef22310ef985c9d82557_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_22e18f6840bb78d5fdad90af776f63d08135dd15cebb2a81c2eedb55d0c81e08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22e18f6840bb78d5fdad90af776f63d08135dd15cebb2a81c2eedb55d0c81e08->enter($__internal_22e18f6840bb78d5fdad90af776f63d08135dd15cebb2a81c2eedb55d0c81e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_22e18f6840bb78d5fdad90af776f63d08135dd15cebb2a81c2eedb55d0c81e08->leave($__internal_22e18f6840bb78d5fdad90af776f63d08135dd15cebb2a81c2eedb55d0c81e08_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_3eb2d45d2798e2a8db9245d796a08e81ebe0dda847309dbeda439301599aaa73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eb2d45d2798e2a8db9245d796a08e81ebe0dda847309dbeda439301599aaa73->enter($__internal_3eb2d45d2798e2a8db9245d796a08e81ebe0dda847309dbeda439301599aaa73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_3eb2d45d2798e2a8db9245d796a08e81ebe0dda847309dbeda439301599aaa73->leave($__internal_3eb2d45d2798e2a8db9245d796a08e81ebe0dda847309dbeda439301599aaa73_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_850881ad2bc3bd8472648971d5aba3ba38660a6352a19f4391780d9037e9806c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_850881ad2bc3bd8472648971d5aba3ba38660a6352a19f4391780d9037e9806c->enter($__internal_850881ad2bc3bd8472648971d5aba3ba38660a6352a19f4391780d9037e9806c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>
";
        
        $__internal_850881ad2bc3bd8472648971d5aba3ba38660a6352a19f4391780d9037e9806c->leave($__internal_850881ad2bc3bd8472648971d5aba3ba38660a6352a19f4391780d9037e9806c_prof);

    }

    // line 30
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_9167be0e68a5b6181fd279115b7567e4d90176be6b604a1afd5318deff9d8c57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9167be0e68a5b6181fd279115b7567e4d90176be6b604a1afd5318deff9d8c57->enter($__internal_9167be0e68a5b6181fd279115b7567e4d90176be6b604a1afd5318deff9d8c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 31
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_9167be0e68a5b6181fd279115b7567e4d90176be6b604a1afd5318deff9d8c57->leave($__internal_9167be0e68a5b6181fd279115b7567e4d90176be6b604a1afd5318deff9d8c57_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_1258ad7a5de9a5dc4e9c4842f0131d4d0b4f36d3f76ceaada2a318ce5b9e5c3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1258ad7a5de9a5dc4e9c4842f0131d4d0b4f36d3f76ceaada2a318ce5b9e5c3a->enter($__internal_1258ad7a5de9a5dc4e9c4842f0131d4d0b4f36d3f76ceaada2a318ce5b9e5c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 32
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_1258ad7a5de9a5dc4e9c4842f0131d4d0b4f36d3f76ceaada2a318ce5b9e5c3a->leave($__internal_1258ad7a5de9a5dc4e9c4842f0131d4d0b4f36d3f76ceaada2a318ce5b9e5c3a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 32,  112 => 31,  106 => 30,  89 => 20,  83 => 19,  72 => 17,  61 => 16,  50 => 15,  39 => 14,  24 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin_pool.getTemplate('layout') %}

{% block sonata_header %}{% endblock %}
{% block sonata_left_side %}{% endblock %}
{% block sonata_nav %}{% endblock %}
{% block sonata_breadcrumb %}{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>
{% endblock %}

{% block sonata_wrapper %}
    {% block sonata_page_content %}
        {{ parent() }}
    {% endblock %}
{% endblock %}
", "SonataAdminBundle::empty_layout.html.twig", "/var/www/html/symfonyBlog/vendor/sonata-project/admin-bundle/Resources/views/empty_layout.html.twig");
    }
}
