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
        $__internal_743ae7c45dc722f3a0b675345b8467bbc7d2e5c0283c0cc7443fc07af22368c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_743ae7c45dc722f3a0b675345b8467bbc7d2e5c0283c0cc7443fc07af22368c5->enter($__internal_743ae7c45dc722f3a0b675345b8467bbc7d2e5c0283c0cc7443fc07af22368c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_4e3c2a41f3bd12cfd8cfe5b91164e0689b018987b13e32f8e141662ece94bf5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e3c2a41f3bd12cfd8cfe5b91164e0689b018987b13e32f8e141662ece94bf5f->enter($__internal_4e3c2a41f3bd12cfd8cfe5b91164e0689b018987b13e32f8e141662ece94bf5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_743ae7c45dc722f3a0b675345b8467bbc7d2e5c0283c0cc7443fc07af22368c5->leave($__internal_743ae7c45dc722f3a0b675345b8467bbc7d2e5c0283c0cc7443fc07af22368c5_prof);

        
        $__internal_4e3c2a41f3bd12cfd8cfe5b91164e0689b018987b13e32f8e141662ece94bf5f->leave($__internal_4e3c2a41f3bd12cfd8cfe5b91164e0689b018987b13e32f8e141662ece94bf5f_prof);

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
