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
        $__internal_26a06b0b0e08bba768f4ea8f03390eaa817ca2293f77612f34a7d0407a610c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26a06b0b0e08bba768f4ea8f03390eaa817ca2293f77612f34a7d0407a610c34->enter($__internal_26a06b0b0e08bba768f4ea8f03390eaa817ca2293f77612f34a7d0407a610c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_b31c2f0c39697a3dde6457f949cd4dc30aae309ee0583cda58fb59525dc67839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b31c2f0c39697a3dde6457f949cd4dc30aae309ee0583cda58fb59525dc67839->enter($__internal_b31c2f0c39697a3dde6457f949cd4dc30aae309ee0583cda58fb59525dc67839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_26a06b0b0e08bba768f4ea8f03390eaa817ca2293f77612f34a7d0407a610c34->leave($__internal_26a06b0b0e08bba768f4ea8f03390eaa817ca2293f77612f34a7d0407a610c34_prof);

        
        $__internal_b31c2f0c39697a3dde6457f949cd4dc30aae309ee0583cda58fb59525dc67839->leave($__internal_b31c2f0c39697a3dde6457f949cd4dc30aae309ee0583cda58fb59525dc67839_prof);

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
