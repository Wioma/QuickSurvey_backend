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
        $__internal_63f4ff55d84517411293369451fcce62f943dab7a31d2244c6edcee62e04d4f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63f4ff55d84517411293369451fcce62f943dab7a31d2244c6edcee62e04d4f6->enter($__internal_63f4ff55d84517411293369451fcce62f943dab7a31d2244c6edcee62e04d4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_f34cc2d26f96d0b69027311d5b8ebbd9a9fa837733f60c293f17b9d1a3ee2b6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f34cc2d26f96d0b69027311d5b8ebbd9a9fa837733f60c293f17b9d1a3ee2b6c->enter($__internal_f34cc2d26f96d0b69027311d5b8ebbd9a9fa837733f60c293f17b9d1a3ee2b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_63f4ff55d84517411293369451fcce62f943dab7a31d2244c6edcee62e04d4f6->leave($__internal_63f4ff55d84517411293369451fcce62f943dab7a31d2244c6edcee62e04d4f6_prof);

        
        $__internal_f34cc2d26f96d0b69027311d5b8ebbd9a9fa837733f60c293f17b9d1a3ee2b6c->leave($__internal_f34cc2d26f96d0b69027311d5b8ebbd9a9fa837733f60c293f17b9d1a3ee2b6c_prof);

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
