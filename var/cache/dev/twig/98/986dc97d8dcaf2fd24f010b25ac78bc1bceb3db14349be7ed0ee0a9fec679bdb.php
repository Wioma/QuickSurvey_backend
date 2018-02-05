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
        $__internal_67547524f9efb4cf41b5fe0834224a80b7b3868885ed3afcff5d9cb45079838e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67547524f9efb4cf41b5fe0834224a80b7b3868885ed3afcff5d9cb45079838e->enter($__internal_67547524f9efb4cf41b5fe0834224a80b7b3868885ed3afcff5d9cb45079838e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_bc1ed7a757bc2e883f8dcc19ef96a7c5d4d9442370754684d543d00c5882705f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc1ed7a757bc2e883f8dcc19ef96a7c5d4d9442370754684d543d00c5882705f->enter($__internal_bc1ed7a757bc2e883f8dcc19ef96a7c5d4d9442370754684d543d00c5882705f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67547524f9efb4cf41b5fe0834224a80b7b3868885ed3afcff5d9cb45079838e->leave($__internal_67547524f9efb4cf41b5fe0834224a80b7b3868885ed3afcff5d9cb45079838e_prof);

        
        $__internal_bc1ed7a757bc2e883f8dcc19ef96a7c5d4d9442370754684d543d00c5882705f->leave($__internal_bc1ed7a757bc2e883f8dcc19ef96a7c5d4d9442370754684d543d00c5882705f_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_012a82af8d85acd1b2011842f5c2e9d9d92ccf76e1081c6b4495668dc108fed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_012a82af8d85acd1b2011842f5c2e9d9d92ccf76e1081c6b4495668dc108fed0->enter($__internal_012a82af8d85acd1b2011842f5c2e9d9d92ccf76e1081c6b4495668dc108fed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_715ec9e034818034361967f386a809f4009ad20c312b85294a608819871aeb23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_715ec9e034818034361967f386a809f4009ad20c312b85294a608819871aeb23->enter($__internal_715ec9e034818034361967f386a809f4009ad20c312b85294a608819871aeb23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_715ec9e034818034361967f386a809f4009ad20c312b85294a608819871aeb23->leave($__internal_715ec9e034818034361967f386a809f4009ad20c312b85294a608819871aeb23_prof);

        
        $__internal_012a82af8d85acd1b2011842f5c2e9d9d92ccf76e1081c6b4495668dc108fed0->leave($__internal_012a82af8d85acd1b2011842f5c2e9d9d92ccf76e1081c6b4495668dc108fed0_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ab0f631c098deb2aee0ac994f1145cf3672aa20e6fc944af5ffcf683083f692e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab0f631c098deb2aee0ac994f1145cf3672aa20e6fc944af5ffcf683083f692e->enter($__internal_ab0f631c098deb2aee0ac994f1145cf3672aa20e6fc944af5ffcf683083f692e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_484af54bc757da597391a24da9de4bd3e4455c387e36911b70a73f041fba7489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_484af54bc757da597391a24da9de4bd3e4455c387e36911b70a73f041fba7489->enter($__internal_484af54bc757da597391a24da9de4bd3e4455c387e36911b70a73f041fba7489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_484af54bc757da597391a24da9de4bd3e4455c387e36911b70a73f041fba7489->leave($__internal_484af54bc757da597391a24da9de4bd3e4455c387e36911b70a73f041fba7489_prof);

        
        $__internal_ab0f631c098deb2aee0ac994f1145cf3672aa20e6fc944af5ffcf683083f692e->leave($__internal_ab0f631c098deb2aee0ac994f1145cf3672aa20e6fc944af5ffcf683083f692e_prof);

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
