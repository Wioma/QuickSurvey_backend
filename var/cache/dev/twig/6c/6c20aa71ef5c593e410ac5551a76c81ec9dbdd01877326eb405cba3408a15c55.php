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
        $__internal_080c64ad0c98249767c9e11cad4aa7b31a3f4b45985e022a1e50fc6a21d94e09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_080c64ad0c98249767c9e11cad4aa7b31a3f4b45985e022a1e50fc6a21d94e09->enter($__internal_080c64ad0c98249767c9e11cad4aa7b31a3f4b45985e022a1e50fc6a21d94e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_32ed92db8a4b039551cb03157c50e2ce4620cda6df64f17da1d6932938bfe578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32ed92db8a4b039551cb03157c50e2ce4620cda6df64f17da1d6932938bfe578->enter($__internal_32ed92db8a4b039551cb03157c50e2ce4620cda6df64f17da1d6932938bfe578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_080c64ad0c98249767c9e11cad4aa7b31a3f4b45985e022a1e50fc6a21d94e09->leave($__internal_080c64ad0c98249767c9e11cad4aa7b31a3f4b45985e022a1e50fc6a21d94e09_prof);

        
        $__internal_32ed92db8a4b039551cb03157c50e2ce4620cda6df64f17da1d6932938bfe578->leave($__internal_32ed92db8a4b039551cb03157c50e2ce4620cda6df64f17da1d6932938bfe578_prof);

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
