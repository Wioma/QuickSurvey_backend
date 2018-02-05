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
        $__internal_84c45ac5f762672eb56001cb385aee34a3ac69a84f9759f6d5e4dd8dcb5e2430 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84c45ac5f762672eb56001cb385aee34a3ac69a84f9759f6d5e4dd8dcb5e2430->enter($__internal_84c45ac5f762672eb56001cb385aee34a3ac69a84f9759f6d5e4dd8dcb5e2430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_fcc95a6b9af24a1d53e3063256a751737dec770adbafcbcbde084c902afcf871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc95a6b9af24a1d53e3063256a751737dec770adbafcbcbde084c902afcf871->enter($__internal_fcc95a6b9af24a1d53e3063256a751737dec770adbafcbcbde084c902afcf871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_84c45ac5f762672eb56001cb385aee34a3ac69a84f9759f6d5e4dd8dcb5e2430->leave($__internal_84c45ac5f762672eb56001cb385aee34a3ac69a84f9759f6d5e4dd8dcb5e2430_prof);

        
        $__internal_fcc95a6b9af24a1d53e3063256a751737dec770adbafcbcbde084c902afcf871->leave($__internal_fcc95a6b9af24a1d53e3063256a751737dec770adbafcbcbde084c902afcf871_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7a507d9bc1f6db04a6e387bcdfd8bb443691e9bf345274f150516f92a2e4fe70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a507d9bc1f6db04a6e387bcdfd8bb443691e9bf345274f150516f92a2e4fe70->enter($__internal_7a507d9bc1f6db04a6e387bcdfd8bb443691e9bf345274f150516f92a2e4fe70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_845f3a89b9e9405dc84e7e7abdc44ae5655b13fb91477ac71488088b6cc7f278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_845f3a89b9e9405dc84e7e7abdc44ae5655b13fb91477ac71488088b6cc7f278->enter($__internal_845f3a89b9e9405dc84e7e7abdc44ae5655b13fb91477ac71488088b6cc7f278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_845f3a89b9e9405dc84e7e7abdc44ae5655b13fb91477ac71488088b6cc7f278->leave($__internal_845f3a89b9e9405dc84e7e7abdc44ae5655b13fb91477ac71488088b6cc7f278_prof);

        
        $__internal_7a507d9bc1f6db04a6e387bcdfd8bb443691e9bf345274f150516f92a2e4fe70->leave($__internal_7a507d9bc1f6db04a6e387bcdfd8bb443691e9bf345274f150516f92a2e4fe70_prof);

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
