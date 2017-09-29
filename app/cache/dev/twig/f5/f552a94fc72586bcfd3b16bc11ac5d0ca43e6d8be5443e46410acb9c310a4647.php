<?php

/* BloggerBlogBundle:Blog:pagination.html.twig */
class __TwigTemplate_7ad8638170687de1ceeed4593fb524734702a5f54024f08dfd02da1934f655a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Blog:pagination.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_375652a02cc713aa80b30ac11fda70579bf96384b5a1525b4d0d31f92758254c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_375652a02cc713aa80b30ac11fda70579bf96384b5a1525b4d0d31f92758254c->enter($__internal_375652a02cc713aa80b30ac11fda70579bf96384b5a1525b4d0d31f92758254c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Blog:pagination.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_375652a02cc713aa80b30ac11fda70579bf96384b5a1525b4d0d31f92758254c->leave($__internal_375652a02cc713aa80b30ac11fda70579bf96384b5a1525b4d0d31f92758254c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_188410462105155c6d691d7d7332b5ef41901dd2d8a139337e3a7f3eb492b974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_188410462105155c6d691d7d7332b5ef41901dd2d8a139337e3a7f3eb492b974->enter($__internal_188410462105155c6d691d7d7332b5ef41901dd2d8a139337e3a7f3eb492b974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pagination";
        
        $__internal_188410462105155c6d691d7d7332b5ef41901dd2d8a139337e3a7f3eb492b974->leave($__internal_188410462105155c6d691d7d7332b5ef41901dd2d8a139337e3a7f3eb492b974_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc0b25c1d011a798faa2cf9e76d896325a39d36d73b0f7f83e8de15135c45b22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc0b25c1d011a798faa2cf9e76d896325a39d36d73b0f7f83e8de15135c45b22->enter($__internal_cc0b25c1d011a798faa2cf9e76d896325a39d36d73b0f7f83e8de15135c45b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h2>Pagination</h2>
    <div class=\"count\">Total of: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "</div>
    <table class=\"table table-responsive table-striped\">
        <thead>
        <tr>
            <th class=\"hidden-xs\">";
        // line 11
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Id", "q.id");
        echo "</th>
            <th ";
        // line 12
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "q.title"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Title", "q.title");
        echo "</th>
            <th class=\"hidden-xs\">";
        // line 13
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Date Of Report", "q.author");
        echo "</th>
        </tr>
        </thead>
        <tbody>

        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 19
            echo "            ";
            // line 20
            echo "            <tr>
                <td id=\"col\" class=\"hidden-xs\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "id", array()), "html", null, true);
            echo "</td>
                <td id=\"col\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "title", array()), "html", null, true);
            echo "</td>
                <td id=\"col\" class=\"hidden-xs\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "author", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </tbody>
    </table>
    <div class=\"navigation\">
        ";
        // line 29
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
    </div>
";
        
        $__internal_cc0b25c1d011a798faa2cf9e76d896325a39d36d73b0f7f83e8de15135c45b22->leave($__internal_cc0b25c1d011a798faa2cf9e76d896325a39d36d73b0f7f83e8de15135c45b22_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Blog:pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 29,  109 => 26,  100 => 23,  96 => 22,  92 => 21,  89 => 20,  87 => 19,  83 => 18,  75 => 13,  67 => 12,  63 => 11,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block title %}Pagination{% endblock%}

{% block body %}
    <h2>Pagination</h2>
    <div class=\"count\">Total of: {{ pagination.getTotalItemCount }}</div>
    <table class=\"table table-responsive table-striped\">
        <thead>
        <tr>
            <th class=\"hidden-xs\">{{ knp_pagination_sortable(pagination, 'Id', 'q.id') }}</th>
            <th {% if pagination.isSorted('q.title') %} class=\"sorted\"{% endif %}>{{ knp_pagination_sortable(pagination, 'Title', 'q.title') }}</th>
            <th class=\"hidden-xs\">{{ knp_pagination_sortable(pagination, 'Date Of Report', 'q.author') }}</th>
        </tr>
        </thead>
        <tbody>

        {% for row in pagination %}
            {#<tr {% if loop.index is odd %}class=\"color\"{% endif %}>#}
            <tr>
                <td id=\"col\" class=\"hidden-xs\">{{ row.id }}</td>
                <td id=\"col\">{{ row.title }}</td>
                <td id=\"col\" class=\"hidden-xs\">{{ row.author }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <div class=\"navigation\">
        {{ knp_pagination_render(pagination) }}
    </div>
{% endblock %}
", "BloggerBlogBundle:Blog:pagination.html.twig", "/var/www/html/symfonyBlog/src/Blogger/BlogBundle/Resources/views/Blog/pagination.html.twig");
    }
}
