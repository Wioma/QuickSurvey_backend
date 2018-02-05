<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d898dcd2ca8fdd474e4e8fd6657a9669fc2dc837043159c0b48153e56575248f extends Twig_Template
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
        $__internal_fcc97b0a951c9178d746c813f17bb6ebca4e7ba3041705bc476e5366e6e67bf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcc97b0a951c9178d746c813f17bb6ebca4e7ba3041705bc476e5366e6e67bf6->enter($__internal_fcc97b0a951c9178d746c813f17bb6ebca4e7ba3041705bc476e5366e6e67bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_fb647c18fe2921378bdc784dad81902d05fda6f3091e1644a1744ada86552a82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb647c18fe2921378bdc784dad81902d05fda6f3091e1644a1744ada86552a82->enter($__internal_fb647c18fe2921378bdc784dad81902d05fda6f3091e1644a1744ada86552a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_fcc97b0a951c9178d746c813f17bb6ebca4e7ba3041705bc476e5366e6e67bf6->leave($__internal_fcc97b0a951c9178d746c813f17bb6ebca4e7ba3041705bc476e5366e6e67bf6_prof);

        
        $__internal_fb647c18fe2921378bdc784dad81902d05fda6f3091e1644a1744ada86552a82->leave($__internal_fb647c18fe2921378bdc784dad81902d05fda6f3091e1644a1744ada86552a82_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
