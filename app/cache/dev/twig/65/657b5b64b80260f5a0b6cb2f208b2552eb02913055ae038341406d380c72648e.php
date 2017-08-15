<?php

/* ::base.html.twig */
class __TwigTemplate_071d0e424a6b1ded2fb4928ea5e9edfe8049acecbc196ddc2ac9511f92144e70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fc0e277c7783f827b5eaceda529e627dfa0b85f3d596f66fc0970b69e2904f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fc0e277c7783f827b5eaceda529e627dfa0b85f3d596f66fc0970b69e2904f0->enter($__internal_1fc0e277c7783f827b5eaceda529e627dfa0b85f3d596f66fc0970b69e2904f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - Symblog</title>
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>

<section id=\"wrapper\">
    <header id=\"header\">
        <div class=\"top\">
            ";
        // line 24
        $this->displayBlock('navigation', $context, $blocks);
        // line 33
        echo "        </div>

        <hgroup>
            <h2>";
        // line 36
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
            <h3>";
        // line 37
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
        </hgroup>
    </header>

    <section class=\"main-col\">
        ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "    </section>
    <aside class=\"sidebar\">
        ";
        // line 45
        $this->displayBlock('sidebar', $context, $blocks);
        // line 46
        echo "    </aside>

    <div id=\"footer\">
        ";
        // line 49
        $this->displayBlock('footer', $context, $blocks);
        // line 52
        echo "    </div>
</section>

";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "</body>
</html>
";
        
        $__internal_1fc0e277c7783f827b5eaceda529e627dfa0b85f3d596f66fc0970b69e2904f0->leave($__internal_1fc0e277c7783f827b5eaceda529e627dfa0b85f3d596f66fc0970b69e2904f0_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_f82c798d0287e55d51517d5d34ee8448b1b106f0f647c105690a3b26e500fd6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f82c798d0287e55d51517d5d34ee8448b1b106f0f647c105690a3b26e500fd6c->enter($__internal_f82c798d0287e55d51517d5d34ee8448b1b106f0f647c105690a3b26e500fd6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symblog";
        
        $__internal_f82c798d0287e55d51517d5d34ee8448b1b106f0f647c105690a3b26e500fd6c->leave($__internal_f82c798d0287e55d51517d5d34ee8448b1b106f0f647c105690a3b26e500fd6c_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7149c2a09b940db243190baf36bd0b55c473fbc27cb39f4cec1c6153f8dc0a8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7149c2a09b940db243190baf36bd0b55c473fbc27cb39f4cec1c6153f8dc0a8f->enter($__internal_7149c2a09b940db243190baf36bd0b55c473fbc27cb39f4cec1c6153f8dc0a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
        ";
        // line 13
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "51c56cc_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_51c56cc_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/51c56cc_part_1_screen_1.css");
            // line 14
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
        ";
        } else {
            // asset "51c56cc"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_51c56cc") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/51c56cc.css");
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
        ";
        }
        unset($context["asset_url"]);
        // line 16
        echo "    ";
        
        $__internal_7149c2a09b940db243190baf36bd0b55c473fbc27cb39f4cec1c6153f8dc0a8f->leave($__internal_7149c2a09b940db243190baf36bd0b55c473fbc27cb39f4cec1c6153f8dc0a8f_prof);

    }

    // line 24
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_3aa7d3484b15b5736691599af13f7da753e0ce0772708885e4b107cec828af94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aa7d3484b15b5736691599af13f7da753e0ce0772708885e4b107cec828af94->enter($__internal_3aa7d3484b15b5736691599af13f7da753e0ce0772708885e4b107cec828af94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 25
        echo "                <nav>
                    <ul class=\"navigation\">
                        <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_homepage");
        echo "\">Home</a></li>
                        <li><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_about");
        echo "\">About</a></li>
                        <li><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_contact");
        echo "\">Contact</a></li>
                    </ul>
                </nav>
            ";
        
        $__internal_3aa7d3484b15b5736691599af13f7da753e0ce0772708885e4b107cec828af94->leave($__internal_3aa7d3484b15b5736691599af13f7da753e0ce0772708885e4b107cec828af94_prof);

    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_d756fd9e166a6aa63e119aa0e3026f052cc882a2f5550e9aa31e7cbee7c5355a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d756fd9e166a6aa63e119aa0e3026f052cc882a2f5550e9aa31e7cbee7c5355a->enter($__internal_d756fd9e166a6aa63e119aa0e3026f052cc882a2f5550e9aa31e7cbee7c5355a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_homepage");
        echo "\">Symblog</a>";
        
        $__internal_d756fd9e166a6aa63e119aa0e3026f052cc882a2f5550e9aa31e7cbee7c5355a->leave($__internal_d756fd9e166a6aa63e119aa0e3026f052cc882a2f5550e9aa31e7cbee7c5355a_prof);

    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_0870de3eab937cf77b0c37a8c45d1424ee1049040e5aff307c0d820fef05d18b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0870de3eab937cf77b0c37a8c45d1424ee1049040e5aff307c0d820fef05d18b->enter($__internal_0870de3eab937cf77b0c37a8c45d1424ee1049040e5aff307c0d820fef05d18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_homepage");
        echo "\">creating a blog in Symfony2</a>";
        
        $__internal_0870de3eab937cf77b0c37a8c45d1424ee1049040e5aff307c0d820fef05d18b->leave($__internal_0870de3eab937cf77b0c37a8c45d1424ee1049040e5aff307c0d820fef05d18b_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6d6144575841528637daaae534e43f272328e9cc2668d8ccb13aef16ec91408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d6144575841528637daaae534e43f272328e9cc2668d8ccb13aef16ec91408->enter($__internal_d6d6144575841528637daaae534e43f272328e9cc2668d8ccb13aef16ec91408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d6d6144575841528637daaae534e43f272328e9cc2668d8ccb13aef16ec91408->leave($__internal_d6d6144575841528637daaae534e43f272328e9cc2668d8ccb13aef16ec91408_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_4e10830615e4451ab21110f2e764e8988d6f2a8f5fdffec06f5eac210a143751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e10830615e4451ab21110f2e764e8988d6f2a8f5fdffec06f5eac210a143751->enter($__internal_4e10830615e4451ab21110f2e764e8988d6f2a8f5fdffec06f5eac210a143751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_4e10830615e4451ab21110f2e764e8988d6f2a8f5fdffec06f5eac210a143751->leave($__internal_4e10830615e4451ab21110f2e764e8988d6f2a8f5fdffec06f5eac210a143751_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0fe9bf6fe9b58bdb1d8222cd6dc210fca2fbf85dc60877cbd1fc14ec0340c6a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fe9bf6fe9b58bdb1d8222cd6dc210fca2fbf85dc60877cbd1fc14ec0340c6a0->enter($__internal_0fe9bf6fe9b58bdb1d8222cd6dc210fca2fbf85dc60877cbd1fc14ec0340c6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "            Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
        ";
        
        $__internal_0fe9bf6fe9b58bdb1d8222cd6dc210fca2fbf85dc60877cbd1fc14ec0340c6a0->leave($__internal_0fe9bf6fe9b58bdb1d8222cd6dc210fca2fbf85dc60877cbd1fc14ec0340c6a0_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_86a96c5fcb8306f5b4b1363f6c314e686ebe9dc3d38beb7fcd86cfcbfa81a183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a96c5fcb8306f5b4b1363f6c314e686ebe9dc3d38beb7fcd86cfcbfa81a183->enter($__internal_86a96c5fcb8306f5b4b1363f6c314e686ebe9dc3d38beb7fcd86cfcbfa81a183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_86a96c5fcb8306f5b4b1363f6c314e686ebe9dc3d38beb7fcd86cfcbfa81a183->leave($__internal_86a96c5fcb8306f5b4b1363f6c314e686ebe9dc3d38beb7fcd86cfcbfa81a183_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 55,  240 => 50,  234 => 49,  223 => 45,  212 => 42,  198 => 37,  184 => 36,  173 => 29,  169 => 28,  165 => 27,  161 => 25,  155 => 24,  148 => 16,  134 => 14,  130 => 13,  126 => 11,  120 => 10,  108 => 6,  99 => 56,  97 => 55,  92 => 52,  90 => 49,  85 => 46,  83 => 45,  79 => 43,  77 => 42,  69 => 37,  65 => 36,  60 => 33,  58 => 24,  47 => 17,  45 => 10,  38 => 6,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
    <title>{% block title %}Symblog{% endblock %} - Symblog</title>
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    {% block stylesheets %}
        <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
        {% stylesheets 'css/*' %}
            <link href=\"{{ asset_url }}\" rel=\"stylesheet\" media=\"screen\" />
        {% endstylesheets %}
    {% endblock %}
    <link rel=\"shortcut icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>

<section id=\"wrapper\">
    <header id=\"header\">
        <div class=\"top\">
            {% block navigation %}
                <nav>
                    <ul class=\"navigation\">
                        <li><a href=\"{{ path('BloggerBlogBundle_homepage') }}\">Home</a></li>
                        <li><a href=\"{{ path('BloggerBlogBundle_about') }}\">About</a></li>
                        <li><a href=\"{{ path('BloggerBlogBundle_contact') }}\">Contact</a></li>
                    </ul>
                </nav>
            {% endblock %}
        </div>

        <hgroup>
            <h2>{% block blog_title %}<a href=\"{{ path('BloggerBlogBundle_homepage') }}\">Symblog</a>{% endblock %}</h2>
            <h3>{% block blog_tagline %}<a href=\"{{ path('BloggerBlogBundle_homepage') }}\">creating a blog in Symfony2</a>{% endblock %}</h3>
        </hgroup>
    </header>

    <section class=\"main-col\">
        {% block body %}{% endblock %}
    </section>
    <aside class=\"sidebar\">
        {% block sidebar %}{% endblock %}
    </aside>

    <div id=\"footer\">
        {% block footer %}
            Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
        {% endblock %}
    </div>
</section>

{% block javascripts %}{% endblock %}
</body>
</html>
", "::base.html.twig", "/var/www/html/symfonyBlog/app/Resources/views/base.html.twig");
    }
}
