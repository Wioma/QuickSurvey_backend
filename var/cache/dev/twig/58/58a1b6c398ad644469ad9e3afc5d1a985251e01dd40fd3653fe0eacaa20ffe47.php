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
        $__internal_500765f79f8efb5b7ec65a1022d468a48950b1aac71704d29736437fd4495195 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_500765f79f8efb5b7ec65a1022d468a48950b1aac71704d29736437fd4495195->enter($__internal_500765f79f8efb5b7ec65a1022d468a48950b1aac71704d29736437fd4495195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_c08c3040795e7106f051aef5729348ade0b5cdc56eec91b51b930846c3462176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c08c3040795e7106f051aef5729348ade0b5cdc56eec91b51b930846c3462176->enter($__internal_c08c3040795e7106f051aef5729348ade0b5cdc56eec91b51b930846c3462176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_500765f79f8efb5b7ec65a1022d468a48950b1aac71704d29736437fd4495195->leave($__internal_500765f79f8efb5b7ec65a1022d468a48950b1aac71704d29736437fd4495195_prof);

        
        $__internal_c08c3040795e7106f051aef5729348ade0b5cdc56eec91b51b930846c3462176->leave($__internal_c08c3040795e7106f051aef5729348ade0b5cdc56eec91b51b930846c3462176_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_269c903983fa85f54c847e57826cca946a332e556ff4f1224c7ac69bfa40892b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_269c903983fa85f54c847e57826cca946a332e556ff4f1224c7ac69bfa40892b->enter($__internal_269c903983fa85f54c847e57826cca946a332e556ff4f1224c7ac69bfa40892b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_4b84b45ad4bc64d9d924f975a928c537abfb15d604d516d384d064bbe0da99a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b84b45ad4bc64d9d924f975a928c537abfb15d604d516d384d064bbe0da99a9->enter($__internal_4b84b45ad4bc64d9d924f975a928c537abfb15d604d516d384d064bbe0da99a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_4b84b45ad4bc64d9d924f975a928c537abfb15d604d516d384d064bbe0da99a9->leave($__internal_4b84b45ad4bc64d9d924f975a928c537abfb15d604d516d384d064bbe0da99a9_prof);

        
        $__internal_269c903983fa85f54c847e57826cca946a332e556ff4f1224c7ac69bfa40892b->leave($__internal_269c903983fa85f54c847e57826cca946a332e556ff4f1224c7ac69bfa40892b_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2c961e54e175d33827ea1f406727873b66b2bf3c899ed644f6d15a5886359ee8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c961e54e175d33827ea1f406727873b66b2bf3c899ed644f6d15a5886359ee8->enter($__internal_2c961e54e175d33827ea1f406727873b66b2bf3c899ed644f6d15a5886359ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2c5eced7c186e2f95af40d5f855521cab15fd2c93124ccebb74ca22da73c67ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c5eced7c186e2f95af40d5f855521cab15fd2c93124ccebb74ca22da73c67ca->enter($__internal_2c5eced7c186e2f95af40d5f855521cab15fd2c93124ccebb74ca22da73c67ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_2c5eced7c186e2f95af40d5f855521cab15fd2c93124ccebb74ca22da73c67ca->leave($__internal_2c5eced7c186e2f95af40d5f855521cab15fd2c93124ccebb74ca22da73c67ca_prof);

        
        $__internal_2c961e54e175d33827ea1f406727873b66b2bf3c899ed644f6d15a5886359ee8->leave($__internal_2c961e54e175d33827ea1f406727873b66b2bf3c899ed644f6d15a5886359ee8_prof);

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
