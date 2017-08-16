<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_79a78b65ae890c90bb46dc96d0f7a910f6310d918e9c8b6e94e8743c15bab8de extends Twig_Template
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
        $__internal_74158e1297f597fc85cc712b4fbc24a5f99aafab8c5e67fb9186cf6f28b5253d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74158e1297f597fc85cc712b4fbc24a5f99aafab8c5e67fb9186cf6f28b5253d->enter($__internal_74158e1297f597fc85cc712b4fbc24a5f99aafab8c5e67fb9186cf6f28b5253d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_74158e1297f597fc85cc712b4fbc24a5f99aafab8c5e67fb9186cf6f28b5253d->leave($__internal_74158e1297f597fc85cc712b4fbc24a5f99aafab8c5e67fb9186cf6f28b5253d_prof);

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
