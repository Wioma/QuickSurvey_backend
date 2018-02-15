<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_9ebc353b0cb21485bcb6058b9a63d9deea6e745bad0ecb6dfeff8353a9dacc57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f366523c2098b2e2fca395eed381fd5bde4a32ccb7d11cfe644c62effb528157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f366523c2098b2e2fca395eed381fd5bde4a32ccb7d11cfe644c62effb528157->enter($__internal_f366523c2098b2e2fca395eed381fd5bde4a32ccb7d11cfe644c62effb528157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_dbe4ad42b1d896c5ded9e92dbdec63ba95324addfed77b117e741fb83c5f174b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbe4ad42b1d896c5ded9e92dbdec63ba95324addfed77b117e741fb83c5f174b->enter($__internal_dbe4ad42b1d896c5ded9e92dbdec63ba95324addfed77b117e741fb83c5f174b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f366523c2098b2e2fca395eed381fd5bde4a32ccb7d11cfe644c62effb528157->leave($__internal_f366523c2098b2e2fca395eed381fd5bde4a32ccb7d11cfe644c62effb528157_prof);

        
        $__internal_dbe4ad42b1d896c5ded9e92dbdec63ba95324addfed77b117e741fb83c5f174b->leave($__internal_dbe4ad42b1d896c5ded9e92dbdec63ba95324addfed77b117e741fb83c5f174b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb5ac0704a74c8067eeb5e6a12c1503e70a98514ab974b195ede0616ff69f243 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb5ac0704a74c8067eeb5e6a12c1503e70a98514ab974b195ede0616ff69f243->enter($__internal_bb5ac0704a74c8067eeb5e6a12c1503e70a98514ab974b195ede0616ff69f243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cd1b1b186f0b35096df3fdbe71c6fd4b2c125a6b8f32520186add8fbdabb25b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd1b1b186f0b35096df3fdbe71c6fd4b2c125a6b8f32520186add8fbdabb25b1->enter($__internal_cd1b1b186f0b35096df3fdbe71c6fd4b2c125a6b8f32520186add8fbdabb25b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cd1b1b186f0b35096df3fdbe71c6fd4b2c125a6b8f32520186add8fbdabb25b1->leave($__internal_cd1b1b186f0b35096df3fdbe71c6fd4b2c125a6b8f32520186add8fbdabb25b1_prof);

        
        $__internal_bb5ac0704a74c8067eeb5e6a12c1503e70a98514ab974b195ede0616ff69f243->leave($__internal_bb5ac0704a74c8067eeb5e6a12c1503e70a98514ab974b195ede0616ff69f243_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2eb6f8a4a98479f9dcfe45e0400f9e24aa9706acb4a746fdfe0f1998dc65f67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2eb6f8a4a98479f9dcfe45e0400f9e24aa9706acb4a746fdfe0f1998dc65f67->enter($__internal_a2eb6f8a4a98479f9dcfe45e0400f9e24aa9706acb4a746fdfe0f1998dc65f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1758effcb63a6057de08a7fd70263a2ac97b10434a831ce48bffb547cc7a7ac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1758effcb63a6057de08a7fd70263a2ac97b10434a831ce48bffb547cc7a7ac6->enter($__internal_1758effcb63a6057de08a7fd70263a2ac97b10434a831ce48bffb547cc7a7ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_1758effcb63a6057de08a7fd70263a2ac97b10434a831ce48bffb547cc7a7ac6->leave($__internal_1758effcb63a6057de08a7fd70263a2ac97b10434a831ce48bffb547cc7a7ac6_prof);

        
        $__internal_a2eb6f8a4a98479f9dcfe45e0400f9e24aa9706acb4a746fdfe0f1998dc65f67->leave($__internal_a2eb6f8a4a98479f9dcfe45e0400f9e24aa9706acb4a746fdfe0f1998dc65f67_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
