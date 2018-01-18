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
        $__internal_f3f6b6c28736cd7723b55af8d590901886596a04e4031d848986d555722a180b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3f6b6c28736cd7723b55af8d590901886596a04e4031d848986d555722a180b->enter($__internal_f3f6b6c28736cd7723b55af8d590901886596a04e4031d848986d555722a180b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_40f01d333d3468cf7a9a2007dba38671c34923c84d2f59725c74675943e8c91f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40f01d333d3468cf7a9a2007dba38671c34923c84d2f59725c74675943e8c91f->enter($__internal_40f01d333d3468cf7a9a2007dba38671c34923c84d2f59725c74675943e8c91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_f3f6b6c28736cd7723b55af8d590901886596a04e4031d848986d555722a180b->leave($__internal_f3f6b6c28736cd7723b55af8d590901886596a04e4031d848986d555722a180b_prof);

        
        $__internal_40f01d333d3468cf7a9a2007dba38671c34923c84d2f59725c74675943e8c91f->leave($__internal_40f01d333d3468cf7a9a2007dba38671c34923c84d2f59725c74675943e8c91f_prof);

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
