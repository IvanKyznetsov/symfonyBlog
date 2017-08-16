<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_200dafd61eae57821eeba53f06230d1d9de851dfdb52a7803465c78ad1af4f22 extends Twig_Template
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
        $__internal_bf219a9fdab264936cf0b66bcf155e09f2150ec1b2d3beda1910dce0b98c32a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf219a9fdab264936cf0b66bcf155e09f2150ec1b2d3beda1910dce0b98c32a9->enter($__internal_bf219a9fdab264936cf0b66bcf155e09f2150ec1b2d3beda1910dce0b98c32a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_bf219a9fdab264936cf0b66bcf155e09f2150ec1b2d3beda1910dce0b98c32a9->leave($__internal_bf219a9fdab264936cf0b66bcf155e09f2150ec1b2d3beda1910dce0b98c32a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
