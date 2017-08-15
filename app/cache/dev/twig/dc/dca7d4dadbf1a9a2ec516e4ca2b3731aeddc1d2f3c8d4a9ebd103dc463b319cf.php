<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_4624eb20a2dbf15074094111fc858040460a54e6c4285db403f27eaa3ec657e2 extends Twig_Template
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
        $__internal_3887c4b9cbd8c2a23647907029134c39027ebd5b06877fdf182e3854b609ed76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3887c4b9cbd8c2a23647907029134c39027ebd5b06877fdf182e3854b609ed76->enter($__internal_3887c4b9cbd8c2a23647907029134c39027ebd5b06877fdf182e3854b609ed76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_3887c4b9cbd8c2a23647907029134c39027ebd5b06877fdf182e3854b609ed76->leave($__internal_3887c4b9cbd8c2a23647907029134c39027ebd5b06877fdf182e3854b609ed76_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
