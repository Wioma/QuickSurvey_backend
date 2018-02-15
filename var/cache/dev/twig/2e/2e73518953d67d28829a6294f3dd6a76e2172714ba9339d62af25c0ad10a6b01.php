<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_786b0700fabc995b080326061e78781eb6804a1bb9b6771455581360fe35bbdd extends Twig_Template
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
        $__internal_3dc2ab30685b73aa711a944cf1ef60bce1a9f06cd21c9e980664ed3653c05bba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dc2ab30685b73aa711a944cf1ef60bce1a9f06cd21c9e980664ed3653c05bba->enter($__internal_3dc2ab30685b73aa711a944cf1ef60bce1a9f06cd21c9e980664ed3653c05bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_cb2a9214564af7be291441ea381afc27896da24d5715e59bd88e5f86c4be95b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb2a9214564af7be291441ea381afc27896da24d5715e59bd88e5f86c4be95b2->enter($__internal_cb2a9214564af7be291441ea381afc27896da24d5715e59bd88e5f86c4be95b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_3dc2ab30685b73aa711a944cf1ef60bce1a9f06cd21c9e980664ed3653c05bba->leave($__internal_3dc2ab30685b73aa711a944cf1ef60bce1a9f06cd21c9e980664ed3653c05bba_prof);

        
        $__internal_cb2a9214564af7be291441ea381afc27896da24d5715e59bd88e5f86c4be95b2->leave($__internal_cb2a9214564af7be291441ea381afc27896da24d5715e59bd88e5f86c4be95b2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
