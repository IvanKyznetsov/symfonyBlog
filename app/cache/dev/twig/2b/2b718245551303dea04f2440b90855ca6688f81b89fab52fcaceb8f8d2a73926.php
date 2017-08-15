<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_e0e44ca92bd46f06f99b3fcd808d8bc1c30df5866fd00d3a0c57782f7839bf7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_c20af05159a7eacd488c6deb8f100b96449ce6f4e32afea016064ed1c4e49169 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c20af05159a7eacd488c6deb8f100b96449ce6f4e32afea016064ed1c4e49169->enter($__internal_c20af05159a7eacd488c6deb8f100b96449ce6f4e32afea016064ed1c4e49169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c20af05159a7eacd488c6deb8f100b96449ce6f4e32afea016064ed1c4e49169->leave($__internal_c20af05159a7eacd488c6deb8f100b96449ce6f4e32afea016064ed1c4e49169_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7b7fa940d60a44a5b4f922aa04051fcc7ce4e34777219f0fba05c37d85da39b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b7fa940d60a44a5b4f922aa04051fcc7ce4e34777219f0fba05c37d85da39b7->enter($__internal_7b7fa940d60a44a5b4f922aa04051fcc7ce4e34777219f0fba05c37d85da39b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_7b7fa940d60a44a5b4f922aa04051fcc7ce4e34777219f0fba05c37d85da39b7->leave($__internal_7b7fa940d60a44a5b4f922aa04051fcc7ce4e34777219f0fba05c37d85da39b7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/html/symfonyBlog/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
