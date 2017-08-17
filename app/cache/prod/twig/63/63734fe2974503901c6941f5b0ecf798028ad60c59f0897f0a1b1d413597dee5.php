<?php

/* ::base.html.twig */
class __TwigTemplate_d63b0551063197c73e992cd86162c3e2c1436fa7e0694d7df9bbe9523bb8e79a extends Twig_Template
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
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Symblog";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "        <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
        ";
        // line 13
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "51c56cc_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_51c56cc_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/51c56cc_part_1_screen_1.css");
            // line 14
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
        ";
        } else {
            // asset "51c56cc"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_51c56cc") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/51c56cc.css");
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
        ";
        }
        unset($context["asset_url"]);
        // line 16
        echo "    ";
    }

    // line 24
    public function block_navigation($context, array $blocks = array())
    {
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
            echo " Logout</a></li>
                        ";
        }
        // line 39
        echo "                    </ul>
                </nav>
            ";
    }

    // line 45
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_homepage");
        echo "\">Symblog</a>";
    }

    // line 46
    public function block_blog_tagline($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_homepage");
        echo "\">creating a blog in Symfony2</a>";
    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
    }

    // line 54
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 58
    public function block_footer($context, array $blocks = array())
    {
        // line 59
        echo "            Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
        ";
    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  225 => 64,  220 => 59,  217 => 58,  212 => 54,  207 => 51,  199 => 46,  191 => 45,  185 => 39,  177 => 37,  172 => 35,  167 => 34,  165 => 33,  161 => 32,  157 => 31,  152 => 30,  146 => 28,  144 => 27,  140 => 25,  137 => 24,  133 => 16,  119 => 14,  115 => 13,  111 => 11,  108 => 10,  102 => 6,  96 => 65,  94 => 64,  89 => 61,  87 => 58,  82 => 55,  80 => 54,  76 => 52,  74 => 51,  66 => 46,  62 => 45,  57 => 42,  55 => 24,  44 => 17,  42 => 10,  35 => 6,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::base.html.twig", "/var/www/html/symfonyBlog/app/Resources/views/base.html.twig");
    }
}
