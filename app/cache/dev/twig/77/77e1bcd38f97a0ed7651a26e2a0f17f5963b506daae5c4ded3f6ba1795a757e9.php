<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_45a027b19f37c81b4a501709299b1d924ef16a3969dd660f43a276cb776020a2 extends Twig_Template
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
        $__internal_86dc78f24f16a6e1248c589f0506975af08f6cee125cf1eb791a9b5cdd8f3bf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86dc78f24f16a6e1248c589f0506975af08f6cee125cf1eb791a9b5cdd8f3bf6->enter($__internal_86dc78f24f16a6e1248c589f0506975af08f6cee125cf1eb791a9b5cdd8f3bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_86dc78f24f16a6e1248c589f0506975af08f6cee125cf1eb791a9b5cdd8f3bf6->leave($__internal_86dc78f24f16a6e1248c589f0506975af08f6cee125cf1eb791a9b5cdd8f3bf6_prof);

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
