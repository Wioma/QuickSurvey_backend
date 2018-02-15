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
        $__internal_16546c10303f3cfef42a27f5a4d29a695a38f4b1d7ffc0396f57cfb56e368283 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16546c10303f3cfef42a27f5a4d29a695a38f4b1d7ffc0396f57cfb56e368283->enter($__internal_16546c10303f3cfef42a27f5a4d29a695a38f4b1d7ffc0396f57cfb56e368283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_43105d74539394a89e30301b3ee82f270223c9a21b3293d940a5d89a652ce562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43105d74539394a89e30301b3ee82f270223c9a21b3293d940a5d89a652ce562->enter($__internal_43105d74539394a89e30301b3ee82f270223c9a21b3293d940a5d89a652ce562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_16546c10303f3cfef42a27f5a4d29a695a38f4b1d7ffc0396f57cfb56e368283->leave($__internal_16546c10303f3cfef42a27f5a4d29a695a38f4b1d7ffc0396f57cfb56e368283_prof);

        
        $__internal_43105d74539394a89e30301b3ee82f270223c9a21b3293d940a5d89a652ce562->leave($__internal_43105d74539394a89e30301b3ee82f270223c9a21b3293d940a5d89a652ce562_prof);

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
