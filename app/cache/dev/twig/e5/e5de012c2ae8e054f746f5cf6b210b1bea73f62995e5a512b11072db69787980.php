<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_46fdfde8a7dff0e5ce2d44bd528051fa8844e7078975c6b1d7ffd0645a0add21 extends Twig_Template
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
        $__internal_87ed6637783b03ebc5d11cbdd92f9c16720b9b1fff41d9afd47b22dfd42d8a8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87ed6637783b03ebc5d11cbdd92f9c16720b9b1fff41d9afd47b22dfd42d8a8e->enter($__internal_87ed6637783b03ebc5d11cbdd92f9c16720b9b1fff41d9afd47b22dfd42d8a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_87ed6637783b03ebc5d11cbdd92f9c16720b9b1fff41d9afd47b22dfd42d8a8e->leave($__internal_87ed6637783b03ebc5d11cbdd92f9c16720b9b1fff41d9afd47b22dfd42d8a8e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
