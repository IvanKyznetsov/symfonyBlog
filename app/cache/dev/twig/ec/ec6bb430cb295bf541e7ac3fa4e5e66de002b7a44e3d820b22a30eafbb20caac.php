<?php

/* BloggerBlogBundle:Page:stripe.html.twig */
class __TwigTemplate_16c0a842fff7754b07c075b3e9fb00313e1f923eee1d9abc106dd1e660bce41b extends Twig_Template
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
        $__internal_50bb6c20145cd85a8483b49eeec89df7d89a2d0986b741be40ed2be3a1ff4f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50bb6c20145cd85a8483b49eeec89df7d89a2d0986b741be40ed2be3a1ff4f58->enter($__internal_50bb6c20145cd85a8483b49eeec89df7d89a2d0986b741be40ed2be3a1ff4f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:stripe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50bb6c20145cd85a8483b49eeec89df7d89a2d0986b741be40ed2be3a1ff4f58->leave($__internal_50bb6c20145cd85a8483b49eeec89df7d89a2d0986b741be40ed2be3a1ff4f58_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_37e057db4bd708e41afd3929cc92f9ef98e50dd982f0649230a733bfa7e524fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37e057db4bd708e41afd3929cc92f9ef98e50dd982f0649230a733bfa7e524fb->enter($__internal_37e057db4bd708e41afd3929cc92f9ef98e50dd982f0649230a733bfa7e524fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Stripe";
        
        $__internal_37e057db4bd708e41afd3929cc92f9ef98e50dd982f0649230a733bfa7e524fb->leave($__internal_37e057db4bd708e41afd3929cc92f9ef98e50dd982f0649230a733bfa7e524fb_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c056f90e0f13de66364f94b7e37250b1ade1cfcea0382c3abf46e4f7e12d473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c056f90e0f13de66364f94b7e37250b1ade1cfcea0382c3abf46e4f7e12d473->enter($__internal_2c056f90e0f13de66364f94b7e37250b1ade1cfcea0382c3abf46e4f7e12d473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2c056f90e0f13de66364f94b7e37250b1ade1cfcea0382c3abf46e4f7e12d473->leave($__internal_2c056f90e0f13de66364f94b7e37250b1ade1cfcea0382c3abf46e4f7e12d473_prof);

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
