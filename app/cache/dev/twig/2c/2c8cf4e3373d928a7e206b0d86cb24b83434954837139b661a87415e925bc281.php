<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_20322775817a53e1ad44fab4025d2f95fb824f5c45d23a90759d132f3d7a73ff extends Twig_Template
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
        $__internal_4ed8cb32165528cdc8f894c2ac328844a0c1b1fc9114e31cf35c32a5391b9b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ed8cb32165528cdc8f894c2ac328844a0c1b1fc9114e31cf35c32a5391b9b4f->enter($__internal_4ed8cb32165528cdc8f894c2ac328844a0c1b1fc9114e31cf35c32a5391b9b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_4ed8cb32165528cdc8f894c2ac328844a0c1b1fc9114e31cf35c32a5391b9b4f->leave($__internal_4ed8cb32165528cdc8f894c2ac328844a0c1b1fc9114e31cf35c32a5391b9b4f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
