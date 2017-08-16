<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_79368ba93fc432cec77348a3fcd9dbfbd369528f5b0d97a8832b8fb8089e9363 extends Twig_Template
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
        $__internal_1d960e2fba49a391aaa2b7fb043716c98700e5a80043505e6ac64f890af0764b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d960e2fba49a391aaa2b7fb043716c98700e5a80043505e6ac64f890af0764b->enter($__internal_1d960e2fba49a391aaa2b7fb043716c98700e5a80043505e6ac64f890af0764b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_1d960e2fba49a391aaa2b7fb043716c98700e5a80043505e6ac64f890af0764b->leave($__internal_1d960e2fba49a391aaa2b7fb043716c98700e5a80043505e6ac64f890af0764b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
