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
        $__internal_c3c5630e1f869ad067fa90726251bb57df96b6bc559454eec6cfafbc8e526970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3c5630e1f869ad067fa90726251bb57df96b6bc559454eec6cfafbc8e526970->enter($__internal_c3c5630e1f869ad067fa90726251bb57df96b6bc559454eec6cfafbc8e526970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_47591a095cfbfa97c51dc423d068ac9498f114b3a5bfacd26b28b481483a631a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47591a095cfbfa97c51dc423d068ac9498f114b3a5bfacd26b28b481483a631a->enter($__internal_47591a095cfbfa97c51dc423d068ac9498f114b3a5bfacd26b28b481483a631a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_c3c5630e1f869ad067fa90726251bb57df96b6bc559454eec6cfafbc8e526970->leave($__internal_c3c5630e1f869ad067fa90726251bb57df96b6bc559454eec6cfafbc8e526970_prof);

        
        $__internal_47591a095cfbfa97c51dc423d068ac9498f114b3a5bfacd26b28b481483a631a->leave($__internal_47591a095cfbfa97c51dc423d068ac9498f114b3a5bfacd26b28b481483a631a_prof);

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
