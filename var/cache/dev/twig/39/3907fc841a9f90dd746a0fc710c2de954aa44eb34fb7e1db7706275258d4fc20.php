<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_5f6081804aca4a09f41c8918a6f444a4be96bb00d3c0c88398d9b199d60f8d34 extends Twig_Template
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
        $__internal_227c4372ff7dcb96b8a308c9333ee52e09cf643d1b4aac5e6bca60a06eae73d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_227c4372ff7dcb96b8a308c9333ee52e09cf643d1b4aac5e6bca60a06eae73d2->enter($__internal_227c4372ff7dcb96b8a308c9333ee52e09cf643d1b4aac5e6bca60a06eae73d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_21ac4983448534e43159dd084145f2b7e24aff77cc7dfdb2707c07f6215da8fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21ac4983448534e43159dd084145f2b7e24aff77cc7dfdb2707c07f6215da8fc->enter($__internal_21ac4983448534e43159dd084145f2b7e24aff77cc7dfdb2707c07f6215da8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_227c4372ff7dcb96b8a308c9333ee52e09cf643d1b4aac5e6bca60a06eae73d2->leave($__internal_227c4372ff7dcb96b8a308c9333ee52e09cf643d1b4aac5e6bca60a06eae73d2_prof);

        
        $__internal_21ac4983448534e43159dd084145f2b7e24aff77cc7dfdb2707c07f6215da8fc->leave($__internal_21ac4983448534e43159dd084145f2b7e24aff77cc7dfdb2707c07f6215da8fc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
