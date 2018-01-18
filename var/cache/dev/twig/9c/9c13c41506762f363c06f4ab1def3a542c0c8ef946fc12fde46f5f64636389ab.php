<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_f1cd4cea6eff3f560f3280e7dd449c75bcdde41d9249792d73efda0ff80b44b0 extends Twig_Template
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
        $__internal_5cbaf08909f39a7096303d63e4cc79c496c6749285c16cdcffb43de656b5ede8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cbaf08909f39a7096303d63e4cc79c496c6749285c16cdcffb43de656b5ede8->enter($__internal_5cbaf08909f39a7096303d63e4cc79c496c6749285c16cdcffb43de656b5ede8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_adb9c104bf762c81acc32259d91ffb74f2a629de753a9636d4478ceadadae68e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adb9c104bf762c81acc32259d91ffb74f2a629de753a9636d4478ceadadae68e->enter($__internal_adb9c104bf762c81acc32259d91ffb74f2a629de753a9636d4478ceadadae68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5cbaf08909f39a7096303d63e4cc79c496c6749285c16cdcffb43de656b5ede8->leave($__internal_5cbaf08909f39a7096303d63e4cc79c496c6749285c16cdcffb43de656b5ede8_prof);

        
        $__internal_adb9c104bf762c81acc32259d91ffb74f2a629de753a9636d4478ceadadae68e->leave($__internal_adb9c104bf762c81acc32259d91ffb74f2a629de753a9636d4478ceadadae68e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
