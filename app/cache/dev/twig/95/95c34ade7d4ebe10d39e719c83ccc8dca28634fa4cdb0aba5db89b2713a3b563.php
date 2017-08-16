<?php

/* ::base.html.twig */
class __TwigTemplate_e75bdc524b69e347a757862dfa2a9a3c93712bd31fdeaa971314a81f08c555f3 extends Twig_Template
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
        $__internal_da1f01387a6385174486fce447406c30daf1e7eb96c3bac7470d0483ae09ae5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da1f01387a6385174486fce447406c30daf1e7eb96c3bac7470d0483ae09ae5d->enter($__internal_da1f01387a6385174486fce447406c30daf1e7eb96c3bac7470d0483ae09ae5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_da1f01387a6385174486fce447406c30daf1e7eb96c3bac7470d0483ae09ae5d->leave($__internal_da1f01387a6385174486fce447406c30daf1e7eb96c3bac7470d0483ae09ae5d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_01042118c2204e55507dad27303a6a254dce0980aec653c08b75906799e5ce58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01042118c2204e55507dad27303a6a254dce0980aec653c08b75906799e5ce58->enter($__internal_01042118c2204e55507dad27303a6a254dce0980aec653c08b75906799e5ce58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symblog";
        
        $__internal_01042118c2204e55507dad27303a6a254dce0980aec653c08b75906799e5ce58->leave($__internal_01042118c2204e55507dad27303a6a254dce0980aec653c08b75906799e5ce58_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2594a3c722e8a2936caeab0e36e9cad8d7cd73abb3b03549d7e0b9709ed6da02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2594a3c722e8a2936caeab0e36e9cad8d7cd73abb3b03549d7e0b9709ed6da02->enter($__internal_2594a3c722e8a2936caeab0e36e9cad8d7cd73abb3b03549d7e0b9709ed6da02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_2594a3c722e8a2936caeab0e36e9cad8d7cd73abb3b03549d7e0b9709ed6da02->leave($__internal_2594a3c722e8a2936caeab0e36e9cad8d7cd73abb3b03549d7e0b9709ed6da02_prof);

    }

    // line 24
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_7c039696e858b5943ba4f7b299a87a4e542109dfb1df258a6c34fde6f7c2f574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c039696e858b5943ba4f7b299a87a4e542109dfb1df258a6c34fde6f7c2f574->enter($__internal_7c039696e858b5943ba4f7b299a87a4e542109dfb1df258a6c34fde6f7c2f574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_7c039696e858b5943ba4f7b299a87a4e542109dfb1df258a6c34fde6f7c2f574->leave($__internal_7c039696e858b5943ba4f7b299a87a4e542109dfb1df258a6c34fde6f7c2f574_prof);

    }

    // line 45
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_4bb8bcd099c825bbbe980423255ceb8615c26e190c168b164533f0f2e806cec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bb8bcd099c825bbbe980423255ceb8615c26e190c168b164533f0f2e806cec3->enter($__internal_4bb8bcd099c825bbbe980423255ceb8615c26e190c168b164533f0f2e806cec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_homepage");
        echo "\">Symblog</a>";
        
        $__internal_4bb8bcd099c825bbbe980423255ceb8615c26e190c168b164533f0f2e806cec3->leave($__internal_4bb8bcd099c825bbbe980423255ceb8615c26e190c168b164533f0f2e806cec3_prof);

    }

    // line 46
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_09145a54ca5c9313c9ed17a4381cd938f7ab154eb48574fd057b5797e93aa562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09145a54ca5c9313c9ed17a4381cd938f7ab154eb48574fd057b5797e93aa562->enter($__internal_09145a54ca5c9313c9ed17a4381cd938f7ab154eb48574fd057b5797e93aa562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_homepage");
        echo "\">creating a blog in Symfony2</a>";
        
        $__internal_09145a54ca5c9313c9ed17a4381cd938f7ab154eb48574fd057b5797e93aa562->leave($__internal_09145a54ca5c9313c9ed17a4381cd938f7ab154eb48574fd057b5797e93aa562_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2d034f2fbbe4689b0af76d23c55cc9728195f4cd66ab41bbfa2e315879568ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2d034f2fbbe4689b0af76d23c55cc9728195f4cd66ab41bbfa2e315879568ee->enter($__internal_a2d034f2fbbe4689b0af76d23c55cc9728195f4cd66ab41bbfa2e315879568ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a2d034f2fbbe4689b0af76d23c55cc9728195f4cd66ab41bbfa2e315879568ee->leave($__internal_a2d034f2fbbe4689b0af76d23c55cc9728195f4cd66ab41bbfa2e315879568ee_prof);

    }

    // line 54
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_7cc12fb1fe839005bc65c434a7b4429a312b939c0319670dd551465b128ae287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cc12fb1fe839005bc65c434a7b4429a312b939c0319670dd551465b128ae287->enter($__internal_7cc12fb1fe839005bc65c434a7b4429a312b939c0319670dd551465b128ae287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_7cc12fb1fe839005bc65c434a7b4429a312b939c0319670dd551465b128ae287->leave($__internal_7cc12fb1fe839005bc65c434a7b4429a312b939c0319670dd551465b128ae287_prof);

    }

    // line 58
    public function block_footer($context, array $blocks = array())
    {
        $__internal_110d553e97a2ed7bcf568a292137bdb2d084f4d7ff5096e0949eb7ecc0fd1cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_110d553e97a2ed7bcf568a292137bdb2d084f4d7ff5096e0949eb7ecc0fd1cce->enter($__internal_110d553e97a2ed7bcf568a292137bdb2d084f4d7ff5096e0949eb7ecc0fd1cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 59
        echo "            Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
        ";
        
        $__internal_110d553e97a2ed7bcf568a292137bdb2d084f4d7ff5096e0949eb7ecc0fd1cce->leave($__internal_110d553e97a2ed7bcf568a292137bdb2d084f4d7ff5096e0949eb7ecc0fd1cce_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0ab0a11c3d4092de25af030af581cfbc09b3ba8a0624aba225efe923358dbb3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ab0a11c3d4092de25af030af581cfbc09b3ba8a0624aba225efe923358dbb3f->enter($__internal_0ab0a11c3d4092de25af030af581cfbc09b3ba8a0624aba225efe923358dbb3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0ab0a11c3d4092de25af030af581cfbc09b3ba8a0624aba225efe923358dbb3f->leave($__internal_0ab0a11c3d4092de25af030af581cfbc09b3ba8a0624aba225efe923358dbb3f_prof);

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
