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
        $__internal_6f8242f275cf65df266489c39287843074aeea88624117dd2dbf980d47baaadb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f8242f275cf65df266489c39287843074aeea88624117dd2dbf980d47baaadb->enter($__internal_6f8242f275cf65df266489c39287843074aeea88624117dd2dbf980d47baaadb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_f61f03b6f9a490b0a594a7270df3c092ee8f6a0e8a686d8dd8edb5600c803803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f61f03b6f9a490b0a594a7270df3c092ee8f6a0e8a686d8dd8edb5600c803803->enter($__internal_f61f03b6f9a490b0a594a7270df3c092ee8f6a0e8a686d8dd8edb5600c803803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_6f8242f275cf65df266489c39287843074aeea88624117dd2dbf980d47baaadb->leave($__internal_6f8242f275cf65df266489c39287843074aeea88624117dd2dbf980d47baaadb_prof);

        
        $__internal_f61f03b6f9a490b0a594a7270df3c092ee8f6a0e8a686d8dd8edb5600c803803->leave($__internal_f61f03b6f9a490b0a594a7270df3c092ee8f6a0e8a686d8dd8edb5600c803803_prof);

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
