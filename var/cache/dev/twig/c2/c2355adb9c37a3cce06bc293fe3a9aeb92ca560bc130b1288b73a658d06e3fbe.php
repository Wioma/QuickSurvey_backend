<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_be4cce91ee4b546e1aa3f388ec9f99cb6af9a57055256ea29c1f613e504d73bb extends Twig_Template
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
        $__internal_5db80064c33f5b0b28c5bd4d1b59601d3bd324de3401fe235474645bd976c930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5db80064c33f5b0b28c5bd4d1b59601d3bd324de3401fe235474645bd976c930->enter($__internal_5db80064c33f5b0b28c5bd4d1b59601d3bd324de3401fe235474645bd976c930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_be71f9622e019378e5a0495b85bd38251c97f9e7877a9d4ac9d01d09d9bf71a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be71f9622e019378e5a0495b85bd38251c97f9e7877a9d4ac9d01d09d9bf71a8->enter($__internal_be71f9622e019378e5a0495b85bd38251c97f9e7877a9d4ac9d01d09d9bf71a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_5db80064c33f5b0b28c5bd4d1b59601d3bd324de3401fe235474645bd976c930->leave($__internal_5db80064c33f5b0b28c5bd4d1b59601d3bd324de3401fe235474645bd976c930_prof);

        
        $__internal_be71f9622e019378e5a0495b85bd38251c97f9e7877a9d4ac9d01d09d9bf71a8->leave($__internal_be71f9622e019378e5a0495b85bd38251c97f9e7877a9d4ac9d01d09d9bf71a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
