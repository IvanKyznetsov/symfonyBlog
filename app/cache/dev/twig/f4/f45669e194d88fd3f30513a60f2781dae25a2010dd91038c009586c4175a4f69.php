<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_219ba368d368614a672b1e56b4a090b494b2b1fb9607de103d63731c98ce112c extends Twig_Template
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
        $__internal_d9e15bc37f6c20313b151b40768a0dcdefc91eebe7bbfe05e42c79151606f420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9e15bc37f6c20313b151b40768a0dcdefc91eebe7bbfe05e42c79151606f420->enter($__internal_d9e15bc37f6c20313b151b40768a0dcdefc91eebe7bbfe05e42c79151606f420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_d9e15bc37f6c20313b151b40768a0dcdefc91eebe7bbfe05e42c79151606f420->leave($__internal_d9e15bc37f6c20313b151b40768a0dcdefc91eebe7bbfe05e42c79151606f420_prof);

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
