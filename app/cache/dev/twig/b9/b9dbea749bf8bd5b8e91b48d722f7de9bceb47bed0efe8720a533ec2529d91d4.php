<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_a0cec45657ade2d375e058ac836046585fbfb6246e0dfadf1c1290ae670d4e58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_d709c8adeb0f13cdaff32e79fd3e868d4b1ae35f6576cc2b0641c281f75b001f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d709c8adeb0f13cdaff32e79fd3e868d4b1ae35f6576cc2b0641c281f75b001f->enter($__internal_d709c8adeb0f13cdaff32e79fd3e868d4b1ae35f6576cc2b0641c281f75b001f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d709c8adeb0f13cdaff32e79fd3e868d4b1ae35f6576cc2b0641c281f75b001f->leave($__internal_d709c8adeb0f13cdaff32e79fd3e868d4b1ae35f6576cc2b0641c281f75b001f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_41789429aea1533980b42e6ce4fd1d9e506c0ec0f76c6d60bdffdb62498691b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41789429aea1533980b42e6ce4fd1d9e506c0ec0f76c6d60bdffdb62498691b0->enter($__internal_41789429aea1533980b42e6ce4fd1d9e506c0ec0f76c6d60bdffdb62498691b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_41789429aea1533980b42e6ce4fd1d9e506c0ec0f76c6d60bdffdb62498691b0->leave($__internal_41789429aea1533980b42e6ce4fd1d9e506c0ec0f76c6d60bdffdb62498691b0_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f92a29d86f08ebd9c66f5307e50ee8470ebd94da505a48cbb41cc8b674c77c20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f92a29d86f08ebd9c66f5307e50ee8470ebd94da505a48cbb41cc8b674c77c20->enter($__internal_f92a29d86f08ebd9c66f5307e50ee8470ebd94da505a48cbb41cc8b674c77c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "        ";
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        
        $__internal_f92a29d86f08ebd9c66f5307e50ee8470ebd94da505a48cbb41cc8b674c77c20->leave($__internal_f92a29d86f08ebd9c66f5307e50ee8470ebd94da505a48cbb41cc8b674c77c20_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
        {% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
    {% endblock fos_user_content %}
{% endblock %}

", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/html/symfonyBlog/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
