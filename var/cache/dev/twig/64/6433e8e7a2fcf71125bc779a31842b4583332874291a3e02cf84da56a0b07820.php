<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_ea1b6c3109181cd19919e6458c838c56d81437716e224b02f06a163af44dd374 extends Twig_Template
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
        $__internal_3502198e7b286076509f6381771669161216f4650fff97df32e4cdf0abe7d051 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3502198e7b286076509f6381771669161216f4650fff97df32e4cdf0abe7d051->enter($__internal_3502198e7b286076509f6381771669161216f4650fff97df32e4cdf0abe7d051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_1687bd8b70a8b35e905ca9ed829cb0f1be9ac2358248161bf5453df4b7f73346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1687bd8b70a8b35e905ca9ed829cb0f1be9ac2358248161bf5453df4b7f73346->enter($__internal_1687bd8b70a8b35e905ca9ed829cb0f1be9ac2358248161bf5453df4b7f73346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_3502198e7b286076509f6381771669161216f4650fff97df32e4cdf0abe7d051->leave($__internal_3502198e7b286076509f6381771669161216f4650fff97df32e4cdf0abe7d051_prof);

        
        $__internal_1687bd8b70a8b35e905ca9ed829cb0f1be9ac2358248161bf5453df4b7f73346->leave($__internal_1687bd8b70a8b35e905ca9ed829cb0f1be9ac2358248161bf5453df4b7f73346_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
