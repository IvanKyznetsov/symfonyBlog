<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_6b66d45e6de634c35c95496564c332adfbfb6b127f9f1aaf9c19a4d31db728ee extends Twig_Template
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
        $__internal_573dcaac92d1b98bc586fa921363e16c86acc835dda1d7925e96f2d6fc368959 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_573dcaac92d1b98bc586fa921363e16c86acc835dda1d7925e96f2d6fc368959->enter($__internal_573dcaac92d1b98bc586fa921363e16c86acc835dda1d7925e96f2d6fc368959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_573dcaac92d1b98bc586fa921363e16c86acc835dda1d7925e96f2d6fc368959->leave($__internal_573dcaac92d1b98bc586fa921363e16c86acc835dda1d7925e96f2d6fc368959_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_4fa2ae5045cfce084f89d3d6f00ae356ae8420f171914980e1c573cb3df5f986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa2ae5045cfce084f89d3d6f00ae356ae8420f171914980e1c573cb3df5f986->enter($__internal_4fa2ae5045cfce084f89d3d6f00ae356ae8420f171914980e1c573cb3df5f986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_4fa2ae5045cfce084f89d3d6f00ae356ae8420f171914980e1c573cb3df5f986->leave($__internal_4fa2ae5045cfce084f89d3d6f00ae356ae8420f171914980e1c573cb3df5f986_prof);

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
