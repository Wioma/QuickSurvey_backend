<?php

/* base.html.twig */
class __TwigTemplate_08fc77992067245379648c13baa1d9937a61140bc3b660268d02bc59d5982ee5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09f89040faf7015fa991016ce5e0ca5473f224ae12f96dcd1aff95424bd263ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09f89040faf7015fa991016ce5e0ca5473f224ae12f96dcd1aff95424bd263ca->enter($__internal_09f89040faf7015fa991016ce5e0ca5473f224ae12f96dcd1aff95424bd263ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_cc58269c8c8ef0fa9cfe8837bd7194f61e5d3fefecdb832b32093a55acc5dbb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc58269c8c8ef0fa9cfe8837bd7194f61e5d3fefecdb832b32093a55acc5dbb4->enter($__internal_cc58269c8c8ef0fa9cfe8837bd7194f61e5d3fefecdb832b32093a55acc5dbb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_09f89040faf7015fa991016ce5e0ca5473f224ae12f96dcd1aff95424bd263ca->leave($__internal_09f89040faf7015fa991016ce5e0ca5473f224ae12f96dcd1aff95424bd263ca_prof);

        
        $__internal_cc58269c8c8ef0fa9cfe8837bd7194f61e5d3fefecdb832b32093a55acc5dbb4->leave($__internal_cc58269c8c8ef0fa9cfe8837bd7194f61e5d3fefecdb832b32093a55acc5dbb4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e69c601df7f4af751ae8b1557a2a16b30a5e43ceedd041255c0aa19abae8d8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e69c601df7f4af751ae8b1557a2a16b30a5e43ceedd041255c0aa19abae8d8d->enter($__internal_6e69c601df7f4af751ae8b1557a2a16b30a5e43ceedd041255c0aa19abae8d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c875a72edfb0b25f604473e4687131ba86206a581027c801f7e30d855868ac9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c875a72edfb0b25f604473e4687131ba86206a581027c801f7e30d855868ac9d->enter($__internal_c875a72edfb0b25f604473e4687131ba86206a581027c801f7e30d855868ac9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c875a72edfb0b25f604473e4687131ba86206a581027c801f7e30d855868ac9d->leave($__internal_c875a72edfb0b25f604473e4687131ba86206a581027c801f7e30d855868ac9d_prof);

        
        $__internal_6e69c601df7f4af751ae8b1557a2a16b30a5e43ceedd041255c0aa19abae8d8d->leave($__internal_6e69c601df7f4af751ae8b1557a2a16b30a5e43ceedd041255c0aa19abae8d8d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_269c3e71130303111d762cde5390e23831565a7801bf3cd9924e9d393630e855 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_269c3e71130303111d762cde5390e23831565a7801bf3cd9924e9d393630e855->enter($__internal_269c3e71130303111d762cde5390e23831565a7801bf3cd9924e9d393630e855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e532968c2f237c605085a0250b3d8eeb8c8c672bfd3bac6e7309403cd909dad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e532968c2f237c605085a0250b3d8eeb8c8c672bfd3bac6e7309403cd909dad8->enter($__internal_e532968c2f237c605085a0250b3d8eeb8c8c672bfd3bac6e7309403cd909dad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e532968c2f237c605085a0250b3d8eeb8c8c672bfd3bac6e7309403cd909dad8->leave($__internal_e532968c2f237c605085a0250b3d8eeb8c8c672bfd3bac6e7309403cd909dad8_prof);

        
        $__internal_269c3e71130303111d762cde5390e23831565a7801bf3cd9924e9d393630e855->leave($__internal_269c3e71130303111d762cde5390e23831565a7801bf3cd9924e9d393630e855_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7ca61dcfd72459b4ae8ed9128b89eed5e64dcaf153c9ff632238a68a7c5444e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7ca61dcfd72459b4ae8ed9128b89eed5e64dcaf153c9ff632238a68a7c5444e->enter($__internal_b7ca61dcfd72459b4ae8ed9128b89eed5e64dcaf153c9ff632238a68a7c5444e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5379b732478290834d2c6e6231d00893bd0095d0a832ae51e866c10d4065323d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5379b732478290834d2c6e6231d00893bd0095d0a832ae51e866c10d4065323d->enter($__internal_5379b732478290834d2c6e6231d00893bd0095d0a832ae51e866c10d4065323d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5379b732478290834d2c6e6231d00893bd0095d0a832ae51e866c10d4065323d->leave($__internal_5379b732478290834d2c6e6231d00893bd0095d0a832ae51e866c10d4065323d_prof);

        
        $__internal_b7ca61dcfd72459b4ae8ed9128b89eed5e64dcaf153c9ff632238a68a7c5444e->leave($__internal_b7ca61dcfd72459b4ae8ed9128b89eed5e64dcaf153c9ff632238a68a7c5444e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_64e463f764447f335de5b8f799758edba5ec306e453b851bfe12bc15816b8c3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64e463f764447f335de5b8f799758edba5ec306e453b851bfe12bc15816b8c3e->enter($__internal_64e463f764447f335de5b8f799758edba5ec306e453b851bfe12bc15816b8c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3bf72aa06d83018c1221d437cf7cfbf7d8b1d542992c34d45cf9276408fc1a55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bf72aa06d83018c1221d437cf7cfbf7d8b1d542992c34d45cf9276408fc1a55->enter($__internal_3bf72aa06d83018c1221d437cf7cfbf7d8b1d542992c34d45cf9276408fc1a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3bf72aa06d83018c1221d437cf7cfbf7d8b1d542992c34d45cf9276408fc1a55->leave($__internal_3bf72aa06d83018c1221d437cf7cfbf7d8b1d542992c34d45cf9276408fc1a55_prof);

        
        $__internal_64e463f764447f335de5b8f799758edba5ec306e453b851bfe12bc15816b8c3e->leave($__internal_64e463f764447f335de5b8f799758edba5ec306e453b851bfe12bc15816b8c3e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp\\www\\QuickSurvey_backend\\app\\Resources\\views\\base.html.twig");
    }
}
