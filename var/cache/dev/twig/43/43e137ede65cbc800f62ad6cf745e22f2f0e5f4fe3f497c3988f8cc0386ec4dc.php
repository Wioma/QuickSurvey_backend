<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b6a8be6af886af464923d11a1a09eb5b63d313a6e77a5e69af0ea8033befb09a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_1c79891e7288fb59f8fe224dd6644fb5cb0a349a39c04b7e20fa593dca4cc322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c79891e7288fb59f8fe224dd6644fb5cb0a349a39c04b7e20fa593dca4cc322->enter($__internal_1c79891e7288fb59f8fe224dd6644fb5cb0a349a39c04b7e20fa593dca4cc322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_a607df16346c4a01411e10a918d6153e48245e35398d0e74981dc92793ff7667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a607df16346c4a01411e10a918d6153e48245e35398d0e74981dc92793ff7667->enter($__internal_a607df16346c4a01411e10a918d6153e48245e35398d0e74981dc92793ff7667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c79891e7288fb59f8fe224dd6644fb5cb0a349a39c04b7e20fa593dca4cc322->leave($__internal_1c79891e7288fb59f8fe224dd6644fb5cb0a349a39c04b7e20fa593dca4cc322_prof);

        
        $__internal_a607df16346c4a01411e10a918d6153e48245e35398d0e74981dc92793ff7667->leave($__internal_a607df16346c4a01411e10a918d6153e48245e35398d0e74981dc92793ff7667_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_954790cc64a43966057ecab8595fa5c38431288b2de0a485001ed9016cf765c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_954790cc64a43966057ecab8595fa5c38431288b2de0a485001ed9016cf765c6->enter($__internal_954790cc64a43966057ecab8595fa5c38431288b2de0a485001ed9016cf765c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_36085bac45fb9bdb9fc50f0de7f528474fa205ab6853f5e2b326e60c0797b05f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36085bac45fb9bdb9fc50f0de7f528474fa205ab6853f5e2b326e60c0797b05f->enter($__internal_36085bac45fb9bdb9fc50f0de7f528474fa205ab6853f5e2b326e60c0797b05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_36085bac45fb9bdb9fc50f0de7f528474fa205ab6853f5e2b326e60c0797b05f->leave($__internal_36085bac45fb9bdb9fc50f0de7f528474fa205ab6853f5e2b326e60c0797b05f_prof);

        
        $__internal_954790cc64a43966057ecab8595fa5c38431288b2de0a485001ed9016cf765c6->leave($__internal_954790cc64a43966057ecab8595fa5c38431288b2de0a485001ed9016cf765c6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_44a0739e615689394ee21ae0ce100b7c3bdec53f9c6e25cb16d646ff4dc33ec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44a0739e615689394ee21ae0ce100b7c3bdec53f9c6e25cb16d646ff4dc33ec8->enter($__internal_44a0739e615689394ee21ae0ce100b7c3bdec53f9c6e25cb16d646ff4dc33ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5824760d360facc101ebbd8868c18f4437308ce233d79e99521621881f9d27d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5824760d360facc101ebbd8868c18f4437308ce233d79e99521621881f9d27d5->enter($__internal_5824760d360facc101ebbd8868c18f4437308ce233d79e99521621881f9d27d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5824760d360facc101ebbd8868c18f4437308ce233d79e99521621881f9d27d5->leave($__internal_5824760d360facc101ebbd8868c18f4437308ce233d79e99521621881f9d27d5_prof);

        
        $__internal_44a0739e615689394ee21ae0ce100b7c3bdec53f9c6e25cb16d646ff4dc33ec8->leave($__internal_44a0739e615689394ee21ae0ce100b7c3bdec53f9c6e25cb16d646ff4dc33ec8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ad15baf88dd01c0c508df1278333ef247666b865589c3ca5935afe83c12b2c98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad15baf88dd01c0c508df1278333ef247666b865589c3ca5935afe83c12b2c98->enter($__internal_ad15baf88dd01c0c508df1278333ef247666b865589c3ca5935afe83c12b2c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9c2d3fb16e801a85570525a4e99b9512969ea7cb2c77cd5f9a07a979c24ac9e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c2d3fb16e801a85570525a4e99b9512969ea7cb2c77cd5f9a07a979c24ac9e8->enter($__internal_9c2d3fb16e801a85570525a4e99b9512969ea7cb2c77cd5f9a07a979c24ac9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9c2d3fb16e801a85570525a4e99b9512969ea7cb2c77cd5f9a07a979c24ac9e8->leave($__internal_9c2d3fb16e801a85570525a4e99b9512969ea7cb2c77cd5f9a07a979c24ac9e8_prof);

        
        $__internal_ad15baf88dd01c0c508df1278333ef247666b865589c3ca5935afe83c12b2c98->leave($__internal_ad15baf88dd01c0c508df1278333ef247666b865589c3ca5935afe83c12b2c98_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
