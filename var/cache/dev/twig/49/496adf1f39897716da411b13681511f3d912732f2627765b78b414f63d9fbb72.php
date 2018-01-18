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
        $__internal_ea66376fc22da54a7553a0c300ed754478f8edd70350866045997f245d9e5514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea66376fc22da54a7553a0c300ed754478f8edd70350866045997f245d9e5514->enter($__internal_ea66376fc22da54a7553a0c300ed754478f8edd70350866045997f245d9e5514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_b80b71fa93c67cce3e2e35ec9040654872e8d51278b3fd694fa90d6192502767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b80b71fa93c67cce3e2e35ec9040654872e8d51278b3fd694fa90d6192502767->enter($__internal_b80b71fa93c67cce3e2e35ec9040654872e8d51278b3fd694fa90d6192502767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea66376fc22da54a7553a0c300ed754478f8edd70350866045997f245d9e5514->leave($__internal_ea66376fc22da54a7553a0c300ed754478f8edd70350866045997f245d9e5514_prof);

        
        $__internal_b80b71fa93c67cce3e2e35ec9040654872e8d51278b3fd694fa90d6192502767->leave($__internal_b80b71fa93c67cce3e2e35ec9040654872e8d51278b3fd694fa90d6192502767_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_704b07a1f73e1c4dc189add0efac24ff3f9683915e5a69724dd269f48b1b4fa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_704b07a1f73e1c4dc189add0efac24ff3f9683915e5a69724dd269f48b1b4fa6->enter($__internal_704b07a1f73e1c4dc189add0efac24ff3f9683915e5a69724dd269f48b1b4fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8719e814bcdb7a726946d9f457092e1e0190785c9e1fd18530de43e8faa90171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8719e814bcdb7a726946d9f457092e1e0190785c9e1fd18530de43e8faa90171->enter($__internal_8719e814bcdb7a726946d9f457092e1e0190785c9e1fd18530de43e8faa90171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8719e814bcdb7a726946d9f457092e1e0190785c9e1fd18530de43e8faa90171->leave($__internal_8719e814bcdb7a726946d9f457092e1e0190785c9e1fd18530de43e8faa90171_prof);

        
        $__internal_704b07a1f73e1c4dc189add0efac24ff3f9683915e5a69724dd269f48b1b4fa6->leave($__internal_704b07a1f73e1c4dc189add0efac24ff3f9683915e5a69724dd269f48b1b4fa6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_03b37b2171c964c9802241bc1a7c52869b2a9329734896813223cb1e472dbda2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03b37b2171c964c9802241bc1a7c52869b2a9329734896813223cb1e472dbda2->enter($__internal_03b37b2171c964c9802241bc1a7c52869b2a9329734896813223cb1e472dbda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a104afe4751c1db8c49496e40ccf480522fd2abfa0ff9d48d18468f37c3f1761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a104afe4751c1db8c49496e40ccf480522fd2abfa0ff9d48d18468f37c3f1761->enter($__internal_a104afe4751c1db8c49496e40ccf480522fd2abfa0ff9d48d18468f37c3f1761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a104afe4751c1db8c49496e40ccf480522fd2abfa0ff9d48d18468f37c3f1761->leave($__internal_a104afe4751c1db8c49496e40ccf480522fd2abfa0ff9d48d18468f37c3f1761_prof);

        
        $__internal_03b37b2171c964c9802241bc1a7c52869b2a9329734896813223cb1e472dbda2->leave($__internal_03b37b2171c964c9802241bc1a7c52869b2a9329734896813223cb1e472dbda2_prof);

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
