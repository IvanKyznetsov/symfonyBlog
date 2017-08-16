<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_f2a1b66e82b44c6578a46191548491d0e8d9cd4322267dd392e65f53bdf1d0e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_dffd33b3c0559b7d34886ba62f5833e77df3ee4932a6171e3040770f1b650d48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dffd33b3c0559b7d34886ba62f5833e77df3ee4932a6171e3040770f1b650d48->enter($__internal_dffd33b3c0559b7d34886ba62f5833e77df3ee4932a6171e3040770f1b650d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dffd33b3c0559b7d34886ba62f5833e77df3ee4932a6171e3040770f1b650d48->leave($__internal_dffd33b3c0559b7d34886ba62f5833e77df3ee4932a6171e3040770f1b650d48_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0bf9fc77ce0509bc3fc19e07eba1c4fd49d27d7551127d5675eb51958ef20b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0bf9fc77ce0509bc3fc19e07eba1c4fd49d27d7551127d5675eb51958ef20b5->enter($__internal_a0bf9fc77ce0509bc3fc19e07eba1c4fd49d27d7551127d5675eb51958ef20b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_a0bf9fc77ce0509bc3fc19e07eba1c4fd49d27d7551127d5675eb51958ef20b5->leave($__internal_a0bf9fc77ce0509bc3fc19e07eba1c4fd49d27d7551127d5675eb51958ef20b5_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5a784ec213fb090467596c463fb551f0810518641aefd91b637e8565669af0ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a784ec213fb090467596c463fb551f0810518641aefd91b637e8565669af0ba->enter($__internal_5a784ec213fb090467596c463fb551f0810518641aefd91b637e8565669af0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "        ";
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        
        $__internal_5a784ec213fb090467596c463fb551f0810518641aefd91b637e8565669af0ba->leave($__internal_5a784ec213fb090467596c463fb551f0810518641aefd91b637e8565669af0ba_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
        {% include \"@FOSUser/Group/list_content.html.twig\" %}
    {% endblock fos_user_content %}
{% endblock %}

", "FOSUserBundle:Group:list.html.twig", "/var/www/html/symfonyBlog/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
