<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_c67d9cd96af6ef4651be7f3ef36a6fadd4cae9a0666801a8bc3bb0d1e172e7d6 extends Twig_Template
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
        $__internal_77178e302b8555c844678998c4502e76ea1a8d8d330404cd8c0715a9df41d1ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77178e302b8555c844678998c4502e76ea1a8d8d330404cd8c0715a9df41d1ea->enter($__internal_77178e302b8555c844678998c4502e76ea1a8d8d330404cd8c0715a9df41d1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_77178e302b8555c844678998c4502e76ea1a8d8d330404cd8c0715a9df41d1ea->leave($__internal_77178e302b8555c844678998c4502e76ea1a8d8d330404cd8c0715a9df41d1ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
