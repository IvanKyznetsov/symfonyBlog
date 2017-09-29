<?php

/* BloggerBlogBundle:Blog:sliding.html.twig */
class __TwigTemplate_7c1eb67a23e41dfdfea00b8e1fa25504be5d65b67f8f94ba90242faa8ad5945b extends Twig_Template
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
        $__internal_4140714cc71df0d2a9e0f179c8faa3242bfe17393d44ce7f9333e9f9a69df0af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4140714cc71df0d2a9e0f179c8faa3242bfe17393d44ce7f9333e9f9a69df0af->enter($__internal_4140714cc71df0d2a9e0f179c8faa3242bfe17393d44ce7f9333e9f9a69df0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Blog:sliding.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > 1)) {
            // line 4
            echo "<div class=\"pagination\">
    ";
            // line 5
            if ((array_key_exists("first", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))) {
                // line 6
                echo "        <span class=\"first\">
            <a href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))), "html", null, true);
                echo "\">&lt;&lt;</a>
        </span>
    ";
            }
            // line 10
            echo "
    ";
            // line 11
            if (array_key_exists("previous", $context)) {
                // line 12
                echo "        <span class=\"previous\">
            <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
                echo "\">&lt;</a>
        </span>
    ";
            }
            // line 16
            echo "
    ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 18
                echo "        ";
                if (($context["page"] != (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")))) {
                    // line 19
                    echo "            <span class=\"page\">
                <a href=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => $context["page"]))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
            </span>
        ";
                } else {
                    // line 23
                    echo "            <span class=\"current\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span>
        ";
                }
                // line 25
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "
    ";
            // line 27
            if (array_key_exists("next", $context)) {
                // line 28
                echo "        <span class=\"next\">
            <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
                echo "\">&gt;</a>
        </span>
    ";
            }
            // line 32
            echo "
    ";
            // line 33
            if ((array_key_exists("last", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))) {
                // line 34
                echo "        <span class=\"last\">
            <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))), "html", null, true);
                echo "\">&gt;&gt;</a>
        </span>
    ";
            }
            // line 38
            echo "</div>
";
        }
        
        $__internal_4140714cc71df0d2a9e0f179c8faa3242bfe17393d44ce7f9333e9f9a69df0af->leave($__internal_4140714cc71df0d2a9e0f179c8faa3242bfe17393d44ce7f9333e9f9a69df0af_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Blog:sliding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 38,  110 => 35,  107 => 34,  105 => 33,  102 => 32,  96 => 29,  93 => 28,  91 => 27,  88 => 26,  82 => 25,  76 => 23,  68 => 20,  65 => 19,  62 => 18,  58 => 17,  55 => 16,  49 => 13,  46 => 12,  44 => 11,  41 => 10,  35 => 7,  32 => 6,  30 => 5,  27 => 4,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# default Sliding pagination control implementation #}

{% if pageCount > 1 %}
<div class=\"pagination\">
    {% if first is defined and current != first %}
        <span class=\"first\">
            <a href=\"{{ path(route, query|merge({(pageParameterName): first})) }}\">&lt;&lt;</a>
        </span>
    {% endif %}

    {% if previous is defined %}
        <span class=\"previous\">
            <a href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">&lt;</a>
        </span>
    {% endif %}

    {% for page in pagesInRange %}
        {% if page != current %}
            <span class=\"page\">
                <a href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
            </span>
        {% else %}
            <span class=\"current\">{{ page }}</span>
        {% endif %}
    {% endfor %}

    {% if next is defined %}
        <span class=\"next\">
            <a href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">&gt;</a>
        </span>
    {% endif %}

    {% if last is defined and current != last %}
        <span class=\"last\">
            <a href=\"{{ path(route, query|merge({(pageParameterName): last})) }}\">&gt;&gt;</a>
        </span>
    {% endif %}
</div>
{% endif %}
", "BloggerBlogBundle:Blog:sliding.html.twig", "/var/www/html/symfonyBlog/src/Blogger/BlogBundle/Resources/views/Blog/sliding.html.twig");
    }
}
