<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_254fb6d8e239e2ca860f7489cfdd12e6f7527c29e500239d808742238e6e4edb extends Twig_Template
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
        $__internal_83e277db23ff80e1af9835cd63c45eb40b819f3cc41a758ce7ab118a13c3887e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83e277db23ff80e1af9835cd63c45eb40b819f3cc41a758ce7ab118a13c3887e->enter($__internal_83e277db23ff80e1af9835cd63c45eb40b819f3cc41a758ce7ab118a13c3887e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_83e277db23ff80e1af9835cd63c45eb40b819f3cc41a758ce7ab118a13c3887e->leave($__internal_83e277db23ff80e1af9835cd63c45eb40b819f3cc41a758ce7ab118a13c3887e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
