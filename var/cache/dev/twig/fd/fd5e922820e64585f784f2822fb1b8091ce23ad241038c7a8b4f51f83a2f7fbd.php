<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_33236dca4b846d6cf43ea0fa2479fb156deaeb77ce07af2d9fe0b8c37a926324 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5885349525ac86c7d270173ffa072aa66bc8065f1d88fe61aaae787323c1a3dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5885349525ac86c7d270173ffa072aa66bc8065f1d88fe61aaae787323c1a3dd->enter($__internal_5885349525ac86c7d270173ffa072aa66bc8065f1d88fe61aaae787323c1a3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_5451b40583720038c1674c46c61677cbfd80d8e1c57cfdc895bc3ebf92faf258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5451b40583720038c1674c46c61677cbfd80d8e1c57cfdc895bc3ebf92faf258->enter($__internal_5451b40583720038c1674c46c61677cbfd80d8e1c57cfdc895bc3ebf92faf258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5885349525ac86c7d270173ffa072aa66bc8065f1d88fe61aaae787323c1a3dd->leave($__internal_5885349525ac86c7d270173ffa072aa66bc8065f1d88fe61aaae787323c1a3dd_prof);

        
        $__internal_5451b40583720038c1674c46c61677cbfd80d8e1c57cfdc895bc3ebf92faf258->leave($__internal_5451b40583720038c1674c46c61677cbfd80d8e1c57cfdc895bc3ebf92faf258_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_942fd776f3e5b8d56e4b8e3418d0cce6a1bd0d3f529ae578a0ce8e428d426f0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_942fd776f3e5b8d56e4b8e3418d0cce6a1bd0d3f529ae578a0ce8e428d426f0b->enter($__internal_942fd776f3e5b8d56e4b8e3418d0cce6a1bd0d3f529ae578a0ce8e428d426f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c2655bda548b376914a649567d284ed3f39a0286a08e6ad3c041c8226a068c13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2655bda548b376914a649567d284ed3f39a0286a08e6ad3c041c8226a068c13->enter($__internal_c2655bda548b376914a649567d284ed3f39a0286a08e6ad3c041c8226a068c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_c2655bda548b376914a649567d284ed3f39a0286a08e6ad3c041c8226a068c13->leave($__internal_c2655bda548b376914a649567d284ed3f39a0286a08e6ad3c041c8226a068c13_prof);

        
        $__internal_942fd776f3e5b8d56e4b8e3418d0cce6a1bd0d3f529ae578a0ce8e428d426f0b->leave($__internal_942fd776f3e5b8d56e4b8e3418d0cce6a1bd0d3f529ae578a0ce8e428d426f0b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5abf68510661fde4bc273d4d6d29ca08cd0d237c3f10a48682a0698d88e9b2f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5abf68510661fde4bc273d4d6d29ca08cd0d237c3f10a48682a0698d88e9b2f3->enter($__internal_5abf68510661fde4bc273d4d6d29ca08cd0d237c3f10a48682a0698d88e9b2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4ef27b7290c0c0d5c6ed690e86809781c24250486ce6140499d2d3da237b84da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ef27b7290c0c0d5c6ed690e86809781c24250486ce6140499d2d3da237b84da->enter($__internal_4ef27b7290c0c0d5c6ed690e86809781c24250486ce6140499d2d3da237b84da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_4ef27b7290c0c0d5c6ed690e86809781c24250486ce6140499d2d3da237b84da->leave($__internal_4ef27b7290c0c0d5c6ed690e86809781c24250486ce6140499d2d3da237b84da_prof);

        
        $__internal_5abf68510661fde4bc273d4d6d29ca08cd0d237c3f10a48682a0698d88e9b2f3->leave($__internal_5abf68510661fde4bc273d4d6d29ca08cd0d237c3f10a48682a0698d88e9b2f3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
