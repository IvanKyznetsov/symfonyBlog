<?php

/* BloggerBlogBundle:Page:index.html.twig */
class __TwigTemplate_6bb38c37d480f80e5fdd72287eb9478606261dcf07ef30e298bb59a00d3a106c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Page:index.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9d70a3cfb421ca0bef5dfc88e371a30a129865d593e57b2c5fa8eeea4fcdf96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9d70a3cfb421ca0bef5dfc88e371a30a129865d593e57b2c5fa8eeea4fcdf96->enter($__internal_b9d70a3cfb421ca0bef5dfc88e371a30a129865d593e57b2c5fa8eeea4fcdf96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9d70a3cfb421ca0bef5dfc88e371a30a129865d593e57b2c5fa8eeea4fcdf96->leave($__internal_b9d70a3cfb421ca0bef5dfc88e371a30a129865d593e57b2c5fa8eeea4fcdf96_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1040d422204073fbd1ba2ae496cb7a8ffb108e78dd99873e71d3e3f019493011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1040d422204073fbd1ba2ae496cb7a8ffb108e78dd99873e71d3e3f019493011->enter($__internal_1040d422204073fbd1ba2ae496cb7a8ffb108e78dd99873e71d3e3f019493011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"navigation\">
        ";
        // line 7
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["blogs"]) ? $context["blogs"] : $this->getContext($context, "blogs")));
        echo "
    </div>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blogs"]) ? $context["blogs"] : $this->getContext($context, "blogs")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 10
            echo "        <article class=\"blog\">
            <div class=\"date\"><time datetime=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blog"], "created", array()), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blog"], "created", array()), "l, F j, Y"), "html", null, true);
            echo "</time></div>
            <header>
                <h2><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($context["blog"], "id", array()), "slug" => $this->getAttribute($context["blog"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "title", array()), "html", null, true);
            echo "</a></h2>
            </header>

            <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((("images/" . $this->getAttribute($context["blog"], "id", array())) . "/") . $this->getAttribute($context["blog"], "image", array()))), "html", null, true);
            echo "\" />
            <div class=\"snippet\">
                <p>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "blog", array(0 => 500), "method"), "html", null, true);
            echo "</p>
                <p class=\"continue\"><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($context["blog"], "id", array()), "slug" => $this->getAttribute($context["blog"], "slug", array()))), "html", null, true);
            echo "\">Continue reading...</a></p>
            </div>

            <footer class=\"meta\">
                <p>Comments: <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($context["blog"], "id", array()), "slug" => $this->getAttribute($context["blog"], "slug", array()))), "html", null, true);
            echo "#comments\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["blog"], "comments", array())), "html", null, true);
            echo "</a></p>
                <p>Posted by <span class=\"highlight\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "author", array()), "html", null, true);
            echo "</span> at ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blog"], "created", array()), "h:iA"), "html", null, true);
            echo "</p>
                <p>Tags: <span class=\"highlight\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "tags", array()), "html", null, true);
            echo "</span></p>
            </footer>
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 29
            echo "        <p>There are no blog entries for symblog</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    <div class=\"navigation\">
        ";
        // line 32
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["blogs"]) ? $context["blogs"] : $this->getContext($context, "blogs")));
        echo "
    </div>
";
        
        $__internal_1040d422204073fbd1ba2ae496cb7a8ffb108e78dd99873e71d3e3f019493011->leave($__internal_1040d422204073fbd1ba2ae496cb7a8ffb108e78dd99873e71d3e3f019493011_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 32,  115 => 31,  108 => 29,  99 => 25,  93 => 24,  87 => 23,  80 => 19,  76 => 18,  71 => 16,  63 => 13,  56 => 11,  53 => 10,  48 => 9,  43 => 7,  40 => 6,  34 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/Page/index.html.twig #}

{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block body %}
    <div class=\"navigation\">
        {{ knp_pagination_render(blogs) }}
    </div>
    {% for blog in blogs %}
        <article class=\"blog\">
            <div class=\"date\"><time datetime=\"{{ blog.created|date('c') }}\">{{ blog.created|date('l, F j, Y') }}</time></div>
            <header>
                <h2><a href=\"{{ path('BloggerBlogBundle_blog_show', { 'id': blog.id, 'slug': blog.slug }) }}\">{{ blog.title }}</a></h2>
            </header>

            <img src=\"{{ asset('images/' ~ blog.id ~'/' ~ blog.image)}}\" />
            <div class=\"snippet\">
                <p>{{ blog.blog(500) }}</p>
                <p class=\"continue\"><a href=\"{{ path('BloggerBlogBundle_blog_show', { 'id': blog.id, 'slug': blog.slug }) }}\">Continue reading...</a></p>
            </div>

            <footer class=\"meta\">
                <p>Comments: <a href=\"{{ path('BloggerBlogBundle_blog_show', { 'id': blog.id, 'slug': blog.slug }) }}#comments\">{{ blog.comments|length }}</a></p>
                <p>Posted by <span class=\"highlight\">{{ blog.author }}</span> at {{ blog.created|date('h:iA') }}</p>
                <p>Tags: <span class=\"highlight\">{{ blog.tags }}</span></p>
            </footer>
        </article>
    {% else %}
        <p>There are no blog entries for symblog</p>
    {% endfor %}
    <div class=\"navigation\">
        {{ knp_pagination_render(blogs) }}
    </div>
{% endblock %}", "BloggerBlogBundle:Page:index.html.twig", "/var/www/html/symfonyBlog/src/Blogger/BlogBundle/Resources/views/Page/index.html.twig");
    }
}
