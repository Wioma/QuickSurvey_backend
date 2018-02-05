<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_ec8f4b61041acc1449e132b051f36d5cc648144418ca6a4cc308d67006508374 extends Twig_Template
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
        $__internal_5b30f299f8c200e9c1b1011b8044a060a22d64050f90834254360dfce65bfe13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b30f299f8c200e9c1b1011b8044a060a22d64050f90834254360dfce65bfe13->enter($__internal_5b30f299f8c200e9c1b1011b8044a060a22d64050f90834254360dfce65bfe13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_70092c3144d3f8e5436d3a8b14eea8e21ee9c4ffd4cbfc696a5f8e360112ac3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70092c3144d3f8e5436d3a8b14eea8e21ee9c4ffd4cbfc696a5f8e360112ac3e->enter($__internal_70092c3144d3f8e5436d3a8b14eea8e21ee9c4ffd4cbfc696a5f8e360112ac3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5b30f299f8c200e9c1b1011b8044a060a22d64050f90834254360dfce65bfe13->leave($__internal_5b30f299f8c200e9c1b1011b8044a060a22d64050f90834254360dfce65bfe13_prof);

        
        $__internal_70092c3144d3f8e5436d3a8b14eea8e21ee9c4ffd4cbfc696a5f8e360112ac3e->leave($__internal_70092c3144d3f8e5436d3a8b14eea8e21ee9c4ffd4cbfc696a5f8e360112ac3e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
