<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_37b29bb2f75eda9c94bf03998d02c19298feef3a1c16bb6f9e2ab1c2e5e0c5b8 extends Twig_Template
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
        $__internal_37c237aef54e3cb00b9c9d933db7f0ca5ad4063312ce6c02d86b3d2741c861f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37c237aef54e3cb00b9c9d933db7f0ca5ad4063312ce6c02d86b3d2741c861f2->enter($__internal_37c237aef54e3cb00b9c9d933db7f0ca5ad4063312ce6c02d86b3d2741c861f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_37c237aef54e3cb00b9c9d933db7f0ca5ad4063312ce6c02d86b3d2741c861f2->leave($__internal_37c237aef54e3cb00b9c9d933db7f0ca5ad4063312ce6c02d86b3d2741c861f2_prof);

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
