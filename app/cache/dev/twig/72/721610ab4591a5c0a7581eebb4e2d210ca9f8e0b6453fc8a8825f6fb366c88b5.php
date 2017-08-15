<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_7d8f7b712edc9743fb1c8d5488991ec878c1153bb14c6ba4d2888a0e1cba5dd8 extends Twig_Template
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
        $__internal_fa2e3b5192218c08d4a2df6fcdb8fe007d285b3cfcdfdf8865b75e00e4d332f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa2e3b5192218c08d4a2df6fcdb8fe007d285b3cfcdfdf8865b75e00e4d332f5->enter($__internal_fa2e3b5192218c08d4a2df6fcdb8fe007d285b3cfcdfdf8865b75e00e4d332f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_fa2e3b5192218c08d4a2df6fcdb8fe007d285b3cfcdfdf8865b75e00e4d332f5->leave($__internal_fa2e3b5192218c08d4a2df6fcdb8fe007d285b3cfcdfdf8865b75e00e4d332f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
