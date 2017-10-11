<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_68df3447c6b872dab3670bb2121e61f8423ca25b038b8576204fd5831fecc74d extends Twig_Template
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
        $__internal_8aeeefb75e5f4dce54cb7de70f4a857bdf0d253bd900b1dbb8a828437470eb63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aeeefb75e5f4dce54cb7de70f4a857bdf0d253bd900b1dbb8a828437470eb63->enter($__internal_8aeeefb75e5f4dce54cb7de70f4a857bdf0d253bd900b1dbb8a828437470eb63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>
        ";
        // line 6
        echo "            ";
        // line 7
        echo "        ";
        // line 8
        echo "        <a href=\"#Modal\" class=\"modal_button\"><img class=\"profile_image\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/users/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()))), "html", null, true);
        echo "\" /></a>
    </p>
    <p>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
    ";
        // line 12
        $this->loadTemplate("BloggerBlogBundle:User:form.html.twig", "FOSUserBundle:Profile:show_content.html.twig", 12)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))));
        // line 13
        echo "    ";
        // line 14
        echo "    <hr>
    ";
        // line 16
        echo "    <div id=\"Modal\" class=\"modalDialog\">
        <div class=\"modaldiv\">
            <a href=\"#\" title=\"Закрыть\" class=\"close\">X</a>
            ";
        // line 19
        $this->loadTemplate("BloggerBlogBundle:User:crop.html.twig", "FOSUserBundle:Profile:show_content.html.twig", 19)->display($context);
        // line 20
        echo "            ";
        // line 21
        echo "            ";
        // line 22
        echo "            ";
        // line 23
        echo "            ";
        // line 24
        echo "            ";
        // line 25
        echo "            ";
        // line 26
        echo "            ";
        // line 27
        echo "
            ";
        // line 29
        echo "
            ";
        // line 31
        echo "                ";
        // line 32
        echo "            ";
        // line 33
        echo "        </div>
    </div>
</div>
";
        
        $__internal_8aeeefb75e5f4dce54cb7de70f4a857bdf0d253bd900b1dbb8a828437470eb63->leave($__internal_8aeeefb75e5f4dce54cb7de70f4a857bdf0d253bd900b1dbb8a828437470eb63_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 33,  85 => 32,  83 => 31,  80 => 29,  77 => 27,  75 => 26,  73 => 25,  71 => 24,  69 => 23,  67 => 22,  65 => 21,  63 => 20,  61 => 19,  56 => 16,  53 => 14,  51 => 13,  49 => 12,  43 => 11,  37 => 10,  31 => 8,  29 => 7,  27 => 6,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>
        {#<a href=\"{{ path('BloggerBlogBundle_profile_crop',{ 'userId': user.id }) }}\">#}
            {#<img class=\"profile_image\" src=\"{{ asset('images/users/' ~ user.image)}}\" />#}
        {#</a>#}
        <a href=\"#Modal\" class=\"modal_button\"><img class=\"profile_image\" src=\"{{ asset('images/users/' ~ user.image)}}\" /></a>
    </p>
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
    {% include 'BloggerBlogBundle:User:form.html.twig' with { 'form': form } %}
    {#<p><a href=\"{{ path('fos_user_profile_edit') }}\">Edit</a></p>#}
    <hr>
    {#<a href=\"#Modal\" class=\"modal_button\"><button type=\"button\">Modal</button></a>#}
    <div id=\"Modal\" class=\"modalDialog\">
        <div class=\"modaldiv\">
            <a href=\"#\" title=\"Закрыть\" class=\"close\">X</a>
            {% include 'BloggerBlogBundle:User:crop.html.twig' %}
            {#<link rel=\"stylesheet\" href=\"{{ asset('css/jquery.Jcrop.css') }}\">#}
            {#<script src=\"{{ asset('js/ajax.js') }}\"></script>#}
            {#<script src=\"{{ asset('js/jquery-3.2.1.js') }}\"></script>#}
            {#<script src=\"{{ asset('js/crop.js') }}\"></script>#}
            {#<script src=\"{{ asset('js/jquery.Jcrop.min.js') }}\"></script>#}
            {#<script src=\"{{ asset('js/jquery.min.js') }}\"></script>#}
            {#<img class=\"crop_image\" src=\"{{ asset('images/users/' ~ app.user.image)}}\" id=\"target\" alt=\"[Jcrop Example]\" />#}

            {#<button id=\"crop\">Обрезать</button>#}

            {#<div class=\"optlist offset\">#}
                {#<label><input type=\"checkbox\" id=\"size_lock\" />min/max размер (80x80/350x350)</label>#}
            {#</div>#}
        </div>
    </div>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/var/www/html/symfonyBlog/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
