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
        $__internal_fe6e3cec1cce5b07785a8b91589ab2b24c604726b26af2132bbbb75be3a771dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe6e3cec1cce5b07785a8b91589ab2b24c604726b26af2132bbbb75be3a771dd->enter($__internal_fe6e3cec1cce5b07785a8b91589ab2b24c604726b26af2132bbbb75be3a771dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_33abc82177fcd61fe6a27c653a50b2c8cb7744999716219f79ca9efe0770d453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33abc82177fcd61fe6a27c653a50b2c8cb7744999716219f79ca9efe0770d453->enter($__internal_33abc82177fcd61fe6a27c653a50b2c8cb7744999716219f79ca9efe0770d453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe6e3cec1cce5b07785a8b91589ab2b24c604726b26af2132bbbb75be3a771dd->leave($__internal_fe6e3cec1cce5b07785a8b91589ab2b24c604726b26af2132bbbb75be3a771dd_prof);

        
        $__internal_33abc82177fcd61fe6a27c653a50b2c8cb7744999716219f79ca9efe0770d453->leave($__internal_33abc82177fcd61fe6a27c653a50b2c8cb7744999716219f79ca9efe0770d453_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_130ba3274aa20d9349542e4b9abdf0867d60a7758c78db6c6d9eb910b746a6f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_130ba3274aa20d9349542e4b9abdf0867d60a7758c78db6c6d9eb910b746a6f5->enter($__internal_130ba3274aa20d9349542e4b9abdf0867d60a7758c78db6c6d9eb910b746a6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3744e06f4ab626c03b608b96d7d0f361e34d346fb51861b6825f003c8d015735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3744e06f4ab626c03b608b96d7d0f361e34d346fb51861b6825f003c8d015735->enter($__internal_3744e06f4ab626c03b608b96d7d0f361e34d346fb51861b6825f003c8d015735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_3744e06f4ab626c03b608b96d7d0f361e34d346fb51861b6825f003c8d015735->leave($__internal_3744e06f4ab626c03b608b96d7d0f361e34d346fb51861b6825f003c8d015735_prof);

        
        $__internal_130ba3274aa20d9349542e4b9abdf0867d60a7758c78db6c6d9eb910b746a6f5->leave($__internal_130ba3274aa20d9349542e4b9abdf0867d60a7758c78db6c6d9eb910b746a6f5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e74c387a44f1e9044bff2ea041ae765dfe3b82594eceebf8048c36113580f40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e74c387a44f1e9044bff2ea041ae765dfe3b82594eceebf8048c36113580f40->enter($__internal_7e74c387a44f1e9044bff2ea041ae765dfe3b82594eceebf8048c36113580f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fddec0c0906741b3ce231b44752ebc35da7aac1c31b9b649193838a14d97492d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fddec0c0906741b3ce231b44752ebc35da7aac1c31b9b649193838a14d97492d->enter($__internal_fddec0c0906741b3ce231b44752ebc35da7aac1c31b9b649193838a14d97492d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fddec0c0906741b3ce231b44752ebc35da7aac1c31b9b649193838a14d97492d->leave($__internal_fddec0c0906741b3ce231b44752ebc35da7aac1c31b9b649193838a14d97492d_prof);

        
        $__internal_7e74c387a44f1e9044bff2ea041ae765dfe3b82594eceebf8048c36113580f40->leave($__internal_7e74c387a44f1e9044bff2ea041ae765dfe3b82594eceebf8048c36113580f40_prof);

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
