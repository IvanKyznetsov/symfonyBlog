<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_c6dffdaf859ce4dcceacc1526ba1f5b0179671fbf5c982d6d0d93909149e53e0 extends Twig_Template
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
        $__internal_7cf66c4f14f5ca26eac83ff24acb58442eb414a1ab91de0b255de6ee5ddf8ab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cf66c4f14f5ca26eac83ff24acb58442eb414a1ab91de0b255de6ee5ddf8ab7->enter($__internal_7cf66c4f14f5ca26eac83ff24acb58442eb414a1ab91de0b255de6ee5ddf8ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_7cf66c4f14f5ca26eac83ff24acb58442eb414a1ab91de0b255de6ee5ddf8ab7->leave($__internal_7cf66c4f14f5ca26eac83ff24acb58442eb414a1ab91de0b255de6ee5ddf8ab7_prof);

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
