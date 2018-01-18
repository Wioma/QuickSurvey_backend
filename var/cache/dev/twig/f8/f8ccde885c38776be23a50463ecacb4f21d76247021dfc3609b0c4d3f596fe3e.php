<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_69a862ed5c37af6d39b3fbddbe3633fcff910fc480f43b38dc70f26e13ee49cb extends Twig_Template
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
        $__internal_2fb5afc35be0d35327a6a0476e9e6f70570b24073a954ebed554d5b59f4af6db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fb5afc35be0d35327a6a0476e9e6f70570b24073a954ebed554d5b59f4af6db->enter($__internal_2fb5afc35be0d35327a6a0476e9e6f70570b24073a954ebed554d5b59f4af6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_b091900d86b053ba8b26bf05296142c92711ffbf10c4f67029543f0d2c1e1884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b091900d86b053ba8b26bf05296142c92711ffbf10c4f67029543f0d2c1e1884->enter($__internal_b091900d86b053ba8b26bf05296142c92711ffbf10c4f67029543f0d2c1e1884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2fb5afc35be0d35327a6a0476e9e6f70570b24073a954ebed554d5b59f4af6db->leave($__internal_2fb5afc35be0d35327a6a0476e9e6f70570b24073a954ebed554d5b59f4af6db_prof);

        
        $__internal_b091900d86b053ba8b26bf05296142c92711ffbf10c4f67029543f0d2c1e1884->leave($__internal_b091900d86b053ba8b26bf05296142c92711ffbf10c4f67029543f0d2c1e1884_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
