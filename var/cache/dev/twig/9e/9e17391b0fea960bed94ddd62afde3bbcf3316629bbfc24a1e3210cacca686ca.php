<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_67144a88bfa044b70826880c5a5b036d155d2a62a27239b5b7cb0b976b90e268 extends Twig_Template
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
        $__internal_ee86c8b109af446f205f31ba77e1424b4e4fe4da951cb1e876bc574271a4bf8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee86c8b109af446f205f31ba77e1424b4e4fe4da951cb1e876bc574271a4bf8c->enter($__internal_ee86c8b109af446f205f31ba77e1424b4e4fe4da951cb1e876bc574271a4bf8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_21f31d6d02656a06c65c2c860603d1a7cce3f0b476d12d782f4d0d2b94533327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21f31d6d02656a06c65c2c860603d1a7cce3f0b476d12d782f4d0d2b94533327->enter($__internal_21f31d6d02656a06c65c2c860603d1a7cce3f0b476d12d782f4d0d2b94533327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_ee86c8b109af446f205f31ba77e1424b4e4fe4da951cb1e876bc574271a4bf8c->leave($__internal_ee86c8b109af446f205f31ba77e1424b4e4fe4da951cb1e876bc574271a4bf8c_prof);

        
        $__internal_21f31d6d02656a06c65c2c860603d1a7cce3f0b476d12d782f4d0d2b94533327->leave($__internal_21f31d6d02656a06c65c2c860603d1a7cce3f0b476d12d782f4d0d2b94533327_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
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
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
