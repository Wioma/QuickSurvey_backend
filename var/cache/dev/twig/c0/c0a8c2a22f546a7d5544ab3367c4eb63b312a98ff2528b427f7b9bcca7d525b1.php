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
        $__internal_a815054dc2d7e29a86de6ae5e44c33d4102c2018e5cf45fa223202a88b4d59b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a815054dc2d7e29a86de6ae5e44c33d4102c2018e5cf45fa223202a88b4d59b3->enter($__internal_a815054dc2d7e29a86de6ae5e44c33d4102c2018e5cf45fa223202a88b4d59b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_1135e6782b0fb6c9c936dc731b9b8d8a901f59501b75450521047116366f48c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1135e6782b0fb6c9c936dc731b9b8d8a901f59501b75450521047116366f48c1->enter($__internal_1135e6782b0fb6c9c936dc731b9b8d8a901f59501b75450521047116366f48c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a815054dc2d7e29a86de6ae5e44c33d4102c2018e5cf45fa223202a88b4d59b3->leave($__internal_a815054dc2d7e29a86de6ae5e44c33d4102c2018e5cf45fa223202a88b4d59b3_prof);

        
        $__internal_1135e6782b0fb6c9c936dc731b9b8d8a901f59501b75450521047116366f48c1->leave($__internal_1135e6782b0fb6c9c936dc731b9b8d8a901f59501b75450521047116366f48c1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_183c2f6a1429746ffa88d8e76bb8924c3cb9effed449eb5c750417a72c440737 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_183c2f6a1429746ffa88d8e76bb8924c3cb9effed449eb5c750417a72c440737->enter($__internal_183c2f6a1429746ffa88d8e76bb8924c3cb9effed449eb5c750417a72c440737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4aa670f27eb5c15418fb7333e1a606faa0666972e9898641fd8df8f78e921695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aa670f27eb5c15418fb7333e1a606faa0666972e9898641fd8df8f78e921695->enter($__internal_4aa670f27eb5c15418fb7333e1a606faa0666972e9898641fd8df8f78e921695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4aa670f27eb5c15418fb7333e1a606faa0666972e9898641fd8df8f78e921695->leave($__internal_4aa670f27eb5c15418fb7333e1a606faa0666972e9898641fd8df8f78e921695_prof);

        
        $__internal_183c2f6a1429746ffa88d8e76bb8924c3cb9effed449eb5c750417a72c440737->leave($__internal_183c2f6a1429746ffa88d8e76bb8924c3cb9effed449eb5c750417a72c440737_prof);

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
