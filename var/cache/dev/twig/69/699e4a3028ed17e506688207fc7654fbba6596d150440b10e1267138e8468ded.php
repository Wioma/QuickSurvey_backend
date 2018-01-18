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
        $__internal_fa1b54ca7db86be01f9bdd45f6fa7fce0037affa6c4ab0bf661d6464fc94f4e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa1b54ca7db86be01f9bdd45f6fa7fce0037affa6c4ab0bf661d6464fc94f4e7->enter($__internal_fa1b54ca7db86be01f9bdd45f6fa7fce0037affa6c4ab0bf661d6464fc94f4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_7f67551b5c31fac73e3f95891fb5fec99cc5cb6b46b6c106a5c46424781de571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f67551b5c31fac73e3f95891fb5fec99cc5cb6b46b6c106a5c46424781de571->enter($__internal_7f67551b5c31fac73e3f95891fb5fec99cc5cb6b46b6c106a5c46424781de571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fa1b54ca7db86be01f9bdd45f6fa7fce0037affa6c4ab0bf661d6464fc94f4e7->leave($__internal_fa1b54ca7db86be01f9bdd45f6fa7fce0037affa6c4ab0bf661d6464fc94f4e7_prof);

        
        $__internal_7f67551b5c31fac73e3f95891fb5fec99cc5cb6b46b6c106a5c46424781de571->leave($__internal_7f67551b5c31fac73e3f95891fb5fec99cc5cb6b46b6c106a5c46424781de571_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c587f190e772c91e1dc871cd025a78397423bf72ca308fdf533afb1552c8f2aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c587f190e772c91e1dc871cd025a78397423bf72ca308fdf533afb1552c8f2aa->enter($__internal_c587f190e772c91e1dc871cd025a78397423bf72ca308fdf533afb1552c8f2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3d3ae93f887b21a8ec8ab50f968c7abddcb39fec6619d1a412654eec2ba28d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d3ae93f887b21a8ec8ab50f968c7abddcb39fec6619d1a412654eec2ba28d84->enter($__internal_3d3ae93f887b21a8ec8ab50f968c7abddcb39fec6619d1a412654eec2ba28d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3d3ae93f887b21a8ec8ab50f968c7abddcb39fec6619d1a412654eec2ba28d84->leave($__internal_3d3ae93f887b21a8ec8ab50f968c7abddcb39fec6619d1a412654eec2ba28d84_prof);

        
        $__internal_c587f190e772c91e1dc871cd025a78397423bf72ca308fdf533afb1552c8f2aa->leave($__internal_c587f190e772c91e1dc871cd025a78397423bf72ca308fdf533afb1552c8f2aa_prof);

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
