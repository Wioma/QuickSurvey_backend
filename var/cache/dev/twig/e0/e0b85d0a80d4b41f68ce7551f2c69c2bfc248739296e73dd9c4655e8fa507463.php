<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_4cd507b4792f9b8c02eeefe05d4fee2a9d7cc74b94a8c84961b9f6ed3c55e46a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49cf935d75e25cbc4b04e582c0a1a20a270c552b7ccbdef7e080ab2958cba674 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49cf935d75e25cbc4b04e582c0a1a20a270c552b7ccbdef7e080ab2958cba674->enter($__internal_49cf935d75e25cbc4b04e582c0a1a20a270c552b7ccbdef7e080ab2958cba674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_29cd02d1e8acc3240a9add47f7970fbc3587e479b8a496cfff36333f8a922dc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29cd02d1e8acc3240a9add47f7970fbc3587e479b8a496cfff36333f8a922dc2->enter($__internal_29cd02d1e8acc3240a9add47f7970fbc3587e479b8a496cfff36333f8a922dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49cf935d75e25cbc4b04e582c0a1a20a270c552b7ccbdef7e080ab2958cba674->leave($__internal_49cf935d75e25cbc4b04e582c0a1a20a270c552b7ccbdef7e080ab2958cba674_prof);

        
        $__internal_29cd02d1e8acc3240a9add47f7970fbc3587e479b8a496cfff36333f8a922dc2->leave($__internal_29cd02d1e8acc3240a9add47f7970fbc3587e479b8a496cfff36333f8a922dc2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_78c0aafa8bac85939ecce988ed7b63cf8278f95d70b24fee05482527b85439f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78c0aafa8bac85939ecce988ed7b63cf8278f95d70b24fee05482527b85439f0->enter($__internal_78c0aafa8bac85939ecce988ed7b63cf8278f95d70b24fee05482527b85439f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0a1a47236bbbfb7f4bc3d6922bee6dc20d31be9c73419b772bb268ba36dcec67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a1a47236bbbfb7f4bc3d6922bee6dc20d31be9c73419b772bb268ba36dcec67->enter($__internal_0a1a47236bbbfb7f4bc3d6922bee6dc20d31be9c73419b772bb268ba36dcec67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_0a1a47236bbbfb7f4bc3d6922bee6dc20d31be9c73419b772bb268ba36dcec67->leave($__internal_0a1a47236bbbfb7f4bc3d6922bee6dc20d31be9c73419b772bb268ba36dcec67_prof);

        
        $__internal_78c0aafa8bac85939ecce988ed7b63cf8278f95d70b24fee05482527b85439f0->leave($__internal_78c0aafa8bac85939ecce988ed7b63cf8278f95d70b24fee05482527b85439f0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
