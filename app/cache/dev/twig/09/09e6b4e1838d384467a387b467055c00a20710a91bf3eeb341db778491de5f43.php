<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_48a8a2f416286943c3384d4b4849a268aa21ddf3d093546fa072ea0a61abd159 extends Twig_Template
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
        $__internal_30134154824272d761e5d84c73c918cb1cc12132d02d54ffde5c86c2639c9e3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30134154824272d761e5d84c73c918cb1cc12132d02d54ffde5c86c2639c9e3c->enter($__internal_30134154824272d761e5d84c73c918cb1cc12132d02d54ffde5c86c2639c9e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_30134154824272d761e5d84c73c918cb1cc12132d02d54ffde5c86c2639c9e3c->leave($__internal_30134154824272d761e5d84c73c918cb1cc12132d02d54ffde5c86c2639c9e3c_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_5200b8e967dd3eaebf182721fced9ee3faeb25315bedbdfcf1f56b6d0341296a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5200b8e967dd3eaebf182721fced9ee3faeb25315bedbdfcf1f56b6d0341296a->enter($__internal_5200b8e967dd3eaebf182721fced9ee3faeb25315bedbdfcf1f56b6d0341296a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_5200b8e967dd3eaebf182721fced9ee3faeb25315bedbdfcf1f56b6d0341296a->leave($__internal_5200b8e967dd3eaebf182721fced9ee3faeb25315bedbdfcf1f56b6d0341296a_prof);

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
