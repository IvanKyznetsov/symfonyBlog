<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_ef931c51e7440a8ab015883b63f61d14fd9642187d4aefc163b3653a323dfd52 extends Twig_Template
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
        $__internal_da0cda51a35562ebb6567ee115756669b68a2d8a2da585cdcc0a7a4ee7366fbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da0cda51a35562ebb6567ee115756669b68a2d8a2da585cdcc0a7a4ee7366fbf->enter($__internal_da0cda51a35562ebb6567ee115756669b68a2d8a2da585cdcc0a7a4ee7366fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_da0cda51a35562ebb6567ee115756669b68a2d8a2da585cdcc0a7a4ee7366fbf->leave($__internal_da0cda51a35562ebb6567ee115756669b68a2d8a2da585cdcc0a7a4ee7366fbf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
