<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_0df5dbad22bc2b9db44d91d645a22fe5028610b2968ab4c1506810ecb4e92c9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64c2a962b6ce6ec6e92070e231c2f0924299c1488e53f7529de66780c6390d89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64c2a962b6ce6ec6e92070e231c2f0924299c1488e53f7529de66780c6390d89->enter($__internal_64c2a962b6ce6ec6e92070e231c2f0924299c1488e53f7529de66780c6390d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_73bf55698251ce034b9d9827c3a2af747de93cd11f489aa99157a634e53ba681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73bf55698251ce034b9d9827c3a2af747de93cd11f489aa99157a634e53ba681->enter($__internal_73bf55698251ce034b9d9827c3a2af747de93cd11f489aa99157a634e53ba681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64c2a962b6ce6ec6e92070e231c2f0924299c1488e53f7529de66780c6390d89->leave($__internal_64c2a962b6ce6ec6e92070e231c2f0924299c1488e53f7529de66780c6390d89_prof);

        
        $__internal_73bf55698251ce034b9d9827c3a2af747de93cd11f489aa99157a634e53ba681->leave($__internal_73bf55698251ce034b9d9827c3a2af747de93cd11f489aa99157a634e53ba681_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_90c2652d55d7103ea2bf472dc520c60bf814168bc6cb01ced45678d2b0613f7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90c2652d55d7103ea2bf472dc520c60bf814168bc6cb01ced45678d2b0613f7f->enter($__internal_90c2652d55d7103ea2bf472dc520c60bf814168bc6cb01ced45678d2b0613f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_12178d2c4d5a183d5baad276413747ddf98698b00c1e73b663bc6e91f292a096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12178d2c4d5a183d5baad276413747ddf98698b00c1e73b663bc6e91f292a096->enter($__internal_12178d2c4d5a183d5baad276413747ddf98698b00c1e73b663bc6e91f292a096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_12178d2c4d5a183d5baad276413747ddf98698b00c1e73b663bc6e91f292a096->leave($__internal_12178d2c4d5a183d5baad276413747ddf98698b00c1e73b663bc6e91f292a096_prof);

        
        $__internal_90c2652d55d7103ea2bf472dc520c60bf814168bc6cb01ced45678d2b0613f7f->leave($__internal_90c2652d55d7103ea2bf472dc520c60bf814168bc6cb01ced45678d2b0613f7f_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a19f72e4ea3642242d9277a6ad1faa3319baa675f238b2d8a931fac3de4b4797 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a19f72e4ea3642242d9277a6ad1faa3319baa675f238b2d8a931fac3de4b4797->enter($__internal_a19f72e4ea3642242d9277a6ad1faa3319baa675f238b2d8a931fac3de4b4797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_76aed78597013afd2ca37fdc5eda59c34f009f57ef43445ff68ef31cc4dac610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76aed78597013afd2ca37fdc5eda59c34f009f57ef43445ff68ef31cc4dac610->enter($__internal_76aed78597013afd2ca37fdc5eda59c34f009f57ef43445ff68ef31cc4dac610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_76aed78597013afd2ca37fdc5eda59c34f009f57ef43445ff68ef31cc4dac610->leave($__internal_76aed78597013afd2ca37fdc5eda59c34f009f57ef43445ff68ef31cc4dac610_prof);

        
        $__internal_a19f72e4ea3642242d9277a6ad1faa3319baa675f238b2d8a931fac3de4b4797->leave($__internal_a19f72e4ea3642242d9277a6ad1faa3319baa675f238b2d8a931fac3de4b4797_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
