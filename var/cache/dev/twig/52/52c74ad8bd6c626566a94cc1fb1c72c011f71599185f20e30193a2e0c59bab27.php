<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b89eb053551b49ad28c06b88e603c2541a44bc82b909657dda74ccf3f5165b35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_6cfb1fe51331907d17765a27dd784e3ec1d7de9009c12d01552f2ab5ce48d379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cfb1fe51331907d17765a27dd784e3ec1d7de9009c12d01552f2ab5ce48d379->enter($__internal_6cfb1fe51331907d17765a27dd784e3ec1d7de9009c12d01552f2ab5ce48d379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_16c481c8954855469435107b56fdc068d1e0ceb48fbc15b4c3ef029f4acdf9f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16c481c8954855469435107b56fdc068d1e0ceb48fbc15b4c3ef029f4acdf9f1->enter($__internal_16c481c8954855469435107b56fdc068d1e0ceb48fbc15b4c3ef029f4acdf9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cfb1fe51331907d17765a27dd784e3ec1d7de9009c12d01552f2ab5ce48d379->leave($__internal_6cfb1fe51331907d17765a27dd784e3ec1d7de9009c12d01552f2ab5ce48d379_prof);

        
        $__internal_16c481c8954855469435107b56fdc068d1e0ceb48fbc15b4c3ef029f4acdf9f1->leave($__internal_16c481c8954855469435107b56fdc068d1e0ceb48fbc15b4c3ef029f4acdf9f1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_975df203e2e13059dd4b8e4ac5eb7674ee3ca0290f01540a590bd142d3e9fbb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_975df203e2e13059dd4b8e4ac5eb7674ee3ca0290f01540a590bd142d3e9fbb0->enter($__internal_975df203e2e13059dd4b8e4ac5eb7674ee3ca0290f01540a590bd142d3e9fbb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a50f920d1687848908f433b4375f90c6df2d8ddd75dc915efba3a79661f21f89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a50f920d1687848908f433b4375f90c6df2d8ddd75dc915efba3a79661f21f89->enter($__internal_a50f920d1687848908f433b4375f90c6df2d8ddd75dc915efba3a79661f21f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a50f920d1687848908f433b4375f90c6df2d8ddd75dc915efba3a79661f21f89->leave($__internal_a50f920d1687848908f433b4375f90c6df2d8ddd75dc915efba3a79661f21f89_prof);

        
        $__internal_975df203e2e13059dd4b8e4ac5eb7674ee3ca0290f01540a590bd142d3e9fbb0->leave($__internal_975df203e2e13059dd4b8e4ac5eb7674ee3ca0290f01540a590bd142d3e9fbb0_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_2cf3b77dd23801f3a5729ab9b8cbf29ac5f801341bb893a466850557ba6be43a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cf3b77dd23801f3a5729ab9b8cbf29ac5f801341bb893a466850557ba6be43a->enter($__internal_2cf3b77dd23801f3a5729ab9b8cbf29ac5f801341bb893a466850557ba6be43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1bbaf8248dac85a50553811c125a33bd170c0392421875892725f90e0672a22b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bbaf8248dac85a50553811c125a33bd170c0392421875892725f90e0672a22b->enter($__internal_1bbaf8248dac85a50553811c125a33bd170c0392421875892725f90e0672a22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1bbaf8248dac85a50553811c125a33bd170c0392421875892725f90e0672a22b->leave($__internal_1bbaf8248dac85a50553811c125a33bd170c0392421875892725f90e0672a22b_prof);

        
        $__internal_2cf3b77dd23801f3a5729ab9b8cbf29ac5f801341bb893a466850557ba6be43a->leave($__internal_2cf3b77dd23801f3a5729ab9b8cbf29ac5f801341bb893a466850557ba6be43a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c5fe9c39860fbb0011edd5b4de7b8fb09c543cdf9a50cdbbbca7c17fe0e9aa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c5fe9c39860fbb0011edd5b4de7b8fb09c543cdf9a50cdbbbca7c17fe0e9aa3->enter($__internal_9c5fe9c39860fbb0011edd5b4de7b8fb09c543cdf9a50cdbbbca7c17fe0e9aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bcdf13912dc67aafead5084c159a603a0f1ca56bc218f67c54c5e4722f43eadf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcdf13912dc67aafead5084c159a603a0f1ca56bc218f67c54c5e4722f43eadf->enter($__internal_bcdf13912dc67aafead5084c159a603a0f1ca56bc218f67c54c5e4722f43eadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_bcdf13912dc67aafead5084c159a603a0f1ca56bc218f67c54c5e4722f43eadf->leave($__internal_bcdf13912dc67aafead5084c159a603a0f1ca56bc218f67c54c5e4722f43eadf_prof);

        
        $__internal_9c5fe9c39860fbb0011edd5b4de7b8fb09c543cdf9a50cdbbbca7c17fe0e9aa3->leave($__internal_9c5fe9c39860fbb0011edd5b4de7b8fb09c543cdf9a50cdbbbca7c17fe0e9aa3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
