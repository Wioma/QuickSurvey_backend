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
        $__internal_2f07d864b66fe060dc6a9cd8bd6c028151d892eeaac10d4a7455ecc942350ca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f07d864b66fe060dc6a9cd8bd6c028151d892eeaac10d4a7455ecc942350ca7->enter($__internal_2f07d864b66fe060dc6a9cd8bd6c028151d892eeaac10d4a7455ecc942350ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_de63078dd4a55f26fabeeba32500ad50c590965b1936a22de8644396a31aa513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de63078dd4a55f26fabeeba32500ad50c590965b1936a22de8644396a31aa513->enter($__internal_de63078dd4a55f26fabeeba32500ad50c590965b1936a22de8644396a31aa513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f07d864b66fe060dc6a9cd8bd6c028151d892eeaac10d4a7455ecc942350ca7->leave($__internal_2f07d864b66fe060dc6a9cd8bd6c028151d892eeaac10d4a7455ecc942350ca7_prof);

        
        $__internal_de63078dd4a55f26fabeeba32500ad50c590965b1936a22de8644396a31aa513->leave($__internal_de63078dd4a55f26fabeeba32500ad50c590965b1936a22de8644396a31aa513_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_60e10673a7b7115e95d30ffcd8d6ca7f7b4b215f30e7158ce29707a299124d9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60e10673a7b7115e95d30ffcd8d6ca7f7b4b215f30e7158ce29707a299124d9a->enter($__internal_60e10673a7b7115e95d30ffcd8d6ca7f7b4b215f30e7158ce29707a299124d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3d77ebcf8de5320277ea2ce53826ba6efbb67fbf30ab14ac9888de0a2de3dc54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d77ebcf8de5320277ea2ce53826ba6efbb67fbf30ab14ac9888de0a2de3dc54->enter($__internal_3d77ebcf8de5320277ea2ce53826ba6efbb67fbf30ab14ac9888de0a2de3dc54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3d77ebcf8de5320277ea2ce53826ba6efbb67fbf30ab14ac9888de0a2de3dc54->leave($__internal_3d77ebcf8de5320277ea2ce53826ba6efbb67fbf30ab14ac9888de0a2de3dc54_prof);

        
        $__internal_60e10673a7b7115e95d30ffcd8d6ca7f7b4b215f30e7158ce29707a299124d9a->leave($__internal_60e10673a7b7115e95d30ffcd8d6ca7f7b4b215f30e7158ce29707a299124d9a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5b64b374895df25a7761b0d0c0982a4e2e37beb42e90cbfae042ee76b0f8eb69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b64b374895df25a7761b0d0c0982a4e2e37beb42e90cbfae042ee76b0f8eb69->enter($__internal_5b64b374895df25a7761b0d0c0982a4e2e37beb42e90cbfae042ee76b0f8eb69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_164e8e7b8375d6b62f3ef93375af53968a37348c105ad0d07c403e1dc7b82eaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_164e8e7b8375d6b62f3ef93375af53968a37348c105ad0d07c403e1dc7b82eaf->enter($__internal_164e8e7b8375d6b62f3ef93375af53968a37348c105ad0d07c403e1dc7b82eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_164e8e7b8375d6b62f3ef93375af53968a37348c105ad0d07c403e1dc7b82eaf->leave($__internal_164e8e7b8375d6b62f3ef93375af53968a37348c105ad0d07c403e1dc7b82eaf_prof);

        
        $__internal_5b64b374895df25a7761b0d0c0982a4e2e37beb42e90cbfae042ee76b0f8eb69->leave($__internal_5b64b374895df25a7761b0d0c0982a4e2e37beb42e90cbfae042ee76b0f8eb69_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_638a73f06cf8fd62460d91d3a7be5cb368b6d6153a1426695dda70fd219248e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_638a73f06cf8fd62460d91d3a7be5cb368b6d6153a1426695dda70fd219248e2->enter($__internal_638a73f06cf8fd62460d91d3a7be5cb368b6d6153a1426695dda70fd219248e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_11623ae12f409fd745612804d41d85eace69abf77663aea5a13792d5460ad797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11623ae12f409fd745612804d41d85eace69abf77663aea5a13792d5460ad797->enter($__internal_11623ae12f409fd745612804d41d85eace69abf77663aea5a13792d5460ad797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_11623ae12f409fd745612804d41d85eace69abf77663aea5a13792d5460ad797->leave($__internal_11623ae12f409fd745612804d41d85eace69abf77663aea5a13792d5460ad797_prof);

        
        $__internal_638a73f06cf8fd62460d91d3a7be5cb368b6d6153a1426695dda70fd219248e2->leave($__internal_638a73f06cf8fd62460d91d3a7be5cb368b6d6153a1426695dda70fd219248e2_prof);

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
