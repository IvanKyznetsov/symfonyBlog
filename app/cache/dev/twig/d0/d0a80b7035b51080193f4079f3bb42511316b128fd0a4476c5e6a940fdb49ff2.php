<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_cd65d3847de5a83f007da7ec4aea8eb31056d15e131fc71bc798c832151f6c5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b01d7a5b2cf38af92bc9a24a14855aa2816b79db3b80bd35f8925f7af4c40363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b01d7a5b2cf38af92bc9a24a14855aa2816b79db3b80bd35f8925f7af4c40363->enter($__internal_b01d7a5b2cf38af92bc9a24a14855aa2816b79db3b80bd35f8925f7af4c40363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b01d7a5b2cf38af92bc9a24a14855aa2816b79db3b80bd35f8925f7af4c40363->leave($__internal_b01d7a5b2cf38af92bc9a24a14855aa2816b79db3b80bd35f8925f7af4c40363_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_ca3a29faab020e09e578441aa843a35c532945dcf42e17669ac6d2aae82a0ded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca3a29faab020e09e578441aa843a35c532945dcf42e17669ac6d2aae82a0ded->enter($__internal_ca3a29faab020e09e578441aa843a35c532945dcf42e17669ac6d2aae82a0ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_ca3a29faab020e09e578441aa843a35c532945dcf42e17669ac6d2aae82a0ded->leave($__internal_ca3a29faab020e09e578441aa843a35c532945dcf42e17669ac6d2aae82a0ded_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_3d19ba05609cd03264101c31d60626732b2dd2badc79f8dda06cab1a5d6f584b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d19ba05609cd03264101c31d60626732b2dd2badc79f8dda06cab1a5d6f584b->enter($__internal_3d19ba05609cd03264101c31d60626732b2dd2badc79f8dda06cab1a5d6f584b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_3d19ba05609cd03264101c31d60626732b2dd2badc79f8dda06cab1a5d6f584b->leave($__internal_3d19ba05609cd03264101c31d60626732b2dd2badc79f8dda06cab1a5d6f584b_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_6c3c4d5664c87cb6873eff02c252cdff05d67562b1a64b9547fa48ca76013fbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c3c4d5664c87cb6873eff02c252cdff05d67562b1a64b9547fa48ca76013fbb->enter($__internal_6c3c4d5664c87cb6873eff02c252cdff05d67562b1a64b9547fa48ca76013fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_6c3c4d5664c87cb6873eff02c252cdff05d67562b1a64b9547fa48ca76013fbb->leave($__internal_6c3c4d5664c87cb6873eff02c252cdff05d67562b1a64b9547fa48ca76013fbb_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_096bda2a1b2d859c04179cd5312276da01617fa96a1b8c9c169622a2fdfa2287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_096bda2a1b2d859c04179cd5312276da01617fa96a1b8c9c169622a2fdfa2287->enter($__internal_096bda2a1b2d859c04179cd5312276da01617fa96a1b8c9c169622a2fdfa2287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_096bda2a1b2d859c04179cd5312276da01617fa96a1b8c9c169622a2fdfa2287->leave($__internal_096bda2a1b2d859c04179cd5312276da01617fa96a1b8c9c169622a2fdfa2287_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b3b7cf88b97757f2ab23071cd772e16a560b91f7d686ab641ef4abd7062580a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3b7cf88b97757f2ab23071cd772e16a560b91f7d686ab641ef4abd7062580a3->enter($__internal_b3b7cf88b97757f2ab23071cd772e16a560b91f7d686ab641ef4abd7062580a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>
";
        
        $__internal_b3b7cf88b97757f2ab23071cd772e16a560b91f7d686ab641ef4abd7062580a3->leave($__internal_b3b7cf88b97757f2ab23071cd772e16a560b91f7d686ab641ef4abd7062580a3_prof);

    }

    // line 30
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_2b4d4192349c6597dd0ac57f5767e7bed90e60a62996fe99768bd7bbeacf55ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b4d4192349c6597dd0ac57f5767e7bed90e60a62996fe99768bd7bbeacf55ac->enter($__internal_2b4d4192349c6597dd0ac57f5767e7bed90e60a62996fe99768bd7bbeacf55ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 31
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_2b4d4192349c6597dd0ac57f5767e7bed90e60a62996fe99768bd7bbeacf55ac->leave($__internal_2b4d4192349c6597dd0ac57f5767e7bed90e60a62996fe99768bd7bbeacf55ac_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_df1f0e817e6586fd31cb8abd6c8fb18a76504593cfecba6c37f86e63637a19e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df1f0e817e6586fd31cb8abd6c8fb18a76504593cfecba6c37f86e63637a19e3->enter($__internal_df1f0e817e6586fd31cb8abd6c8fb18a76504593cfecba6c37f86e63637a19e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 32
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_df1f0e817e6586fd31cb8abd6c8fb18a76504593cfecba6c37f86e63637a19e3->leave($__internal_df1f0e817e6586fd31cb8abd6c8fb18a76504593cfecba6c37f86e63637a19e3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 32,  112 => 31,  106 => 30,  89 => 20,  83 => 19,  72 => 17,  61 => 16,  50 => 15,  39 => 14,  24 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin_pool.getTemplate('layout') %}

{% block sonata_header %}{% endblock %}
{% block sonata_left_side %}{% endblock %}
{% block sonata_nav %}{% endblock %}
{% block sonata_breadcrumb %}{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>
{% endblock %}

{% block sonata_wrapper %}
    {% block sonata_page_content %}
        {{ parent() }}
    {% endblock %}
{% endblock %}
", "SonataAdminBundle::empty_layout.html.twig", "/var/www/html/symfonyBlog/vendor/sonata-project/admin-bundle/Resources/views/empty_layout.html.twig");
    }
}
