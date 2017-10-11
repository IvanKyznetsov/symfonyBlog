<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_b5a9fc4fc294512e21d7ccf154b79777f5320f61470f0ec821b20f4ab407d065 extends Twig_Template
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
        $__internal_732ec18f203cfe70f2743b98e53153864a2b6f8ca0c84a8f98306fc8969d907e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_732ec18f203cfe70f2743b98e53153864a2b6f8ca0c84a8f98306fc8969d907e->enter($__internal_732ec18f203cfe70f2743b98e53153864a2b6f8ca0c84a8f98306fc8969d907e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_732ec18f203cfe70f2743b98e53153864a2b6f8ca0c84a8f98306fc8969d907e->leave($__internal_732ec18f203cfe70f2743b98e53153864a2b6f8ca0c84a8f98306fc8969d907e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/symfonyBlog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
