<?php

/* SonataBlockBundle:Block:block_container.html.twig */
class __TwigTemplate_68c10075f4488c864eb5e6989ac461fa4e006b8d034947695baddec4f4d9a5fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block_class' => array($this, 'block_block_class'),
            'block_role' => array($this, 'block_block_role'),
            'block' => array($this, 'block_block'),
            'block_child_render' => array($this, 'block_block_child_render'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_container.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0aed082e6d5f0a76653ed9d425c91bb314a6cde93195e4c4c2acc52912644af4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aed082e6d5f0a76653ed9d425c91bb314a6cde93195e4c4c2acc52912644af4->enter($__internal_0aed082e6d5f0a76653ed9d425c91bb314a6cde93195e4c4c2acc52912644af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0aed082e6d5f0a76653ed9d425c91bb314a6cde93195e4c4c2acc52912644af4->leave($__internal_0aed082e6d5f0a76653ed9d425c91bb314a6cde93195e4c4c2acc52912644af4_prof);

    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        $__internal_19d839a9920d7ede80d4ce736a478fff5407a23e03b15d82b67e2b7a721a9f0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19d839a9920d7ede80d4ce736a478fff5407a23e03b15d82b67e2b7a721a9f0b->enter($__internal_19d839a9920d7ede80d4ce736a478fff5407a23e03b15d82b67e2b7a721a9f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        echo " cms-container";
        if ( !$this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "hasParent", array(), "method")) {
            echo " cms-container-root";
        }
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array()), "html", null, true);
        }
        
        $__internal_19d839a9920d7ede80d4ce736a478fff5407a23e03b15d82b67e2b7a721a9f0b->leave($__internal_19d839a9920d7ede80d4ce736a478fff5407a23e03b15d82b67e2b7a721a9f0b_prof);

    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        $__internal_da0c41f04c0b20cb5eb303bffbd8bbdd7200d5bb6322dd2721bbd3183f3e3332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da0c41f04c0b20cb5eb303bffbd8bbdd7200d5bb6322dd2721bbd3183f3e3332->enter($__internal_da0c41f04c0b20cb5eb303bffbd8bbdd7200d5bb6322dd2721bbd3183f3e3332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        echo "container";
        
        $__internal_da0c41f04c0b20cb5eb303bffbd8bbdd7200d5bb6322dd2721bbd3183f3e3332->leave($__internal_da0c41f04c0b20cb5eb303bffbd8bbdd7200d5bb6322dd2721bbd3183f3e3332_prof);

    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        $__internal_df713886602bdd30502b12e809a3ff086b52d0a08034917fda12dc85d6510b0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df713886602bdd30502b12e809a3ff086b52d0a08034917fda12dc85d6510b0c->enter($__internal_df713886602bdd30502b12e809a3ff086b52d0a08034917fda12dc85d6510b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 22
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator"))) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator")), "pre", array());
        }
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "children", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 24
            echo "        ";
            $this->displayBlock('block_child_render', $context, $blocks);
            // line 27
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator"))) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator")), "post", array());
        }
        
        $__internal_df713886602bdd30502b12e809a3ff086b52d0a08034917fda12dc85d6510b0c->leave($__internal_df713886602bdd30502b12e809a3ff086b52d0a08034917fda12dc85d6510b0c_prof);

    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_5b8f14b118c319ba231ec42774f987f9e7a9f6666f7f48826ff972a7f1fc05f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b8f14b118c319ba231ec42774f987f9e7a9f6666f7f48826ff972a7f1fc05f9->enter($__internal_5b8f14b118c319ba231ec42774f987f9e7a9f6666f7f48826ff972a7f1fc05f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child"))));
        echo "
        ";
        
        $__internal_5b8f14b118c319ba231ec42774f987f9e7a9f6666f7f48826ff972a7f1fc05f9->leave($__internal_5b8f14b118c319ba231ec42774f987f9e7a9f6666f7f48826ff972a7f1fc05f9_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 25,  123 => 24,  113 => 28,  99 => 27,  96 => 24,  78 => 23,  73 => 22,  67 => 21,  55 => 18,  36 => 15,  21 => 12,);
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

{# block classes are prepended with a container class #}
{% block block_class %} cms-container{% if not block.hasParent() %} cms-container-root{%endif%}{% if settings.class %} {{ settings.class }}{% endif %}{% endblock %}

{# identify a block role used by the page editor #}
{% block block_role %}container{% endblock %}

{# render container block #}
{% block block %}
    {% if decorator %}{{ decorator.pre|raw }}{% endif %}
    {% for child in block.children %}
        {% block block_child_render %}
            {{ sonata_block_render(child) }}
        {% endblock %}
    {% endfor %}
    {% if decorator %}{{ decorator.post|raw }}{% endif %}
{% endblock %}
", "SonataBlockBundle:Block:block_container.html.twig", "/var/www/html/symfonyBlog/vendor/sonata-project/block-bundle/Resources/views/Block/block_container.html.twig");
    }
}
