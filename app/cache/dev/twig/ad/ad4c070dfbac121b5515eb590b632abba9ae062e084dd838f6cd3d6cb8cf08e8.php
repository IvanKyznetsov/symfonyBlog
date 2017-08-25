<?php

/* ::base.html.twig */
class __TwigTemplate_ce305b8c402415074325158721d786c67796b36dd7ad0635da0dac4ab339582b extends Twig_Template
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
        $__internal_1edbdd510385c01e44ebded3e5e88ad345cfe39a645926847b064508541a3008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1edbdd510385c01e44ebded3e5e88ad345cfe39a645926847b064508541a3008->enter($__internal_1edbdd510385c01e44ebded3e5e88ad345cfe39a645926847b064508541a3008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 43
        echo "        </div>

        <hgroup>
            <h2>";
        // line 46
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
            <h3>";
        // line 47
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
        </hgroup>
    </header>

    <section class=\"main-col\">
        ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "    </section>
    <aside class=\"sidebar\">
        ";
        // line 55
        $this->displayBlock('sidebar', $context, $blocks);
        // line 56
        echo "    </aside>

    <div id=\"footer\">
        ";
        // line 59
        $this->displayBlock('footer', $context, $blocks);
        // line 62
        echo "    </div>
</section>

";
        // line 65
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "</body>
</html>
";
        
        $__internal_1edbdd510385c01e44ebded3e5e88ad345cfe39a645926847b064508541a3008->leave($__internal_1edbdd510385c01e44ebded3e5e88ad345cfe39a645926847b064508541a3008_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_dff0a8d9ea73ea171541612aee4b30442f030fefef6e9fa923eadda27db139fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dff0a8d9ea73ea171541612aee4b30442f030fefef6e9fa923eadda27db139fe->enter($__internal_dff0a8d9ea73ea171541612aee4b30442f030fefef6e9fa923eadda27db139fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symblog";
        
        $__internal_dff0a8d9ea73ea171541612aee4b30442f030fefef6e9fa923eadda27db139fe->leave($__internal_dff0a8d9ea73ea171541612aee4b30442f030fefef6e9fa923eadda27db139fe_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0da030b9fab340d8a4ef45fa3224243c9a3e02b05ff4b3b011f32064b4186552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0da030b9fab340d8a4ef45fa3224243c9a3e02b05ff4b3b011f32064b4186552->enter($__internal_0da030b9fab340d8a4ef45fa3224243c9a3e02b05ff4b3b011f32064b4186552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_0da030b9fab340d8a4ef45fa3224243c9a3e02b05ff4b3b011f32064b4186552->leave($__internal_0da030b9fab340d8a4ef45fa3224243c9a3e02b05ff4b3b011f32064b4186552_prof);

    }

    // line 24
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_73a562c95ed758097f4c2f58efffe52b07eb5abc0190846c3028c7b0ad2f1839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73a562c95ed758097f4c2f58efffe52b07eb5abc0190846c3028c7b0ad2f1839->enter($__internal_73a562c95ed758097f4c2f58efffe52b07eb5abc0190846c3028c7b0ad2f1839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 25
        echo "                <nav>
                    <ul class=\"navigation\">
                        <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_stripe");
        echo "\">Stripe</a></li>
                        ";
        // line 28
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 29
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_admin");
            echo "\">Administrator</a></li>
                        ";
        }
        // line 31
        echo "                        <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_homepage");
        echo "\">Home</a></li>
                        <li><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_about");
        echo "\">About</a></li>
                        <li><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_contact");
        echo "\">Contact</a></li>
                        ";
        // line 34
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY") == false)) {
            // line 35
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Login</a></li>
                            <li><a href=\"";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">Registartion</a></li>
                        ";
        } else {
            // line 38
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " Logout</a></li>
                        ";
        }
        // line 40
        echo "                    </ul>
                </nav>
            ";
        
        $__internal_73a562c95ed758097f4c2f58efffe52b07eb5abc0190846c3028c7b0ad2f1839->leave($__internal_73a562c95ed758097f4c2f58efffe52b07eb5abc0190846c3028c7b0ad2f1839_prof);

    }

    // line 46
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_0cef72542f2114b42d1b04212bf3de0997533575b562d48329872baa87b67976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cef72542f2114b42d1b04212bf3de0997533575b562d48329872baa87b67976->enter($__internal_0cef72542f2114b42d1b04212bf3de0997533575b562d48329872baa87b67976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_homepage");
        echo "\">Symblog</a>";
        
        $__internal_0cef72542f2114b42d1b04212bf3de0997533575b562d48329872baa87b67976->leave($__internal_0cef72542f2114b42d1b04212bf3de0997533575b562d48329872baa87b67976_prof);

    }

    // line 47
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_f847c0190e4a9763da198670cd6d5b5cb45dde80f5241bef5125192bfb5a8ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f847c0190e4a9763da198670cd6d5b5cb45dde80f5241bef5125192bfb5a8ce0->enter($__internal_f847c0190e4a9763da198670cd6d5b5cb45dde80f5241bef5125192bfb5a8ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_homepage");
        echo "\">creating a blog in Symfony2</a>";
        
        $__internal_f847c0190e4a9763da198670cd6d5b5cb45dde80f5241bef5125192bfb5a8ce0->leave($__internal_f847c0190e4a9763da198670cd6d5b5cb45dde80f5241bef5125192bfb5a8ce0_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_65c3188cd8fb5e84b14781c724b6345a4282763e63aaff8f970bfb6e099b88af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65c3188cd8fb5e84b14781c724b6345a4282763e63aaff8f970bfb6e099b88af->enter($__internal_65c3188cd8fb5e84b14781c724b6345a4282763e63aaff8f970bfb6e099b88af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_65c3188cd8fb5e84b14781c724b6345a4282763e63aaff8f970bfb6e099b88af->leave($__internal_65c3188cd8fb5e84b14781c724b6345a4282763e63aaff8f970bfb6e099b88af_prof);

    }

    // line 55
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_d42fc25ead7093f15b6bb9c6cc43b8abfaabcd34bc9059dd603b6f6f508fc8e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d42fc25ead7093f15b6bb9c6cc43b8abfaabcd34bc9059dd603b6f6f508fc8e8->enter($__internal_d42fc25ead7093f15b6bb9c6cc43b8abfaabcd34bc9059dd603b6f6f508fc8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_d42fc25ead7093f15b6bb9c6cc43b8abfaabcd34bc9059dd603b6f6f508fc8e8->leave($__internal_d42fc25ead7093f15b6bb9c6cc43b8abfaabcd34bc9059dd603b6f6f508fc8e8_prof);

    }

    // line 59
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1b9de92c392aedd43ef6b60380daff930fa7d78dd64a636ab79c37a558c242bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b9de92c392aedd43ef6b60380daff930fa7d78dd64a636ab79c37a558c242bc->enter($__internal_1b9de92c392aedd43ef6b60380daff930fa7d78dd64a636ab79c37a558c242bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 60
        echo "            Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
        ";
        
        $__internal_1b9de92c392aedd43ef6b60380daff930fa7d78dd64a636ab79c37a558c242bc->leave($__internal_1b9de92c392aedd43ef6b60380daff930fa7d78dd64a636ab79c37a558c242bc_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b07508609edd6db4a87175f158cd32da4793383650d4cdc162670a664a4bdbed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b07508609edd6db4a87175f158cd32da4793383650d4cdc162670a664a4bdbed->enter($__internal_b07508609edd6db4a87175f158cd32da4793383650d4cdc162670a664a4bdbed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b07508609edd6db4a87175f158cd32da4793383650d4cdc162670a664a4bdbed->leave($__internal_b07508609edd6db4a87175f158cd32da4793383650d4cdc162670a664a4bdbed_prof);

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
        return array (  283 => 65,  275 => 60,  269 => 59,  258 => 55,  247 => 52,  233 => 47,  219 => 46,  210 => 40,  202 => 38,  197 => 36,  192 => 35,  190 => 34,  186 => 33,  182 => 32,  177 => 31,  171 => 29,  169 => 28,  165 => 27,  161 => 25,  155 => 24,  148 => 16,  134 => 14,  130 => 13,  126 => 11,  120 => 10,  108 => 6,  99 => 66,  97 => 65,  92 => 62,  90 => 59,  85 => 56,  83 => 55,  79 => 53,  77 => 52,  69 => 47,  65 => 46,  60 => 43,  58 => 24,  47 => 17,  45 => 10,  38 => 6,  31 => 1,);
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
                        <li><a href=\"{{ path('BloggerBlogBundle_stripe') }}\">Stripe</a></li>
                        {% if (is_granted('ROLE_ADMIN')) %}
                            <li><a href=\"{{ path('BloggerBlogBundle_admin') }}\">Administrator</a></li>
                        {% endif %}
                        <li><a href=\"{{ path('BloggerBlogBundle_homepage') }}\">Home</a></li>
                        <li><a href=\"{{ path('BloggerBlogBundle_about') }}\">About</a></li>
                        <li><a href=\"{{ path('BloggerBlogBundle_contact') }}\">Contact</a></li>
                        {% if (is_granted('IS_AUTHENTICATED_FULLY')) == false %}
                            <li><a href=\"{{ path('fos_user_security_login') }}\">Login</a></li>
                            <li><a href=\"{{ path('fos_user_registration_register') }}\">Registartion</a></li>
                        {% else %}
                            <li><a href=\"{{ path('fos_user_security_logout') }}\">{{ app.user.username }} Logout</a></li>
                        {% endif %}
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
