<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_87057c3cc101462f54a38e5e50e1a54e01ad976640d351ff1cb3f2b24c9c70da extends Twig_Template
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
        $__internal_7296f19be77ba89ab64c4e6f0201aa23f303d273db979c40a00b1595fbd84a10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7296f19be77ba89ab64c4e6f0201aa23f303d273db979c40a00b1595fbd84a10->enter($__internal_7296f19be77ba89ab64c4e6f0201aa23f303d273db979c40a00b1595fbd84a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_7296f19be77ba89ab64c4e6f0201aa23f303d273db979c40a00b1595fbd84a10->leave($__internal_7296f19be77ba89ab64c4e6f0201aa23f303d273db979c40a00b1595fbd84a10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
