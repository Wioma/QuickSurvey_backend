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
        $__internal_ccc107f6cf924017760973c136bf1f20fd1691b8d2444f06e9dec8bd4b1d3947 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccc107f6cf924017760973c136bf1f20fd1691b8d2444f06e9dec8bd4b1d3947->enter($__internal_ccc107f6cf924017760973c136bf1f20fd1691b8d2444f06e9dec8bd4b1d3947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_cc6f1601f3f11e9c7a218fb81f27ec23420c24fba570779d4f91b05611764ddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc6f1601f3f11e9c7a218fb81f27ec23420c24fba570779d4f91b05611764ddf->enter($__internal_cc6f1601f3f11e9c7a218fb81f27ec23420c24fba570779d4f91b05611764ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_ccc107f6cf924017760973c136bf1f20fd1691b8d2444f06e9dec8bd4b1d3947->leave($__internal_ccc107f6cf924017760973c136bf1f20fd1691b8d2444f06e9dec8bd4b1d3947_prof);

        
        $__internal_cc6f1601f3f11e9c7a218fb81f27ec23420c24fba570779d4f91b05611764ddf->leave($__internal_cc6f1601f3f11e9c7a218fb81f27ec23420c24fba570779d4f91b05611764ddf_prof);

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
