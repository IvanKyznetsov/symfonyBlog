<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_d683b723041bf111d0eace442e79cb5446653d6e0118a08d7175a049c9f4ea92 extends Twig_Template
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
        $__internal_1ac118d7500440fdb966bf56131d2253ac7ec51d6f43b5a29dfd27396fa2082e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac118d7500440fdb966bf56131d2253ac7ec51d6f43b5a29dfd27396fa2082e->enter($__internal_1ac118d7500440fdb966bf56131d2253ac7ec51d6f43b5a29dfd27396fa2082e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1ac118d7500440fdb966bf56131d2253ac7ec51d6f43b5a29dfd27396fa2082e->leave($__internal_1ac118d7500440fdb966bf56131d2253ac7ec51d6f43b5a29dfd27396fa2082e_prof);

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
