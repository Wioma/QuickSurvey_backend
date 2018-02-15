<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7a0fdc631691a4d7bde0aa26230f606bb7d43bc6acce173c03231131e782454c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b56d76b3b76a0d35c003dd8ae13e3882b88dbbdfb4c6f12f4d401517364401b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b56d76b3b76a0d35c003dd8ae13e3882b88dbbdfb4c6f12f4d401517364401b8->enter($__internal_b56d76b3b76a0d35c003dd8ae13e3882b88dbbdfb4c6f12f4d401517364401b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b0cabd628731648a16084e2560e141c7bfd3ee815a08275c1c94a0af9c9ed870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0cabd628731648a16084e2560e141c7bfd3ee815a08275c1c94a0af9c9ed870->enter($__internal_b0cabd628731648a16084e2560e141c7bfd3ee815a08275c1c94a0af9c9ed870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b56d76b3b76a0d35c003dd8ae13e3882b88dbbdfb4c6f12f4d401517364401b8->leave($__internal_b56d76b3b76a0d35c003dd8ae13e3882b88dbbdfb4c6f12f4d401517364401b8_prof);

        
        $__internal_b0cabd628731648a16084e2560e141c7bfd3ee815a08275c1c94a0af9c9ed870->leave($__internal_b0cabd628731648a16084e2560e141c7bfd3ee815a08275c1c94a0af9c9ed870_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_527f798e829de033021424c6935ba33dc3bca28132f04dcda909affc19a5068d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_527f798e829de033021424c6935ba33dc3bca28132f04dcda909affc19a5068d->enter($__internal_527f798e829de033021424c6935ba33dc3bca28132f04dcda909affc19a5068d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fac3fad621be0b5bbc9f5af63a8c48db38fb3e5c44c06240f688a601ac4eb2d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fac3fad621be0b5bbc9f5af63a8c48db38fb3e5c44c06240f688a601ac4eb2d0->enter($__internal_fac3fad621be0b5bbc9f5af63a8c48db38fb3e5c44c06240f688a601ac4eb2d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_fac3fad621be0b5bbc9f5af63a8c48db38fb3e5c44c06240f688a601ac4eb2d0->leave($__internal_fac3fad621be0b5bbc9f5af63a8c48db38fb3e5c44c06240f688a601ac4eb2d0_prof);

        
        $__internal_527f798e829de033021424c6935ba33dc3bca28132f04dcda909affc19a5068d->leave($__internal_527f798e829de033021424c6935ba33dc3bca28132f04dcda909affc19a5068d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a41c63019647ef6d462cc85150c6819676969764acfc939c550969eb9fb8810 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a41c63019647ef6d462cc85150c6819676969764acfc939c550969eb9fb8810->enter($__internal_9a41c63019647ef6d462cc85150c6819676969764acfc939c550969eb9fb8810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9589c33a3dd45e20274bfac9c26f60205fee3f859ffb9fb1e05dff5fecbb0917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9589c33a3dd45e20274bfac9c26f60205fee3f859ffb9fb1e05dff5fecbb0917->enter($__internal_9589c33a3dd45e20274bfac9c26f60205fee3f859ffb9fb1e05dff5fecbb0917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9589c33a3dd45e20274bfac9c26f60205fee3f859ffb9fb1e05dff5fecbb0917->leave($__internal_9589c33a3dd45e20274bfac9c26f60205fee3f859ffb9fb1e05dff5fecbb0917_prof);

        
        $__internal_9a41c63019647ef6d462cc85150c6819676969764acfc939c550969eb9fb8810->leave($__internal_9a41c63019647ef6d462cc85150c6819676969764acfc939c550969eb9fb8810_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8de52f6df19ef4932e35b81e08740aacfe56de9c733a07871365bac8d777fbf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8de52f6df19ef4932e35b81e08740aacfe56de9c733a07871365bac8d777fbf6->enter($__internal_8de52f6df19ef4932e35b81e08740aacfe56de9c733a07871365bac8d777fbf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9c5aea8f8772b9cf786c497a9738e09d5825f09dc01bd65807bf2602dcbc7da0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c5aea8f8772b9cf786c497a9738e09d5825f09dc01bd65807bf2602dcbc7da0->enter($__internal_9c5aea8f8772b9cf786c497a9738e09d5825f09dc01bd65807bf2602dcbc7da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_9c5aea8f8772b9cf786c497a9738e09d5825f09dc01bd65807bf2602dcbc7da0->leave($__internal_9c5aea8f8772b9cf786c497a9738e09d5825f09dc01bd65807bf2602dcbc7da0_prof);

        
        $__internal_8de52f6df19ef4932e35b81e08740aacfe56de9c733a07871365bac8d777fbf6->leave($__internal_8de52f6df19ef4932e35b81e08740aacfe56de9c733a07871365bac8d777fbf6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
