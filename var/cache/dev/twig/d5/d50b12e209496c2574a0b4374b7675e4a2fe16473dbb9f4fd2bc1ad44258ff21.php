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
        $__internal_9a720f8288d4c189ef0e4e5ad1c349f3601e039ca0a8f7e8671ff8e20c1867b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a720f8288d4c189ef0e4e5ad1c349f3601e039ca0a8f7e8671ff8e20c1867b4->enter($__internal_9a720f8288d4c189ef0e4e5ad1c349f3601e039ca0a8f7e8671ff8e20c1867b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_d7b608f4d347135d5e65194591882c509eb35e4694b570ac0d23a6825f6fc0f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7b608f4d347135d5e65194591882c509eb35e4694b570ac0d23a6825f6fc0f3->enter($__internal_d7b608f4d347135d5e65194591882c509eb35e4694b570ac0d23a6825f6fc0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_9a720f8288d4c189ef0e4e5ad1c349f3601e039ca0a8f7e8671ff8e20c1867b4->leave($__internal_9a720f8288d4c189ef0e4e5ad1c349f3601e039ca0a8f7e8671ff8e20c1867b4_prof);

        
        $__internal_d7b608f4d347135d5e65194591882c509eb35e4694b570ac0d23a6825f6fc0f3->leave($__internal_d7b608f4d347135d5e65194591882c509eb35e4694b570ac0d23a6825f6fc0f3_prof);

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
