<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_40eea59781dfecf7599ad41c11ba46eb3654996ba83423935804cb32b61f09d1 extends Twig_Template
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
        $__internal_285f02d48d8de24b1c92ae21a33200b13f0a504948423dd0c6cecb5e20b92208 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_285f02d48d8de24b1c92ae21a33200b13f0a504948423dd0c6cecb5e20b92208->enter($__internal_285f02d48d8de24b1c92ae21a33200b13f0a504948423dd0c6cecb5e20b92208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_e4462f3ea91000eb03e82a7ffda7f60a2dcbaf6ce8c8611fc09c906c6f09b79c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4462f3ea91000eb03e82a7ffda7f60a2dcbaf6ce8c8611fc09c906c6f09b79c->enter($__internal_e4462f3ea91000eb03e82a7ffda7f60a2dcbaf6ce8c8611fc09c906c6f09b79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_285f02d48d8de24b1c92ae21a33200b13f0a504948423dd0c6cecb5e20b92208->leave($__internal_285f02d48d8de24b1c92ae21a33200b13f0a504948423dd0c6cecb5e20b92208_prof);

        
        $__internal_e4462f3ea91000eb03e82a7ffda7f60a2dcbaf6ce8c8611fc09c906c6f09b79c->leave($__internal_e4462f3ea91000eb03e82a7ffda7f60a2dcbaf6ce8c8611fc09c906c6f09b79c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
