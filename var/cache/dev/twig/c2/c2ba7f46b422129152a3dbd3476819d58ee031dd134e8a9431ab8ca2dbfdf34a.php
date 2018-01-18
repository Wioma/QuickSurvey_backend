<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_068dbaf7dc32d95d2d73649a4c060c5a0f7c1dea07a8d914ae29a707233fd61c extends Twig_Template
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
        $__internal_5877c1c9e460b2bc802db162ec67ef2c8baf6001c9d4841828618a3ae3c1fd26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5877c1c9e460b2bc802db162ec67ef2c8baf6001c9d4841828618a3ae3c1fd26->enter($__internal_5877c1c9e460b2bc802db162ec67ef2c8baf6001c9d4841828618a3ae3c1fd26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_6fefece0c047cf141a40e0a606d39124b6f381d90f2c6c317b7a2a5cdd7936f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fefece0c047cf141a40e0a606d39124b6f381d90f2c6c317b7a2a5cdd7936f7->enter($__internal_6fefece0c047cf141a40e0a606d39124b6f381d90f2c6c317b7a2a5cdd7936f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_5877c1c9e460b2bc802db162ec67ef2c8baf6001c9d4841828618a3ae3c1fd26->leave($__internal_5877c1c9e460b2bc802db162ec67ef2c8baf6001c9d4841828618a3ae3c1fd26_prof);

        
        $__internal_6fefece0c047cf141a40e0a606d39124b6f381d90f2c6c317b7a2a5cdd7936f7->leave($__internal_6fefece0c047cf141a40e0a606d39124b6f381d90f2c6c317b7a2a5cdd7936f7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
", "@Twig/Exception/error.json.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
