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
        $__internal_101f1e7c9621f1fa4aed5a0e24d8612e98a1c76946ef44b1e04fa60c2b9ca6a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_101f1e7c9621f1fa4aed5a0e24d8612e98a1c76946ef44b1e04fa60c2b9ca6a5->enter($__internal_101f1e7c9621f1fa4aed5a0e24d8612e98a1c76946ef44b1e04fa60c2b9ca6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_8b715b17873fd51a33d3078323f4db0495cc0c54b7b895592ffb1c4c7f003538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b715b17873fd51a33d3078323f4db0495cc0c54b7b895592ffb1c4c7f003538->enter($__internal_8b715b17873fd51a33d3078323f4db0495cc0c54b7b895592ffb1c4c7f003538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_101f1e7c9621f1fa4aed5a0e24d8612e98a1c76946ef44b1e04fa60c2b9ca6a5->leave($__internal_101f1e7c9621f1fa4aed5a0e24d8612e98a1c76946ef44b1e04fa60c2b9ca6a5_prof);

        
        $__internal_8b715b17873fd51a33d3078323f4db0495cc0c54b7b895592ffb1c4c7f003538->leave($__internal_8b715b17873fd51a33d3078323f4db0495cc0c54b7b895592ffb1c4c7f003538_prof);

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
