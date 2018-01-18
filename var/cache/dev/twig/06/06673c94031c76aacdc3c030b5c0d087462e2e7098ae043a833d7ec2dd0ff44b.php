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
        $__internal_a8fc5be97bc4b3d23284c432eba95da2a5e1db7355be7a10e9b3b4581cc59535 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8fc5be97bc4b3d23284c432eba95da2a5e1db7355be7a10e9b3b4581cc59535->enter($__internal_a8fc5be97bc4b3d23284c432eba95da2a5e1db7355be7a10e9b3b4581cc59535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_854004fa1a40f764195e5020b417094906ff946f15df5f37dcbeff5c66a826b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_854004fa1a40f764195e5020b417094906ff946f15df5f37dcbeff5c66a826b6->enter($__internal_854004fa1a40f764195e5020b417094906ff946f15df5f37dcbeff5c66a826b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8fc5be97bc4b3d23284c432eba95da2a5e1db7355be7a10e9b3b4581cc59535->leave($__internal_a8fc5be97bc4b3d23284c432eba95da2a5e1db7355be7a10e9b3b4581cc59535_prof);

        
        $__internal_854004fa1a40f764195e5020b417094906ff946f15df5f37dcbeff5c66a826b6->leave($__internal_854004fa1a40f764195e5020b417094906ff946f15df5f37dcbeff5c66a826b6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1f0f12c242a1569571be5795044cc43a16a249713852f8f9f71272d0ef8d5580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f0f12c242a1569571be5795044cc43a16a249713852f8f9f71272d0ef8d5580->enter($__internal_1f0f12c242a1569571be5795044cc43a16a249713852f8f9f71272d0ef8d5580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8ddf99d77c706a96c06df3f9c9f6ac2f3b41ba75c5541ffd1d3d00c1e2276436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ddf99d77c706a96c06df3f9c9f6ac2f3b41ba75c5541ffd1d3d00c1e2276436->enter($__internal_8ddf99d77c706a96c06df3f9c9f6ac2f3b41ba75c5541ffd1d3d00c1e2276436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8ddf99d77c706a96c06df3f9c9f6ac2f3b41ba75c5541ffd1d3d00c1e2276436->leave($__internal_8ddf99d77c706a96c06df3f9c9f6ac2f3b41ba75c5541ffd1d3d00c1e2276436_prof);

        
        $__internal_1f0f12c242a1569571be5795044cc43a16a249713852f8f9f71272d0ef8d5580->leave($__internal_1f0f12c242a1569571be5795044cc43a16a249713852f8f9f71272d0ef8d5580_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_420543aa6379038568c30de94e2ae1a160e0249abb9e5659ea360abb23c0c523 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_420543aa6379038568c30de94e2ae1a160e0249abb9e5659ea360abb23c0c523->enter($__internal_420543aa6379038568c30de94e2ae1a160e0249abb9e5659ea360abb23c0c523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8a14018716eb180fa8082929d749d4706cb566f37ac0afbac9a9965062e75a84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a14018716eb180fa8082929d749d4706cb566f37ac0afbac9a9965062e75a84->enter($__internal_8a14018716eb180fa8082929d749d4706cb566f37ac0afbac9a9965062e75a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8a14018716eb180fa8082929d749d4706cb566f37ac0afbac9a9965062e75a84->leave($__internal_8a14018716eb180fa8082929d749d4706cb566f37ac0afbac9a9965062e75a84_prof);

        
        $__internal_420543aa6379038568c30de94e2ae1a160e0249abb9e5659ea360abb23c0c523->leave($__internal_420543aa6379038568c30de94e2ae1a160e0249abb9e5659ea360abb23c0c523_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_31620014e3aafa48447bc38aa5af5759b7f9ff92c52b28c59a35c222668721d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31620014e3aafa48447bc38aa5af5759b7f9ff92c52b28c59a35c222668721d9->enter($__internal_31620014e3aafa48447bc38aa5af5759b7f9ff92c52b28c59a35c222668721d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ca250d3e3bd403d360127f7dfd529602688b3ac09ace03c27be77fcbdb2facf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca250d3e3bd403d360127f7dfd529602688b3ac09ace03c27be77fcbdb2facf2->enter($__internal_ca250d3e3bd403d360127f7dfd529602688b3ac09ace03c27be77fcbdb2facf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ca250d3e3bd403d360127f7dfd529602688b3ac09ace03c27be77fcbdb2facf2->leave($__internal_ca250d3e3bd403d360127f7dfd529602688b3ac09ace03c27be77fcbdb2facf2_prof);

        
        $__internal_31620014e3aafa48447bc38aa5af5759b7f9ff92c52b28c59a35c222668721d9->leave($__internal_31620014e3aafa48447bc38aa5af5759b7f9ff92c52b28c59a35c222668721d9_prof);

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
