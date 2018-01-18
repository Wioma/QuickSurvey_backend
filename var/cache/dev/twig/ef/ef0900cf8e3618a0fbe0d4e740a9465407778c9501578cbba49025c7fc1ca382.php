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
        $__internal_1c46e4a3b4acabf43319ee3b45c17de852fa78637d6ca1ae2d1907a8d57e7294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c46e4a3b4acabf43319ee3b45c17de852fa78637d6ca1ae2d1907a8d57e7294->enter($__internal_1c46e4a3b4acabf43319ee3b45c17de852fa78637d6ca1ae2d1907a8d57e7294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_e1058d42e06c5e7bc0040af58efe6ffa56716286f17a65fb04a6a883abe7984a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1058d42e06c5e7bc0040af58efe6ffa56716286f17a65fb04a6a883abe7984a->enter($__internal_e1058d42e06c5e7bc0040af58efe6ffa56716286f17a65fb04a6a883abe7984a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1c46e4a3b4acabf43319ee3b45c17de852fa78637d6ca1ae2d1907a8d57e7294->leave($__internal_1c46e4a3b4acabf43319ee3b45c17de852fa78637d6ca1ae2d1907a8d57e7294_prof);

        
        $__internal_e1058d42e06c5e7bc0040af58efe6ffa56716286f17a65fb04a6a883abe7984a->leave($__internal_e1058d42e06c5e7bc0040af58efe6ffa56716286f17a65fb04a6a883abe7984a_prof);

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
