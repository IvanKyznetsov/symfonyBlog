<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_e07fac4b1a3c4abee20eb75e334fd42c030a2ed816bd0058082f0eddda573f0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_b054d13ee09c167b36af68a652536b6cbb3be11ed32da21c5fcf4ef11018ea32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b054d13ee09c167b36af68a652536b6cbb3be11ed32da21c5fcf4ef11018ea32->enter($__internal_b054d13ee09c167b36af68a652536b6cbb3be11ed32da21c5fcf4ef11018ea32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b054d13ee09c167b36af68a652536b6cbb3be11ed32da21c5fcf4ef11018ea32->leave($__internal_b054d13ee09c167b36af68a652536b6cbb3be11ed32da21c5fcf4ef11018ea32_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f18dd5f329a8277a974e5c11c1573808bb26c26aeaa70850bc8e03560945653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f18dd5f329a8277a974e5c11c1573808bb26c26aeaa70850bc8e03560945653->enter($__internal_6f18dd5f329a8277a974e5c11c1573808bb26c26aeaa70850bc8e03560945653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_6f18dd5f329a8277a974e5c11c1573808bb26c26aeaa70850bc8e03560945653->leave($__internal_6f18dd5f329a8277a974e5c11c1573808bb26c26aeaa70850bc8e03560945653_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6b1eef52005029563df0c5e8eeb91a0c663e8292c752f3fba67c749a34a431a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b1eef52005029563df0c5e8eeb91a0c663e8292c752f3fba67c749a34a431a8->enter($__internal_6b1eef52005029563df0c5e8eeb91a0c663e8292c752f3fba67c749a34a431a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "        ";
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        
        $__internal_6b1eef52005029563df0c5e8eeb91a0c663e8292c752f3fba67c749a34a431a8->leave($__internal_6b1eef52005029563df0c5e8eeb91a0c663e8292c752f3fba67c749a34a431a8_prof);

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
        {% include \"@FOSUser/Registration/register_content.html.twig\" %}
    {% endblock fos_user_content %}
{% endblock %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/html/symfonyBlog/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
