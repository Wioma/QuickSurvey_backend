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
        $__internal_4ba48c8a75f0bb8a70ff8228e223450ba38ec2336115d3bdccac0cac399ee6da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ba48c8a75f0bb8a70ff8228e223450ba38ec2336115d3bdccac0cac399ee6da->enter($__internal_4ba48c8a75f0bb8a70ff8228e223450ba38ec2336115d3bdccac0cac399ee6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_29a373119d4daf195565081d965b5d6983636b81685b9af4eef7492b075a9c9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29a373119d4daf195565081d965b5d6983636b81685b9af4eef7492b075a9c9e->enter($__internal_29a373119d4daf195565081d965b5d6983636b81685b9af4eef7492b075a9c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ba48c8a75f0bb8a70ff8228e223450ba38ec2336115d3bdccac0cac399ee6da->leave($__internal_4ba48c8a75f0bb8a70ff8228e223450ba38ec2336115d3bdccac0cac399ee6da_prof);

        
        $__internal_29a373119d4daf195565081d965b5d6983636b81685b9af4eef7492b075a9c9e->leave($__internal_29a373119d4daf195565081d965b5d6983636b81685b9af4eef7492b075a9c9e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c36568aff310136715154113082f44bb840a4bde7bf13bc21c96378207440776 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c36568aff310136715154113082f44bb840a4bde7bf13bc21c96378207440776->enter($__internal_c36568aff310136715154113082f44bb840a4bde7bf13bc21c96378207440776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a0099847aa2244a7832686c88e5125fbc442edee638a4acb00323645850dc22d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0099847aa2244a7832686c88e5125fbc442edee638a4acb00323645850dc22d->enter($__internal_a0099847aa2244a7832686c88e5125fbc442edee638a4acb00323645850dc22d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a0099847aa2244a7832686c88e5125fbc442edee638a4acb00323645850dc22d->leave($__internal_a0099847aa2244a7832686c88e5125fbc442edee638a4acb00323645850dc22d_prof);

        
        $__internal_c36568aff310136715154113082f44bb840a4bde7bf13bc21c96378207440776->leave($__internal_c36568aff310136715154113082f44bb840a4bde7bf13bc21c96378207440776_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_32e4d49e5019b59469550a379d10b9bf70da63dc4896be877874c12924ba94d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32e4d49e5019b59469550a379d10b9bf70da63dc4896be877874c12924ba94d6->enter($__internal_32e4d49e5019b59469550a379d10b9bf70da63dc4896be877874c12924ba94d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_700d0018e8e5f37112f3f0e9a57bb2631613da8eb717e3c9f74bd1e94c4672ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_700d0018e8e5f37112f3f0e9a57bb2631613da8eb717e3c9f74bd1e94c4672ed->enter($__internal_700d0018e8e5f37112f3f0e9a57bb2631613da8eb717e3c9f74bd1e94c4672ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_700d0018e8e5f37112f3f0e9a57bb2631613da8eb717e3c9f74bd1e94c4672ed->leave($__internal_700d0018e8e5f37112f3f0e9a57bb2631613da8eb717e3c9f74bd1e94c4672ed_prof);

        
        $__internal_32e4d49e5019b59469550a379d10b9bf70da63dc4896be877874c12924ba94d6->leave($__internal_32e4d49e5019b59469550a379d10b9bf70da63dc4896be877874c12924ba94d6_prof);

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
