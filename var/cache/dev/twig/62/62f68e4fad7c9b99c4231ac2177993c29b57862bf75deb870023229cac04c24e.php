<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_fad1d0a6edfd084d7459b498ddb4bd697930e285b709e33255c21b7c304dc380 extends Twig_Template
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
        $__internal_1240bf34a4ffe20219d8ee8b80a433eb64e1eac4574cc67c32498b8a7fc5898b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1240bf34a4ffe20219d8ee8b80a433eb64e1eac4574cc67c32498b8a7fc5898b->enter($__internal_1240bf34a4ffe20219d8ee8b80a433eb64e1eac4574cc67c32498b8a7fc5898b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_8d0c600fb973fd352acb25679a88d544d5c73ad7b33ef4ec30efa92ae69d1fa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d0c600fb973fd352acb25679a88d544d5c73ad7b33ef4ec30efa92ae69d1fa9->enter($__internal_8d0c600fb973fd352acb25679a88d544d5c73ad7b33ef4ec30efa92ae69d1fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1240bf34a4ffe20219d8ee8b80a433eb64e1eac4574cc67c32498b8a7fc5898b->leave($__internal_1240bf34a4ffe20219d8ee8b80a433eb64e1eac4574cc67c32498b8a7fc5898b_prof);

        
        $__internal_8d0c600fb973fd352acb25679a88d544d5c73ad7b33ef4ec30efa92ae69d1fa9->leave($__internal_8d0c600fb973fd352acb25679a88d544d5c73ad7b33ef4ec30efa92ae69d1fa9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
