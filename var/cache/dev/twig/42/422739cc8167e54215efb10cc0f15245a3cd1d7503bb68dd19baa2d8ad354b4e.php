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
        $__internal_73d0129d08ee6735bbf2290b366154724b7af71a20f741e35859e241510aba0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73d0129d08ee6735bbf2290b366154724b7af71a20f741e35859e241510aba0c->enter($__internal_73d0129d08ee6735bbf2290b366154724b7af71a20f741e35859e241510aba0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_a9055dbcb19a1edfeb2abca84ed2f7e12735d844fa6c914d26117ed3d0efedd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9055dbcb19a1edfeb2abca84ed2f7e12735d844fa6c914d26117ed3d0efedd5->enter($__internal_a9055dbcb19a1edfeb2abca84ed2f7e12735d844fa6c914d26117ed3d0efedd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73d0129d08ee6735bbf2290b366154724b7af71a20f741e35859e241510aba0c->leave($__internal_73d0129d08ee6735bbf2290b366154724b7af71a20f741e35859e241510aba0c_prof);

        
        $__internal_a9055dbcb19a1edfeb2abca84ed2f7e12735d844fa6c914d26117ed3d0efedd5->leave($__internal_a9055dbcb19a1edfeb2abca84ed2f7e12735d844fa6c914d26117ed3d0efedd5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_59581a7f30545d2011662804fdb314b42cdc0955b82b2ab03b5a0b550d6dc211 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59581a7f30545d2011662804fdb314b42cdc0955b82b2ab03b5a0b550d6dc211->enter($__internal_59581a7f30545d2011662804fdb314b42cdc0955b82b2ab03b5a0b550d6dc211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1438708954df6b71c65677979e5bfc54f4f7296e135c26fe2ddb462e940c4fbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1438708954df6b71c65677979e5bfc54f4f7296e135c26fe2ddb462e940c4fbb->enter($__internal_1438708954df6b71c65677979e5bfc54f4f7296e135c26fe2ddb462e940c4fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1438708954df6b71c65677979e5bfc54f4f7296e135c26fe2ddb462e940c4fbb->leave($__internal_1438708954df6b71c65677979e5bfc54f4f7296e135c26fe2ddb462e940c4fbb_prof);

        
        $__internal_59581a7f30545d2011662804fdb314b42cdc0955b82b2ab03b5a0b550d6dc211->leave($__internal_59581a7f30545d2011662804fdb314b42cdc0955b82b2ab03b5a0b550d6dc211_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_488fbd78a1ab8c46bca54052a74855660c8dfd7aacddb64a1c9d0a56a99b78e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_488fbd78a1ab8c46bca54052a74855660c8dfd7aacddb64a1c9d0a56a99b78e1->enter($__internal_488fbd78a1ab8c46bca54052a74855660c8dfd7aacddb64a1c9d0a56a99b78e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_99c0c524f7e7bb13d3f7a9d4f22be58e2724a16d898726d43e593d49331cfdf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99c0c524f7e7bb13d3f7a9d4f22be58e2724a16d898726d43e593d49331cfdf4->enter($__internal_99c0c524f7e7bb13d3f7a9d4f22be58e2724a16d898726d43e593d49331cfdf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_99c0c524f7e7bb13d3f7a9d4f22be58e2724a16d898726d43e593d49331cfdf4->leave($__internal_99c0c524f7e7bb13d3f7a9d4f22be58e2724a16d898726d43e593d49331cfdf4_prof);

        
        $__internal_488fbd78a1ab8c46bca54052a74855660c8dfd7aacddb64a1c9d0a56a99b78e1->leave($__internal_488fbd78a1ab8c46bca54052a74855660c8dfd7aacddb64a1c9d0a56a99b78e1_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_69896217e6abc9a73bae173167a47863ed43fb683c5225683fc59d8c560f7531 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69896217e6abc9a73bae173167a47863ed43fb683c5225683fc59d8c560f7531->enter($__internal_69896217e6abc9a73bae173167a47863ed43fb683c5225683fc59d8c560f7531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1162fd1776fe337c103bfb319e59c2ffce7c226fbdd2f5015c339cd6220f4b71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1162fd1776fe337c103bfb319e59c2ffce7c226fbdd2f5015c339cd6220f4b71->enter($__internal_1162fd1776fe337c103bfb319e59c2ffce7c226fbdd2f5015c339cd6220f4b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_1162fd1776fe337c103bfb319e59c2ffce7c226fbdd2f5015c339cd6220f4b71->leave($__internal_1162fd1776fe337c103bfb319e59c2ffce7c226fbdd2f5015c339cd6220f4b71_prof);

        
        $__internal_69896217e6abc9a73bae173167a47863ed43fb683c5225683fc59d8c560f7531->leave($__internal_69896217e6abc9a73bae173167a47863ed43fb683c5225683fc59d8c560f7531_prof);

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
