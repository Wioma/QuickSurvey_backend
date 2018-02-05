<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_b85b6ecee4f946cb36a68debc8d6cfc820e1418831521a0273ed8ced57f45cfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_8c58af6171cc059a5a18f5c7cd1cc6c8835a892c95f539e6f67c299e756c9f8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c58af6171cc059a5a18f5c7cd1cc6c8835a892c95f539e6f67c299e756c9f8b->enter($__internal_8c58af6171cc059a5a18f5c7cd1cc6c8835a892c95f539e6f67c299e756c9f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_aae38780474fe82c09b10537d080e0c087d645fdab59fdf15b631e5e823a6f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae38780474fe82c09b10537d080e0c087d645fdab59fdf15b631e5e823a6f4e->enter($__internal_aae38780474fe82c09b10537d080e0c087d645fdab59fdf15b631e5e823a6f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c58af6171cc059a5a18f5c7cd1cc6c8835a892c95f539e6f67c299e756c9f8b->leave($__internal_8c58af6171cc059a5a18f5c7cd1cc6c8835a892c95f539e6f67c299e756c9f8b_prof);

        
        $__internal_aae38780474fe82c09b10537d080e0c087d645fdab59fdf15b631e5e823a6f4e->leave($__internal_aae38780474fe82c09b10537d080e0c087d645fdab59fdf15b631e5e823a6f4e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_23d17e39c68e5c0f8b2abcf5d30341b1747b37394333b78634eaa1612501b40a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23d17e39c68e5c0f8b2abcf5d30341b1747b37394333b78634eaa1612501b40a->enter($__internal_23d17e39c68e5c0f8b2abcf5d30341b1747b37394333b78634eaa1612501b40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bd9535afb0f1208c9185ea29d86418f3b635264d8a6ad47df21e86eafe88feba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd9535afb0f1208c9185ea29d86418f3b635264d8a6ad47df21e86eafe88feba->enter($__internal_bd9535afb0f1208c9185ea29d86418f3b635264d8a6ad47df21e86eafe88feba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_bd9535afb0f1208c9185ea29d86418f3b635264d8a6ad47df21e86eafe88feba->leave($__internal_bd9535afb0f1208c9185ea29d86418f3b635264d8a6ad47df21e86eafe88feba_prof);

        
        $__internal_23d17e39c68e5c0f8b2abcf5d30341b1747b37394333b78634eaa1612501b40a->leave($__internal_23d17e39c68e5c0f8b2abcf5d30341b1747b37394333b78634eaa1612501b40a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
