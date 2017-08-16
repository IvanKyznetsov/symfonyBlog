<?php

/* ::base.html.twig */
class __TwigTemplate_73690e1a774696b121a672916854b7bdc1c8bf3f403e7220b04e65dbcc64866d extends Twig_Template
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
        $__internal_2b0798adb42eabb1bcb1d96277d06451e63cb6b986ace7e2a9f5a5c637dcba73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b0798adb42eabb1bcb1d96277d06451e63cb6b986ace7e2a9f5a5c637dcba73->enter($__internal_2b0798adb42eabb1bcb1d96277d06451e63cb6b986ace7e2a9f5a5c637dcba73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 42
        echo "        </div>

        <hgroup>
            <h2>";
        // line 45
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
            <h3>";
        // line 46
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
        </hgroup>
    </header>

    <section class=\"main-col\">
        ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "    </section>
    <aside class=\"sidebar\">
        ";
        // line 54
        $this->displayBlock('sidebar', $context, $blocks);
        // line 55
        echo "    </aside>

    <div id=\"footer\">
        ";
        // line 58
        $this->displayBlock('footer', $context, $blocks);
        // line 61
        echo "    </div>
</section>

";
        // line 64
        $this->displayBlock('javascripts', $context, $blocks);
        // line 65
        echo "</body>
</html>
";
        
        $__internal_2b0798adb42eabb1bcb1d96277d06451e63cb6b986ace7e2a9f5a5c637dcba73->leave($__internal_2b0798adb42eabb1bcb1d96277d06451e63cb6b986ace7e2a9f5a5c637dcba73_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4176418585f4ce9e9c32bc908d752be0839d8cfbdca5c2aa55a59caff36dc3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4176418585f4ce9e9c32bc908d752be0839d8cfbdca5c2aa55a59caff36dc3d->enter($__internal_d4176418585f4ce9e9c32bc908d752be0839d8cfbdca5c2aa55a59caff36dc3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symblog";
        
        $__internal_d4176418585f4ce9e9c32bc908d752be0839d8cfbdca5c2aa55a59caff36dc3d->leave($__internal_d4176418585f4ce9e9c32bc908d752be0839d8cfbdca5c2aa55a59caff36dc3d_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c23b27d350cbfec6719177e2a4eb18e44239dbc30204b5b7804e0026d54067a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c23b27d350cbfec6719177e2a4eb18e44239dbc30204b5b7804e0026d54067a3->enter($__internal_c23b27d350cbfec6719177e2a4eb18e44239dbc30204b5b7804e0026d54067a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c23b27d350cbfec6719177e2a4eb18e44239dbc30204b5b7804e0026d54067a3->leave($__internal_c23b27d350cbfec6719177e2a4eb18e44239dbc30204b5b7804e0026d54067a3_prof);

    }

    // line 24
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_426a0cc46259f1754c0ff1e7e4212ff9e9dfc6e4c69b5241896869d8e98dacfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_426a0cc46259f1754c0ff1e7e4212ff9e9dfc6e4c69b5241896869d8e98dacfe->enter($__internal_426a0cc46259f1754c0ff1e7e4212ff9e9dfc6e4c69b5241896869d8e98dacfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 25
        echo "                <nav>
                    <ul class=\"navigation\">
                        ";
        // line 27
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 28
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_admin");
            echo "\">Administrator</a></li>
                        ";
        }
        // line 30
        echo "                        <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_homepage");
        echo "\">Home</a></li>
                        <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_about");
        echo "\">About</a></li>
                        <li><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_contact");
        echo "\">Contact</a></li>
                        ";
        // line 33
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY") == false)) {
            // line 34
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Login</a></li>
                            <li><a href=\"";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">Registartion</a></li>
                        ";
        } else {
            // line 37
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " Logout</a></li>
                        ";
        }
        // line 39
        echo "                    </ul>
                </nav>
            ";
        
        $__internal_426a0cc46259f1754c0ff1e7e4212ff9e9dfc6e4c69b5241896869d8e98dacfe->leave($__internal_426a0cc46259f1754c0ff1e7e4212ff9e9dfc6e4c69b5241896869d8e98dacfe_prof);

    }

    // line 45
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_3d09d5232050b25e56ce37167b68259f583de79ca562736741a7740b70f033ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d09d5232050b25e56ce37167b68259f583de79ca562736741a7740b70f033ee->enter($__internal_3d09d5232050b25e56ce37167b68259f583de79ca562736741a7740b70f033ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_homepage");
        echo "\">Symblog</a>";
        
        $__internal_3d09d5232050b25e56ce37167b68259f583de79ca562736741a7740b70f033ee->leave($__internal_3d09d5232050b25e56ce37167b68259f583de79ca562736741a7740b70f033ee_prof);

    }

    // line 46
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_5d8ff3a14064813cbec8dcd874880b8ab9ad436d838094ecb24a0ccc62eca6b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d8ff3a14064813cbec8dcd874880b8ab9ad436d838094ecb24a0ccc62eca6b3->enter($__internal_5d8ff3a14064813cbec8dcd874880b8ab9ad436d838094ecb24a0ccc62eca6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_homepage");
        echo "\">creating a blog in Symfony2</a>";
        
        $__internal_5d8ff3a14064813cbec8dcd874880b8ab9ad436d838094ecb24a0ccc62eca6b3->leave($__internal_5d8ff3a14064813cbec8dcd874880b8ab9ad436d838094ecb24a0ccc62eca6b3_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a509eeae97d4f39cdec705c7d762f2f4305652d0665732d17b1a8d63af34374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a509eeae97d4f39cdec705c7d762f2f4305652d0665732d17b1a8d63af34374->enter($__internal_5a509eeae97d4f39cdec705c7d762f2f4305652d0665732d17b1a8d63af34374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5a509eeae97d4f39cdec705c7d762f2f4305652d0665732d17b1a8d63af34374->leave($__internal_5a509eeae97d4f39cdec705c7d762f2f4305652d0665732d17b1a8d63af34374_prof);

    }

    // line 54
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_f03569897f4379919d923de436be2b03eb2438c685cedb419493a7e01598e4cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f03569897f4379919d923de436be2b03eb2438c685cedb419493a7e01598e4cf->enter($__internal_f03569897f4379919d923de436be2b03eb2438c685cedb419493a7e01598e4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_f03569897f4379919d923de436be2b03eb2438c685cedb419493a7e01598e4cf->leave($__internal_f03569897f4379919d923de436be2b03eb2438c685cedb419493a7e01598e4cf_prof);

    }

    // line 58
    public function block_footer($context, array $blocks = array())
    {
        $__internal_bc0df9099a10e7559d21e0ded98191319d0052b2ec24dd362374c510505c2b5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc0df9099a10e7559d21e0ded98191319d0052b2ec24dd362374c510505c2b5f->enter($__internal_bc0df9099a10e7559d21e0ded98191319d0052b2ec24dd362374c510505c2b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 59
        echo "            Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
        ";
        
        $__internal_bc0df9099a10e7559d21e0ded98191319d0052b2ec24dd362374c510505c2b5f->leave($__internal_bc0df9099a10e7559d21e0ded98191319d0052b2ec24dd362374c510505c2b5f_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_260823e4b31d09d9cc90ccc0b9136f9a89199864efbd75a2728fea260cf14a31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_260823e4b31d09d9cc90ccc0b9136f9a89199864efbd75a2728fea260cf14a31->enter($__internal_260823e4b31d09d9cc90ccc0b9136f9a89199864efbd75a2728fea260cf14a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_260823e4b31d09d9cc90ccc0b9136f9a89199864efbd75a2728fea260cf14a31->leave($__internal_260823e4b31d09d9cc90ccc0b9136f9a89199864efbd75a2728fea260cf14a31_prof);

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
        return array (  279 => 64,  271 => 59,  265 => 58,  254 => 54,  243 => 51,  229 => 46,  215 => 45,  206 => 39,  198 => 37,  193 => 35,  188 => 34,  186 => 33,  182 => 32,  178 => 31,  173 => 30,  167 => 28,  165 => 27,  161 => 25,  155 => 24,  148 => 16,  134 => 14,  130 => 13,  126 => 11,  120 => 10,  108 => 6,  99 => 65,  97 => 64,  92 => 61,  90 => 58,  85 => 55,  83 => 54,  79 => 52,  77 => 51,  69 => 46,  65 => 45,  60 => 42,  58 => 24,  47 => 17,  45 => 10,  38 => 6,  31 => 1,);
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
