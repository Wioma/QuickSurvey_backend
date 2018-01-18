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
        $__internal_d4d53f6f798b6494bb542b159912ad5854a6a04539cb17d1f8368138fbef9f82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4d53f6f798b6494bb542b159912ad5854a6a04539cb17d1f8368138fbef9f82->enter($__internal_d4d53f6f798b6494bb542b159912ad5854a6a04539cb17d1f8368138fbef9f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_48859b5babcfb99a25e7fcf0a30ae6cd6731d90169b2ec59ced673eed45b0e91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48859b5babcfb99a25e7fcf0a30ae6cd6731d90169b2ec59ced673eed45b0e91->enter($__internal_48859b5babcfb99a25e7fcf0a30ae6cd6731d90169b2ec59ced673eed45b0e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4d53f6f798b6494bb542b159912ad5854a6a04539cb17d1f8368138fbef9f82->leave($__internal_d4d53f6f798b6494bb542b159912ad5854a6a04539cb17d1f8368138fbef9f82_prof);

        
        $__internal_48859b5babcfb99a25e7fcf0a30ae6cd6731d90169b2ec59ced673eed45b0e91->leave($__internal_48859b5babcfb99a25e7fcf0a30ae6cd6731d90169b2ec59ced673eed45b0e91_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_d27d48ad1dafabcd1a80d0b68f6b8e3ce5f9903c8d42829c710886d5c44310b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d27d48ad1dafabcd1a80d0b68f6b8e3ce5f9903c8d42829c710886d5c44310b3->enter($__internal_d27d48ad1dafabcd1a80d0b68f6b8e3ce5f9903c8d42829c710886d5c44310b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_98909c7ed4dc49395767f3a7f0027ab3a553fd1c87e9bec8315ecaa5011cdc6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98909c7ed4dc49395767f3a7f0027ab3a553fd1c87e9bec8315ecaa5011cdc6f->enter($__internal_98909c7ed4dc49395767f3a7f0027ab3a553fd1c87e9bec8315ecaa5011cdc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_98909c7ed4dc49395767f3a7f0027ab3a553fd1c87e9bec8315ecaa5011cdc6f->leave($__internal_98909c7ed4dc49395767f3a7f0027ab3a553fd1c87e9bec8315ecaa5011cdc6f_prof);

        
        $__internal_d27d48ad1dafabcd1a80d0b68f6b8e3ce5f9903c8d42829c710886d5c44310b3->leave($__internal_d27d48ad1dafabcd1a80d0b68f6b8e3ce5f9903c8d42829c710886d5c44310b3_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f4eb24efb125017f851fca1c1889b58760d2231ddd035726fe87145c6cd90e40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4eb24efb125017f851fca1c1889b58760d2231ddd035726fe87145c6cd90e40->enter($__internal_f4eb24efb125017f851fca1c1889b58760d2231ddd035726fe87145c6cd90e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7a4720e0e383504fc8cf0ce2f69379bab4eefb71f8adee46b79a9982a3bb895f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a4720e0e383504fc8cf0ce2f69379bab4eefb71f8adee46b79a9982a3bb895f->enter($__internal_7a4720e0e383504fc8cf0ce2f69379bab4eefb71f8adee46b79a9982a3bb895f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_7a4720e0e383504fc8cf0ce2f69379bab4eefb71f8adee46b79a9982a3bb895f->leave($__internal_7a4720e0e383504fc8cf0ce2f69379bab4eefb71f8adee46b79a9982a3bb895f_prof);

        
        $__internal_f4eb24efb125017f851fca1c1889b58760d2231ddd035726fe87145c6cd90e40->leave($__internal_f4eb24efb125017f851fca1c1889b58760d2231ddd035726fe87145c6cd90e40_prof);

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
