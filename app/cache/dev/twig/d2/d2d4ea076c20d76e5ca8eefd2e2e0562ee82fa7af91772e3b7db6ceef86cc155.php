<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_b3fe80b19e6ef8634ecfb3387d9131b5b0c8a5c56eaca4e91d5a7ad8e65843ba extends Twig_Template
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
        $__internal_6c71a3e881be8aca6369dd193834244d9ae4cea53775a8be008f7b7ab3fd7938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c71a3e881be8aca6369dd193834244d9ae4cea53775a8be008f7b7ab3fd7938->enter($__internal_6c71a3e881be8aca6369dd193834244d9ae4cea53775a8be008f7b7ab3fd7938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_6c71a3e881be8aca6369dd193834244d9ae4cea53775a8be008f7b7ab3fd7938->leave($__internal_6c71a3e881be8aca6369dd193834244d9ae4cea53775a8be008f7b7ab3fd7938_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
