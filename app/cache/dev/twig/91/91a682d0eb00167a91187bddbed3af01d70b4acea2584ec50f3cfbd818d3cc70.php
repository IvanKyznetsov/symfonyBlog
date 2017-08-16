<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b309751ead015ec2bd366757a2291d82addb52584759e5841758c2a2b3dbe235 extends Twig_Template
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
        $__internal_3eb7cba8442fc889359ca3b7b7ad1c219f5fd886386301e57f5f66f1fc74d66a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eb7cba8442fc889359ca3b7b7ad1c219f5fd886386301e57f5f66f1fc74d66a->enter($__internal_3eb7cba8442fc889359ca3b7b7ad1c219f5fd886386301e57f5f66f1fc74d66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_3eb7cba8442fc889359ca3b7b7ad1c219f5fd886386301e57f5f66f1fc74d66a->leave($__internal_3eb7cba8442fc889359ca3b7b7ad1c219f5fd886386301e57f5f66f1fc74d66a_prof);

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
