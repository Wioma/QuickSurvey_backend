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
        $__internal_6e4a1c2f0157002e4fb320f99c03b5e69dd48968d86eb4b74ed7fa2b134e86bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e4a1c2f0157002e4fb320f99c03b5e69dd48968d86eb4b74ed7fa2b134e86bf->enter($__internal_6e4a1c2f0157002e4fb320f99c03b5e69dd48968d86eb4b74ed7fa2b134e86bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_079b3d21902d06875cd93b4bea85792ea70b09c2ffeb106660023c83e7cc04e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_079b3d21902d06875cd93b4bea85792ea70b09c2ffeb106660023c83e7cc04e1->enter($__internal_079b3d21902d06875cd93b4bea85792ea70b09c2ffeb106660023c83e7cc04e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e4a1c2f0157002e4fb320f99c03b5e69dd48968d86eb4b74ed7fa2b134e86bf->leave($__internal_6e4a1c2f0157002e4fb320f99c03b5e69dd48968d86eb4b74ed7fa2b134e86bf_prof);

        
        $__internal_079b3d21902d06875cd93b4bea85792ea70b09c2ffeb106660023c83e7cc04e1->leave($__internal_079b3d21902d06875cd93b4bea85792ea70b09c2ffeb106660023c83e7cc04e1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ff8f9d749900c32567052057671af318dd290a14358c963f9f767b259e0a4bd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff8f9d749900c32567052057671af318dd290a14358c963f9f767b259e0a4bd0->enter($__internal_ff8f9d749900c32567052057671af318dd290a14358c963f9f767b259e0a4bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3e32395763aac9404f9051992a483704acf7ae1f10d7bb2594088d82a20c521a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e32395763aac9404f9051992a483704acf7ae1f10d7bb2594088d82a20c521a->enter($__internal_3e32395763aac9404f9051992a483704acf7ae1f10d7bb2594088d82a20c521a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3e32395763aac9404f9051992a483704acf7ae1f10d7bb2594088d82a20c521a->leave($__internal_3e32395763aac9404f9051992a483704acf7ae1f10d7bb2594088d82a20c521a_prof);

        
        $__internal_ff8f9d749900c32567052057671af318dd290a14358c963f9f767b259e0a4bd0->leave($__internal_ff8f9d749900c32567052057671af318dd290a14358c963f9f767b259e0a4bd0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fe85510f9218a9e1f7bd3e3d5bd31848d94be8dd5acc79de60240f3b32e18167 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe85510f9218a9e1f7bd3e3d5bd31848d94be8dd5acc79de60240f3b32e18167->enter($__internal_fe85510f9218a9e1f7bd3e3d5bd31848d94be8dd5acc79de60240f3b32e18167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_15c46931a26c31e048176542ff1dced23e18e8abfdd1ca56ffc6d1ac8c074adc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15c46931a26c31e048176542ff1dced23e18e8abfdd1ca56ffc6d1ac8c074adc->enter($__internal_15c46931a26c31e048176542ff1dced23e18e8abfdd1ca56ffc6d1ac8c074adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_15c46931a26c31e048176542ff1dced23e18e8abfdd1ca56ffc6d1ac8c074adc->leave($__internal_15c46931a26c31e048176542ff1dced23e18e8abfdd1ca56ffc6d1ac8c074adc_prof);

        
        $__internal_fe85510f9218a9e1f7bd3e3d5bd31848d94be8dd5acc79de60240f3b32e18167->leave($__internal_fe85510f9218a9e1f7bd3e3d5bd31848d94be8dd5acc79de60240f3b32e18167_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a7e343029418fda77259e43fe0902de512502b04235b1d124d7e0e42e65758e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7e343029418fda77259e43fe0902de512502b04235b1d124d7e0e42e65758e2->enter($__internal_a7e343029418fda77259e43fe0902de512502b04235b1d124d7e0e42e65758e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fb834d9b039233d2ab389bcdfe6ef49c9f02f402aa497f62b7fcbfb50128fd76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb834d9b039233d2ab389bcdfe6ef49c9f02f402aa497f62b7fcbfb50128fd76->enter($__internal_fb834d9b039233d2ab389bcdfe6ef49c9f02f402aa497f62b7fcbfb50128fd76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_fb834d9b039233d2ab389bcdfe6ef49c9f02f402aa497f62b7fcbfb50128fd76->leave($__internal_fb834d9b039233d2ab389bcdfe6ef49c9f02f402aa497f62b7fcbfb50128fd76_prof);

        
        $__internal_a7e343029418fda77259e43fe0902de512502b04235b1d124d7e0e42e65758e2->leave($__internal_a7e343029418fda77259e43fe0902de512502b04235b1d124d7e0e42e65758e2_prof);

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
