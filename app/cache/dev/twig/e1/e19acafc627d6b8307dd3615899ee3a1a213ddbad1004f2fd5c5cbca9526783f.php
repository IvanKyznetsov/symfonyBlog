<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_fc89b3c01b0ac2c690242980a9e68758c2154f1f505981c03ed6925a8acc4b99 extends Twig_Template
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
        $__internal_b2dd1c51002eb4a4753d7b56d1e0a93ed65ea478a833e68643e85cf69ab4bcf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2dd1c51002eb4a4753d7b56d1e0a93ed65ea478a833e68643e85cf69ab4bcf3->enter($__internal_b2dd1c51002eb4a4753d7b56d1e0a93ed65ea478a833e68643e85cf69ab4bcf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_b2dd1c51002eb4a4753d7b56d1e0a93ed65ea478a833e68643e85cf69ab4bcf3->leave($__internal_b2dd1c51002eb4a4753d7b56d1e0a93ed65ea478a833e68643e85cf69ab4bcf3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
