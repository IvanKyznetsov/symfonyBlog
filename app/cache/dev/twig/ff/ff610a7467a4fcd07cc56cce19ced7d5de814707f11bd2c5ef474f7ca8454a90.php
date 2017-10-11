<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_8677eaa1f8e5e1ac30fb88d711e31b2f7d5a347763704f2d22a0c9bf73b1a256 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
            'field_value' => array($this, 'block_field_value'),
            'field_compare' => array($this, 'block_field_compare'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d460943cc557f259a919db9306ea71b5108d7e2e0eebec4f860d6e004d4283c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d460943cc557f259a919db9306ea71b5108d7e2e0eebec4f860d6e004d4283c->enter($__internal_7d460943cc557f259a919db9306ea71b5108d7e2e0eebec4f860d6e004d4283c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter((isset($context["is_diff"]) ? $context["is_diff"] : $this->getContext($context, "is_diff")), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 31
        echo "</td>

";
        // line 33
        $this->displayBlock('field_compare', $context, $blocks);
        
        $__internal_7d460943cc557f259a919db9306ea71b5108d7e2e0eebec4f860d6e004d4283c->leave($__internal_7d460943cc557f259a919db9306ea71b5108d7e2e0eebec4f860d6e004d4283c_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_324e277029f36961dc3b8dd4b3fbd71739d36bf71283a1a058dfa359be40194d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_324e277029f36961dc3b8dd4b3fbd71739d36bf71283a1a058dfa359be40194d->enter($__internal_324e277029f36961dc3b8dd4b3fbd71739d36bf71283a1a058dfa359be40194d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), array(), (($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())) ? ($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        
        $__internal_324e277029f36961dc3b8dd4b3fbd71739d36bf71283a1a058dfa359be40194d->leave($__internal_324e277029f36961dc3b8dd4b3fbd71739d36bf71283a1a058dfa359be40194d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7c24c8033ab810f4371a8ca5b8302b2a06dfc8c79b7a9cdf09e2bae3e3c44c35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c24c8033ab810f4371a8ca5b8302b2a06dfc8c79b7a9cdf09e2bae3e3c44c35->enter($__internal_7c24c8033ab810f4371a8ca5b8302b2a06dfc8c79b7a9cdf09e2bae3e3c44c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "            ";
        $context["collapse"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "collapse", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "collapse", array()), false)) : (false));
        // line 17
        echo "            ";
        if ((isset($context["collapse"]) ? $context["collapse"] : $this->getContext($context, "collapse"))) {
            // line 18
            echo "                <div class=\"sonata-readmore\"
                      data-readmore-height=\"";
            // line 19
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "height", array()), 40)) : (40)), "html", null, true);
            echo "\"
                      data-readmore-more=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "more", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "more", array()), "read_more")) : ("read_more")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\"
                      data-readmore-less=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "less", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "less", array()), "read_less")) : ("read_less")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
                    ";
            // line 22
            $this->displayBlock('field_value', $context, $blocks);
            // line 25
            echo "                </div>
            ";
        } else {
            // line 27
            echo "                ";
            $this->displayBlock("field_value", $context, $blocks);
            echo "
            ";
        }
        // line 29
        echo "        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7c24c8033ab810f4371a8ca5b8302b2a06dfc8c79b7a9cdf09e2bae3e3c44c35->leave($__internal_7c24c8033ab810f4371a8ca5b8302b2a06dfc8c79b7a9cdf09e2bae3e3c44c35_prof);

    }

    // line 22
    public function block_field_value($context, array $blocks = array())
    {
        $__internal_6e9c7600f34b44e9f429b2420dc3b49c5ce5876ff88aff421da10135c3790e23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e9c7600f34b44e9f429b2420dc3b49c5ce5876ff88aff421da10135c3790e23->enter($__internal_6e9c7600f34b44e9f429b2420dc3b49c5ce5876ff88aff421da10135c3790e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_value"));

        // line 23
        echo "                        ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        // line 24
        echo "                    ";
        
        $__internal_6e9c7600f34b44e9f429b2420dc3b49c5ce5876ff88aff421da10135c3790e23->leave($__internal_6e9c7600f34b44e9f429b2420dc3b49c5ce5876ff88aff421da10135c3790e23_prof);

    }

    // line 33
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_fc40024f1f262bc2d806c28ccc03b0acb9824bcbb4cf4b8434d12f1c2774b368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc40024f1f262bc2d806c28ccc03b0acb9824bcbb4cf4b8434d12f1c2774b368->enter($__internal_fc40024f1f262bc2d806c28ccc03b0acb9824bcbb4cf4b8434d12f1c2774b368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        // line 34
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 35
            echo "        <td>
            ";
            // line 36
            $context["value"] = (isset($context["value_compare"]) ? $context["value_compare"] : $this->getContext($context, "value_compare"));
            // line 37
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_fc40024f1f262bc2d806c28ccc03b0acb9824bcbb4cf4b8434d12f1c2774b368->leave($__internal_fc40024f1f262bc2d806c28ccc03b0acb9824bcbb4cf4b8434d12f1c2774b368_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 37,  143 => 36,  140 => 35,  137 => 34,  131 => 33,  124 => 24,  117 => 23,  111 => 22,  103 => 29,  97 => 27,  93 => 25,  91 => 22,  87 => 21,  83 => 20,  79 => 19,  76 => 18,  73 => 17,  70 => 16,  68 => 15,  62 => 14,  50 => 12,  43 => 33,  39 => 31,  37 => 14,  29 => 12,  26 => 11,);
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

<th{% if(is_diff|default(false)) %} class=\"diff\"{% endif %}>{% block name %}{{ field_description.label|trans({}, field_description.translationDomain ?: admin.translationDomain) }}{% endblock %}</th>
<td>
    {%- block field -%}
        {% spaceless %}
            {% set collapse = field_description.options.collapse|default(false) %}
            {% if collapse %}
                <div class=\"sonata-readmore\"
                      data-readmore-height=\"{{ collapse.height|default(40) }}\"
                      data-readmore-more=\"{{ collapse.more|default('read_more')|trans({}, 'SonataAdminBundle') }}\"
                      data-readmore-less=\"{{ collapse.less|default('read_less')|trans({}, 'SonataAdminBundle') }}\">
                    {% block field_value %}
                        {% if field_description.options.safe %}{{ value|raw }}{% else %}{{ value|nl2br }}{% endif %}
                    {% endblock %}
                </div>
            {% else %}
                {{ block('field_value') }}
            {% endif %}
        {% endspaceless %}
    {%- endblock -%}
</td>

{% block field_compare %}
    {% if(value_compare is defined) %}
        <td>
            {% set value = value_compare %}
            {{ block('field') }}
        </td>
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_show_field.html.twig", "/var/www/html/symfonyBlog/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_show_field.html.twig");
    }
}