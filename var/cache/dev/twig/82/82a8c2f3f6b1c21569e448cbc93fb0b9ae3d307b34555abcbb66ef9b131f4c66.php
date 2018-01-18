<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_70db43f038fd93a39b9b4d8b9af880a6f4f7f53273e524e8ce994e4bcaf82b6e extends Twig_Template
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
        $__internal_1681f1b654cc4dcde4e434b7bae267366dcbc01125d5c7f0b4c34e7de8488ae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1681f1b654cc4dcde4e434b7bae267366dcbc01125d5c7f0b4c34e7de8488ae9->enter($__internal_1681f1b654cc4dcde4e434b7bae267366dcbc01125d5c7f0b4c34e7de8488ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_e171946bee1fba9b4f603eec4125aced163c717898a0f8799fbd68c8b34887da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e171946bee1fba9b4f603eec4125aced163c717898a0f8799fbd68c8b34887da->enter($__internal_e171946bee1fba9b4f603eec4125aced163c717898a0f8799fbd68c8b34887da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1681f1b654cc4dcde4e434b7bae267366dcbc01125d5c7f0b4c34e7de8488ae9->leave($__internal_1681f1b654cc4dcde4e434b7bae267366dcbc01125d5c7f0b4c34e7de8488ae9_prof);

        
        $__internal_e171946bee1fba9b4f603eec4125aced163c717898a0f8799fbd68c8b34887da->leave($__internal_e171946bee1fba9b4f603eec4125aced163c717898a0f8799fbd68c8b34887da_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.atom.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
