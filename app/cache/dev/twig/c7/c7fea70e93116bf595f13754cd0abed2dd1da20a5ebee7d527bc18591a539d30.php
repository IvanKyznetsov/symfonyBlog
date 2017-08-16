<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_f4043d22f5cc647f99a5c876f942b0f6c75bc12f98b5eb7a2914de1be6146538 extends Twig_Template
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
        $__internal_3cdf1c03a6752a9a7f54f6d10aeedb5bf941cc32af99c9b479979bf8f667ac33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cdf1c03a6752a9a7f54f6d10aeedb5bf941cc32af99c9b479979bf8f667ac33->enter($__internal_3cdf1c03a6752a9a7f54f6d10aeedb5bf941cc32af99c9b479979bf8f667ac33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_3cdf1c03a6752a9a7f54f6d10aeedb5bf941cc32af99c9b479979bf8f667ac33->leave($__internal_3cdf1c03a6752a9a7f54f6d10aeedb5bf941cc32af99c9b479979bf8f667ac33_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
