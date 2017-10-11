<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_95b2d3965ba2ba659d3561df0fea80d1f1ce77498c8fbf2d36e2d115e49e221a extends Twig_Template
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
        $__internal_780132a6bd58c4f519e4430a9ab5af2f1a8a3a86a7bb260f15c698b2cf799354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_780132a6bd58c4f519e4430a9ab5af2f1a8a3a86a7bb260f15c698b2cf799354->enter($__internal_780132a6bd58c4f519e4430a9ab5af2f1a8a3a86a7bb260f15c698b2cf799354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_780132a6bd58c4f519e4430a9ab5af2f1a8a3a86a7bb260f15c698b2cf799354->leave($__internal_780132a6bd58c4f519e4430a9ab5af2f1a8a3a86a7bb260f15c698b2cf799354_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_86e8e6a2a4fbbb20360b48e1c99c548e0ebfc88ba2dc7550befa5a13633d99db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86e8e6a2a4fbbb20360b48e1c99c548e0ebfc88ba2dc7550befa5a13633d99db->enter($__internal_86e8e6a2a4fbbb20360b48e1c99c548e0ebfc88ba2dc7550befa5a13633d99db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_86e8e6a2a4fbbb20360b48e1c99c548e0ebfc88ba2dc7550befa5a13633d99db->leave($__internal_86e8e6a2a4fbbb20360b48e1c99c548e0ebfc88ba2dc7550befa5a13633d99db_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c6ac7c7560e7e982119f047016d98037d87dea64490e63d067fe1ae3fcf3877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c6ac7c7560e7e982119f047016d98037d87dea64490e63d067fe1ae3fcf3877->enter($__internal_9c6ac7c7560e7e982119f047016d98037d87dea64490e63d067fe1ae3fcf3877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "        ";
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        
        $__internal_9c6ac7c7560e7e982119f047016d98037d87dea64490e63d067fe1ae3fcf3877->leave($__internal_9c6ac7c7560e7e982119f047016d98037d87dea64490e63d067fe1ae3fcf3877_prof);

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
