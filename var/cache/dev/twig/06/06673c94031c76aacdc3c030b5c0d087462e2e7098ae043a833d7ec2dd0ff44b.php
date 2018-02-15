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
        $__internal_9a1ad91683a5fffdc264165b87e356e663969af9c6287d404533bca48ddd724c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a1ad91683a5fffdc264165b87e356e663969af9c6287d404533bca48ddd724c->enter($__internal_9a1ad91683a5fffdc264165b87e356e663969af9c6287d404533bca48ddd724c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_81e70924d9deed7e6119bc2d3b1ae8eecc5f1cab342ce321aff4f85872032ca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81e70924d9deed7e6119bc2d3b1ae8eecc5f1cab342ce321aff4f85872032ca9->enter($__internal_81e70924d9deed7e6119bc2d3b1ae8eecc5f1cab342ce321aff4f85872032ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a1ad91683a5fffdc264165b87e356e663969af9c6287d404533bca48ddd724c->leave($__internal_9a1ad91683a5fffdc264165b87e356e663969af9c6287d404533bca48ddd724c_prof);

        
        $__internal_81e70924d9deed7e6119bc2d3b1ae8eecc5f1cab342ce321aff4f85872032ca9->leave($__internal_81e70924d9deed7e6119bc2d3b1ae8eecc5f1cab342ce321aff4f85872032ca9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d566a2ce2d94829abcb9fe61a2e663e49527b9ec55ba866aee438fd8e6687f72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d566a2ce2d94829abcb9fe61a2e663e49527b9ec55ba866aee438fd8e6687f72->enter($__internal_d566a2ce2d94829abcb9fe61a2e663e49527b9ec55ba866aee438fd8e6687f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_08cd36d3f177ee97b145274c6eace73db0a7a68170bf286e6b04f801a33338c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08cd36d3f177ee97b145274c6eace73db0a7a68170bf286e6b04f801a33338c4->enter($__internal_08cd36d3f177ee97b145274c6eace73db0a7a68170bf286e6b04f801a33338c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_08cd36d3f177ee97b145274c6eace73db0a7a68170bf286e6b04f801a33338c4->leave($__internal_08cd36d3f177ee97b145274c6eace73db0a7a68170bf286e6b04f801a33338c4_prof);

        
        $__internal_d566a2ce2d94829abcb9fe61a2e663e49527b9ec55ba866aee438fd8e6687f72->leave($__internal_d566a2ce2d94829abcb9fe61a2e663e49527b9ec55ba866aee438fd8e6687f72_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_24ac7ed2031af6bdce6e3c913b7df5e3babeb214a3fa5876506c556d8cf86865 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24ac7ed2031af6bdce6e3c913b7df5e3babeb214a3fa5876506c556d8cf86865->enter($__internal_24ac7ed2031af6bdce6e3c913b7df5e3babeb214a3fa5876506c556d8cf86865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fe89ab0af440adda23caee1a1b6857602b10ce83f137ed1210aa720b2394b19a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe89ab0af440adda23caee1a1b6857602b10ce83f137ed1210aa720b2394b19a->enter($__internal_fe89ab0af440adda23caee1a1b6857602b10ce83f137ed1210aa720b2394b19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fe89ab0af440adda23caee1a1b6857602b10ce83f137ed1210aa720b2394b19a->leave($__internal_fe89ab0af440adda23caee1a1b6857602b10ce83f137ed1210aa720b2394b19a_prof);

        
        $__internal_24ac7ed2031af6bdce6e3c913b7df5e3babeb214a3fa5876506c556d8cf86865->leave($__internal_24ac7ed2031af6bdce6e3c913b7df5e3babeb214a3fa5876506c556d8cf86865_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_60cb2fab5fe16cb61ccda749e9c0ea818c031736bd597e9f28c328e30153d983 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60cb2fab5fe16cb61ccda749e9c0ea818c031736bd597e9f28c328e30153d983->enter($__internal_60cb2fab5fe16cb61ccda749e9c0ea818c031736bd597e9f28c328e30153d983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8c49f593bbb730a812d16e8a31834c2ec89f3a81f1897fb69445aee490f6bf33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c49f593bbb730a812d16e8a31834c2ec89f3a81f1897fb69445aee490f6bf33->enter($__internal_8c49f593bbb730a812d16e8a31834c2ec89f3a81f1897fb69445aee490f6bf33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8c49f593bbb730a812d16e8a31834c2ec89f3a81f1897fb69445aee490f6bf33->leave($__internal_8c49f593bbb730a812d16e8a31834c2ec89f3a81f1897fb69445aee490f6bf33_prof);

        
        $__internal_60cb2fab5fe16cb61ccda749e9c0ea818c031736bd597e9f28c328e30153d983->leave($__internal_60cb2fab5fe16cb61ccda749e9c0ea818c031736bd597e9f28c328e30153d983_prof);

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
