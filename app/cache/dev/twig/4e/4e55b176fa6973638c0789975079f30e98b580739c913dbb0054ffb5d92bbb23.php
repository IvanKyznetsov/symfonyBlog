<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_7e8846df1350fe123eab49047018b2ca898d6ccf2f658f5dcd3d3cdce0a51edc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a996bd0d39aeda00ef531795995e387e8f7b33cefc8a2a4560892144f3e1d5a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a996bd0d39aeda00ef531795995e387e8f7b33cefc8a2a4560892144f3e1d5a7->enter($__internal_a996bd0d39aeda00ef531795995e387e8f7b33cefc8a2a4560892144f3e1d5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a996bd0d39aeda00ef531795995e387e8f7b33cefc8a2a4560892144f3e1d5a7->leave($__internal_a996bd0d39aeda00ef531795995e387e8f7b33cefc8a2a4560892144f3e1d5a7_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_937cb7106c24f46f3000ce8a84b93e8951d38447e09df9d01f3aae30d53fade5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_937cb7106c24f46f3000ce8a84b93e8951d38447e09df9d01f3aae30d53fade5->enter($__internal_937cb7106c24f46f3000ce8a84b93e8951d38447e09df9d01f3aae30d53fade5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_937cb7106c24f46f3000ce8a84b93e8951d38447e09df9d01f3aae30d53fade5->leave($__internal_937cb7106c24f46f3000ce8a84b93e8951d38447e09df9d01f3aae30d53fade5_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends sonata_block.templates.block_base %}

{% block block %}
    {{ knp_menu_render(menu, menu_options) }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_menu.html.twig", "/var/www/html/symfonyBlog/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_menu.html.twig");
    }
}
