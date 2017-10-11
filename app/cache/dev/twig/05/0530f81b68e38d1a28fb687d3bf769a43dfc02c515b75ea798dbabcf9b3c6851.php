<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_b1c91d6f4e473fc95751f3518fbb9dbd590eddc778815f2bbd6004dec5106bf7 extends Twig_Template
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
        $__internal_aec91e31fff7bf55e4f63fca1f11b9a00b5efef492e0404d87d7449a6fc46a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aec91e31fff7bf55e4f63fca1f11b9a00b5efef492e0404d87d7449a6fc46a52->enter($__internal_aec91e31fff7bf55e4f63fca1f11b9a00b5efef492e0404d87d7449a6fc46a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_aec91e31fff7bf55e4f63fca1f11b9a00b5efef492e0404d87d7449a6fc46a52->leave($__internal_aec91e31fff7bf55e4f63fca1f11b9a00b5efef492e0404d87d7449a6fc46a52_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
