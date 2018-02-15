<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_4b0d8ce8d9ce092d6e9e8b3386693d653cf02c890884173412694653b2e536fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91c78732466773741cf0006f4a5f087c83104010d8ed8afc5dd6f779bfbb332a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91c78732466773741cf0006f4a5f087c83104010d8ed8afc5dd6f779bfbb332a->enter($__internal_91c78732466773741cf0006f4a5f087c83104010d8ed8afc5dd6f779bfbb332a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_3c30b858b004a6e92e5fa5c060ec2624863b382e9a7fe8ba0fd9a154da201eb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c30b858b004a6e92e5fa5c060ec2624863b382e9a7fe8ba0fd9a154da201eb7->enter($__internal_3c30b858b004a6e92e5fa5c060ec2624863b382e9a7fe8ba0fd9a154da201eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91c78732466773741cf0006f4a5f087c83104010d8ed8afc5dd6f779bfbb332a->leave($__internal_91c78732466773741cf0006f4a5f087c83104010d8ed8afc5dd6f779bfbb332a_prof);

        
        $__internal_3c30b858b004a6e92e5fa5c060ec2624863b382e9a7fe8ba0fd9a154da201eb7->leave($__internal_3c30b858b004a6e92e5fa5c060ec2624863b382e9a7fe8ba0fd9a154da201eb7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_94fffe89ed8e93c0e1cf78ef32abc1c2cc224c443df1d45945314a0295a8db42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94fffe89ed8e93c0e1cf78ef32abc1c2cc224c443df1d45945314a0295a8db42->enter($__internal_94fffe89ed8e93c0e1cf78ef32abc1c2cc224c443df1d45945314a0295a8db42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a3871617591708e6ecfdec28ccee10ffb650ec2a7f8a791bd49d59c22dac4e3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3871617591708e6ecfdec28ccee10ffb650ec2a7f8a791bd49d59c22dac4e3d->enter($__internal_a3871617591708e6ecfdec28ccee10ffb650ec2a7f8a791bd49d59c22dac4e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_a3871617591708e6ecfdec28ccee10ffb650ec2a7f8a791bd49d59c22dac4e3d->leave($__internal_a3871617591708e6ecfdec28ccee10ffb650ec2a7f8a791bd49d59c22dac4e3d_prof);

        
        $__internal_94fffe89ed8e93c0e1cf78ef32abc1c2cc224c443df1d45945314a0295a8db42->leave($__internal_94fffe89ed8e93c0e1cf78ef32abc1c2cc224c443df1d45945314a0295a8db42_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7372f62a86c2b361cfa638a19b825a0e622e5dcc854edf9325f14a9ad09f9bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7372f62a86c2b361cfa638a19b825a0e622e5dcc854edf9325f14a9ad09f9bf->enter($__internal_c7372f62a86c2b361cfa638a19b825a0e622e5dcc854edf9325f14a9ad09f9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3e35dfc1248e58b7e91c74b8d3d3a391be0a36dc433b575dd1e4ae9c63070c97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e35dfc1248e58b7e91c74b8d3d3a391be0a36dc433b575dd1e4ae9c63070c97->enter($__internal_3e35dfc1248e58b7e91c74b8d3d3a391be0a36dc433b575dd1e4ae9c63070c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_3e35dfc1248e58b7e91c74b8d3d3a391be0a36dc433b575dd1e4ae9c63070c97->leave($__internal_3e35dfc1248e58b7e91c74b8d3d3a391be0a36dc433b575dd1e4ae9c63070c97_prof);

        
        $__internal_c7372f62a86c2b361cfa638a19b825a0e622e5dcc854edf9325f14a9ad09f9bf->leave($__internal_c7372f62a86c2b361cfa638a19b825a0e622e5dcc854edf9325f14a9ad09f9bf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
