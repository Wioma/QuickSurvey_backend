<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_adfa2477d7512c144d6cd5de6ad6db76697c0fc7562026091865d6417e14ea5f extends Twig_Template
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
        $__internal_46221c48224e0f25ada9f7d5d7488ca4f0bf4d775d596db7c6c143f1b864dd72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46221c48224e0f25ada9f7d5d7488ca4f0bf4d775d596db7c6c143f1b864dd72->enter($__internal_46221c48224e0f25ada9f7d5d7488ca4f0bf4d775d596db7c6c143f1b864dd72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_d3ec7e9323a72be23ff428bcd0cee1d223eb5f97ed6f699896bd0ea47e2a3378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3ec7e9323a72be23ff428bcd0cee1d223eb5f97ed6f699896bd0ea47e2a3378->enter($__internal_d3ec7e9323a72be23ff428bcd0cee1d223eb5f97ed6f699896bd0ea47e2a3378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_46221c48224e0f25ada9f7d5d7488ca4f0bf4d775d596db7c6c143f1b864dd72->leave($__internal_46221c48224e0f25ada9f7d5d7488ca4f0bf4d775d596db7c6c143f1b864dd72_prof);

        
        $__internal_d3ec7e9323a72be23ff428bcd0cee1d223eb5f97ed6f699896bd0ea47e2a3378->leave($__internal_d3ec7e9323a72be23ff428bcd0cee1d223eb5f97ed6f699896bd0ea47e2a3378_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
