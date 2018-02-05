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
        $__internal_320a48dd24a15dbd5290a27ab928c302002a06228de207f9cfd505239d2824fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_320a48dd24a15dbd5290a27ab928c302002a06228de207f9cfd505239d2824fe->enter($__internal_320a48dd24a15dbd5290a27ab928c302002a06228de207f9cfd505239d2824fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_8cde5a23f7abc4cbcdcb0e36d0fb8d8f9234b17c7aff36a93a5949d171ae54fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cde5a23f7abc4cbcdcb0e36d0fb8d8f9234b17c7aff36a93a5949d171ae54fc->enter($__internal_8cde5a23f7abc4cbcdcb0e36d0fb8d8f9234b17c7aff36a93a5949d171ae54fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_320a48dd24a15dbd5290a27ab928c302002a06228de207f9cfd505239d2824fe->leave($__internal_320a48dd24a15dbd5290a27ab928c302002a06228de207f9cfd505239d2824fe_prof);

        
        $__internal_8cde5a23f7abc4cbcdcb0e36d0fb8d8f9234b17c7aff36a93a5949d171ae54fc->leave($__internal_8cde5a23f7abc4cbcdcb0e36d0fb8d8f9234b17c7aff36a93a5949d171ae54fc_prof);

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
