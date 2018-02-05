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
        $__internal_a22e2b5eae9873fad2f5659bc4239ebd1c3cf91733abb2fceac9c1914209e077 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a22e2b5eae9873fad2f5659bc4239ebd1c3cf91733abb2fceac9c1914209e077->enter($__internal_a22e2b5eae9873fad2f5659bc4239ebd1c3cf91733abb2fceac9c1914209e077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_72c5a1dcf7722ee098c7bd0be63aa87069c83bdfdbd1a701e4361b675bfb5272 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72c5a1dcf7722ee098c7bd0be63aa87069c83bdfdbd1a701e4361b675bfb5272->enter($__internal_72c5a1dcf7722ee098c7bd0be63aa87069c83bdfdbd1a701e4361b675bfb5272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a22e2b5eae9873fad2f5659bc4239ebd1c3cf91733abb2fceac9c1914209e077->leave($__internal_a22e2b5eae9873fad2f5659bc4239ebd1c3cf91733abb2fceac9c1914209e077_prof);

        
        $__internal_72c5a1dcf7722ee098c7bd0be63aa87069c83bdfdbd1a701e4361b675bfb5272->leave($__internal_72c5a1dcf7722ee098c7bd0be63aa87069c83bdfdbd1a701e4361b675bfb5272_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_aed6b092b0b2ef75e720b9351ecc4cfa65f79b911d4f578ef694ee6057507eaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aed6b092b0b2ef75e720b9351ecc4cfa65f79b911d4f578ef694ee6057507eaa->enter($__internal_aed6b092b0b2ef75e720b9351ecc4cfa65f79b911d4f578ef694ee6057507eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7136bf35746bf6b875c92e5e747ff46dbba00c6b8ee4e7d9b56593cf46e1756a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7136bf35746bf6b875c92e5e747ff46dbba00c6b8ee4e7d9b56593cf46e1756a->enter($__internal_7136bf35746bf6b875c92e5e747ff46dbba00c6b8ee4e7d9b56593cf46e1756a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_7136bf35746bf6b875c92e5e747ff46dbba00c6b8ee4e7d9b56593cf46e1756a->leave($__internal_7136bf35746bf6b875c92e5e747ff46dbba00c6b8ee4e7d9b56593cf46e1756a_prof);

        
        $__internal_aed6b092b0b2ef75e720b9351ecc4cfa65f79b911d4f578ef694ee6057507eaa->leave($__internal_aed6b092b0b2ef75e720b9351ecc4cfa65f79b911d4f578ef694ee6057507eaa_prof);

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
