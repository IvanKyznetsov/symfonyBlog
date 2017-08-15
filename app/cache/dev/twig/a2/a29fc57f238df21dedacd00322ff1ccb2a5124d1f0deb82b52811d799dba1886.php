<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_a075fc5ccfe1f5340dad6fd62d9be1e1eeb93eaaf72cf4a76800bcabd4046e59 extends Twig_Template
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
        $__internal_8b5bbc28d54f858196a08bd394d38934e0e73ec2ae180f7a689613745f40b889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b5bbc28d54f858196a08bd394d38934e0e73ec2ae180f7a689613745f40b889->enter($__internal_8b5bbc28d54f858196a08bd394d38934e0e73ec2ae180f7a689613745f40b889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_8b5bbc28d54f858196a08bd394d38934e0e73ec2ae180f7a689613745f40b889->leave($__internal_8b5bbc28d54f858196a08bd394d38934e0e73ec2ae180f7a689613745f40b889_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
