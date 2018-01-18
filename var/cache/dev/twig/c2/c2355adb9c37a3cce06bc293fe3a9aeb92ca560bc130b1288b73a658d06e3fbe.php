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
        $__internal_40401e15b1cc71a32c93ff386b7f0692413d6372ad5880020424cb1fe126ce1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40401e15b1cc71a32c93ff386b7f0692413d6372ad5880020424cb1fe126ce1c->enter($__internal_40401e15b1cc71a32c93ff386b7f0692413d6372ad5880020424cb1fe126ce1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_519ba1ef762e4c5fd0dd524809e9bb487d19dd66924473bba4acf35b1606828a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_519ba1ef762e4c5fd0dd524809e9bb487d19dd66924473bba4acf35b1606828a->enter($__internal_519ba1ef762e4c5fd0dd524809e9bb487d19dd66924473bba4acf35b1606828a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_40401e15b1cc71a32c93ff386b7f0692413d6372ad5880020424cb1fe126ce1c->leave($__internal_40401e15b1cc71a32c93ff386b7f0692413d6372ad5880020424cb1fe126ce1c_prof);

        
        $__internal_519ba1ef762e4c5fd0dd524809e9bb487d19dd66924473bba4acf35b1606828a->leave($__internal_519ba1ef762e4c5fd0dd524809e9bb487d19dd66924473bba4acf35b1606828a_prof);

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
