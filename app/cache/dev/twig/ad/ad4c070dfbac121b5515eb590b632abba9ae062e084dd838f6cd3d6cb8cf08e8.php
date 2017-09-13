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
        $__internal_4908bfa40713728a0b7b2b90f3cba3f4d50d98544edde95ce706dcec79989fdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4908bfa40713728a0b7b2b90f3cba3f4d50d98544edde95ce706dcec79989fdd->enter($__internal_4908bfa40713728a0b7b2b90f3cba3f4d50d98544edde95ce706dcec79989fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 19
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>

<section id=\"wrapper\">
    <header id=\"header\">
        <div class=\"top\">
            ";
        // line 26
        $this->displayBlock('navigation', $context, $blocks);
        // line 45
        echo "        </div>

        <hgroup>
            <h2>";
        // line 48
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
            <h3>";
        // line 49
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
        </hgroup>
    </header>

    <section class=\"main-col\">
        ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "    </section>
    <aside class=\"sidebar\">
        ";
        // line 59
        $this->displayBlock('sidebar', $context, $blocks);
        // line 60
        echo "    </aside>

    <div id=\"footer\">
        ";
        // line 63
        $this->displayBlock('footer', $context, $blocks);
        // line 66
        echo "    </div>
</section>

";
        // line 69
        $this->displayBlock('javascripts', $context, $blocks);
        // line 70
        echo "</body>
</html>
";
        
        $__internal_4908bfa40713728a0b7b2b90f3cba3f4d50d98544edde95ce706dcec79989fdd->leave($__internal_4908bfa40713728a0b7b2b90f3cba3f4d50d98544edde95ce706dcec79989fdd_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_a51a0e907d67139765d087a6b7d820d12c966bb54b0fcd1d58539121712b1caa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a51a0e907d67139765d087a6b7d820d12c966bb54b0fcd1d58539121712b1caa->enter($__internal_a51a0e907d67139765d087a6b7d820d12c966bb54b0fcd1d58539121712b1caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symblog";
        
        $__internal_a51a0e907d67139765d087a6b7d820d12c966bb54b0fcd1d58539121712b1caa->leave($__internal_a51a0e907d67139765d087a6b7d820d12c966bb54b0fcd1d58539121712b1caa_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8c45f3bf04ca7f0886813075a3f35b5481bca0a9206aab1cf8355d8782ce2626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c45f3bf04ca7f0886813075a3f35b5481bca0a9206aab1cf8355d8782ce2626->enter($__internal_8c45f3bf04ca7f0886813075a3f35b5481bca0a9206aab1cf8355d8782ce2626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
            // asset "51c56cc_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_51c56cc_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/51c56cc_part_1_test_2.css");
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
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ajax.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_8c45f3bf04ca7f0886813075a3f35b5481bca0a9206aab1cf8355d8782ce2626->leave($__internal_8c45f3bf04ca7f0886813075a3f35b5481bca0a9206aab1cf8355d8782ce2626_prof);

    }

    // line 26
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_cecfdab37401beb468ae45620b22a256530a54bbefa29f0573ecaa575b35187d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cecfdab37401beb468ae45620b22a256530a54bbefa29f0573ecaa575b35187d->enter($__internal_cecfdab37401beb468ae45620b22a256530a54bbefa29f0573ecaa575b35187d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 27
        echo "                <nav>
                    <ul class=\"navigation\">
                        <li><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_stripe");
        echo "\">Stripe</a></li>
                        ";
        // line 30
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 31
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_admin");
            echo "\">Administrator</a></li>
                        ";
        }
        // line 33
        echo "                        <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_homepage");
        echo "\">Home</a></li>
                        <li><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_about");
        echo "\">About</a></li>
                        <li><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_contact");
        echo "\">Contact</a></li>
                        ";
        // line 36
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY") == false)) {
            // line 37
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Login</a></li>
                            <li><a href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">Registartion</a></li>
                        ";
        } else {
            // line 40
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " Logout</a></li>
                        ";
        }
        // line 42
        echo "                    </ul>
                </nav>
            ";
        
        $__internal_cecfdab37401beb468ae45620b22a256530a54bbefa29f0573ecaa575b35187d->leave($__internal_cecfdab37401beb468ae45620b22a256530a54bbefa29f0573ecaa575b35187d_prof);

    }

    // line 48
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_eeca16d72103772725bea5666b68e6ff003cfa9681917559f5ebf1b53a1be460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeca16d72103772725bea5666b68e6ff003cfa9681917559f5ebf1b53a1be460->enter($__internal_eeca16d72103772725bea5666b68e6ff003cfa9681917559f5ebf1b53a1be460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_homepage");
        echo "\">Symblog</a>";
        
        $__internal_eeca16d72103772725bea5666b68e6ff003cfa9681917559f5ebf1b53a1be460->leave($__internal_eeca16d72103772725bea5666b68e6ff003cfa9681917559f5ebf1b53a1be460_prof);

    }

    // line 49
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_d600a2040a2d214272c72c494301d1ddafe1b07883289144d8cea6e59383d234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d600a2040a2d214272c72c494301d1ddafe1b07883289144d8cea6e59383d234->enter($__internal_d600a2040a2d214272c72c494301d1ddafe1b07883289144d8cea6e59383d234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_homepage");
        echo "\">creating a blog in Symfony2</a>";
        
        $__internal_d600a2040a2d214272c72c494301d1ddafe1b07883289144d8cea6e59383d234->leave($__internal_d600a2040a2d214272c72c494301d1ddafe1b07883289144d8cea6e59383d234_prof);

    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0eedff3304d3d85d34e961b5fe8f525990b202f93c96984c4ad0b6011336c08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0eedff3304d3d85d34e961b5fe8f525990b202f93c96984c4ad0b6011336c08->enter($__internal_e0eedff3304d3d85d34e961b5fe8f525990b202f93c96984c4ad0b6011336c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 55
        echo "
        ";
        
        $__internal_e0eedff3304d3d85d34e961b5fe8f525990b202f93c96984c4ad0b6011336c08->leave($__internal_e0eedff3304d3d85d34e961b5fe8f525990b202f93c96984c4ad0b6011336c08_prof);

    }

    // line 59
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_511bb90a2c4b41944cfaeeb37a2b6afa69974591ce18454a0dbaab694bdc6f9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_511bb90a2c4b41944cfaeeb37a2b6afa69974591ce18454a0dbaab694bdc6f9c->enter($__internal_511bb90a2c4b41944cfaeeb37a2b6afa69974591ce18454a0dbaab694bdc6f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_511bb90a2c4b41944cfaeeb37a2b6afa69974591ce18454a0dbaab694bdc6f9c->leave($__internal_511bb90a2c4b41944cfaeeb37a2b6afa69974591ce18454a0dbaab694bdc6f9c_prof);

    }

    // line 63
    public function block_footer($context, array $blocks = array())
    {
        $__internal_484e825ced77af3f1ae12a83c072c63cb31710faf19a42cd03318eff76e7c9a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_484e825ced77af3f1ae12a83c072c63cb31710faf19a42cd03318eff76e7c9a1->enter($__internal_484e825ced77af3f1ae12a83c072c63cb31710faf19a42cd03318eff76e7c9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 64
        echo "            Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
        ";
        
        $__internal_484e825ced77af3f1ae12a83c072c63cb31710faf19a42cd03318eff76e7c9a1->leave($__internal_484e825ced77af3f1ae12a83c072c63cb31710faf19a42cd03318eff76e7c9a1_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3d52f68beb6ad0933ad5f8c078fd38f569775d04722eb3a65646bec76763feda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d52f68beb6ad0933ad5f8c078fd38f569775d04722eb3a65646bec76763feda->enter($__internal_3d52f68beb6ad0933ad5f8c078fd38f569775d04722eb3a65646bec76763feda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3d52f68beb6ad0933ad5f8c078fd38f569775d04722eb3a65646bec76763feda->leave($__internal_3d52f68beb6ad0933ad5f8c078fd38f569775d04722eb3a65646bec76763feda_prof);

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
        return array (  299 => 69,  291 => 64,  285 => 63,  274 => 59,  266 => 55,  260 => 54,  246 => 49,  232 => 48,  223 => 42,  215 => 40,  210 => 38,  205 => 37,  203 => 36,  199 => 35,  195 => 34,  190 => 33,  184 => 31,  182 => 30,  178 => 29,  174 => 27,  168 => 26,  159 => 17,  154 => 16,  134 => 14,  130 => 13,  126 => 11,  120 => 10,  108 => 6,  99 => 70,  97 => 69,  92 => 66,  90 => 63,  85 => 60,  83 => 59,  79 => 57,  77 => 54,  69 => 49,  65 => 48,  60 => 45,  58 => 26,  47 => 19,  45 => 10,  38 => 6,  31 => 1,);
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
        <script src=\"{{ asset('js/ajax.js') }}\"></script>
        <script src=\"{{ asset('js/jquery-3.2.1.js') }}\"></script>
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
        {% block body %}

        {% endblock %}
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
