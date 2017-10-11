<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_4502bf886e3438439d27123f8d07c1623e86c2e337f8fa53cde1098ae749395c extends Twig_Template
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
        $__internal_6385e7d634dbcb274da4d413edf8e11b2b0c1f71f51eed7cc9bc149392997ced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6385e7d634dbcb274da4d413edf8e11b2b0c1f71f51eed7cc9bc149392997ced->enter($__internal_6385e7d634dbcb274da4d413edf8e11b2b0c1f71f51eed7cc9bc149392997ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_6385e7d634dbcb274da4d413edf8e11b2b0c1f71f51eed7cc9bc149392997ced->leave($__internal_6385e7d634dbcb274da4d413edf8e11b2b0c1f71f51eed7cc9bc149392997ced_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
