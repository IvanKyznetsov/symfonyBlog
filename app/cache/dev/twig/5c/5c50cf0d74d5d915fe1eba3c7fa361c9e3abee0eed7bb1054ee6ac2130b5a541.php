<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_d0e3f4e6c23cdc6d00e4bc5308f412badcf55c6d5287b07b531776bc1a179a89 extends Twig_Template
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
        $__internal_f2a62b3f2ff8403e43fc20063139965e17bb80fa717f8e8033bfbcc1d6b41b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2a62b3f2ff8403e43fc20063139965e17bb80fa717f8e8033bfbcc1d6b41b7c->enter($__internal_f2a62b3f2ff8403e43fc20063139965e17bb80fa717f8e8033bfbcc1d6b41b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_f2a62b3f2ff8403e43fc20063139965e17bb80fa717f8e8033bfbcc1d6b41b7c->leave($__internal_f2a62b3f2ff8403e43fc20063139965e17bb80fa717f8e8033bfbcc1d6b41b7c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
