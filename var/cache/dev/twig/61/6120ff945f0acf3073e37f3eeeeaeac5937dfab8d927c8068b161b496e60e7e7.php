<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_36f641030643fec8f11757783a970b0701a193cd5bc2bf8ad59f8a1168a7d72a extends Twig_Template
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
        $__internal_a6cc77bfdfc51ce94a926b18f23beb61b954ec526c8b6cd15abdd7a5fdf532b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6cc77bfdfc51ce94a926b18f23beb61b954ec526c8b6cd15abdd7a5fdf532b3->enter($__internal_a6cc77bfdfc51ce94a926b18f23beb61b954ec526c8b6cd15abdd7a5fdf532b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_dc404d6d542939884a7ef5ee4819982173da9ec8bd7a722d9608864e43acf30e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc404d6d542939884a7ef5ee4819982173da9ec8bd7a722d9608864e43acf30e->enter($__internal_dc404d6d542939884a7ef5ee4819982173da9ec8bd7a722d9608864e43acf30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a6cc77bfdfc51ce94a926b18f23beb61b954ec526c8b6cd15abdd7a5fdf532b3->leave($__internal_a6cc77bfdfc51ce94a926b18f23beb61b954ec526c8b6cd15abdd7a5fdf532b3_prof);

        
        $__internal_dc404d6d542939884a7ef5ee4819982173da9ec8bd7a722d9608864e43acf30e->leave($__internal_dc404d6d542939884a7ef5ee4819982173da9ec8bd7a722d9608864e43acf30e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
