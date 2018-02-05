<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f34c28ab51f8d1420e5612de13dc9c71b3f20b03d40254103bdb29f13e84e97c extends Twig_Template
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
        $__internal_755aa8c70e17187ca488428ba12eb58fedfa268bdb54437f0f8a3729ac273cd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_755aa8c70e17187ca488428ba12eb58fedfa268bdb54437f0f8a3729ac273cd5->enter($__internal_755aa8c70e17187ca488428ba12eb58fedfa268bdb54437f0f8a3729ac273cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_1a6f2a08cd2f128d76153941b3f7cf9d1d5e0d6c769ec80ccd3ccef69c91b3c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a6f2a08cd2f128d76153941b3f7cf9d1d5e0d6c769ec80ccd3ccef69c91b3c1->enter($__internal_1a6f2a08cd2f128d76153941b3f7cf9d1d5e0d6c769ec80ccd3ccef69c91b3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_755aa8c70e17187ca488428ba12eb58fedfa268bdb54437f0f8a3729ac273cd5->leave($__internal_755aa8c70e17187ca488428ba12eb58fedfa268bdb54437f0f8a3729ac273cd5_prof);

        
        $__internal_1a6f2a08cd2f128d76153941b3f7cf9d1d5e0d6c769ec80ccd3ccef69c91b3c1->leave($__internal_1a6f2a08cd2f128d76153941b3f7cf9d1d5e0d6c769ec80ccd3ccef69c91b3c1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c8a850fe499e5ef3ebcfd910a48956b3f5d2ae7beccd7007af9857bc0fcb8e68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8a850fe499e5ef3ebcfd910a48956b3f5d2ae7beccd7007af9857bc0fcb8e68->enter($__internal_c8a850fe499e5ef3ebcfd910a48956b3f5d2ae7beccd7007af9857bc0fcb8e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4483f3c42e758506b5e70828f1fe5e3c39fc01d19aef750fb4357c9d39bddc66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4483f3c42e758506b5e70828f1fe5e3c39fc01d19aef750fb4357c9d39bddc66->enter($__internal_4483f3c42e758506b5e70828f1fe5e3c39fc01d19aef750fb4357c9d39bddc66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4483f3c42e758506b5e70828f1fe5e3c39fc01d19aef750fb4357c9d39bddc66->leave($__internal_4483f3c42e758506b5e70828f1fe5e3c39fc01d19aef750fb4357c9d39bddc66_prof);

        
        $__internal_c8a850fe499e5ef3ebcfd910a48956b3f5d2ae7beccd7007af9857bc0fcb8e68->leave($__internal_c8a850fe499e5ef3ebcfd910a48956b3f5d2ae7beccd7007af9857bc0fcb8e68_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
