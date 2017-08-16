<?php

/* BloggerBlogBundle:Page:sidebar.html.twig */
class __TwigTemplate_3c01c92499df327332c66f007db0070cfcd3b512071ad8dff7965b221d873964 extends Twig_Template
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
        $__internal_9e5335e126ac592840825f7ced5fb579db54cfb43ff6a1ca01406f7c81a1841f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e5335e126ac592840825f7ced5fb579db54cfb43ff6a1ca01406f7c81a1841f->enter($__internal_9e5335e126ac592840825f7ced5fb579db54cfb43ff6a1ca01406f7c81a1841f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:sidebar.html.twig"));

        // line 2
        echo "
<section class=\"section\">
    <header>
        <h3>Tag Cloud</h3>
    </header>
    <p class=\"tags\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["tag"] => $context["weight"]) {
            // line 9
            echo "            <span class=\"weight-";
            echo twig_escape_filter($this->env, $context["weight"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "</span>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 11
            echo "            <p>There are no tags</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tag'], $context['weight'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </p>
</section>
<section class=\"section\">
    <header>
        <h3>Latest Comments</h3>
    </header>
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["latestComments"]) ? $context["latestComments"] : $this->getContext($context, "latestComments")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 20
            echo "        <article class=\"comment\">
            <header>
                <p class=\"small\"><span class=\"highlight\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "user", array()), "html", null, true);
            echo "</span> commented on
                    <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($this->getAttribute($context["comment"], "blog", array()), "id", array()), "slug" => $this->getAttribute($this->getAttribute($context["comment"], "blog", array()), "slug", array()))), "html", null, true);
            echo "#comment-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
            echo "\">
                        ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "blog", array()), "title", array()), "html", null, true);
            echo "
                    </a>
                    [<em><time datetime=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "created", array()), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Blogger\BlogBundle\Twig\Extensions\BloggerBlogExtension')->createdAgo($this->getAttribute($context["comment"], "created", array())), "html", null, true);
            echo "</time></em>]
                </p>
            </header>
            <p>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "comment", array()), "html", null, true);
            echo "</p>
            </p>
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "        <p>There are no recent comments</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "</section>


";
        
        $__internal_9e5335e126ac592840825f7ced5fb579db54cfb43ff6a1ca01406f7c81a1841f->leave($__internal_9e5335e126ac592840825f7ced5fb579db54cfb43ff6a1ca01406f7c81a1841f_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 35,  101 => 33,  92 => 29,  84 => 26,  79 => 24,  73 => 23,  69 => 22,  65 => 20,  60 => 19,  52 => 13,  45 => 11,  35 => 9,  30 => 8,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/Page/sidebar.html.twig #}

<section class=\"section\">
    <header>
        <h3>Tag Cloud</h3>
    </header>
    <p class=\"tags\">
        {% for tag, weight in tags %}
            <span class=\"weight-{{ weight }}\">{{ tag }}</span>
        {% else %}
            <p>There are no tags</p>
        {% endfor %}
    </p>
</section>
<section class=\"section\">
    <header>
        <h3>Latest Comments</h3>
    </header>
    {% for comment in latestComments %}
        <article class=\"comment\">
            <header>
                <p class=\"small\"><span class=\"highlight\">{{ comment.user }}</span> commented on
                    <a href=\"{{ path('BloggerBlogBundle_blog_show', { 'id': comment.blog.id, 'slug': comment.blog.slug }) }}#comment-{{ comment.id }}\">
                        {{ comment.blog.title }}
                    </a>
                    [<em><time datetime=\"{{ comment.created|date('c') }}\">{{ comment.created|created_ago }}</time></em>]
                </p>
            </header>
            <p>{{ comment.comment }}</p>
            </p>
        </article>
    {% else %}
        <p>There are no recent comments</p>
    {% endfor %}
</section>


", "BloggerBlogBundle:Page:sidebar.html.twig", "/var/www/html/symfonyBlog/src/Blogger/BlogBundle/Resources/views/Page/sidebar.html.twig");
    }
}
