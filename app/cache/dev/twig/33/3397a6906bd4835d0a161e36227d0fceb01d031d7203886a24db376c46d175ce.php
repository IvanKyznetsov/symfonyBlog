<?php

/* BloggerBlogBundle:User:crop.html.twig */
class __TwigTemplate_8c0f69544e1fea8d395a267f271a3c67df9782417534c95abad27433fdcdbb5f extends Twig_Template
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
        $__internal_9c630e075214f11ac8862f4f40c681b2eb9308eacb285cf41a5abff9a7754705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c630e075214f11ac8862f4f40c681b2eb9308eacb285cf41a5abff9a7754705->enter($__internal_9c630e075214f11ac8862f4f40c681b2eb9308eacb285cf41a5abff9a7754705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:User:crop.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "    ";
        // line 5
        echo "    ";
        // line 6
        echo "        ";
        // line 7
        echo "            ";
        // line 8
        echo "        ";
        // line 9
        echo "    ";
        // line 11
        echo "
";
        // line 13
        echo "    ";
        // line 14
        echo "
    ";
        // line 16
        echo "    ";
        // line 17
        echo "
    ";
        // line 19
        echo "        ";
        // line 20
        echo "        ";
        // line 21
        echo "    ";
        // line 23
        echo "
<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery.Jcrop.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ajax.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/crop.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.Jcrop.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <style type=\"text/css\">
        #crop{
            display:none;
        }
        #cropresult{
            border:2px solid #ddd;
        }
        .mini{
            margin:5px;
        }
    </style>
</head>
<body>
    <img class=\"crop_image\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/users/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()))), "html", null, true);
        echo "\" id=\"target\" alt=\"[Jcrop Example]\" />

    <button id=\"crop\">Обрезать</button>

    <div class=\"optlist offset\">
        <label><input type=\"checkbox\" id=\"ar_lock\" />Сохранения пропорции (4:3)</label>
        <label><input type=\"checkbox\" id=\"size_lock\" />min размер (80x80)</label>
    </div>
</body>
</html>";
        
        $__internal_9c630e075214f11ac8862f4f40c681b2eb9308eacb285cf41a5abff9a7754705->leave($__internal_9c630e075214f11ac8862f4f40c681b2eb9308eacb285cf41a5abff9a7754705_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:User:crop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 51,  87 => 37,  83 => 36,  79 => 35,  75 => 34,  71 => 33,  67 => 32,  56 => 23,  54 => 21,  52 => 20,  50 => 19,  47 => 17,  45 => 16,  42 => 14,  40 => 13,  37 => 11,  35 => 9,  33 => 8,  31 => 7,  29 => 6,  27 => 5,  25 => 4,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#{% extends 'BloggerBlogBundle::layout.html.twig' %}#}

{#{% block stylesheets %}#}
    {#{{ parent() }}#}
    {#<style type=\"text/css\">#}
        {##crop{#}
            {#display:none;#}
        {#}#}
    {#</style>#}
{#{% endblock %}#}

{#{% block body %}#}
    {#<img class=\"crop_image\" src=\"{{ asset('images/users/' ~ app.user.image)}}\" id=\"target\" alt=\"[Jcrop Example]\" />#}

    {#<button id=\"release\">Убрать выделение</button>#}
    {#<button id=\"crop\">Обрезать</button>#}

    {#<div class=\"optlist offset\">#}
        {#<label><input type=\"checkbox\" id=\"ar_lock\" />Соблюдать пропорции (4:3)</label>#}
        {#<label><input type=\"checkbox\" id=\"size_lock\" />min/max размер (80x80/350x350)</label>#}
    {#</div>#}
{#{% endblock %}#}

<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
    <link rel=\"stylesheet\" href=\"{{ asset('css/jquery.Jcrop.css') }}\">
    <script src=\"{{ asset('js/ajax.js') }}\"></script>
    <script src=\"{{ asset('js/jquery-3.2.1.js') }}\"></script>
    <script src=\"{{ asset('js/crop.js') }}\"></script>
    <script src=\"{{ asset('js/jquery.Jcrop.min.js') }}\"></script>
    <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
    <style type=\"text/css\">
        #crop{
            display:none;
        }
        #cropresult{
            border:2px solid #ddd;
        }
        .mini{
            margin:5px;
        }
    </style>
</head>
<body>
    <img class=\"crop_image\" src=\"{{ asset('images/users/' ~ app.user.image)}}\" id=\"target\" alt=\"[Jcrop Example]\" />

    <button id=\"crop\">Обрезать</button>

    <div class=\"optlist offset\">
        <label><input type=\"checkbox\" id=\"ar_lock\" />Сохранения пропорции (4:3)</label>
        <label><input type=\"checkbox\" id=\"size_lock\" />min размер (80x80)</label>
    </div>
</body>
</html>", "BloggerBlogBundle:User:crop.html.twig", "/var/www/html/symfonyBlog/src/Blogger/BlogBundle/Resources/views/User/crop.html.twig");
    }
}
