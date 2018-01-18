<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_e02046d1e466e07d9ae62fee67469e8920412ec421e39d3e7c1eb7682f533af8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_4300ec6284cbf3f1717a50748c3b96efb5b87724cd49fbe1ddecb8969d63f1d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4300ec6284cbf3f1717a50748c3b96efb5b87724cd49fbe1ddecb8969d63f1d8->enter($__internal_4300ec6284cbf3f1717a50748c3b96efb5b87724cd49fbe1ddecb8969d63f1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_54ecceb649235321f54e7ede33c551d40300c56567074b60bb75389a3b873893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54ecceb649235321f54e7ede33c551d40300c56567074b60bb75389a3b873893->enter($__internal_54ecceb649235321f54e7ede33c551d40300c56567074b60bb75389a3b873893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4300ec6284cbf3f1717a50748c3b96efb5b87724cd49fbe1ddecb8969d63f1d8->leave($__internal_4300ec6284cbf3f1717a50748c3b96efb5b87724cd49fbe1ddecb8969d63f1d8_prof);

        
        $__internal_54ecceb649235321f54e7ede33c551d40300c56567074b60bb75389a3b873893->leave($__internal_54ecceb649235321f54e7ede33c551d40300c56567074b60bb75389a3b873893_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_76effae370bf2d1040d17e8ba16013c22f44e8d1f4f38ace2e0dbc60cbebc5b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76effae370bf2d1040d17e8ba16013c22f44e8d1f4f38ace2e0dbc60cbebc5b0->enter($__internal_76effae370bf2d1040d17e8ba16013c22f44e8d1f4f38ace2e0dbc60cbebc5b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_be61d34dce317df165fd7a14ff5ab0d17ab0218adef92e736a5083e66ff2c8f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be61d34dce317df165fd7a14ff5ab0d17ab0218adef92e736a5083e66ff2c8f4->enter($__internal_be61d34dce317df165fd7a14ff5ab0d17ab0218adef92e736a5083e66ff2c8f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_be61d34dce317df165fd7a14ff5ab0d17ab0218adef92e736a5083e66ff2c8f4->leave($__internal_be61d34dce317df165fd7a14ff5ab0d17ab0218adef92e736a5083e66ff2c8f4_prof);

        
        $__internal_76effae370bf2d1040d17e8ba16013c22f44e8d1f4f38ace2e0dbc60cbebc5b0->leave($__internal_76effae370bf2d1040d17e8ba16013c22f44e8d1f4f38ace2e0dbc60cbebc5b0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7f334f188a4a62db67bad74914d9e9ccf9ff95a3e759114e3173de1e2c3eaae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f334f188a4a62db67bad74914d9e9ccf9ff95a3e759114e3173de1e2c3eaae5->enter($__internal_7f334f188a4a62db67bad74914d9e9ccf9ff95a3e759114e3173de1e2c3eaae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_16fa5e949dffae63ce19fc91b79ee425055446afce43935e346bc8b4099d7ec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16fa5e949dffae63ce19fc91b79ee425055446afce43935e346bc8b4099d7ec8->enter($__internal_16fa5e949dffae63ce19fc91b79ee425055446afce43935e346bc8b4099d7ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_16fa5e949dffae63ce19fc91b79ee425055446afce43935e346bc8b4099d7ec8->leave($__internal_16fa5e949dffae63ce19fc91b79ee425055446afce43935e346bc8b4099d7ec8_prof);

        
        $__internal_7f334f188a4a62db67bad74914d9e9ccf9ff95a3e759114e3173de1e2c3eaae5->leave($__internal_7f334f188a4a62db67bad74914d9e9ccf9ff95a3e759114e3173de1e2c3eaae5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e198e9079459ebe87a6f81f89c643cb0ca2c606cce2a25dd46e41e1a82427289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e198e9079459ebe87a6f81f89c643cb0ca2c606cce2a25dd46e41e1a82427289->enter($__internal_e198e9079459ebe87a6f81f89c643cb0ca2c606cce2a25dd46e41e1a82427289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b11428de164fda6cccc0b783105aa3db47a3ae0cb83ff6409e8725343c1d6e3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b11428de164fda6cccc0b783105aa3db47a3ae0cb83ff6409e8725343c1d6e3e->enter($__internal_b11428de164fda6cccc0b783105aa3db47a3ae0cb83ff6409e8725343c1d6e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b11428de164fda6cccc0b783105aa3db47a3ae0cb83ff6409e8725343c1d6e3e->leave($__internal_b11428de164fda6cccc0b783105aa3db47a3ae0cb83ff6409e8725343c1d6e3e_prof);

        
        $__internal_e198e9079459ebe87a6f81f89c643cb0ca2c606cce2a25dd46e41e1a82427289->leave($__internal_e198e9079459ebe87a6f81f89c643cb0ca2c606cce2a25dd46e41e1a82427289_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
