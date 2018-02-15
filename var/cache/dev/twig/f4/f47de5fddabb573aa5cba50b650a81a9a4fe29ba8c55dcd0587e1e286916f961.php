<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_08697a16743e5805a070ee53c80713cdcd97d2a7260d4a2587720e909ba13f57 extends Twig_Template
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
        $__internal_8ce2e5859f49a178182e616aacc769601968d3196f4f5992841f81329098a520 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ce2e5859f49a178182e616aacc769601968d3196f4f5992841f81329098a520->enter($__internal_8ce2e5859f49a178182e616aacc769601968d3196f4f5992841f81329098a520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_6d942480eaf008c4c3e4cd5e9ff444a4632440043e5383078f90a5bf434fec99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d942480eaf008c4c3e4cd5e9ff444a4632440043e5383078f90a5bf434fec99->enter($__internal_6d942480eaf008c4c3e4cd5e9ff444a4632440043e5383078f90a5bf434fec99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8ce2e5859f49a178182e616aacc769601968d3196f4f5992841f81329098a520->leave($__internal_8ce2e5859f49a178182e616aacc769601968d3196f4f5992841f81329098a520_prof);

        
        $__internal_6d942480eaf008c4c3e4cd5e9ff444a4632440043e5383078f90a5bf434fec99->leave($__internal_6d942480eaf008c4c3e4cd5e9ff444a4632440043e5383078f90a5bf434fec99_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
