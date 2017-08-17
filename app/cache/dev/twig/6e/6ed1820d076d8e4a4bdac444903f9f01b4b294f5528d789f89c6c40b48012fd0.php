<?php

/* SonataAdminBundle:Button:edit_button.html.twig */
class __TwigTemplate_762a6ae96ddad12e242f7625a66fb796cc79fb31979616b7ea54ec4301e93871 extends Twig_Template
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
        $__internal_27a9760b84731f1cc9ec1f5d861e77f33a0d982b7c0ed9bfe143c3af014f80ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27a9760b84731f1cc9ec1f5d861e77f33a0d982b7c0ed9bfe143c3af014f80ce->enter($__internal_27a9760b84731f1cc9ec1f5d861e77f33a0d982b7c0ed9bfe143c3af014f80ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:edit_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "canAccessObject", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method"))) {
            // line 13
            echo "    <li>
        <a class=\"sonata-action-element\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i>
            ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </a>
    </li>
";
        }
        
        $__internal_27a9760b84731f1cc9ec1f5d861e77f33a0d982b7c0ed9bfe143c3af014f80ce->leave($__internal_27a9760b84731f1cc9ec1f5d861e77f33a0d982b7c0ed9bfe143c3af014f80ce_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:edit_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 16,  30 => 14,  27 => 13,  25 => 12,  22 => 11,);
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

{% if admin.canAccessObject('edit', object) and admin.hasRoute('edit') %}
    <li>
        <a class=\"sonata-action-element\" href=\"{{ admin.generateObjectUrl('edit', object) }}\">
            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i>
            {{ 'link_action_edit'|trans({}, 'SonataAdminBundle') }}
        </a>
    </li>
{% endif %}
", "SonataAdminBundle:Button:edit_button.html.twig", "/var/www/html/symfonyBlog/vendor/sonata-project/admin-bundle/Resources/views/Button/edit_button.html.twig");
    }
}
