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
        $__internal_cb528c8eadcdde500a17cf2776acfb85b4bcf4bbfdc1a7df97f6b852bfb6f4ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb528c8eadcdde500a17cf2776acfb85b4bcf4bbfdc1a7df97f6b852bfb6f4ec->enter($__internal_cb528c8eadcdde500a17cf2776acfb85b4bcf4bbfdc1a7df97f6b852bfb6f4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_18fc5b726349153f1d6952c540898c354ef1b9e351efa853d719698cbfb608dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18fc5b726349153f1d6952c540898c354ef1b9e351efa853d719698cbfb608dd->enter($__internal_18fc5b726349153f1d6952c540898c354ef1b9e351efa853d719698cbfb608dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_cb528c8eadcdde500a17cf2776acfb85b4bcf4bbfdc1a7df97f6b852bfb6f4ec->leave($__internal_cb528c8eadcdde500a17cf2776acfb85b4bcf4bbfdc1a7df97f6b852bfb6f4ec_prof);

        
        $__internal_18fc5b726349153f1d6952c540898c354ef1b9e351efa853d719698cbfb608dd->leave($__internal_18fc5b726349153f1d6952c540898c354ef1b9e351efa853d719698cbfb608dd_prof);

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
