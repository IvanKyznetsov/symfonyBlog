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
        $__internal_aeff395f591c44dcaed591db811f2c2bc42afab341f3d6349e97abc768141f76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeff395f591c44dcaed591db811f2c2bc42afab341f3d6349e97abc768141f76->enter($__internal_aeff395f591c44dcaed591db811f2c2bc42afab341f3d6349e97abc768141f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:stripe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aeff395f591c44dcaed591db811f2c2bc42afab341f3d6349e97abc768141f76->leave($__internal_aeff395f591c44dcaed591db811f2c2bc42afab341f3d6349e97abc768141f76_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_26b7c7adc69bf3c2871917b497b0131af59f3fff82496a0da282b7759fd507c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b7c7adc69bf3c2871917b497b0131af59f3fff82496a0da282b7759fd507c6->enter($__internal_26b7c7adc69bf3c2871917b497b0131af59f3fff82496a0da282b7759fd507c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Stripe";
        
        $__internal_26b7c7adc69bf3c2871917b497b0131af59f3fff82496a0da282b7759fd507c6->leave($__internal_26b7c7adc69bf3c2871917b497b0131af59f3fff82496a0da282b7759fd507c6_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ecce1ebac9e59abaefcc28e145dede3765fdb2a5ae9e2a0ed70a6ab13fec8b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ecce1ebac9e59abaefcc28e145dede3765fdb2a5ae9e2a0ed70a6ab13fec8b1->enter($__internal_5ecce1ebac9e59abaefcc28e145dede3765fdb2a5ae9e2a0ed70a6ab13fec8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["plans"]) ? $context["plans"] : $this->getContext($context, "plans")), "data", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
            // line 8
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["plan"], "name", array()), "html", null, true);
            echo " <a href=\"\">Подписаться</a> </p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
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
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_stripe_plan");
        echo "\">Создать план</a>
    </div>
    <div class=\"plan\">
        <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_stripe_user");
        echo "\">Создать пользователя</a>
    </div>
    <div class=\"plan\">
        <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_stripe_subscription");
        echo "\">Оформить подписку</a>
    </div>
    <div class=\"plan\">
        <a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("BloggerBlogBundle_stripe_hook");
        echo "\">Hook</a>
    </div>
";
        
        $__internal_5ecce1ebac9e59abaefcc28e145dede3765fdb2a5ae9e2a0ed70a6ab13fec8b1->leave($__internal_5ecce1ebac9e59abaefcc28e145dede3765fdb2a5ae9e2a0ed70a6ab13fec8b1_prof);

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
        return array (  102 => 32,  96 => 29,  90 => 26,  84 => 23,  67 => 10,  58 => 8,  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
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
    {% for plan in plans.data %}
        <p>{{ plan.name }} <a href=\"\">Подписаться</a> </p>
    {% endfor %}
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
