<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_0d185cee52a2d168d02b39ce7099dd271c31aabc167b5efd40f719f082752421 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
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
        $__internal_bf1429ba9c5fe9c7c2a59ea14a88c9f2c247580207d44b63c785f9c6f608fa5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf1429ba9c5fe9c7c2a59ea14a88c9f2c247580207d44b63c785f9c6f608fa5e->enter($__internal_bf1429ba9c5fe9c7c2a59ea14a88c9f2c247580207d44b63c785f9c6f608fa5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_418967c8e61aecad54051c179e2eca6c9da8d5fe3b09929e1a720b430150148a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_418967c8e61aecad54051c179e2eca6c9da8d5fe3b09929e1a720b430150148a->enter($__internal_418967c8e61aecad54051c179e2eca6c9da8d5fe3b09929e1a720b430150148a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf1429ba9c5fe9c7c2a59ea14a88c9f2c247580207d44b63c785f9c6f608fa5e->leave($__internal_bf1429ba9c5fe9c7c2a59ea14a88c9f2c247580207d44b63c785f9c6f608fa5e_prof);

        
        $__internal_418967c8e61aecad54051c179e2eca6c9da8d5fe3b09929e1a720b430150148a->leave($__internal_418967c8e61aecad54051c179e2eca6c9da8d5fe3b09929e1a720b430150148a_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_18662c43d4eb68624fe894a477809f0c30636402e21638ac43d1de057a2373cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18662c43d4eb68624fe894a477809f0c30636402e21638ac43d1de057a2373cb->enter($__internal_18662c43d4eb68624fe894a477809f0c30636402e21638ac43d1de057a2373cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_d0fff1f309cdce00f10012e3673f3bf834968f2e83e7527175579451ad98fbbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0fff1f309cdce00f10012e3673f3bf834968f2e83e7527175579451ad98fbbb->enter($__internal_d0fff1f309cdce00f10012e3673f3bf834968f2e83e7527175579451ad98fbbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_d0fff1f309cdce00f10012e3673f3bf834968f2e83e7527175579451ad98fbbb->leave($__internal_d0fff1f309cdce00f10012e3673f3bf834968f2e83e7527175579451ad98fbbb_prof);

        
        $__internal_18662c43d4eb68624fe894a477809f0c30636402e21638ac43d1de057a2373cb->leave($__internal_18662c43d4eb68624fe894a477809f0c30636402e21638ac43d1de057a2373cb_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_747d3dc588400e5835ae16f4112a463354b83610b14f68d088350197617b06b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_747d3dc588400e5835ae16f4112a463354b83610b14f68d088350197617b06b5->enter($__internal_747d3dc588400e5835ae16f4112a463354b83610b14f68d088350197617b06b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_eb110a0bf493d2bfbefd0cdd45e91eaed9c056a6a681a22e1a2bc966a510a7bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb110a0bf493d2bfbefd0cdd45e91eaed9c056a6a681a22e1a2bc966a510a7bd->enter($__internal_eb110a0bf493d2bfbefd0cdd45e91eaed9c056a6a681a22e1a2bc966a510a7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_eb110a0bf493d2bfbefd0cdd45e91eaed9c056a6a681a22e1a2bc966a510a7bd->leave($__internal_eb110a0bf493d2bfbefd0cdd45e91eaed9c056a6a681a22e1a2bc966a510a7bd_prof);

        
        $__internal_747d3dc588400e5835ae16f4112a463354b83610b14f68d088350197617b06b5->leave($__internal_747d3dc588400e5835ae16f4112a463354b83610b14f68d088350197617b06b5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
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
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
