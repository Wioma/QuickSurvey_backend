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
        $__internal_c51bdd0f3c4de32362934a4cf6ae4641ee2a354c73c1e70d9aef4dc2182edc58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c51bdd0f3c4de32362934a4cf6ae4641ee2a354c73c1e70d9aef4dc2182edc58->enter($__internal_c51bdd0f3c4de32362934a4cf6ae4641ee2a354c73c1e70d9aef4dc2182edc58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_06ccf2db6f68355c6b55dae96887a8ed41aa08279237a6231d36b333f324d151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06ccf2db6f68355c6b55dae96887a8ed41aa08279237a6231d36b333f324d151->enter($__internal_06ccf2db6f68355c6b55dae96887a8ed41aa08279237a6231d36b333f324d151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_c51bdd0f3c4de32362934a4cf6ae4641ee2a354c73c1e70d9aef4dc2182edc58->leave($__internal_c51bdd0f3c4de32362934a4cf6ae4641ee2a354c73c1e70d9aef4dc2182edc58_prof);

        
        $__internal_06ccf2db6f68355c6b55dae96887a8ed41aa08279237a6231d36b333f324d151->leave($__internal_06ccf2db6f68355c6b55dae96887a8ed41aa08279237a6231d36b333f324d151_prof);

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
