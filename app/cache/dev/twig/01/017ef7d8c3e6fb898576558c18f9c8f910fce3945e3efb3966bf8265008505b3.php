<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_638345d85aa3bb40b1f2d174042466bc5c7bd6a665e332446342f68841d676af extends Twig_Template
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
        $__internal_d4c03fd1fe7fe170407b13ea331b25cb07019fb6310fa499d6d039dbd962fd24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4c03fd1fe7fe170407b13ea331b25cb07019fb6310fa499d6d039dbd962fd24->enter($__internal_d4c03fd1fe7fe170407b13ea331b25cb07019fb6310fa499d6d039dbd962fd24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_d4c03fd1fe7fe170407b13ea331b25cb07019fb6310fa499d6d039dbd962fd24->leave($__internal_d4c03fd1fe7fe170407b13ea331b25cb07019fb6310fa499d6d039dbd962fd24_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
