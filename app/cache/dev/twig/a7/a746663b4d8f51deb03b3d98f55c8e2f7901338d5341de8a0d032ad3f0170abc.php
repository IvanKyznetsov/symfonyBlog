<?php

/* BloggerBlogBundle:Page:contactEmail.txt.twig */
class __TwigTemplate_5605eef34a6efcd2ef41c125614650e8f38af385e35a7c7396d00f034d128b18 extends Twig_Template
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
        $__internal_f99b1375dcb9c08037eb68c6f1f68e00ec12f11a725826937b77b940f6cdd14c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f99b1375dcb9c08037eb68c6f1f68e00ec12f11a725826937b77b940f6cdd14c->enter($__internal_f99b1375dcb9c08037eb68c6f1f68e00ec12f11a725826937b77b940f6cdd14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:contactEmail.txt.twig"));

        // line 2
        echo "A contact enquiry was made by ";
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "name", array());
        echo " at ";
        echo twig_date_format_filter($this->env, "now", "Y-m-d H:i");
        echo ".

Reply-To: ";
        // line 4
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "email", array());
        echo "
Subject: ";
        // line 5
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "subject", array());
        echo "
Body:
";
        // line 7
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "body", array());
        
        $__internal_f99b1375dcb9c08037eb68c6f1f68e00ec12f11a725826937b77b940f6cdd14c->leave($__internal_f99b1375dcb9c08037eb68c6f1f68e00ec12f11a725826937b77b940f6cdd14c_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:contactEmail.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  34 => 5,  30 => 4,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/Page/contactEmail.txt.twig #}
A contact enquiry was made by {{ enquiry.name }} at {{ \"now\" | date(\"Y-m-d H:i\") }}.

Reply-To: {{ enquiry.email }}
Subject: {{ enquiry.subject }}
Body:
{{ enquiry.body }}", "BloggerBlogBundle:Page:contactEmail.txt.twig", "/var/www/html/symfonyBlog/src/Blogger/BlogBundle/Resources/views/Page/contactEmail.txt.twig");
    }
}
