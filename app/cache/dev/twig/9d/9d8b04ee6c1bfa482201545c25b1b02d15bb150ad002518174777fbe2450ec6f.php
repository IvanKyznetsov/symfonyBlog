<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_47f48c3670c7e84892d7667d0dd026979cd29cb09de4eeb78b61339ffaaca1c0 extends Twig_Template
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
        $__internal_55a6381c47acb82cd034e44cc9390f39b9b48d4fa84f63ecd2559e7a8397cbb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55a6381c47acb82cd034e44cc9390f39b9b48d4fa84f63ecd2559e7a8397cbb2->enter($__internal_55a6381c47acb82cd034e44cc9390f39b9b48d4fa84f63ecd2559e7a8397cbb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_55a6381c47acb82cd034e44cc9390f39b9b48d4fa84f63ecd2559e7a8397cbb2->leave($__internal_55a6381c47acb82cd034e44cc9390f39b9b48d4fa84f63ecd2559e7a8397cbb2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
