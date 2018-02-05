<?php

/* TplmBundle:Default:index.html.twig */
class __TwigTemplate_4f02de91fc83ad742d40d7be1c48a463cd75917d6d7c9af7ad89182d44c052f7 extends Twig_Template
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
        $__internal_1896bca60020aef24e1a930b78b1026787898922a2a05e15a88382f8e59eec60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1896bca60020aef24e1a930b78b1026787898922a2a05e15a88382f8e59eec60->enter($__internal_1896bca60020aef24e1a930b78b1026787898922a2a05e15a88382f8e59eec60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TplmBundle:Default:index.html.twig"));

        $__internal_11776a7c381bbbaa5a720a298bcaad1b0ae9ad64d8420e96d850d9e9443e6784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11776a7c381bbbaa5a720a298bcaad1b0ae9ad64d8420e96d850d9e9443e6784->enter($__internal_11776a7c381bbbaa5a720a298bcaad1b0ae9ad64d8420e96d850d9e9443e6784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TplmBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_1896bca60020aef24e1a930b78b1026787898922a2a05e15a88382f8e59eec60->leave($__internal_1896bca60020aef24e1a930b78b1026787898922a2a05e15a88382f8e59eec60_prof);

        
        $__internal_11776a7c381bbbaa5a720a298bcaad1b0ae9ad64d8420e96d850d9e9443e6784->leave($__internal_11776a7c381bbbaa5a720a298bcaad1b0ae9ad64d8420e96d850d9e9443e6784_prof);

    }

    public function getTemplateName()
    {
        return "TplmBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "TplmBundle:Default:index.html.twig", "C:\\wamp\\www\\QuickSurvey_backend\\src\\TplmBundle/Resources/views/Default/index.html.twig");
    }
}
