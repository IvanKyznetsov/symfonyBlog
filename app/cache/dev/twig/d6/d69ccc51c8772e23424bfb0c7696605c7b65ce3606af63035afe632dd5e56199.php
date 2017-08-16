<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_032f275f3e6c8ce80e64d0ed7975a71d743de4c8914c50c2a40649e3d394c732 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d85d9a0a6783759cdb555aa8e2e641d38fedd9a880e4b0e45a5c9e6ae23a4e69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d85d9a0a6783759cdb555aa8e2e641d38fedd9a880e4b0e45a5c9e6ae23a4e69->enter($__internal_d85d9a0a6783759cdb555aa8e2e641d38fedd9a880e4b0e45a5c9e6ae23a4e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_d85d9a0a6783759cdb555aa8e2e641d38fedd9a880e4b0e45a5c9e6ae23a4e69->leave($__internal_d85d9a0a6783759cdb555aa8e2e641d38fedd9a880e4b0e45a5c9e6ae23a4e69_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "/var/www/html/symfonyBlog/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_base.html.twig");
    }
}
