<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_6144ad097612f063a4ea94519e327c118d1f5ff42f92069791feb127831333eb extends Twig_Template
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
        $__internal_35f438cad7b5c34dff4eb2c4d1af0e22e1c21dd1bda8355229996465fd06280c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35f438cad7b5c34dff4eb2c4d1af0e22e1c21dd1bda8355229996465fd06280c->enter($__internal_35f438cad7b5c34dff4eb2c4d1af0e22e1c21dd1bda8355229996465fd06280c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_35f438cad7b5c34dff4eb2c4d1af0e22e1c21dd1bda8355229996465fd06280c->leave($__internal_35f438cad7b5c34dff4eb2c4d1af0e22e1c21dd1bda8355229996465fd06280c_prof);

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
