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
        $__internal_92330c80e60d359edf1b9600d1705d87e47cabfdae5aa710d7fcf6e046cb11ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92330c80e60d359edf1b9600d1705d87e47cabfdae5aa710d7fcf6e046cb11ae->enter($__internal_92330c80e60d359edf1b9600d1705d87e47cabfdae5aa710d7fcf6e046cb11ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_9534b5adfea2acc1dbd0fab480be883a97e405ae10fbcc0939f0fd8e9689cb73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9534b5adfea2acc1dbd0fab480be883a97e405ae10fbcc0939f0fd8e9689cb73->enter($__internal_9534b5adfea2acc1dbd0fab480be883a97e405ae10fbcc0939f0fd8e9689cb73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_92330c80e60d359edf1b9600d1705d87e47cabfdae5aa710d7fcf6e046cb11ae->leave($__internal_92330c80e60d359edf1b9600d1705d87e47cabfdae5aa710d7fcf6e046cb11ae_prof);

        
        $__internal_9534b5adfea2acc1dbd0fab480be883a97e405ae10fbcc0939f0fd8e9689cb73->leave($__internal_9534b5adfea2acc1dbd0fab480be883a97e405ae10fbcc0939f0fd8e9689cb73_prof);

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
