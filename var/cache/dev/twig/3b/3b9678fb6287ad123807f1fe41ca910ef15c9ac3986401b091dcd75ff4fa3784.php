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
        $__internal_df8c8087ac4ea19172e7e3ef4d4864def72624ecdb30bcb2928291ba8b6b00dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df8c8087ac4ea19172e7e3ef4d4864def72624ecdb30bcb2928291ba8b6b00dc->enter($__internal_df8c8087ac4ea19172e7e3ef4d4864def72624ecdb30bcb2928291ba8b6b00dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d35fd23bf0f9f983ca8c3dc0af83aba51347410fb1b8a637282e08f190ec9676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d35fd23bf0f9f983ca8c3dc0af83aba51347410fb1b8a637282e08f190ec9676->enter($__internal_d35fd23bf0f9f983ca8c3dc0af83aba51347410fb1b8a637282e08f190ec9676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df8c8087ac4ea19172e7e3ef4d4864def72624ecdb30bcb2928291ba8b6b00dc->leave($__internal_df8c8087ac4ea19172e7e3ef4d4864def72624ecdb30bcb2928291ba8b6b00dc_prof);

        
        $__internal_d35fd23bf0f9f983ca8c3dc0af83aba51347410fb1b8a637282e08f190ec9676->leave($__internal_d35fd23bf0f9f983ca8c3dc0af83aba51347410fb1b8a637282e08f190ec9676_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_24fe783b485f30d0c672f7344b30d20ba0cd3c3980edc10ff275e43249ca27f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24fe783b485f30d0c672f7344b30d20ba0cd3c3980edc10ff275e43249ca27f1->enter($__internal_24fe783b485f30d0c672f7344b30d20ba0cd3c3980edc10ff275e43249ca27f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ec5022a0bc9075488e1939bce6d1713f54bf423b2b5893c13db66a6ec4c16421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec5022a0bc9075488e1939bce6d1713f54bf423b2b5893c13db66a6ec4c16421->enter($__internal_ec5022a0bc9075488e1939bce6d1713f54bf423b2b5893c13db66a6ec4c16421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ec5022a0bc9075488e1939bce6d1713f54bf423b2b5893c13db66a6ec4c16421->leave($__internal_ec5022a0bc9075488e1939bce6d1713f54bf423b2b5893c13db66a6ec4c16421_prof);

        
        $__internal_24fe783b485f30d0c672f7344b30d20ba0cd3c3980edc10ff275e43249ca27f1->leave($__internal_24fe783b485f30d0c672f7344b30d20ba0cd3c3980edc10ff275e43249ca27f1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_78e4693419ef9edba298df64ba00e9600c9b61192c8c41b73566a11771ca54ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78e4693419ef9edba298df64ba00e9600c9b61192c8c41b73566a11771ca54ce->enter($__internal_78e4693419ef9edba298df64ba00e9600c9b61192c8c41b73566a11771ca54ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3254be3ca9a5d5567eeab0b02e015001c46e1d0715b0d02d96253752e64b2521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3254be3ca9a5d5567eeab0b02e015001c46e1d0715b0d02d96253752e64b2521->enter($__internal_3254be3ca9a5d5567eeab0b02e015001c46e1d0715b0d02d96253752e64b2521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3254be3ca9a5d5567eeab0b02e015001c46e1d0715b0d02d96253752e64b2521->leave($__internal_3254be3ca9a5d5567eeab0b02e015001c46e1d0715b0d02d96253752e64b2521_prof);

        
        $__internal_78e4693419ef9edba298df64ba00e9600c9b61192c8c41b73566a11771ca54ce->leave($__internal_78e4693419ef9edba298df64ba00e9600c9b61192c8c41b73566a11771ca54ce_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c81f2f89fe58bb55444cd73067d382688882ddfa6218b570c0b6d068f356a6c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c81f2f89fe58bb55444cd73067d382688882ddfa6218b570c0b6d068f356a6c9->enter($__internal_c81f2f89fe58bb55444cd73067d382688882ddfa6218b570c0b6d068f356a6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c271482c9c2e7227ebe181bb2188f00af03d4695b0cf30c2541fb58a204c5585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c271482c9c2e7227ebe181bb2188f00af03d4695b0cf30c2541fb58a204c5585->enter($__internal_c271482c9c2e7227ebe181bb2188f00af03d4695b0cf30c2541fb58a204c5585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c271482c9c2e7227ebe181bb2188f00af03d4695b0cf30c2541fb58a204c5585->leave($__internal_c271482c9c2e7227ebe181bb2188f00af03d4695b0cf30c2541fb58a204c5585_prof);

        
        $__internal_c81f2f89fe58bb55444cd73067d382688882ddfa6218b570c0b6d068f356a6c9->leave($__internal_c81f2f89fe58bb55444cd73067d382688882ddfa6218b570c0b6d068f356a6c9_prof);

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
