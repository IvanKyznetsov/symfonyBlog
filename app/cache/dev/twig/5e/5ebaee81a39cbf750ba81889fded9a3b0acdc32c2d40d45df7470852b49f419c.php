<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_18cd83a878456f6d2a2c6490358acf033500ed8f693e23175664eaba4b877d3f extends Twig_Template
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
        $__internal_8843c1e6fa7b29bf9205e5cd51696c0b4bcf8afc21d1d3dd3a818e178b25c858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8843c1e6fa7b29bf9205e5cd51696c0b4bcf8afc21d1d3dd3a818e178b25c858->enter($__internal_8843c1e6fa7b29bf9205e5cd51696c0b4bcf8afc21d1d3dd3a818e178b25c858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_8843c1e6fa7b29bf9205e5cd51696c0b4bcf8afc21d1d3dd3a818e178b25c858->leave($__internal_8843c1e6fa7b29bf9205e5cd51696c0b4bcf8afc21d1d3dd3a818e178b25c858_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
