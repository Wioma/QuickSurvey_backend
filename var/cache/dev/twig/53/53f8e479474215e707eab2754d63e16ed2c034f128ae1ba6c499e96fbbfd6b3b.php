<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_e63e976b21a9c6d8a3eabea696289a273a69157ee81085475259a834cce6a33a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6cf7d14b9c9c848316b20a13ec45874d70b1d3fb3341130966a9d566c7e64455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cf7d14b9c9c848316b20a13ec45874d70b1d3fb3341130966a9d566c7e64455->enter($__internal_6cf7d14b9c9c848316b20a13ec45874d70b1d3fb3341130966a9d566c7e64455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_9e0bdd51246bf8dfa9d20b3835d890823734b1e2f523bfc50ade9cb9d22a95e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e0bdd51246bf8dfa9d20b3835d890823734b1e2f523bfc50ade9cb9d22a95e8->enter($__internal_9e0bdd51246bf8dfa9d20b3835d890823734b1e2f523bfc50ade9cb9d22a95e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_6cf7d14b9c9c848316b20a13ec45874d70b1d3fb3341130966a9d566c7e64455->leave($__internal_6cf7d14b9c9c848316b20a13ec45874d70b1d3fb3341130966a9d566c7e64455_prof);

        
        $__internal_9e0bdd51246bf8dfa9d20b3835d890823734b1e2f523bfc50ade9cb9d22a95e8->leave($__internal_9e0bdd51246bf8dfa9d20b3835d890823734b1e2f523bfc50ade9cb9d22a95e8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
