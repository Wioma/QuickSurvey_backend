<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b6a8be6af886af464923d11a1a09eb5b63d313a6e77a5e69af0ea8033befb09a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7723a5f9ce6ef32f7dc1df0521b7100aa93e1c7850156f4b69ca321e4eab27d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7723a5f9ce6ef32f7dc1df0521b7100aa93e1c7850156f4b69ca321e4eab27d5->enter($__internal_7723a5f9ce6ef32f7dc1df0521b7100aa93e1c7850156f4b69ca321e4eab27d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_29848efddf9b305decb0f86e53d960033845c8e156ea4754cbf3a04f53335f94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29848efddf9b305decb0f86e53d960033845c8e156ea4754cbf3a04f53335f94->enter($__internal_29848efddf9b305decb0f86e53d960033845c8e156ea4754cbf3a04f53335f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7723a5f9ce6ef32f7dc1df0521b7100aa93e1c7850156f4b69ca321e4eab27d5->leave($__internal_7723a5f9ce6ef32f7dc1df0521b7100aa93e1c7850156f4b69ca321e4eab27d5_prof);

        
        $__internal_29848efddf9b305decb0f86e53d960033845c8e156ea4754cbf3a04f53335f94->leave($__internal_29848efddf9b305decb0f86e53d960033845c8e156ea4754cbf3a04f53335f94_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0822d9a6f66814463d8b55bf2bc7ab490af0753cf7c535d73224e97cd1d36c9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0822d9a6f66814463d8b55bf2bc7ab490af0753cf7c535d73224e97cd1d36c9d->enter($__internal_0822d9a6f66814463d8b55bf2bc7ab490af0753cf7c535d73224e97cd1d36c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ea21c0e07c1f0261a18faba8f49ff8f80e57b8570a4416cc63b7fa4789568221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea21c0e07c1f0261a18faba8f49ff8f80e57b8570a4416cc63b7fa4789568221->enter($__internal_ea21c0e07c1f0261a18faba8f49ff8f80e57b8570a4416cc63b7fa4789568221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ea21c0e07c1f0261a18faba8f49ff8f80e57b8570a4416cc63b7fa4789568221->leave($__internal_ea21c0e07c1f0261a18faba8f49ff8f80e57b8570a4416cc63b7fa4789568221_prof);

        
        $__internal_0822d9a6f66814463d8b55bf2bc7ab490af0753cf7c535d73224e97cd1d36c9d->leave($__internal_0822d9a6f66814463d8b55bf2bc7ab490af0753cf7c535d73224e97cd1d36c9d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4d605629115c2eb296c7128fd3e8086cf4494da501ecaa93c7bc917e12743e06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d605629115c2eb296c7128fd3e8086cf4494da501ecaa93c7bc917e12743e06->enter($__internal_4d605629115c2eb296c7128fd3e8086cf4494da501ecaa93c7bc917e12743e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d762f103aad961fa72b0febd3f3c21025b036578aaa40533f9af8648fd82055f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d762f103aad961fa72b0febd3f3c21025b036578aaa40533f9af8648fd82055f->enter($__internal_d762f103aad961fa72b0febd3f3c21025b036578aaa40533f9af8648fd82055f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d762f103aad961fa72b0febd3f3c21025b036578aaa40533f9af8648fd82055f->leave($__internal_d762f103aad961fa72b0febd3f3c21025b036578aaa40533f9af8648fd82055f_prof);

        
        $__internal_4d605629115c2eb296c7128fd3e8086cf4494da501ecaa93c7bc917e12743e06->leave($__internal_4d605629115c2eb296c7128fd3e8086cf4494da501ecaa93c7bc917e12743e06_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0fd7da4e8d8133846ed9f95305341c70643ec3f88312ab14270d2e3c3a55b32b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fd7da4e8d8133846ed9f95305341c70643ec3f88312ab14270d2e3c3a55b32b->enter($__internal_0fd7da4e8d8133846ed9f95305341c70643ec3f88312ab14270d2e3c3a55b32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aecba2441db11a82c90a3b54322f300f477bda1bd54616d6f0142e45e3c04e8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aecba2441db11a82c90a3b54322f300f477bda1bd54616d6f0142e45e3c04e8c->enter($__internal_aecba2441db11a82c90a3b54322f300f477bda1bd54616d6f0142e45e3c04e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_aecba2441db11a82c90a3b54322f300f477bda1bd54616d6f0142e45e3c04e8c->leave($__internal_aecba2441db11a82c90a3b54322f300f477bda1bd54616d6f0142e45e3c04e8c_prof);

        
        $__internal_0fd7da4e8d8133846ed9f95305341c70643ec3f88312ab14270d2e3c3a55b32b->leave($__internal_0fd7da4e8d8133846ed9f95305341c70643ec3f88312ab14270d2e3c3a55b32b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
