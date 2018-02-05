<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c1ee275ca868d812e2dcc28db7eb48636da0bd2718b00d5b14bd84aec058dfbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_971389bee8b25e60e368e0cfd2c3b84cb8fbc568fd6a893aa913abd40464059a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_971389bee8b25e60e368e0cfd2c3b84cb8fbc568fd6a893aa913abd40464059a->enter($__internal_971389bee8b25e60e368e0cfd2c3b84cb8fbc568fd6a893aa913abd40464059a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7c75ee7209acf4e6d889b51dd4acdebc3316c97d91e002a8fb9ce2d921d29057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c75ee7209acf4e6d889b51dd4acdebc3316c97d91e002a8fb9ce2d921d29057->enter($__internal_7c75ee7209acf4e6d889b51dd4acdebc3316c97d91e002a8fb9ce2d921d29057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_971389bee8b25e60e368e0cfd2c3b84cb8fbc568fd6a893aa913abd40464059a->leave($__internal_971389bee8b25e60e368e0cfd2c3b84cb8fbc568fd6a893aa913abd40464059a_prof);

        
        $__internal_7c75ee7209acf4e6d889b51dd4acdebc3316c97d91e002a8fb9ce2d921d29057->leave($__internal_7c75ee7209acf4e6d889b51dd4acdebc3316c97d91e002a8fb9ce2d921d29057_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a5d78da40f16d69bb3ef30d25ebbc67911ba8848629877758a6c657a3467ee16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5d78da40f16d69bb3ef30d25ebbc67911ba8848629877758a6c657a3467ee16->enter($__internal_a5d78da40f16d69bb3ef30d25ebbc67911ba8848629877758a6c657a3467ee16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9fde49396cd7d61725f73a610a9911443cc3f46c8b0dbfabbfe2a613a4fff991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fde49396cd7d61725f73a610a9911443cc3f46c8b0dbfabbfe2a613a4fff991->enter($__internal_9fde49396cd7d61725f73a610a9911443cc3f46c8b0dbfabbfe2a613a4fff991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9fde49396cd7d61725f73a610a9911443cc3f46c8b0dbfabbfe2a613a4fff991->leave($__internal_9fde49396cd7d61725f73a610a9911443cc3f46c8b0dbfabbfe2a613a4fff991_prof);

        
        $__internal_a5d78da40f16d69bb3ef30d25ebbc67911ba8848629877758a6c657a3467ee16->leave($__internal_a5d78da40f16d69bb3ef30d25ebbc67911ba8848629877758a6c657a3467ee16_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5c152b42ccdf4ef6459097bea8916482503e3ba2a175983e31b2f946f617aea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c152b42ccdf4ef6459097bea8916482503e3ba2a175983e31b2f946f617aea0->enter($__internal_5c152b42ccdf4ef6459097bea8916482503e3ba2a175983e31b2f946f617aea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1d4a5995137bea6662a849f277baa830e9c2fe29bc8d2b6a7119bfc19e2fe385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d4a5995137bea6662a849f277baa830e9c2fe29bc8d2b6a7119bfc19e2fe385->enter($__internal_1d4a5995137bea6662a849f277baa830e9c2fe29bc8d2b6a7119bfc19e2fe385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1d4a5995137bea6662a849f277baa830e9c2fe29bc8d2b6a7119bfc19e2fe385->leave($__internal_1d4a5995137bea6662a849f277baa830e9c2fe29bc8d2b6a7119bfc19e2fe385_prof);

        
        $__internal_5c152b42ccdf4ef6459097bea8916482503e3ba2a175983e31b2f946f617aea0->leave($__internal_5c152b42ccdf4ef6459097bea8916482503e3ba2a175983e31b2f946f617aea0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5a6527d7c44560c7d1955a98734bf4c5add7804d3c1f4064e9afbbb486c65ddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a6527d7c44560c7d1955a98734bf4c5add7804d3c1f4064e9afbbb486c65ddc->enter($__internal_5a6527d7c44560c7d1955a98734bf4c5add7804d3c1f4064e9afbbb486c65ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bab6d32262d050a88554d88cadf7d9726aac6fa3b4a32e23983581a8c9ed55cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bab6d32262d050a88554d88cadf7d9726aac6fa3b4a32e23983581a8c9ed55cd->enter($__internal_bab6d32262d050a88554d88cadf7d9726aac6fa3b4a32e23983581a8c9ed55cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bab6d32262d050a88554d88cadf7d9726aac6fa3b4a32e23983581a8c9ed55cd->leave($__internal_bab6d32262d050a88554d88cadf7d9726aac6fa3b4a32e23983581a8c9ed55cd_prof);

        
        $__internal_5a6527d7c44560c7d1955a98734bf4c5add7804d3c1f4064e9afbbb486c65ddc->leave($__internal_5a6527d7c44560c7d1955a98734bf4c5add7804d3c1f4064e9afbbb486c65ddc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
