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
        $__internal_83461069d29faf9c6e547b506a010712c868cd3ecf31cf8e71d59767ff9f469f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83461069d29faf9c6e547b506a010712c868cd3ecf31cf8e71d59767ff9f469f->enter($__internal_83461069d29faf9c6e547b506a010712c868cd3ecf31cf8e71d59767ff9f469f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_b148f37341361324e5b0df8b561d0c3758fdbb49557cdbc3494012271638efba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b148f37341361324e5b0df8b561d0c3758fdbb49557cdbc3494012271638efba->enter($__internal_b148f37341361324e5b0df8b561d0c3758fdbb49557cdbc3494012271638efba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83461069d29faf9c6e547b506a010712c868cd3ecf31cf8e71d59767ff9f469f->leave($__internal_83461069d29faf9c6e547b506a010712c868cd3ecf31cf8e71d59767ff9f469f_prof);

        
        $__internal_b148f37341361324e5b0df8b561d0c3758fdbb49557cdbc3494012271638efba->leave($__internal_b148f37341361324e5b0df8b561d0c3758fdbb49557cdbc3494012271638efba_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2abf674578c568bcc2ae978955ccc6099b2e583ca347553ab475ff59a506285a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2abf674578c568bcc2ae978955ccc6099b2e583ca347553ab475ff59a506285a->enter($__internal_2abf674578c568bcc2ae978955ccc6099b2e583ca347553ab475ff59a506285a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_27fd30163fb3302eca6ddedaae0c040af0f39588890674e65271435dfd4dbdb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27fd30163fb3302eca6ddedaae0c040af0f39588890674e65271435dfd4dbdb2->enter($__internal_27fd30163fb3302eca6ddedaae0c040af0f39588890674e65271435dfd4dbdb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_27fd30163fb3302eca6ddedaae0c040af0f39588890674e65271435dfd4dbdb2->leave($__internal_27fd30163fb3302eca6ddedaae0c040af0f39588890674e65271435dfd4dbdb2_prof);

        
        $__internal_2abf674578c568bcc2ae978955ccc6099b2e583ca347553ab475ff59a506285a->leave($__internal_2abf674578c568bcc2ae978955ccc6099b2e583ca347553ab475ff59a506285a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_80525026bfe600269a7bd26cff830de1b90243273f80311d6f75f658152711c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80525026bfe600269a7bd26cff830de1b90243273f80311d6f75f658152711c4->enter($__internal_80525026bfe600269a7bd26cff830de1b90243273f80311d6f75f658152711c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_344c640db494f58bca23de4e76d03ef19615460839b57a4023eef9f44e86763c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_344c640db494f58bca23de4e76d03ef19615460839b57a4023eef9f44e86763c->enter($__internal_344c640db494f58bca23de4e76d03ef19615460839b57a4023eef9f44e86763c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_344c640db494f58bca23de4e76d03ef19615460839b57a4023eef9f44e86763c->leave($__internal_344c640db494f58bca23de4e76d03ef19615460839b57a4023eef9f44e86763c_prof);

        
        $__internal_80525026bfe600269a7bd26cff830de1b90243273f80311d6f75f658152711c4->leave($__internal_80525026bfe600269a7bd26cff830de1b90243273f80311d6f75f658152711c4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_68a2408edf0623a917cb61bb4dfe624828794894fc6af7d3851a63f5075abe83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68a2408edf0623a917cb61bb4dfe624828794894fc6af7d3851a63f5075abe83->enter($__internal_68a2408edf0623a917cb61bb4dfe624828794894fc6af7d3851a63f5075abe83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0675ec2598857bef2e08fcde96d519a78adf865ef27ec8c791bfb5e69bb5524f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0675ec2598857bef2e08fcde96d519a78adf865ef27ec8c791bfb5e69bb5524f->enter($__internal_0675ec2598857bef2e08fcde96d519a78adf865ef27ec8c791bfb5e69bb5524f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0675ec2598857bef2e08fcde96d519a78adf865ef27ec8c791bfb5e69bb5524f->leave($__internal_0675ec2598857bef2e08fcde96d519a78adf865ef27ec8c791bfb5e69bb5524f_prof);

        
        $__internal_68a2408edf0623a917cb61bb4dfe624828794894fc6af7d3851a63f5075abe83->leave($__internal_68a2408edf0623a917cb61bb4dfe624828794894fc6af7d3851a63f5075abe83_prof);

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
