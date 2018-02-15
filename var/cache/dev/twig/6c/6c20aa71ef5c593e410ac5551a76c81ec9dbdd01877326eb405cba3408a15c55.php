<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_9bcfec4cb25ddee92d6de7bea312a204657a570c1feaddb2d5e686ae90a925a4 extends Twig_Template
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
        $__internal_8a21cc39957f3c655e7f268be9c984e68b566c1279a026a279c9945829058f4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a21cc39957f3c655e7f268be9c984e68b566c1279a026a279c9945829058f4c->enter($__internal_8a21cc39957f3c655e7f268be9c984e68b566c1279a026a279c9945829058f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_aad343c27a36935a4670bec5652c7d328332e4769edd3845b4cc0b012b4b17ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aad343c27a36935a4670bec5652c7d328332e4769edd3845b4cc0b012b4b17ea->enter($__internal_aad343c27a36935a4670bec5652c7d328332e4769edd3845b4cc0b012b4b17ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8a21cc39957f3c655e7f268be9c984e68b566c1279a026a279c9945829058f4c->leave($__internal_8a21cc39957f3c655e7f268be9c984e68b566c1279a026a279c9945829058f4c_prof);

        
        $__internal_aad343c27a36935a4670bec5652c7d328332e4769edd3845b4cc0b012b4b17ea->leave($__internal_aad343c27a36935a4670bec5652c7d328332e4769edd3845b4cc0b012b4b17ea_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
