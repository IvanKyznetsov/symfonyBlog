<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_e8f1137b0193c2062aee306a30a5ee572fd66d3572699f69ffa1b9e0ab3c3cff extends Twig_Template
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
        $__internal_922fc5e8c31dff472e3a7e46565d453164f5511298c125e2df10c84bd8391ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_922fc5e8c31dff472e3a7e46565d453164f5511298c125e2df10c84bd8391ef6->enter($__internal_922fc5e8c31dff472e3a7e46565d453164f5511298c125e2df10c84bd8391ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_922fc5e8c31dff472e3a7e46565d453164f5511298c125e2df10c84bd8391ef6->leave($__internal_922fc5e8c31dff472e3a7e46565d453164f5511298c125e2df10c84bd8391ef6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
