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
        $__internal_38c28461cc2111e216d847a01eba0b17cca18519b7a565a8103c3708a435abc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38c28461cc2111e216d847a01eba0b17cca18519b7a565a8103c3708a435abc9->enter($__internal_38c28461cc2111e216d847a01eba0b17cca18519b7a565a8103c3708a435abc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_4a4425b6be7952e403a78475b76a298e487a50df2d1eee3fe9ba91e1c2048db7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a4425b6be7952e403a78475b76a298e487a50df2d1eee3fe9ba91e1c2048db7->enter($__internal_4a4425b6be7952e403a78475b76a298e487a50df2d1eee3fe9ba91e1c2048db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38c28461cc2111e216d847a01eba0b17cca18519b7a565a8103c3708a435abc9->leave($__internal_38c28461cc2111e216d847a01eba0b17cca18519b7a565a8103c3708a435abc9_prof);

        
        $__internal_4a4425b6be7952e403a78475b76a298e487a50df2d1eee3fe9ba91e1c2048db7->leave($__internal_4a4425b6be7952e403a78475b76a298e487a50df2d1eee3fe9ba91e1c2048db7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3a66df4dc54973d39c806c46714ccfe0cfee3768bea449c2ea682b9ae67dd9b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a66df4dc54973d39c806c46714ccfe0cfee3768bea449c2ea682b9ae67dd9b6->enter($__internal_3a66df4dc54973d39c806c46714ccfe0cfee3768bea449c2ea682b9ae67dd9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c08584a3f4d5f1e8b72de1154ef9d8bb375e0d574be887c942d0d6c708983363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c08584a3f4d5f1e8b72de1154ef9d8bb375e0d574be887c942d0d6c708983363->enter($__internal_c08584a3f4d5f1e8b72de1154ef9d8bb375e0d574be887c942d0d6c708983363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c08584a3f4d5f1e8b72de1154ef9d8bb375e0d574be887c942d0d6c708983363->leave($__internal_c08584a3f4d5f1e8b72de1154ef9d8bb375e0d574be887c942d0d6c708983363_prof);

        
        $__internal_3a66df4dc54973d39c806c46714ccfe0cfee3768bea449c2ea682b9ae67dd9b6->leave($__internal_3a66df4dc54973d39c806c46714ccfe0cfee3768bea449c2ea682b9ae67dd9b6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a6e197bd52681730ea26e82b5b78ea2ad23cfcdc776c451cd743c4674ff4206d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6e197bd52681730ea26e82b5b78ea2ad23cfcdc776c451cd743c4674ff4206d->enter($__internal_a6e197bd52681730ea26e82b5b78ea2ad23cfcdc776c451cd743c4674ff4206d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3ccca8e6d5153cc90344406163188502ac7ec0d90c1a75927e72e74fd8b8fdba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ccca8e6d5153cc90344406163188502ac7ec0d90c1a75927e72e74fd8b8fdba->enter($__internal_3ccca8e6d5153cc90344406163188502ac7ec0d90c1a75927e72e74fd8b8fdba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3ccca8e6d5153cc90344406163188502ac7ec0d90c1a75927e72e74fd8b8fdba->leave($__internal_3ccca8e6d5153cc90344406163188502ac7ec0d90c1a75927e72e74fd8b8fdba_prof);

        
        $__internal_a6e197bd52681730ea26e82b5b78ea2ad23cfcdc776c451cd743c4674ff4206d->leave($__internal_a6e197bd52681730ea26e82b5b78ea2ad23cfcdc776c451cd743c4674ff4206d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_403272cd20a31cf8de720f53f01c5473641b17901abffd2569a664849778561e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_403272cd20a31cf8de720f53f01c5473641b17901abffd2569a664849778561e->enter($__internal_403272cd20a31cf8de720f53f01c5473641b17901abffd2569a664849778561e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5ac32eb26cde928a039a743a2f788a19d5c78687f3ca9ab3832dde76eefcd2a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ac32eb26cde928a039a743a2f788a19d5c78687f3ca9ab3832dde76eefcd2a8->enter($__internal_5ac32eb26cde928a039a743a2f788a19d5c78687f3ca9ab3832dde76eefcd2a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_5ac32eb26cde928a039a743a2f788a19d5c78687f3ca9ab3832dde76eefcd2a8->leave($__internal_5ac32eb26cde928a039a743a2f788a19d5c78687f3ca9ab3832dde76eefcd2a8_prof);

        
        $__internal_403272cd20a31cf8de720f53f01c5473641b17901abffd2569a664849778561e->leave($__internal_403272cd20a31cf8de720f53f01c5473641b17901abffd2569a664849778561e_prof);

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
