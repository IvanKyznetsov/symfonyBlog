<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_0ad88da59b66d90764e3165266086b8169c92f16e148b52e7aa6f3ab77aa4c6a extends Twig_Template
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
        $__internal_f7499c7b84bf2c66afc28a6c3bb11ac97020fc58b5088682c7fe78c175eb1055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7499c7b84bf2c66afc28a6c3bb11ac97020fc58b5088682c7fe78c175eb1055->enter($__internal_f7499c7b84bf2c66afc28a6c3bb11ac97020fc58b5088682c7fe78c175eb1055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_f7499c7b84bf2c66afc28a6c3bb11ac97020fc58b5088682c7fe78c175eb1055->leave($__internal_f7499c7b84bf2c66afc28a6c3bb11ac97020fc58b5088682c7fe78c175eb1055_prof);

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
