<?php

/* BloggerBlogBundle::layout.html.twig */
class __TwigTemplate_debbdbb41c2a5544cee8cebdd107009b2cbf99c885ca2ad9a1aacfbd5064ea68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "BloggerBlogBundle::layout.html.twig", 2);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30bbebdaab55e4228ec112064f66dc0f684e9b70ad6861fd5ee7c74bf81f8f4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30bbebdaab55e4228ec112064f66dc0f684e9b70ad6861fd5ee7c74bf81f8f4b->enter($__internal_30bbebdaab55e4228ec112064f66dc0f684e9b70ad6861fd5ee7c74bf81f8f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30bbebdaab55e4228ec112064f66dc0f684e9b70ad6861fd5ee7c74bf81f8f4b->leave($__internal_30bbebdaab55e4228ec112064f66dc0f684e9b70ad6861fd5ee7c74bf81f8f4b_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2637d55b4a96a88465fb5bc5b9e40160be59b2d2a72ab084d13e1bb3461ce052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2637d55b4a96a88465fb5bc5b9e40160be59b2d2a72ab084d13e1bb3461ce052->enter($__internal_2637d55b4a96a88465fb5bc5b9e40160be59b2d2a72ab084d13e1bb3461ce052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d8f44a4_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_d8f44a4_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/d8f44a4_part_1_blog_1.css");
            // line 7
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
    ";
            // asset "d8f44a4_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_d8f44a4_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/d8f44a4_part_1_sidebar_2.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
    ";
        } else {
            // asset "d8f44a4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_d8f44a4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/d8f44a4.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_2637d55b4a96a88465fb5bc5b9e40160be59b2d2a72ab084d13e1bb3461ce052->leave($__internal_2637d55b4a96a88465fb5bc5b9e40160be59b2d2a72ab084d13e1bb3461ce052_prof);

    }

    // line 11
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_99a6d1586fd11d2064636dd6ffc45e53c7bfda0fd0145b72b44127780cd40bcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99a6d1586fd11d2064636dd6ffc45e53c7bfda0fd0145b72b44127780cd40bcb->enter($__internal_99a6d1586fd11d2064636dd6ffc45e53c7bfda0fd0145b72b44127780cd40bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 12
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("BloggerBlogBundle:Page:sidebar"));
        echo "
";
        
        $__internal_99a6d1586fd11d2064636dd6ffc45e53c7bfda0fd0145b72b44127780cd40bcb->leave($__internal_99a6d1586fd11d2064636dd6ffc45e53c7bfda0fd0145b72b44127780cd40bcb_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 12,  75 => 11,  50 => 7,  46 => 6,  41 => 5,  35 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/layout.html.twig #}
{% extends '::base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    {% stylesheets '@BloggerBlogBundle/Resources/public/css/*' %}
        <link href=\"{{ asset_url }}\" rel=\"stylesheet\" media=\"screen\" />
    {% endstylesheets %}
{% endblock %}

{% block sidebar %}
    {{ render(controller('BloggerBlogBundle:Page:sidebar' ))}}
{% endblock %}", "BloggerBlogBundle::layout.html.twig", "/var/www/html/symfonyBlog/src/Blogger/BlogBundle/Resources/views/layout.html.twig");
    }
}
