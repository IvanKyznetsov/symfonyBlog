<?php

/* BloggerBlogBundle:Comment:index.html.twig */
class __TwigTemplate_f623ef3f32dcfabc948b4df62b8c712205388639e02c38b1ad44753f15678110 extends Twig_Template
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
        $__internal_3c754961d71261fede303771a8837a5513d4667fd3e786041a8e3d32860ba69b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c754961d71261fede303771a8837a5513d4667fd3e786041a8e3d32860ba69b->enter($__internal_3c754961d71261fede303771a8837a5513d4667fd3e786041a8e3d32860ba69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Comment:index.html.twig"));

        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 4
            echo "    <article class=\"article_comment comment ";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($context["loop"], "index0", array())), "html", null, true);
            echo "\" id=\"comment-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
            echo "\">
        <header>
            <p>
                <span class=\"highlight\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "user", array()), "html", null, true);
            echo "</span>
                ";
            // line 9
            echo "                ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 10
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_comment_delete", array("commentId" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
                echo "\">X</a>
                ";
            }
            // line 12
            echo "            </p>
        </header>
        <p class=\"comment_blog\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "comment", array()), "html", null, true);
            echo "</p>
    </article>
";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 17
            echo "    <p>There are no comments for this post. Be the first to comment...</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_3c754961d71261fede303771a8837a5513d4667fd3e786041a8e3d32860ba69b->leave($__internal_3c754961d71261fede303771a8837a5513d4667fd3e786041a8e3d32860ba69b_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Comment:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 17,  69 => 14,  65 => 12,  59 => 10,  56 => 9,  52 => 7,  43 => 4,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/Comment/index.html.twig #}

{% for comment in comments %}
    <article class=\"article_comment comment {{ cycle(['odd', 'even'], loop.index0) }}\" id=\"comment-{{ comment.id }}\">
        <header>
            <p>
                <span class=\"highlight\">{{ comment.user }}</span>
                {#commented <time datetime=\"{{ comment.created|date('c') }}\">{{ comment.created|created_ago }}</time>#}
                {% if is_granted('ROLE_ADMIN') %}
                    <a href=\"{{ path('BloggerBlogBundle_comment_delete',{ 'commentId': comment.id }) }}\">X</a>
                {% endif %}
            </p>
        </header>
        <p class=\"comment_blog\">{{ comment.comment }}</p>
    </article>
{% else %}
    <p>There are no comments for this post. Be the first to comment...</p>
{% endfor %}", "BloggerBlogBundle:Comment:index.html.twig", "/var/www/html/symfonyBlog/src/Blogger/BlogBundle/Resources/views/Comment/index.html.twig");
    }
}
