<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_fcaa1b6b912f14693cc2dd6dba6ff3bfa3fade1ca5a32ea1234f57735cf891e3 extends Twig_Template
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
        $__internal_2ebc77e94a0cb89dcda3a0d7c31adf254c1f017c05bae1c5be74018ceb6908f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ebc77e94a0cb89dcda3a0d7c31adf254c1f017c05bae1c5be74018ceb6908f7->enter($__internal_2ebc77e94a0cb89dcda3a0d7c31adf254c1f017c05bae1c5be74018ceb6908f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_d254e4aab4f98fa747a771eb450fd326a869fd51a1b1cd1948303add9c672d34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d254e4aab4f98fa747a771eb450fd326a869fd51a1b1cd1948303add9c672d34->enter($__internal_d254e4aab4f98fa747a771eb450fd326a869fd51a1b1cd1948303add9c672d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_2ebc77e94a0cb89dcda3a0d7c31adf254c1f017c05bae1c5be74018ceb6908f7->leave($__internal_2ebc77e94a0cb89dcda3a0d7c31adf254c1f017c05bae1c5be74018ceb6908f7_prof);

        
        $__internal_d254e4aab4f98fa747a771eb450fd326a869fd51a1b1cd1948303add9c672d34->leave($__internal_d254e4aab4f98fa747a771eb450fd326a869fd51a1b1cd1948303add9c672d34_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
