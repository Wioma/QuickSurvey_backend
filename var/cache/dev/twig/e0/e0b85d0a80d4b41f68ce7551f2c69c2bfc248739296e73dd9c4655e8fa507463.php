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
        $__internal_6754a557a1bcbad43eed196d7a7d25bfaeed769315e11a004bd8e390e50e643e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6754a557a1bcbad43eed196d7a7d25bfaeed769315e11a004bd8e390e50e643e->enter($__internal_6754a557a1bcbad43eed196d7a7d25bfaeed769315e11a004bd8e390e50e643e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_edde1d63a0cdabc0793cf720039b2a0d5e0d6e512e3955f333616e9106ab8ad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edde1d63a0cdabc0793cf720039b2a0d5e0d6e512e3955f333616e9106ab8ad6->enter($__internal_edde1d63a0cdabc0793cf720039b2a0d5e0d6e512e3955f333616e9106ab8ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6754a557a1bcbad43eed196d7a7d25bfaeed769315e11a004bd8e390e50e643e->leave($__internal_6754a557a1bcbad43eed196d7a7d25bfaeed769315e11a004bd8e390e50e643e_prof);

        
        $__internal_edde1d63a0cdabc0793cf720039b2a0d5e0d6e512e3955f333616e9106ab8ad6->leave($__internal_edde1d63a0cdabc0793cf720039b2a0d5e0d6e512e3955f333616e9106ab8ad6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e97c0c61c6c902495acffff2dbba78adcf5f74d89b243f8e2666710b22f72205 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e97c0c61c6c902495acffff2dbba78adcf5f74d89b243f8e2666710b22f72205->enter($__internal_e97c0c61c6c902495acffff2dbba78adcf5f74d89b243f8e2666710b22f72205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f6577e9a367c0cab4987ddce476d1ea20e5607ae1b3b1e9d57f8b884e41d7723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6577e9a367c0cab4987ddce476d1ea20e5607ae1b3b1e9d57f8b884e41d7723->enter($__internal_f6577e9a367c0cab4987ddce476d1ea20e5607ae1b3b1e9d57f8b884e41d7723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_f6577e9a367c0cab4987ddce476d1ea20e5607ae1b3b1e9d57f8b884e41d7723->leave($__internal_f6577e9a367c0cab4987ddce476d1ea20e5607ae1b3b1e9d57f8b884e41d7723_prof);

        
        $__internal_e97c0c61c6c902495acffff2dbba78adcf5f74d89b243f8e2666710b22f72205->leave($__internal_e97c0c61c6c902495acffff2dbba78adcf5f74d89b243f8e2666710b22f72205_prof);

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
