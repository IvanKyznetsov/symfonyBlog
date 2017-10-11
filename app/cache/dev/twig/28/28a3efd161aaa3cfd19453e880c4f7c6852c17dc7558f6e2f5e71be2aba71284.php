<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_d2fc17717146f3226517520e6cf17188bbb087f16ad8ca76450a5e34698fe51e extends Twig_Template
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
        $__internal_055748a390f8be6163b0922929082bfca75914edb12402aa8cd4b5b825ac725a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_055748a390f8be6163b0922929082bfca75914edb12402aa8cd4b5b825ac725a->enter($__internal_055748a390f8be6163b0922929082bfca75914edb12402aa8cd4b5b825ac725a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_055748a390f8be6163b0922929082bfca75914edb12402aa8cd4b5b825ac725a->leave($__internal_055748a390f8be6163b0922929082bfca75914edb12402aa8cd4b5b825ac725a_prof);

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
