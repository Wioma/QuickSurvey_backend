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
        $__internal_621fd8826fafc31520f486c9f23e445dcdde6ec598e56b6331481a502872bfa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_621fd8826fafc31520f486c9f23e445dcdde6ec598e56b6331481a502872bfa4->enter($__internal_621fd8826fafc31520f486c9f23e445dcdde6ec598e56b6331481a502872bfa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_50fbcdf37ab353dcc5209ba57e8d48968c6e336d4551f44898a9880fffa3d88f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50fbcdf37ab353dcc5209ba57e8d48968c6e336d4551f44898a9880fffa3d88f->enter($__internal_50fbcdf37ab353dcc5209ba57e8d48968c6e336d4551f44898a9880fffa3d88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_621fd8826fafc31520f486c9f23e445dcdde6ec598e56b6331481a502872bfa4->leave($__internal_621fd8826fafc31520f486c9f23e445dcdde6ec598e56b6331481a502872bfa4_prof);

        
        $__internal_50fbcdf37ab353dcc5209ba57e8d48968c6e336d4551f44898a9880fffa3d88f->leave($__internal_50fbcdf37ab353dcc5209ba57e8d48968c6e336d4551f44898a9880fffa3d88f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_478c1ef9fc2821bcc916d56c6aa9adcdc15e90d20771944c933d1d8621be31e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_478c1ef9fc2821bcc916d56c6aa9adcdc15e90d20771944c933d1d8621be31e4->enter($__internal_478c1ef9fc2821bcc916d56c6aa9adcdc15e90d20771944c933d1d8621be31e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ebcc3b705b186327f0dfb2910ae4c0f3cf8cad59c271701f506876b4f0a8571c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebcc3b705b186327f0dfb2910ae4c0f3cf8cad59c271701f506876b4f0a8571c->enter($__internal_ebcc3b705b186327f0dfb2910ae4c0f3cf8cad59c271701f506876b4f0a8571c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_ebcc3b705b186327f0dfb2910ae4c0f3cf8cad59c271701f506876b4f0a8571c->leave($__internal_ebcc3b705b186327f0dfb2910ae4c0f3cf8cad59c271701f506876b4f0a8571c_prof);

        
        $__internal_478c1ef9fc2821bcc916d56c6aa9adcdc15e90d20771944c933d1d8621be31e4->leave($__internal_478c1ef9fc2821bcc916d56c6aa9adcdc15e90d20771944c933d1d8621be31e4_prof);

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
