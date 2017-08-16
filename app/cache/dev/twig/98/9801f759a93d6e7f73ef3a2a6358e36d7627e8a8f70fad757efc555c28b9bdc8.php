<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_3ccaf130946ca69d1a3fdbec268b3ab640f851caca0385dd26c31925f8bfa061 extends Twig_Template
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
        $__internal_e0d0143222db8ee88d149e1cd37e0b89fb4c93399f12ba0031abf46de153d9b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0d0143222db8ee88d149e1cd37e0b89fb4c93399f12ba0031abf46de153d9b2->enter($__internal_e0d0143222db8ee88d149e1cd37e0b89fb4c93399f12ba0031abf46de153d9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_e0d0143222db8ee88d149e1cd37e0b89fb4c93399f12ba0031abf46de153d9b2->leave($__internal_e0d0143222db8ee88d149e1cd37e0b89fb4c93399f12ba0031abf46de153d9b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
