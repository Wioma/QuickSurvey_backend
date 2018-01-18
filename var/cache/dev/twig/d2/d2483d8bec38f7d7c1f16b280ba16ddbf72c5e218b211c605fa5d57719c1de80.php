<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_fe13abdb682de42adcfc807e16ab7fae3c993c2a35c0814bc3e3755d55233f16 extends Twig_Template
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
        $__internal_bde57b8f9a1ffed35c365f526fbda72396b2b9c5df2143f0e63fafb5dc10f0c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bde57b8f9a1ffed35c365f526fbda72396b2b9c5df2143f0e63fafb5dc10f0c8->enter($__internal_bde57b8f9a1ffed35c365f526fbda72396b2b9c5df2143f0e63fafb5dc10f0c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_d0cd8fed5bd89b8a5a7dcf6f3e42d18f85352c924b457ec4c7c5d81e8ac79c58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0cd8fed5bd89b8a5a7dcf6f3e42d18f85352c924b457ec4c7c5d81e8ac79c58->enter($__internal_d0cd8fed5bd89b8a5a7dcf6f3e42d18f85352c924b457ec4c7c5d81e8ac79c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_bde57b8f9a1ffed35c365f526fbda72396b2b9c5df2143f0e63fafb5dc10f0c8->leave($__internal_bde57b8f9a1ffed35c365f526fbda72396b2b9c5df2143f0e63fafb5dc10f0c8_prof);

        
        $__internal_d0cd8fed5bd89b8a5a7dcf6f3e42d18f85352c924b457ec4c7c5d81e8ac79c58->leave($__internal_d0cd8fed5bd89b8a5a7dcf6f3e42d18f85352c924b457ec4c7c5d81e8ac79c58_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
