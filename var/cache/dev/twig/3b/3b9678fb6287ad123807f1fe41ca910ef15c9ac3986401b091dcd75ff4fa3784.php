<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_baa19befad80af71aaa9d915aeb847e66134eb584092091c39c769f3f606126a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25a07b42d34adce964683e5447356f935eabbbf9a59cc11bf1b7cb403571eb98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25a07b42d34adce964683e5447356f935eabbbf9a59cc11bf1b7cb403571eb98->enter($__internal_25a07b42d34adce964683e5447356f935eabbbf9a59cc11bf1b7cb403571eb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c890c313d66b034598d08e1d983888948c150808fd89636794ca317396c493a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c890c313d66b034598d08e1d983888948c150808fd89636794ca317396c493a8->enter($__internal_c890c313d66b034598d08e1d983888948c150808fd89636794ca317396c493a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25a07b42d34adce964683e5447356f935eabbbf9a59cc11bf1b7cb403571eb98->leave($__internal_25a07b42d34adce964683e5447356f935eabbbf9a59cc11bf1b7cb403571eb98_prof);

        
        $__internal_c890c313d66b034598d08e1d983888948c150808fd89636794ca317396c493a8->leave($__internal_c890c313d66b034598d08e1d983888948c150808fd89636794ca317396c493a8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8ed9925999a7c89ab5eceef8d319c1c53a4c0176a99c0f0666af6c3e458aa0b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ed9925999a7c89ab5eceef8d319c1c53a4c0176a99c0f0666af6c3e458aa0b8->enter($__internal_8ed9925999a7c89ab5eceef8d319c1c53a4c0176a99c0f0666af6c3e458aa0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1603361bea92495970926e167ca221418a2cec18b40df49f9a0eb2d843ac76d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1603361bea92495970926e167ca221418a2cec18b40df49f9a0eb2d843ac76d4->enter($__internal_1603361bea92495970926e167ca221418a2cec18b40df49f9a0eb2d843ac76d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_1603361bea92495970926e167ca221418a2cec18b40df49f9a0eb2d843ac76d4->leave($__internal_1603361bea92495970926e167ca221418a2cec18b40df49f9a0eb2d843ac76d4_prof);

        
        $__internal_8ed9925999a7c89ab5eceef8d319c1c53a4c0176a99c0f0666af6c3e458aa0b8->leave($__internal_8ed9925999a7c89ab5eceef8d319c1c53a4c0176a99c0f0666af6c3e458aa0b8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ea1aa608c003a0b871a95e829ecfbed5a1fd345586b8ef1f18ff3e626bf6ce52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea1aa608c003a0b871a95e829ecfbed5a1fd345586b8ef1f18ff3e626bf6ce52->enter($__internal_ea1aa608c003a0b871a95e829ecfbed5a1fd345586b8ef1f18ff3e626bf6ce52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3b58dabcb8a58e3b2b0c74f97cbf72d3de5f8627c2a66c6a5a5bfe2f01a51843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b58dabcb8a58e3b2b0c74f97cbf72d3de5f8627c2a66c6a5a5bfe2f01a51843->enter($__internal_3b58dabcb8a58e3b2b0c74f97cbf72d3de5f8627c2a66c6a5a5bfe2f01a51843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3b58dabcb8a58e3b2b0c74f97cbf72d3de5f8627c2a66c6a5a5bfe2f01a51843->leave($__internal_3b58dabcb8a58e3b2b0c74f97cbf72d3de5f8627c2a66c6a5a5bfe2f01a51843_prof);

        
        $__internal_ea1aa608c003a0b871a95e829ecfbed5a1fd345586b8ef1f18ff3e626bf6ce52->leave($__internal_ea1aa608c003a0b871a95e829ecfbed5a1fd345586b8ef1f18ff3e626bf6ce52_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_11fbfbb0ccdf923582897f700e38da27a6962dc629f3f3bd5ccfbb9174880d14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11fbfbb0ccdf923582897f700e38da27a6962dc629f3f3bd5ccfbb9174880d14->enter($__internal_11fbfbb0ccdf923582897f700e38da27a6962dc629f3f3bd5ccfbb9174880d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f58ad881011f72605c2731b84448624d5905a4b739e072a1a6680cc5ce9380fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f58ad881011f72605c2731b84448624d5905a4b739e072a1a6680cc5ce9380fd->enter($__internal_f58ad881011f72605c2731b84448624d5905a4b739e072a1a6680cc5ce9380fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f58ad881011f72605c2731b84448624d5905a4b739e072a1a6680cc5ce9380fd->leave($__internal_f58ad881011f72605c2731b84448624d5905a4b739e072a1a6680cc5ce9380fd_prof);

        
        $__internal_11fbfbb0ccdf923582897f700e38da27a6962dc629f3f3bd5ccfbb9174880d14->leave($__internal_11fbfbb0ccdf923582897f700e38da27a6962dc629f3f3bd5ccfbb9174880d14_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
