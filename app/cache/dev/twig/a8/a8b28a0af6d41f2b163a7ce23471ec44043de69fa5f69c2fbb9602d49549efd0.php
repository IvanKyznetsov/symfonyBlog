<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_e3c156200b065a537b8ef7ed21506bc12c1074c75e2f5c80648efa61f0bfd23c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_411e91af96a948f1de10d8ca0cb0cbfd504696b2210f627f36014c657710d790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_411e91af96a948f1de10d8ca0cb0cbfd504696b2210f627f36014c657710d790->enter($__internal_411e91af96a948f1de10d8ca0cb0cbfd504696b2210f627f36014c657710d790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_411e91af96a948f1de10d8ca0cb0cbfd504696b2210f627f36014c657710d790->leave($__internal_411e91af96a948f1de10d8ca0cb0cbfd504696b2210f627f36014c657710d790_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_0f2da5447c0596d0c3bdd964c99bd8e2f9e3778612fb592d1d1ddd6b8bc96a84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f2da5447c0596d0c3bdd964c99bd8e2f9e3778612fb592d1d1ddd6b8bc96a84->enter($__internal_0f2da5447c0596d0c3bdd964c99bd8e2f9e3778612fb592d1d1ddd6b8bc96a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_0f2da5447c0596d0c3bdd964c99bd8e2f9e3778612fb592d1d1ddd6b8bc96a84->leave($__internal_0f2da5447c0596d0c3bdd964c99bd8e2f9e3778612fb592d1d1ddd6b8bc96a84_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "SonataBlockBundle:Block:block_base.html.twig", "/var/www/html/symfonyBlog/vendor/sonata-project/block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
