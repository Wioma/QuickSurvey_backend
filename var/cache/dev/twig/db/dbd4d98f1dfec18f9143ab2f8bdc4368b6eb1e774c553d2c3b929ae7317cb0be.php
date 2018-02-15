<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_38ae6f7a0ff4a1aab03cc2f44c19808c3d63c3d60751a0d88fb0441ca07335ab extends Twig_Template
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
        $__internal_147887c8f965707d8490e6796ad3cea9b6152cd0b118db74659783bfceac7053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_147887c8f965707d8490e6796ad3cea9b6152cd0b118db74659783bfceac7053->enter($__internal_147887c8f965707d8490e6796ad3cea9b6152cd0b118db74659783bfceac7053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_0e16c12e2a759a1f2f6e74b01bd581b35933eadaea98f3e570108cfef36477ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e16c12e2a759a1f2f6e74b01bd581b35933eadaea98f3e570108cfef36477ea->enter($__internal_0e16c12e2a759a1f2f6e74b01bd581b35933eadaea98f3e570108cfef36477ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_147887c8f965707d8490e6796ad3cea9b6152cd0b118db74659783bfceac7053->leave($__internal_147887c8f965707d8490e6796ad3cea9b6152cd0b118db74659783bfceac7053_prof);

        
        $__internal_0e16c12e2a759a1f2f6e74b01bd581b35933eadaea98f3e570108cfef36477ea->leave($__internal_0e16c12e2a759a1f2f6e74b01bd581b35933eadaea98f3e570108cfef36477ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
