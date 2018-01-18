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
        $__internal_e92c5924b0463f8285fd8b7803e7b4b91721495b97cb6c64f7170ca8abc57e2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e92c5924b0463f8285fd8b7803e7b4b91721495b97cb6c64f7170ca8abc57e2e->enter($__internal_e92c5924b0463f8285fd8b7803e7b4b91721495b97cb6c64f7170ca8abc57e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_57b2c2b29fab40581075310c7fd72d87ed7f710d7d3fe686b2d2bba84aa85f03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57b2c2b29fab40581075310c7fd72d87ed7f710d7d3fe686b2d2bba84aa85f03->enter($__internal_57b2c2b29fab40581075310c7fd72d87ed7f710d7d3fe686b2d2bba84aa85f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e92c5924b0463f8285fd8b7803e7b4b91721495b97cb6c64f7170ca8abc57e2e->leave($__internal_e92c5924b0463f8285fd8b7803e7b4b91721495b97cb6c64f7170ca8abc57e2e_prof);

        
        $__internal_57b2c2b29fab40581075310c7fd72d87ed7f710d7d3fe686b2d2bba84aa85f03->leave($__internal_57b2c2b29fab40581075310c7fd72d87ed7f710d7d3fe686b2d2bba84aa85f03_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c60423ec5629abe3c3a200a7b45592b5e4d15853eef4c06e20cd4cb2b9a462da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c60423ec5629abe3c3a200a7b45592b5e4d15853eef4c06e20cd4cb2b9a462da->enter($__internal_c60423ec5629abe3c3a200a7b45592b5e4d15853eef4c06e20cd4cb2b9a462da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_892bac300e6da3fc2c90f3fc396da1eb48cd4aee41ab77c480fa2d26e4be2a90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_892bac300e6da3fc2c90f3fc396da1eb48cd4aee41ab77c480fa2d26e4be2a90->enter($__internal_892bac300e6da3fc2c90f3fc396da1eb48cd4aee41ab77c480fa2d26e4be2a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_892bac300e6da3fc2c90f3fc396da1eb48cd4aee41ab77c480fa2d26e4be2a90->leave($__internal_892bac300e6da3fc2c90f3fc396da1eb48cd4aee41ab77c480fa2d26e4be2a90_prof);

        
        $__internal_c60423ec5629abe3c3a200a7b45592b5e4d15853eef4c06e20cd4cb2b9a462da->leave($__internal_c60423ec5629abe3c3a200a7b45592b5e4d15853eef4c06e20cd4cb2b9a462da_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ddc150f83948cb46a9c9508b6dccee57aa93b90245676b43b1169ff3b5b17e95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddc150f83948cb46a9c9508b6dccee57aa93b90245676b43b1169ff3b5b17e95->enter($__internal_ddc150f83948cb46a9c9508b6dccee57aa93b90245676b43b1169ff3b5b17e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5e702f3fa636938c20cf81f2ca23a02f7657883685604c44ac286bc8ce2be940 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e702f3fa636938c20cf81f2ca23a02f7657883685604c44ac286bc8ce2be940->enter($__internal_5e702f3fa636938c20cf81f2ca23a02f7657883685604c44ac286bc8ce2be940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5e702f3fa636938c20cf81f2ca23a02f7657883685604c44ac286bc8ce2be940->leave($__internal_5e702f3fa636938c20cf81f2ca23a02f7657883685604c44ac286bc8ce2be940_prof);

        
        $__internal_ddc150f83948cb46a9c9508b6dccee57aa93b90245676b43b1169ff3b5b17e95->leave($__internal_ddc150f83948cb46a9c9508b6dccee57aa93b90245676b43b1169ff3b5b17e95_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_7039073bdf85d87b1453be4dbfebb217c3815c22b0ac39fa092dc91f58aa3a76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7039073bdf85d87b1453be4dbfebb217c3815c22b0ac39fa092dc91f58aa3a76->enter($__internal_7039073bdf85d87b1453be4dbfebb217c3815c22b0ac39fa092dc91f58aa3a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0719fa8fee39116d40881491ebabfa7ae0bb566af41beb68b6001de8e1bd11fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0719fa8fee39116d40881491ebabfa7ae0bb566af41beb68b6001de8e1bd11fb->enter($__internal_0719fa8fee39116d40881491ebabfa7ae0bb566af41beb68b6001de8e1bd11fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_0719fa8fee39116d40881491ebabfa7ae0bb566af41beb68b6001de8e1bd11fb->leave($__internal_0719fa8fee39116d40881491ebabfa7ae0bb566af41beb68b6001de8e1bd11fb_prof);

        
        $__internal_7039073bdf85d87b1453be4dbfebb217c3815c22b0ac39fa092dc91f58aa3a76->leave($__internal_7039073bdf85d87b1453be4dbfebb217c3815c22b0ac39fa092dc91f58aa3a76_prof);

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
