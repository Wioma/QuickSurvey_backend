<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_ae371fb2734b5e35e71d243827059fbd00ce9d9ca4c6e4823941d7aa9be8737e extends Twig_Template
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
        $__internal_a30ab7864948dc9b9751fef2f8b625bf9510bf3a91118ad86c09adf0171fdd9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a30ab7864948dc9b9751fef2f8b625bf9510bf3a91118ad86c09adf0171fdd9e->enter($__internal_a30ab7864948dc9b9751fef2f8b625bf9510bf3a91118ad86c09adf0171fdd9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_31b24b9cc468299ae71b95182f660e09f3895613cb00a2020702bcbcb810874c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31b24b9cc468299ae71b95182f660e09f3895613cb00a2020702bcbcb810874c->enter($__internal_31b24b9cc468299ae71b95182f660e09f3895613cb00a2020702bcbcb810874c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_a30ab7864948dc9b9751fef2f8b625bf9510bf3a91118ad86c09adf0171fdd9e->leave($__internal_a30ab7864948dc9b9751fef2f8b625bf9510bf3a91118ad86c09adf0171fdd9e_prof);

        
        $__internal_31b24b9cc468299ae71b95182f660e09f3895613cb00a2020702bcbcb810874c->leave($__internal_31b24b9cc468299ae71b95182f660e09f3895613cb00a2020702bcbcb810874c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
