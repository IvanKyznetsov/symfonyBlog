<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_cf5f54952114a2459651500c6f8456874c9b830383fa92c26aa73dca9503c522 extends Twig_Template
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
        $__internal_24b9af510cd59d411d5feefe6d9eb8cffc641616bc4ba7ae640fc867a9e1206b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24b9af510cd59d411d5feefe6d9eb8cffc641616bc4ba7ae640fc867a9e1206b->enter($__internal_24b9af510cd59d411d5feefe6d9eb8cffc641616bc4ba7ae640fc867a9e1206b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_24b9af510cd59d411d5feefe6d9eb8cffc641616bc4ba7ae640fc867a9e1206b->leave($__internal_24b9af510cd59d411d5feefe6d9eb8cffc641616bc4ba7ae640fc867a9e1206b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
