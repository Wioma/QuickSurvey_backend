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
        $__internal_72b69718f533e193795bdbcf44fae9a15e6d80d2e80fadf9223f4ab2b463a1b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72b69718f533e193795bdbcf44fae9a15e6d80d2e80fadf9223f4ab2b463a1b4->enter($__internal_72b69718f533e193795bdbcf44fae9a15e6d80d2e80fadf9223f4ab2b463a1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_38952235420f190dc087d9b3b8037e4c74c639e800c4bec9b19a7e6ade544c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38952235420f190dc087d9b3b8037e4c74c639e800c4bec9b19a7e6ade544c92->enter($__internal_38952235420f190dc087d9b3b8037e4c74c639e800c4bec9b19a7e6ade544c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_72b69718f533e193795bdbcf44fae9a15e6d80d2e80fadf9223f4ab2b463a1b4->leave($__internal_72b69718f533e193795bdbcf44fae9a15e6d80d2e80fadf9223f4ab2b463a1b4_prof);

        
        $__internal_38952235420f190dc087d9b3b8037e4c74c639e800c4bec9b19a7e6ade544c92->leave($__internal_38952235420f190dc087d9b3b8037e4c74c639e800c4bec9b19a7e6ade544c92_prof);

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
