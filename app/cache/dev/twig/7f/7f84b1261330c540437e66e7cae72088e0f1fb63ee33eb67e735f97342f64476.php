<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_b2dba499406e00069c29ed75ad42f9b32550a0b4043aae16ab276bdc5726e421 extends Twig_Template
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
        $__internal_752b24831676f9b7c06ed90b07217a2b9547d3ad4d764616013cf8231fea1876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_752b24831676f9b7c06ed90b07217a2b9547d3ad4d764616013cf8231fea1876->enter($__internal_752b24831676f9b7c06ed90b07217a2b9547d3ad4d764616013cf8231fea1876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_752b24831676f9b7c06ed90b07217a2b9547d3ad4d764616013cf8231fea1876->leave($__internal_752b24831676f9b7c06ed90b07217a2b9547d3ad4d764616013cf8231fea1876_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
