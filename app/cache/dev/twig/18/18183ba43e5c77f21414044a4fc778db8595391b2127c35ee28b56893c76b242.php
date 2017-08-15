<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_93ba52159262c4150f32d92113c04dda332ce42a22c89080ca1c5c7ffe02ad73 extends Twig_Template
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
        $__internal_9469cb7188fd63c3b61f018c71b65eb849395cb3d136ae9aa516ecdbed0ef6ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9469cb7188fd63c3b61f018c71b65eb849395cb3d136ae9aa516ecdbed0ef6ab->enter($__internal_9469cb7188fd63c3b61f018c71b65eb849395cb3d136ae9aa516ecdbed0ef6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_9469cb7188fd63c3b61f018c71b65eb849395cb3d136ae9aa516ecdbed0ef6ab->leave($__internal_9469cb7188fd63c3b61f018c71b65eb849395cb3d136ae9aa516ecdbed0ef6ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
