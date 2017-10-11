<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_158d32a4c628b3d707857f4ba3a72e4f102c3c9479a66154a8e117d56556f542 extends Twig_Template
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
        $__internal_dac23baec8aa2ecbbc8bc0019de2f3914c444ab30ea54e776d7b1b8676c8a5e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dac23baec8aa2ecbbc8bc0019de2f3914c444ab30ea54e776d7b1b8676c8a5e1->enter($__internal_dac23baec8aa2ecbbc8bc0019de2f3914c444ab30ea54e776d7b1b8676c8a5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_dac23baec8aa2ecbbc8bc0019de2f3914c444ab30ea54e776d7b1b8676c8a5e1->leave($__internal_dac23baec8aa2ecbbc8bc0019de2f3914c444ab30ea54e776d7b1b8676c8a5e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
