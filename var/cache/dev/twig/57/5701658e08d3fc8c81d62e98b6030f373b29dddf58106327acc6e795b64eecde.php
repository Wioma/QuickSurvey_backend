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
        $__internal_1e7900058bc7b235aff47875f41cfe34d00e7b5383a961ac5ac74411d8d10758 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e7900058bc7b235aff47875f41cfe34d00e7b5383a961ac5ac74411d8d10758->enter($__internal_1e7900058bc7b235aff47875f41cfe34d00e7b5383a961ac5ac74411d8d10758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_cb41ad96d488ac70b252ab57ff6c5ac6fb417661529e03155273248522304934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb41ad96d488ac70b252ab57ff6c5ac6fb417661529e03155273248522304934->enter($__internal_cb41ad96d488ac70b252ab57ff6c5ac6fb417661529e03155273248522304934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e7900058bc7b235aff47875f41cfe34d00e7b5383a961ac5ac74411d8d10758->leave($__internal_1e7900058bc7b235aff47875f41cfe34d00e7b5383a961ac5ac74411d8d10758_prof);

        
        $__internal_cb41ad96d488ac70b252ab57ff6c5ac6fb417661529e03155273248522304934->leave($__internal_cb41ad96d488ac70b252ab57ff6c5ac6fb417661529e03155273248522304934_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bb8a6c791399d1f502e5ace6d2983ee16c83f1c60dc9a089dd7902ee5d758891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb8a6c791399d1f502e5ace6d2983ee16c83f1c60dc9a089dd7902ee5d758891->enter($__internal_bb8a6c791399d1f502e5ace6d2983ee16c83f1c60dc9a089dd7902ee5d758891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5dfe7a8e4fa640090f41304f7072f5ad3abf9cc47976da35977cf79cca85551c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dfe7a8e4fa640090f41304f7072f5ad3abf9cc47976da35977cf79cca85551c->enter($__internal_5dfe7a8e4fa640090f41304f7072f5ad3abf9cc47976da35977cf79cca85551c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_5dfe7a8e4fa640090f41304f7072f5ad3abf9cc47976da35977cf79cca85551c->leave($__internal_5dfe7a8e4fa640090f41304f7072f5ad3abf9cc47976da35977cf79cca85551c_prof);

        
        $__internal_bb8a6c791399d1f502e5ace6d2983ee16c83f1c60dc9a089dd7902ee5d758891->leave($__internal_bb8a6c791399d1f502e5ace6d2983ee16c83f1c60dc9a089dd7902ee5d758891_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6a919ba1777e151acbbbaf9afecf0795c2ae91a5ea69accbd24aeff0cde9b9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6a919ba1777e151acbbbaf9afecf0795c2ae91a5ea69accbd24aeff0cde9b9d->enter($__internal_e6a919ba1777e151acbbbaf9afecf0795c2ae91a5ea69accbd24aeff0cde9b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dec83310422a8b51b30707c941a161a946c69ff5bb16ed143ade2f18fd460aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dec83310422a8b51b30707c941a161a946c69ff5bb16ed143ade2f18fd460aa9->enter($__internal_dec83310422a8b51b30707c941a161a946c69ff5bb16ed143ade2f18fd460aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dec83310422a8b51b30707c941a161a946c69ff5bb16ed143ade2f18fd460aa9->leave($__internal_dec83310422a8b51b30707c941a161a946c69ff5bb16ed143ade2f18fd460aa9_prof);

        
        $__internal_e6a919ba1777e151acbbbaf9afecf0795c2ae91a5ea69accbd24aeff0cde9b9d->leave($__internal_e6a919ba1777e151acbbbaf9afecf0795c2ae91a5ea69accbd24aeff0cde9b9d_prof);

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
