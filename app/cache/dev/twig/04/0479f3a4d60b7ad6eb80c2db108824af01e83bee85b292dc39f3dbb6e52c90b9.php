<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_6933b1f91288c2db36204fbb8fa8ba3e87f3768d774b0b693e16f593d160c8eb extends Twig_Template
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
        $__internal_f0ff3c815e97165febadb67d97d0c71ce23173dc3843126adb13ca5bb3d87e10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0ff3c815e97165febadb67d97d0c71ce23173dc3843126adb13ca5bb3d87e10->enter($__internal_f0ff3c815e97165febadb67d97d0c71ce23173dc3843126adb13ca5bb3d87e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_f0ff3c815e97165febadb67d97d0c71ce23173dc3843126adb13ca5bb3d87e10->leave($__internal_f0ff3c815e97165febadb67d97d0c71ce23173dc3843126adb13ca5bb3d87e10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
