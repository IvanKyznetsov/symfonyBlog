<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_8dcfdd392900421d8ffefdefc60a0a35f5d6a489ccb81a57e5b4d8fc01401ed0 extends Twig_Template
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
        $__internal_7a1db7f31f8d0efc049d6fd0468abea39bd2cd296d1b9affc1e68c7b2be95f87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a1db7f31f8d0efc049d6fd0468abea39bd2cd296d1b9affc1e68c7b2be95f87->enter($__internal_7a1db7f31f8d0efc049d6fd0468abea39bd2cd296d1b9affc1e68c7b2be95f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_7a1db7f31f8d0efc049d6fd0468abea39bd2cd296d1b9affc1e68c7b2be95f87->leave($__internal_7a1db7f31f8d0efc049d6fd0468abea39bd2cd296d1b9affc1e68c7b2be95f87_prof);

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
