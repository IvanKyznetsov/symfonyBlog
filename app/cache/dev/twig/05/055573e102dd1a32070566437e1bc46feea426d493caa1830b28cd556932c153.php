<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_e46424a3d24f307036044492c5a9b2999e7da4313207ad4ab7b8c39e29f82dd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e73e343946805bd82c8e4d3f01de18e53113be93b2a0d4e899a6fd3204fc0ba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e73e343946805bd82c8e4d3f01de18e53113be93b2a0d4e899a6fd3204fc0ba2->enter($__internal_e73e343946805bd82c8e4d3f01de18e53113be93b2a0d4e899a6fd3204fc0ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_e73e343946805bd82c8e4d3f01de18e53113be93b2a0d4e899a6fd3204fc0ba2->leave($__internal_e73e343946805bd82c8e4d3f01de18e53113be93b2a0d4e899a6fd3204fc0ba2_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_bcac6f9b24e690c773d4d9633c78d995a2e85827c12fb15b032ad4c974cd825f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcac6f9b24e690c773d4d9633c78d995a2e85827c12fb15b032ad4c974cd825f->enter($__internal_bcac6f9b24e690c773d4d9633c78d995a2e85827c12fb15b032ad4c974cd825f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_bcac6f9b24e690c773d4d9633c78d995a2e85827c12fb15b032ad4c974cd825f->leave($__internal_bcac6f9b24e690c773d4d9633c78d995a2e85827c12fb15b032ad4c974cd825f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block user_block %}{# Customize this value #}{% endblock %}
", "SonataAdminBundle:Core:user_block.html.twig", "/var/www/html/symfonyBlog/vendor/sonata-project/admin-bundle/Resources/views/Core/user_block.html.twig");
    }
}
