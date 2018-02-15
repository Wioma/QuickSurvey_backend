<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_784edc998689fc557f589e8eb5aa04ca63b393ade64d1ec4bfe6f0252fc8fc42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff1aed6b527406b37b472684119e399eadaf645e64eef83899d5d80e69935655 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff1aed6b527406b37b472684119e399eadaf645e64eef83899d5d80e69935655->enter($__internal_ff1aed6b527406b37b472684119e399eadaf645e64eef83899d5d80e69935655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_d2b4f281510377f083add99515fdbbcac591fb5a38d3a13af7ac5f1fe29ac300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2b4f281510377f083add99515fdbbcac591fb5a38d3a13af7ac5f1fe29ac300->enter($__internal_d2b4f281510377f083add99515fdbbcac591fb5a38d3a13af7ac5f1fe29ac300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ff1aed6b527406b37b472684119e399eadaf645e64eef83899d5d80e69935655->leave($__internal_ff1aed6b527406b37b472684119e399eadaf645e64eef83899d5d80e69935655_prof);

        
        $__internal_d2b4f281510377f083add99515fdbbcac591fb5a38d3a13af7ac5f1fe29ac300->leave($__internal_d2b4f281510377f083add99515fdbbcac591fb5a38d3a13af7ac5f1fe29ac300_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_10fd8bd1f2c86f402821849b557e04564d83196b125f7abac94f40928d5cc650 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10fd8bd1f2c86f402821849b557e04564d83196b125f7abac94f40928d5cc650->enter($__internal_10fd8bd1f2c86f402821849b557e04564d83196b125f7abac94f40928d5cc650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e183d104646c9768f484ccac048148b12ec065ab989b62dc57fed89cc65153ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e183d104646c9768f484ccac048148b12ec065ab989b62dc57fed89cc65153ba->enter($__internal_e183d104646c9768f484ccac048148b12ec065ab989b62dc57fed89cc65153ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e183d104646c9768f484ccac048148b12ec065ab989b62dc57fed89cc65153ba->leave($__internal_e183d104646c9768f484ccac048148b12ec065ab989b62dc57fed89cc65153ba_prof);

        
        $__internal_10fd8bd1f2c86f402821849b557e04564d83196b125f7abac94f40928d5cc650->leave($__internal_10fd8bd1f2c86f402821849b557e04564d83196b125f7abac94f40928d5cc650_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
