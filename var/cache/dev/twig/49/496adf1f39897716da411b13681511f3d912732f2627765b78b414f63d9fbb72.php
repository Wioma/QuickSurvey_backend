<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_df8ac9aff0c6a44a5506b9caa9eda303fa47d1752f5cfec9dcb9fc68c2a1d577 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_426eb4e7598b8da66d19530862af86dbd1cc4dd1ce943162be88d742b45f3c9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_426eb4e7598b8da66d19530862af86dbd1cc4dd1ce943162be88d742b45f3c9d->enter($__internal_426eb4e7598b8da66d19530862af86dbd1cc4dd1ce943162be88d742b45f3c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_5f49063698bf61f1cd562185e6054307bfa6797bd72fdb2bc47a62eaf028aa8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f49063698bf61f1cd562185e6054307bfa6797bd72fdb2bc47a62eaf028aa8c->enter($__internal_5f49063698bf61f1cd562185e6054307bfa6797bd72fdb2bc47a62eaf028aa8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_426eb4e7598b8da66d19530862af86dbd1cc4dd1ce943162be88d742b45f3c9d->leave($__internal_426eb4e7598b8da66d19530862af86dbd1cc4dd1ce943162be88d742b45f3c9d_prof);

        
        $__internal_5f49063698bf61f1cd562185e6054307bfa6797bd72fdb2bc47a62eaf028aa8c->leave($__internal_5f49063698bf61f1cd562185e6054307bfa6797bd72fdb2bc47a62eaf028aa8c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9a86a6131a871d901a9a17683fd9121fa9bc43f91f0b5309875cf1df481fad1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9a86a6131a871d901a9a17683fd9121fa9bc43f91f0b5309875cf1df481fad1->enter($__internal_d9a86a6131a871d901a9a17683fd9121fa9bc43f91f0b5309875cf1df481fad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_37d3d0bb0d11c40848aa6a174a71d73f80ba479ed473e0e5e3683aa1e068194d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37d3d0bb0d11c40848aa6a174a71d73f80ba479ed473e0e5e3683aa1e068194d->enter($__internal_37d3d0bb0d11c40848aa6a174a71d73f80ba479ed473e0e5e3683aa1e068194d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_37d3d0bb0d11c40848aa6a174a71d73f80ba479ed473e0e5e3683aa1e068194d->leave($__internal_37d3d0bb0d11c40848aa6a174a71d73f80ba479ed473e0e5e3683aa1e068194d_prof);

        
        $__internal_d9a86a6131a871d901a9a17683fd9121fa9bc43f91f0b5309875cf1df481fad1->leave($__internal_d9a86a6131a871d901a9a17683fd9121fa9bc43f91f0b5309875cf1df481fad1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_daf7e0e7fa0d1aaf3940355f59ef678736131f0b3ecb0230447620c8e0dddade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daf7e0e7fa0d1aaf3940355f59ef678736131f0b3ecb0230447620c8e0dddade->enter($__internal_daf7e0e7fa0d1aaf3940355f59ef678736131f0b3ecb0230447620c8e0dddade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_77dd8f2c048fb0a284ecaae16e2b18ebc219d61d6388bc813deb831230f164b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77dd8f2c048fb0a284ecaae16e2b18ebc219d61d6388bc813deb831230f164b8->enter($__internal_77dd8f2c048fb0a284ecaae16e2b18ebc219d61d6388bc813deb831230f164b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_77dd8f2c048fb0a284ecaae16e2b18ebc219d61d6388bc813deb831230f164b8->leave($__internal_77dd8f2c048fb0a284ecaae16e2b18ebc219d61d6388bc813deb831230f164b8_prof);

        
        $__internal_daf7e0e7fa0d1aaf3940355f59ef678736131f0b3ecb0230447620c8e0dddade->leave($__internal_daf7e0e7fa0d1aaf3940355f59ef678736131f0b3ecb0230447620c8e0dddade_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
