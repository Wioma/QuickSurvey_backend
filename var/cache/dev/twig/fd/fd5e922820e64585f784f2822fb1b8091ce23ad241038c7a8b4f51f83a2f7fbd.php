<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_33236dca4b846d6cf43ea0fa2479fb156deaeb77ce07af2d9fe0b8c37a926324 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_210d390caf205927f90294882bccd4002f9bfd36c8c27a69266a07a0f2361d88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_210d390caf205927f90294882bccd4002f9bfd36c8c27a69266a07a0f2361d88->enter($__internal_210d390caf205927f90294882bccd4002f9bfd36c8c27a69266a07a0f2361d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_f10b43cda801bc564faa03971988a88827e752bda767bcdcadc2851809c1aa0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f10b43cda801bc564faa03971988a88827e752bda767bcdcadc2851809c1aa0e->enter($__internal_f10b43cda801bc564faa03971988a88827e752bda767bcdcadc2851809c1aa0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_210d390caf205927f90294882bccd4002f9bfd36c8c27a69266a07a0f2361d88->leave($__internal_210d390caf205927f90294882bccd4002f9bfd36c8c27a69266a07a0f2361d88_prof);

        
        $__internal_f10b43cda801bc564faa03971988a88827e752bda767bcdcadc2851809c1aa0e->leave($__internal_f10b43cda801bc564faa03971988a88827e752bda767bcdcadc2851809c1aa0e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ed89e686b253de88945bc0fd59279dbc95a2257c539b8618e989dea3b0bc398a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed89e686b253de88945bc0fd59279dbc95a2257c539b8618e989dea3b0bc398a->enter($__internal_ed89e686b253de88945bc0fd59279dbc95a2257c539b8618e989dea3b0bc398a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4541afbfe271bb80eeb5082aaeb2e3af44992dcc4cfda1041c547690e031e667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4541afbfe271bb80eeb5082aaeb2e3af44992dcc4cfda1041c547690e031e667->enter($__internal_4541afbfe271bb80eeb5082aaeb2e3af44992dcc4cfda1041c547690e031e667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_4541afbfe271bb80eeb5082aaeb2e3af44992dcc4cfda1041c547690e031e667->leave($__internal_4541afbfe271bb80eeb5082aaeb2e3af44992dcc4cfda1041c547690e031e667_prof);

        
        $__internal_ed89e686b253de88945bc0fd59279dbc95a2257c539b8618e989dea3b0bc398a->leave($__internal_ed89e686b253de88945bc0fd59279dbc95a2257c539b8618e989dea3b0bc398a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b958d10d00f1ccc9c1ca11a630e1e08a3b1b46f9ad5ae15e5d0c4b129188bb0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b958d10d00f1ccc9c1ca11a630e1e08a3b1b46f9ad5ae15e5d0c4b129188bb0d->enter($__internal_b958d10d00f1ccc9c1ca11a630e1e08a3b1b46f9ad5ae15e5d0c4b129188bb0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e6d3ff2586d266e10ca080e9e03e4852bd06d8c1d8eeb45f19fb3e6e65b9f98b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6d3ff2586d266e10ca080e9e03e4852bd06d8c1d8eeb45f19fb3e6e65b9f98b->enter($__internal_e6d3ff2586d266e10ca080e9e03e4852bd06d8c1d8eeb45f19fb3e6e65b9f98b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e6d3ff2586d266e10ca080e9e03e4852bd06d8c1d8eeb45f19fb3e6e65b9f98b->leave($__internal_e6d3ff2586d266e10ca080e9e03e4852bd06d8c1d8eeb45f19fb3e6e65b9f98b_prof);

        
        $__internal_b958d10d00f1ccc9c1ca11a630e1e08a3b1b46f9ad5ae15e5d0c4b129188bb0d->leave($__internal_b958d10d00f1ccc9c1ca11a630e1e08a3b1b46f9ad5ae15e5d0c4b129188bb0d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
