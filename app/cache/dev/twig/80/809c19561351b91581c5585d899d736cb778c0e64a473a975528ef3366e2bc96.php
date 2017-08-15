<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_e15e6a9f749c796e56dddc53c9dd9ea14ac3834768e8da8fae6a0ab6f7eebe4a extends Twig_Template
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
        $__internal_6c87ad1e5734e8ccb559dbb91edb23b3b548afd7460dc7b3f775cbe46cfcb51e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c87ad1e5734e8ccb559dbb91edb23b3b548afd7460dc7b3f775cbe46cfcb51e->enter($__internal_6c87ad1e5734e8ccb559dbb91edb23b3b548afd7460dc7b3f775cbe46cfcb51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6c87ad1e5734e8ccb559dbb91edb23b3b548afd7460dc7b3f775cbe46cfcb51e->leave($__internal_6c87ad1e5734e8ccb559dbb91edb23b3b548afd7460dc7b3f775cbe46cfcb51e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
