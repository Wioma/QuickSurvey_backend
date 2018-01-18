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
        $__internal_057949fcc4f1126c57fd205eecb6ca2350e8d09b2ff478c9d923f825b3f2e5eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_057949fcc4f1126c57fd205eecb6ca2350e8d09b2ff478c9d923f825b3f2e5eb->enter($__internal_057949fcc4f1126c57fd205eecb6ca2350e8d09b2ff478c9d923f825b3f2e5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_be290e60ced54882ca9b095ada59d30c6d4bfd5eb50251bf53679a02cc49b4ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be290e60ced54882ca9b095ada59d30c6d4bfd5eb50251bf53679a02cc49b4ce->enter($__internal_be290e60ced54882ca9b095ada59d30c6d4bfd5eb50251bf53679a02cc49b4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_057949fcc4f1126c57fd205eecb6ca2350e8d09b2ff478c9d923f825b3f2e5eb->leave($__internal_057949fcc4f1126c57fd205eecb6ca2350e8d09b2ff478c9d923f825b3f2e5eb_prof);

        
        $__internal_be290e60ced54882ca9b095ada59d30c6d4bfd5eb50251bf53679a02cc49b4ce->leave($__internal_be290e60ced54882ca9b095ada59d30c6d4bfd5eb50251bf53679a02cc49b4ce_prof);

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
