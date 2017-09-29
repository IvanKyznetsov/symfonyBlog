<?php

/* ::base.html.twig */
class __TwigTemplate_2bb9d1d7b6756029a93548ff3ae6ad22943283f87d31fe09a86503b6e9b454ee extends Twig_Template
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
        $__internal_7192ecf8cbdcb5fbe8795ecd980f18b247feaf79cbcbdc53cb7feb6c2adda3c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7192ecf8cbdcb5fbe8795ecd980f18b247feaf79cbcbdc53cb7feb6c2adda3c2->enter($__internal_7192ecf8cbdcb5fbe8795ecd980f18b247feaf79cbcbdc53cb7feb6c2adda3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 24
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>

<section id=\"wrapper\">
    <header id=\"header\">
        <div class=\"top\">
            ";
        // line 31
        $this->displayBlock('navigation', $context, $blocks);
        // line 51
        echo "        </div>

        <hgroup>
            <h2>";
        // line 54
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
            <h3>";
        // line 55
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
        </hgroup>
    </header>

    <section class=\"main-col\">
        ";
        // line 60
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "    </section>
    <aside class=\"sidebar\">
        ";
        // line 65
        $this->displayBlock('sidebar', $context, $blocks);
        // line 66
        echo "    </aside>

    <div id=\"footer\">
        ";
        // line 69
        $this->displayBlock('footer', $context, $blocks);
        // line 72
        echo "    </div>
</section>

";
        // line 75
        $this->displayBlock('javascripts', $context, $blocks);
        // line 76
        echo "</body>
</html>
";
        
        $__internal_7192ecf8cbdcb5fbe8795ecd980f18b247feaf79cbcbdc53cb7feb6c2adda3c2->leave($__internal_7192ecf8cbdcb5fbe8795ecd980f18b247feaf79cbcbdc53cb7feb6c2adda3c2_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_961852dd1c2c4fd4dad120ce2013992f63519d59048874a7b0c9fc1a6bbd21eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_961852dd1c2c4fd4dad120ce2013992f63519d59048874a7b0c9fc1a6bbd21eb->enter($__internal_961852dd1c2c4fd4dad120ce2013992f63519d59048874a7b0c9fc1a6bbd21eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symblog";
        
        $__internal_961852dd1c2c4fd4dad120ce2013992f63519d59048874a7b0c9fc1a6bbd21eb->leave($__internal_961852dd1c2c4fd4dad120ce2013992f63519d59048874a7b0c9fc1a6bbd21eb_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b0c2555085568c990429dbce90b276b52f782127d07434874737a54708f73a31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0c2555085568c990429dbce90b276b52f782127d07434874737a54708f73a31->enter($__internal_b0c2555085568c990429dbce90b276b52f782127d07434874737a54708f73a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
        ";
        // line 13
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "51c56cc_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_51c56cc_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/51c56cc_part_1_Jcrop_1.css");
            // line 14
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
        ";
            // asset "51c56cc_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_51c56cc_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/51c56cc_part_1_jquery.Jcrop_2.css");
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
        ";
            // asset "51c56cc_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_51c56cc_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/51c56cc_part_1_screen_3.css");
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
        ";
            // asset "51c56cc_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_51c56cc_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/51c56cc_part_1_test_4.css");
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
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery.Jcrop.css"), "html", null, true);
        echo "\">
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ajax.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/crop.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.Jcrop.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_b0c2555085568c990429dbce90b276b52f782127d07434874737a54708f73a31->leave($__internal_b0c2555085568c990429dbce90b276b52f782127d07434874737a54708f73a31_prof);

    }

    // line 31
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_d9e76db6b29e2c4f07feced09cf8a201ff28ca7deeb8cf5b5ae4106084075ae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9e76db6b29e2c4f07feced09cf8a201ff28ca7deeb8cf5b5ae4106084075ae3->enter($__internal_d9e76db6b29e2c4f07feced09cf8a201ff28ca7deeb8cf5b5ae4106084075ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 32
        echo "                <nav>
                    <ul class=\"navigation\">
                        <li><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_stripe");
        echo "\">Stripe</a></li>
                        ";
        // line 35
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 36
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_admin");
            echo "\">Administrator</a></li>
                        ";
        }
        // line 38
        echo "                        <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_homepage");
        echo "\">Home</a></li>
                        <li><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_about");
        echo "\">About</a></li>
                        <li><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_contact");
        echo "\">Contact</a></li>
                        ";
        // line 41
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY") == false)) {
            // line 42
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Login</a></li>
                            <li><a href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">Registartion</a></li>
                        ";
        } else {
            // line 45
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_profile_show");
            echo "\">Profile</a></li>
                            <li><a href=\"";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " Logout</a></li>
                        ";
        }
        // line 48
        echo "                    </ul>
                </nav>
            ";
        
        $__internal_d9e76db6b29e2c4f07feced09cf8a201ff28ca7deeb8cf5b5ae4106084075ae3->leave($__internal_d9e76db6b29e2c4f07feced09cf8a201ff28ca7deeb8cf5b5ae4106084075ae3_prof);

    }

    // line 54
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_4e86fbf02eb4e955235c69c23578df41215c1e7c63a269ae35bbb555c33f6b34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e86fbf02eb4e955235c69c23578df41215c1e7c63a269ae35bbb555c33f6b34->enter($__internal_4e86fbf02eb4e955235c69c23578df41215c1e7c63a269ae35bbb555c33f6b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_homepage");
        echo "\">Symblog</a>";
        
        $__internal_4e86fbf02eb4e955235c69c23578df41215c1e7c63a269ae35bbb555c33f6b34->leave($__internal_4e86fbf02eb4e955235c69c23578df41215c1e7c63a269ae35bbb555c33f6b34_prof);

    }

    // line 55
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_ae437bd895e0ca97329fb90221f22a23062322ef52f897d4fa5092468b4ddd38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae437bd895e0ca97329fb90221f22a23062322ef52f897d4fa5092468b4ddd38->enter($__internal_ae437bd895e0ca97329fb90221f22a23062322ef52f897d4fa5092468b4ddd38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_homepage");
        echo "\">creating a blog in Symfony2</a>";
        
        $__internal_ae437bd895e0ca97329fb90221f22a23062322ef52f897d4fa5092468b4ddd38->leave($__internal_ae437bd895e0ca97329fb90221f22a23062322ef52f897d4fa5092468b4ddd38_prof);

    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9c26086162108607d6ceb7a8fbd5fd454fecc09a1b1aacaedf44a1a7b039851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9c26086162108607d6ceb7a8fbd5fd454fecc09a1b1aacaedf44a1a7b039851->enter($__internal_d9c26086162108607d6ceb7a8fbd5fd454fecc09a1b1aacaedf44a1a7b039851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 61
        echo "
        ";
        
        $__internal_d9c26086162108607d6ceb7a8fbd5fd454fecc09a1b1aacaedf44a1a7b039851->leave($__internal_d9c26086162108607d6ceb7a8fbd5fd454fecc09a1b1aacaedf44a1a7b039851_prof);

    }

    // line 65
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_75e856f1bafbebfb08e503b534e5824381a9fa886d6071ceaf9418db372aded7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e856f1bafbebfb08e503b534e5824381a9fa886d6071ceaf9418db372aded7->enter($__internal_75e856f1bafbebfb08e503b534e5824381a9fa886d6071ceaf9418db372aded7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_75e856f1bafbebfb08e503b534e5824381a9fa886d6071ceaf9418db372aded7->leave($__internal_75e856f1bafbebfb08e503b534e5824381a9fa886d6071ceaf9418db372aded7_prof);

    }

    // line 69
    public function block_footer($context, array $blocks = array())
    {
        $__internal_3da7b2c3fb43c5bed3076c2dab219183420153a14ec3fcf73878a2efc69cce5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3da7b2c3fb43c5bed3076c2dab219183420153a14ec3fcf73878a2efc69cce5d->enter($__internal_3da7b2c3fb43c5bed3076c2dab219183420153a14ec3fcf73878a2efc69cce5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 70
        echo "            Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
        ";
        
        $__internal_3da7b2c3fb43c5bed3076c2dab219183420153a14ec3fcf73878a2efc69cce5d->leave($__internal_3da7b2c3fb43c5bed3076c2dab219183420153a14ec3fcf73878a2efc69cce5d_prof);

    }

    // line 75
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aefdfcede6e3f477fb08cbac4c865176975e8752c5aab9a3e604b2e0332994a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aefdfcede6e3f477fb08cbac4c865176975e8752c5aab9a3e604b2e0332994a8->enter($__internal_aefdfcede6e3f477fb08cbac4c865176975e8752c5aab9a3e604b2e0332994a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_aefdfcede6e3f477fb08cbac4c865176975e8752c5aab9a3e604b2e0332994a8->leave($__internal_aefdfcede6e3f477fb08cbac4c865176975e8752c5aab9a3e604b2e0332994a8_prof);

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
        return array (  332 => 75,  324 => 70,  318 => 69,  307 => 65,  299 => 61,  293 => 60,  279 => 55,  265 => 54,  256 => 48,  249 => 46,  244 => 45,  239 => 43,  234 => 42,  232 => 41,  228 => 40,  224 => 39,  219 => 38,  213 => 36,  211 => 35,  207 => 34,  203 => 32,  197 => 31,  187 => 21,  183 => 20,  179 => 19,  175 => 18,  171 => 17,  166 => 16,  134 => 14,  130 => 13,  126 => 11,  120 => 10,  108 => 6,  99 => 76,  97 => 75,  92 => 72,  90 => 69,  85 => 66,  83 => 65,  79 => 63,  77 => 60,  69 => 55,  65 => 54,  60 => 51,  58 => 31,  47 => 24,  45 => 10,  38 => 6,  31 => 1,);
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
        <link rel=\"stylesheet\" href=\"{{ asset('css/jquery.Jcrop.css') }}\">
        <script src=\"{{ asset('js/ajax.js') }}\"></script>
        <script src=\"{{ asset('js/jquery-3.2.1.js') }}\"></script>
        <script src=\"{{ asset('js/crop.js') }}\"></script>
        <script src=\"{{ asset('js/jquery.Jcrop.min.js') }}\"></script>
        <script src=\"{{ asset('js/jquery.min.js') }}\"></script>

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
                            <li><a href=\"{{ path('BloggerBlogBundle_profile_show') }}\">Profile</a></li>
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
