<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_decaf7fd4903b3c0ecf3a6067292bb406af63adcd56a83102352ad1ebd0b7f68 extends Twig_Template
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
        $__internal_9efcff9fd058f5223dcce5b18bd548925755dce36487f629ffb38eed2013e697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9efcff9fd058f5223dcce5b18bd548925755dce36487f629ffb38eed2013e697->enter($__internal_9efcff9fd058f5223dcce5b18bd548925755dce36487f629ffb38eed2013e697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9efcff9fd058f5223dcce5b18bd548925755dce36487f629ffb38eed2013e697->leave($__internal_9efcff9fd058f5223dcce5b18bd548925755dce36487f629ffb38eed2013e697_prof);

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
