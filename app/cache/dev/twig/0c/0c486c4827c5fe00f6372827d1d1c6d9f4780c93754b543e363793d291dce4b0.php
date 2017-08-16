<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_5c0caa0f0683be375c4c032212f95c2ca2124b4c8745a27d5fb64b2008780b8f extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b061608d101cac81138a2a5618d40e287f093456bd7085a71169827278aa5ab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b061608d101cac81138a2a5618d40e287f093456bd7085a71169827278aa5ab8->enter($__internal_b061608d101cac81138a2a5618d40e287f093456bd7085a71169827278aa5ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b061608d101cac81138a2a5618d40e287f093456bd7085a71169827278aa5ab8->leave($__internal_b061608d101cac81138a2a5618d40e287f093456bd7085a71169827278aa5ab8_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_771c5f67684a8d3a23a170f61ee96868d8d617298cdca6397e49a733249f20f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_771c5f67684a8d3a23a170f61ee96868d8d617298cdca6397e49a733249f20f0->enter($__internal_771c5f67684a8d3a23a170f61ee96868d8d617298cdca6397e49a733249f20f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_771c5f67684a8d3a23a170f61ee96868d8d617298cdca6397e49a733249f20f0->leave($__internal_771c5f67684a8d3a23a170f61ee96868d8d617298cdca6397e49a733249f20f0_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
    <div class=\"cms-block-exception\">
        <h2>{{ block.name }}</h2>
        <h3>{{ exception.message }}</h3>
    </div>
{% endblock %}
", "SonataBlockBundle:Block:block_exception.html.twig", "/var/www/html/symfonyBlog/vendor/sonata-project/block-bundle/Resources/views/Block/block_exception.html.twig");
    }
}
