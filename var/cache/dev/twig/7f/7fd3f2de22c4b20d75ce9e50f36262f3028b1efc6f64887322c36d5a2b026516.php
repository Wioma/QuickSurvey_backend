<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b21e55f00aeed399d13bfcec816d9b17a799c99c8e9d03a18eda8e6838688c7d extends Twig_Template
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
        $__internal_f3f2cc00c3d1f95524b0ba273676b8c012c72ab9a13820c3a49538451f5bbaef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3f2cc00c3d1f95524b0ba273676b8c012c72ab9a13820c3a49538451f5bbaef->enter($__internal_f3f2cc00c3d1f95524b0ba273676b8c012c72ab9a13820c3a49538451f5bbaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_3f9bcee111dc60120f370cfc8ddc1ead96048fb0b4b128949f9204900bf67024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f9bcee111dc60120f370cfc8ddc1ead96048fb0b4b128949f9204900bf67024->enter($__internal_3f9bcee111dc60120f370cfc8ddc1ead96048fb0b4b128949f9204900bf67024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f3f2cc00c3d1f95524b0ba273676b8c012c72ab9a13820c3a49538451f5bbaef->leave($__internal_f3f2cc00c3d1f95524b0ba273676b8c012c72ab9a13820c3a49538451f5bbaef_prof);

        
        $__internal_3f9bcee111dc60120f370cfc8ddc1ead96048fb0b4b128949f9204900bf67024->leave($__internal_3f9bcee111dc60120f370cfc8ddc1ead96048fb0b4b128949f9204900bf67024_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
