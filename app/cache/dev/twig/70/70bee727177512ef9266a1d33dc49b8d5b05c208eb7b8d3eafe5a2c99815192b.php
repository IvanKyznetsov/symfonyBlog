<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_670be5aac83532b4456ac428532270e9964965f681967ebb3bb599d94f936178 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'auth_remember' => array($this, 'block_auth_remember'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_366b5cde0a32b35d1dc2af4ca1f8484e149d01faa69be264c86de7a69dbfc7dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_366b5cde0a32b35d1dc2af4ca1f8484e149d01faa69be264c86de7a69dbfc7dc->enter($__internal_366b5cde0a32b35d1dc2af4ca1f8484e149d01faa69be264c86de7a69dbfc7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_366b5cde0a32b35d1dc2af4ca1f8484e149d01faa69be264c86de7a69dbfc7dc->leave($__internal_366b5cde0a32b35d1dc2af4ca1f8484e149d01faa69be264c86de7a69dbfc7dc_prof);

    }

    // line 3
    public function block_auth_remember($context, array $blocks = array())
    {
        $__internal_32ad15250dd33ad046c14f0f56fc6aad6ac04958b3e713e202f21d1114f8d86c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32ad15250dd33ad046c14f0f56fc6aad6ac04958b3e713e202f21d1114f8d86c->enter($__internal_32ad15250dd33ad046c14f0f56fc6aad6ac04958b3e713e202f21d1114f8d86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "auth_remember"));

        // line 4
        echo "    <div>
        ";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
            <a href=\"";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
            </a>
        ";
        } else {
            // line 11
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 13
        echo "    </div>

    ";
        // line 15
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 16
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 17
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 18
                    echo "                <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                    ";
                    // line 19
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "    ";
        }
        // line 24
        echo "
    <div>
        ";
        // line 26
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 28
        echo "    </div>
";
        
        $__internal_32ad15250dd33ad046c14f0f56fc6aad6ac04958b3e713e202f21d1114f8d86c->leave($__internal_32ad15250dd33ad046c14f0f56fc6aad6ac04958b3e713e202f21d1114f8d86c_prof);

    }

    // line 26
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2ff58abfa01499a7eaf648d6f787c979f291c205d010bc9b788250d2b8f187a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ff58abfa01499a7eaf648d6f787c979f291c205d010bc9b788250d2b8f187a7->enter($__internal_2ff58abfa01499a7eaf648d6f787c979f291c205d010bc9b788250d2b8f187a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 27
        echo "        ";
        
        $__internal_2ff58abfa01499a7eaf648d6f787c979f291c205d010bc9b788250d2b8f187a7->leave($__internal_2ff58abfa01499a7eaf648d6f787c979f291c205d010bc9b788250d2b8f187a7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 27,  122 => 26,  114 => 28,  112 => 26,  108 => 24,  105 => 23,  99 => 22,  90 => 19,  85 => 18,  80 => 17,  75 => 16,  73 => 15,  69 => 13,  61 => 11,  55 => 8,  51 => 7,  46 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block auth_remember %}
    <div>
        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
            {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
            <a href=\"{{ path('fos_user_security_logout') }}\">
                {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
            </a>
        {% else %}
            <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
        {% endif %}
    </div>

    {% if app.request.hasPreviousSession %}
        {% for type, messages in app.session.flashbag.all() %}
            {% for message in messages %}
                <div class=\"flash-{{ type }}\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}
    {% endif %}

    <div>
        {% block fos_user_content %}
        {% endblock fos_user_content %}
    </div>
{% endblock %}

", "@FOSUser/layout.html.twig", "/var/www/html/symfonyBlog/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
