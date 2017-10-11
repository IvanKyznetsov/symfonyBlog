<?php

/* BloggerBlogBundle:Page:json.html.twig */
class __TwigTemplate_1322b30e1206c23e5a28bd6a0c4c462d5db1e64aad5fbc358eb55c0081f34892 extends Twig_Template
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
        $__internal_58fe2e3da3888244eb9fbb7b50e6f035c7853e01f0a5986206faf2c51f857f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58fe2e3da3888244eb9fbb7b50e6f035c7853e01f0a5986206faf2c51f857f80->enter($__internal_58fe2e3da3888244eb9fbb7b50e6f035c7853e01f0a5986206faf2c51f857f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:json.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blogs"]) ? $context["blogs"] : $this->getContext($context, "blogs")));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 2
            echo "        Author: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "author", array()), "html", null, true);
            echo ", Title: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "title", array()), "html", null, true);
            echo "<a href=\"#\">test</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_58fe2e3da3888244eb9fbb7b50e6f035c7853e01f0a5986206faf2c51f857f80->leave($__internal_58fe2e3da3888244eb9fbb7b50e6f035c7853e01f0a5986206faf2c51f857f80_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:json.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for blog in blogs %}
        Author: {{ blog.author }}, Title: {{ blog.title }}<a href=\"#\">test</a>
{% endfor %}", "BloggerBlogBundle:Page:json.html.twig", "/var/www/html/symfonyBlog/src/Blogger/BlogBundle/Resources/views/Page/json.html.twig");
    }
}
