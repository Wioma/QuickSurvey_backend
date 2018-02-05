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
        $__internal_10260382a2b3b1bf4b39b7b3d4eb50728f32b3ba4a1f9b07c0396026311fd27c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10260382a2b3b1bf4b39b7b3d4eb50728f32b3ba4a1f9b07c0396026311fd27c->enter($__internal_10260382a2b3b1bf4b39b7b3d4eb50728f32b3ba4a1f9b07c0396026311fd27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_c29f147bbcf8b12736c450fc7db12d5273d2f286537141462f347a8243a699c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c29f147bbcf8b12736c450fc7db12d5273d2f286537141462f347a8243a699c1->enter($__internal_c29f147bbcf8b12736c450fc7db12d5273d2f286537141462f347a8243a699c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10260382a2b3b1bf4b39b7b3d4eb50728f32b3ba4a1f9b07c0396026311fd27c->leave($__internal_10260382a2b3b1bf4b39b7b3d4eb50728f32b3ba4a1f9b07c0396026311fd27c_prof);

        
        $__internal_c29f147bbcf8b12736c450fc7db12d5273d2f286537141462f347a8243a699c1->leave($__internal_c29f147bbcf8b12736c450fc7db12d5273d2f286537141462f347a8243a699c1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ab66ee2267ce3149411b165765ede8556bb4bc3771f443855ba82ce12e95350 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ab66ee2267ce3149411b165765ede8556bb4bc3771f443855ba82ce12e95350->enter($__internal_8ab66ee2267ce3149411b165765ede8556bb4bc3771f443855ba82ce12e95350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6289327ee53968e89926ba62070c6f1b4415a3953801479b2d8bfc6af853cdd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6289327ee53968e89926ba62070c6f1b4415a3953801479b2d8bfc6af853cdd4->enter($__internal_6289327ee53968e89926ba62070c6f1b4415a3953801479b2d8bfc6af853cdd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6289327ee53968e89926ba62070c6f1b4415a3953801479b2d8bfc6af853cdd4->leave($__internal_6289327ee53968e89926ba62070c6f1b4415a3953801479b2d8bfc6af853cdd4_prof);

        
        $__internal_8ab66ee2267ce3149411b165765ede8556bb4bc3771f443855ba82ce12e95350->leave($__internal_8ab66ee2267ce3149411b165765ede8556bb4bc3771f443855ba82ce12e95350_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac32151f672821b2f765fc943b6d18bf8e3f9d60b1943f31c08d69375b3c5a5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac32151f672821b2f765fc943b6d18bf8e3f9d60b1943f31c08d69375b3c5a5e->enter($__internal_ac32151f672821b2f765fc943b6d18bf8e3f9d60b1943f31c08d69375b3c5a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fe25dd59e4c6f98634d8f77adf9058e083dd9acfb761b00cad6eaf9c8f99c941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe25dd59e4c6f98634d8f77adf9058e083dd9acfb761b00cad6eaf9c8f99c941->enter($__internal_fe25dd59e4c6f98634d8f77adf9058e083dd9acfb761b00cad6eaf9c8f99c941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fe25dd59e4c6f98634d8f77adf9058e083dd9acfb761b00cad6eaf9c8f99c941->leave($__internal_fe25dd59e4c6f98634d8f77adf9058e083dd9acfb761b00cad6eaf9c8f99c941_prof);

        
        $__internal_ac32151f672821b2f765fc943b6d18bf8e3f9d60b1943f31c08d69375b3c5a5e->leave($__internal_ac32151f672821b2f765fc943b6d18bf8e3f9d60b1943f31c08d69375b3c5a5e_prof);

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
