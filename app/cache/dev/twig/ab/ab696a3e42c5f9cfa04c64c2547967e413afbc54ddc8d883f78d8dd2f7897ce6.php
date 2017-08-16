<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_5d8f0f0f8422b1af77aeea2226533a95b156edc09f2adbe2d9ee16710e983d18 extends Twig_Template
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
        $__internal_650a2057a6e8b0bc5c1f965fba2fa43717ed7762a2a085a14547b3ec877e418c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_650a2057a6e8b0bc5c1f965fba2fa43717ed7762a2a085a14547b3ec877e418c->enter($__internal_650a2057a6e8b0bc5c1f965fba2fa43717ed7762a2a085a14547b3ec877e418c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_650a2057a6e8b0bc5c1f965fba2fa43717ed7762a2a085a14547b3ec877e418c->leave($__internal_650a2057a6e8b0bc5c1f965fba2fa43717ed7762a2a085a14547b3ec877e418c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
