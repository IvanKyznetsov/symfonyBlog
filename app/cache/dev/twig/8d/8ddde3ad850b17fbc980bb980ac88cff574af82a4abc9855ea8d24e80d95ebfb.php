<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_3e4d33a70c2e28ea3bd3fc89469e546c9426369bb37a5e02be39837ee653c5a4 extends Twig_Template
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
        $__internal_50c9ca1641399f82d86b2fabb8cc6f6658853a9097ab73636c108720f51cd545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50c9ca1641399f82d86b2fabb8cc6f6658853a9097ab73636c108720f51cd545->enter($__internal_50c9ca1641399f82d86b2fabb8cc6f6658853a9097ab73636c108720f51cd545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_50c9ca1641399f82d86b2fabb8cc6f6658853a9097ab73636c108720f51cd545->leave($__internal_50c9ca1641399f82d86b2fabb8cc6f6658853a9097ab73636c108720f51cd545_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
