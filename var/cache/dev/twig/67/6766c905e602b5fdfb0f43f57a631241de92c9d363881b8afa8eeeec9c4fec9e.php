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
        $__internal_145b24533a4087be44423a8e8480cceeae6da445dc054acfef148a0bd8994280 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_145b24533a4087be44423a8e8480cceeae6da445dc054acfef148a0bd8994280->enter($__internal_145b24533a4087be44423a8e8480cceeae6da445dc054acfef148a0bd8994280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_073183538f638e2c1b41a0c8c1b655972e7020d41b7cad8c4fd6693b75669ffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_073183538f638e2c1b41a0c8c1b655972e7020d41b7cad8c4fd6693b75669ffb->enter($__internal_073183538f638e2c1b41a0c8c1b655972e7020d41b7cad8c4fd6693b75669ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_145b24533a4087be44423a8e8480cceeae6da445dc054acfef148a0bd8994280->leave($__internal_145b24533a4087be44423a8e8480cceeae6da445dc054acfef148a0bd8994280_prof);

        
        $__internal_073183538f638e2c1b41a0c8c1b655972e7020d41b7cad8c4fd6693b75669ffb->leave($__internal_073183538f638e2c1b41a0c8c1b655972e7020d41b7cad8c4fd6693b75669ffb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_195aedaae51fad8546164f8af8f10bff8261427894822f1fcc5069765bbdb850 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_195aedaae51fad8546164f8af8f10bff8261427894822f1fcc5069765bbdb850->enter($__internal_195aedaae51fad8546164f8af8f10bff8261427894822f1fcc5069765bbdb850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_514b61f81212064f28ffb5211105607332a7909ab468588a51463c824e3ff269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_514b61f81212064f28ffb5211105607332a7909ab468588a51463c824e3ff269->enter($__internal_514b61f81212064f28ffb5211105607332a7909ab468588a51463c824e3ff269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_514b61f81212064f28ffb5211105607332a7909ab468588a51463c824e3ff269->leave($__internal_514b61f81212064f28ffb5211105607332a7909ab468588a51463c824e3ff269_prof);

        
        $__internal_195aedaae51fad8546164f8af8f10bff8261427894822f1fcc5069765bbdb850->leave($__internal_195aedaae51fad8546164f8af8f10bff8261427894822f1fcc5069765bbdb850_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8e211a241ceb9ad839bb5621148630dd1f26eb9ed022314066224e645d8af8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8e211a241ceb9ad839bb5621148630dd1f26eb9ed022314066224e645d8af8b->enter($__internal_b8e211a241ceb9ad839bb5621148630dd1f26eb9ed022314066224e645d8af8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_17fa0ece47970619cf4288e9e8d8f47e1359d246b2b5ab5bb87689b29a45e2bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17fa0ece47970619cf4288e9e8d8f47e1359d246b2b5ab5bb87689b29a45e2bf->enter($__internal_17fa0ece47970619cf4288e9e8d8f47e1359d246b2b5ab5bb87689b29a45e2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_17fa0ece47970619cf4288e9e8d8f47e1359d246b2b5ab5bb87689b29a45e2bf->leave($__internal_17fa0ece47970619cf4288e9e8d8f47e1359d246b2b5ab5bb87689b29a45e2bf_prof);

        
        $__internal_b8e211a241ceb9ad839bb5621148630dd1f26eb9ed022314066224e645d8af8b->leave($__internal_b8e211a241ceb9ad839bb5621148630dd1f26eb9ed022314066224e645d8af8b_prof);

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
