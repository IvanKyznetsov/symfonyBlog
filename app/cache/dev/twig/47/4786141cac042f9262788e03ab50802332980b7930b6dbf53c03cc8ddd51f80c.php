<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_d1db21a1a92562d7b2a0e20be5c70326a93e084a8f71e206809906c9cd583995 extends Twig_Template
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
        $__internal_8a490b1c25b0774a8013ac1c5f76e60ec2e7da8de54f5df5212123a42c5ba979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a490b1c25b0774a8013ac1c5f76e60ec2e7da8de54f5df5212123a42c5ba979->enter($__internal_8a490b1c25b0774a8013ac1c5f76e60ec2e7da8de54f5df5212123a42c5ba979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_8a490b1c25b0774a8013ac1c5f76e60ec2e7da8de54f5df5212123a42c5ba979->leave($__internal_8a490b1c25b0774a8013ac1c5f76e60ec2e7da8de54f5df5212123a42c5ba979_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
