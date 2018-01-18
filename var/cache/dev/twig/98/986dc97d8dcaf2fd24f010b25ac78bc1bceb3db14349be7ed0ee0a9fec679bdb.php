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
        $__internal_201bad9f13b86b70b376e5623cc67f317244f9793c1eda61fd96cd44f55b7208 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_201bad9f13b86b70b376e5623cc67f317244f9793c1eda61fd96cd44f55b7208->enter($__internal_201bad9f13b86b70b376e5623cc67f317244f9793c1eda61fd96cd44f55b7208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_d8b01e1f59133fc23b500bb99d35b5b4461fba7f40fcd7b0357c05bcf49b2dc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8b01e1f59133fc23b500bb99d35b5b4461fba7f40fcd7b0357c05bcf49b2dc9->enter($__internal_d8b01e1f59133fc23b500bb99d35b5b4461fba7f40fcd7b0357c05bcf49b2dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_201bad9f13b86b70b376e5623cc67f317244f9793c1eda61fd96cd44f55b7208->leave($__internal_201bad9f13b86b70b376e5623cc67f317244f9793c1eda61fd96cd44f55b7208_prof);

        
        $__internal_d8b01e1f59133fc23b500bb99d35b5b4461fba7f40fcd7b0357c05bcf49b2dc9->leave($__internal_d8b01e1f59133fc23b500bb99d35b5b4461fba7f40fcd7b0357c05bcf49b2dc9_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_fdef4709322f70388bffc297b502b55a12c336e93586420b7419a01efaf0ef03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdef4709322f70388bffc297b502b55a12c336e93586420b7419a01efaf0ef03->enter($__internal_fdef4709322f70388bffc297b502b55a12c336e93586420b7419a01efaf0ef03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_e5013c5137978b26bead5d1fafe2bc68ca9015e048cecbecacb0cdd4143648bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5013c5137978b26bead5d1fafe2bc68ca9015e048cecbecacb0cdd4143648bd->enter($__internal_e5013c5137978b26bead5d1fafe2bc68ca9015e048cecbecacb0cdd4143648bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_e5013c5137978b26bead5d1fafe2bc68ca9015e048cecbecacb0cdd4143648bd->leave($__internal_e5013c5137978b26bead5d1fafe2bc68ca9015e048cecbecacb0cdd4143648bd_prof);

        
        $__internal_fdef4709322f70388bffc297b502b55a12c336e93586420b7419a01efaf0ef03->leave($__internal_fdef4709322f70388bffc297b502b55a12c336e93586420b7419a01efaf0ef03_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_32c4d77ce4df403e39ef0d3278ca75df6a5bb7a23b2ca0373bf13d81b0d4e0b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32c4d77ce4df403e39ef0d3278ca75df6a5bb7a23b2ca0373bf13d81b0d4e0b4->enter($__internal_32c4d77ce4df403e39ef0d3278ca75df6a5bb7a23b2ca0373bf13d81b0d4e0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5714be84d6cbe950c7b06aa1cef06c9db41572dd000c1c0ff20205d91b57506e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5714be84d6cbe950c7b06aa1cef06c9db41572dd000c1c0ff20205d91b57506e->enter($__internal_5714be84d6cbe950c7b06aa1cef06c9db41572dd000c1c0ff20205d91b57506e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_5714be84d6cbe950c7b06aa1cef06c9db41572dd000c1c0ff20205d91b57506e->leave($__internal_5714be84d6cbe950c7b06aa1cef06c9db41572dd000c1c0ff20205d91b57506e_prof);

        
        $__internal_32c4d77ce4df403e39ef0d3278ca75df6a5bb7a23b2ca0373bf13d81b0d4e0b4->leave($__internal_32c4d77ce4df403e39ef0d3278ca75df6a5bb7a23b2ca0373bf13d81b0d4e0b4_prof);

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
