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
        $__internal_3b829e7a8b0b7e01d4445875ad2716fc7dddc1829eae0d2546b67aa57a388a59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b829e7a8b0b7e01d4445875ad2716fc7dddc1829eae0d2546b67aa57a388a59->enter($__internal_3b829e7a8b0b7e01d4445875ad2716fc7dddc1829eae0d2546b67aa57a388a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_0a4a6a45dc798ad0df0bcaf31aa63316cdf55f696b143e226db281c1a7483333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a4a6a45dc798ad0df0bcaf31aa63316cdf55f696b143e226db281c1a7483333->enter($__internal_0a4a6a45dc798ad0df0bcaf31aa63316cdf55f696b143e226db281c1a7483333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3b829e7a8b0b7e01d4445875ad2716fc7dddc1829eae0d2546b67aa57a388a59->leave($__internal_3b829e7a8b0b7e01d4445875ad2716fc7dddc1829eae0d2546b67aa57a388a59_prof);

        
        $__internal_0a4a6a45dc798ad0df0bcaf31aa63316cdf55f696b143e226db281c1a7483333->leave($__internal_0a4a6a45dc798ad0df0bcaf31aa63316cdf55f696b143e226db281c1a7483333_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2905ebdb0ad145c41321cc5616e65f83a0c17cf0234ab16ea8a17b695591cab0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2905ebdb0ad145c41321cc5616e65f83a0c17cf0234ab16ea8a17b695591cab0->enter($__internal_2905ebdb0ad145c41321cc5616e65f83a0c17cf0234ab16ea8a17b695591cab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_57d643adfc61253ec14df99246be4dbd02cb1ea6baaf469671edfa1b512c5b0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57d643adfc61253ec14df99246be4dbd02cb1ea6baaf469671edfa1b512c5b0b->enter($__internal_57d643adfc61253ec14df99246be4dbd02cb1ea6baaf469671edfa1b512c5b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_57d643adfc61253ec14df99246be4dbd02cb1ea6baaf469671edfa1b512c5b0b->leave($__internal_57d643adfc61253ec14df99246be4dbd02cb1ea6baaf469671edfa1b512c5b0b_prof);

        
        $__internal_2905ebdb0ad145c41321cc5616e65f83a0c17cf0234ab16ea8a17b695591cab0->leave($__internal_2905ebdb0ad145c41321cc5616e65f83a0c17cf0234ab16ea8a17b695591cab0_prof);

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
