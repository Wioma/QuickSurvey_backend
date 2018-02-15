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
        $__internal_43a2f2fcfcd3463c822c905fbc2493af8725996e96dec4b7caacb3713801419d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43a2f2fcfcd3463c822c905fbc2493af8725996e96dec4b7caacb3713801419d->enter($__internal_43a2f2fcfcd3463c822c905fbc2493af8725996e96dec4b7caacb3713801419d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_a4efc23d7aa1c6240f396ec833ff8da971f70e5f83ae10333fdd48c58705f589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4efc23d7aa1c6240f396ec833ff8da971f70e5f83ae10333fdd48c58705f589->enter($__internal_a4efc23d7aa1c6240f396ec833ff8da971f70e5f83ae10333fdd48c58705f589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_43a2f2fcfcd3463c822c905fbc2493af8725996e96dec4b7caacb3713801419d->leave($__internal_43a2f2fcfcd3463c822c905fbc2493af8725996e96dec4b7caacb3713801419d_prof);

        
        $__internal_a4efc23d7aa1c6240f396ec833ff8da971f70e5f83ae10333fdd48c58705f589->leave($__internal_a4efc23d7aa1c6240f396ec833ff8da971f70e5f83ae10333fdd48c58705f589_prof);

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
