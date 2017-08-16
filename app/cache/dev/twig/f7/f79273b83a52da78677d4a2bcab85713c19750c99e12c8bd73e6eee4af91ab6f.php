<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_7cbfb79a268fa253d44d90f874779a9006df47658dbcf26416fb50f930cc5594 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce3c81e6a0260f04544cfbad0763d2edcb740bb8b6716ef8a1229aff08add548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce3c81e6a0260f04544cfbad0763d2edcb740bb8b6716ef8a1229aff08add548->enter($__internal_ce3c81e6a0260f04544cfbad0763d2edcb740bb8b6716ef8a1229aff08add548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce3c81e6a0260f04544cfbad0763d2edcb740bb8b6716ef8a1229aff08add548->leave($__internal_ce3c81e6a0260f04544cfbad0763d2edcb740bb8b6716ef8a1229aff08add548_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_f602ca5527cb532f9cf137435597aeec65eaafdc8946a1dfea432fcc64a0ed7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f602ca5527cb532f9cf137435597aeec65eaafdc8946a1dfea432fcc64a0ed7e->enter($__internal_f602ca5527cb532f9cf137435597aeec65eaafdc8946a1dfea432fcc64a0ed7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_f602ca5527cb532f9cf137435597aeec65eaafdc8946a1dfea432fcc64a0ed7e->leave($__internal_f602ca5527cb532f9cf137435597aeec65eaafdc8946a1dfea432fcc64a0ed7e_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
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
    {{ settings.content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_text.html.twig", "/var/www/html/symfonyBlog/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_text.html.twig");
    }
}
