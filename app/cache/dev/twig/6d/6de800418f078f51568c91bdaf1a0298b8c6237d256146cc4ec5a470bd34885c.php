<?php

/* BloggerBlogBundle:Page:stripe.html.twig */
class __TwigTemplate_5bd243154f777f68683f484bf4801135b27f95f36f286698e607c3b5fb780a92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Page:stripe.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1050ae64d165d8140f0c1a3923bcb055943137255dc8dbd14a6997d2030304c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1050ae64d165d8140f0c1a3923bcb055943137255dc8dbd14a6997d2030304c6->enter($__internal_1050ae64d165d8140f0c1a3923bcb055943137255dc8dbd14a6997d2030304c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:stripe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1050ae64d165d8140f0c1a3923bcb055943137255dc8dbd14a6997d2030304c6->leave($__internal_1050ae64d165d8140f0c1a3923bcb055943137255dc8dbd14a6997d2030304c6_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_2df30071d6ad2dd6f043092b211fb78e3a3efb4f3da6e0009eaa9477d9932175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2df30071d6ad2dd6f043092b211fb78e3a3efb4f3da6e0009eaa9477d9932175->enter($__internal_2df30071d6ad2dd6f043092b211fb78e3a3efb4f3da6e0009eaa9477d9932175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Stripe";
        
        $__internal_2df30071d6ad2dd6f043092b211fb78e3a3efb4f3da6e0009eaa9477d9932175->leave($__internal_2df30071d6ad2dd6f043092b211fb78e3a3efb4f3da6e0009eaa9477d9932175_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_20c070bed2fbd0e3425eb0eb2b42bb9aa5c521529174e78d03f4c4d22a46cf20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20c070bed2fbd0e3425eb0eb2b42bb9aa5c521529174e78d03f4c4d22a46cf20->enter($__internal_20c070bed2fbd0e3425eb0eb2b42bb9aa5c521529174e78d03f4c4d22a46cf20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "   <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_stripe_post");
        echo "\" method=\"POST\">
      <script
              src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
              data-key=\"pk_test_1JKOOisJ7GG0v5SxcAf4zrqY\"
              data-amount=\"999\"
              data-name=\"Stripe.com\"
              data-description=\"Widget\"
              data-image=\"https://stripe.com/img/documentation/checkout/marketplace.png\"
              data-locale=\"auto\"
              data-zip-code=\"true\">
      </script>
   </form>
    <div class=\"plan\">
       <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_stripe_plan");
        echo "\">Создать план</a>
    </div>
    <div class=\"plan\">
        <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_stripe_user");
        echo "\">Создать пользователя</a>
    </div>
    <div class=\"plan\">
        <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_stripe_subscription");
        echo "\">Оформить подписку</a>
    </div>
    <div class=\"plan\">
        <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_stripe_hook");
        echo "\">Hook</a>
    </div>
";
        
        $__internal_20c070bed2fbd0e3425eb0eb2b42bb9aa5c521529174e78d03f4c4d22a46cf20->leave($__internal_20c070bed2fbd0e3425eb0eb2b42bb9aa5c521529174e78d03f4c4d22a46cf20_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:stripe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 29,  82 => 26,  76 => 23,  70 => 20,  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/Page/admin.html.twig #}
{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block title %}Stripe{% endblock%}

{% block body %}
   <form action=\"{{ path(\"BloggerBlogBundle_stripe_post\") }}\" method=\"POST\">
      <script
              src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
              data-key=\"pk_test_1JKOOisJ7GG0v5SxcAf4zrqY\"
              data-amount=\"999\"
              data-name=\"Stripe.com\"
              data-description=\"Widget\"
              data-image=\"https://stripe.com/img/documentation/checkout/marketplace.png\"
              data-locale=\"auto\"
              data-zip-code=\"true\">
      </script>
   </form>
    <div class=\"plan\">
       <a href=\"{{ path(\"BloggerBlogBundle_stripe_plan\") }}\">Создать план</a>
    </div>
    <div class=\"plan\">
        <a href=\"{{ path(\"BloggerBlogBundle_stripe_user\") }}\">Создать пользователя</a>
    </div>
    <div class=\"plan\">
        <a href=\"{{ path(\"BloggerBlogBundle_stripe_subscription\") }}\">Оформить подписку</a>
    </div>
    <div class=\"plan\">
        <a href=\"{{ path(\"BloggerBlogBundle_stripe_hook\") }}\">Hook</a>
    </div>
{% endblock %}
", "BloggerBlogBundle:Page:stripe.html.twig", "/var/www/html/symfonyBlog/src/Blogger/BlogBundle/Resources/views/Page/stripe.html.twig");
    }
}
