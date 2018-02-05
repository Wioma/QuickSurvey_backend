<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_74b4ae4fdd76806ac2b750d1abae4effd43262c38f87d69a770f7585fc1a2c63 extends Twig_Template
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
        $__internal_2cec86ee7f2b0a96f806f64be17c9413c8c1ebb99545f59ccdbaeead790a359c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cec86ee7f2b0a96f806f64be17c9413c8c1ebb99545f59ccdbaeead790a359c->enter($__internal_2cec86ee7f2b0a96f806f64be17c9413c8c1ebb99545f59ccdbaeead790a359c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_44e3975da80887fd4bc9093a45de347b51b7ab426854ae8dc0cf612dbaf881af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e3975da80887fd4bc9093a45de347b51b7ab426854ae8dc0cf612dbaf881af->enter($__internal_44e3975da80887fd4bc9093a45de347b51b7ab426854ae8dc0cf612dbaf881af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_2cec86ee7f2b0a96f806f64be17c9413c8c1ebb99545f59ccdbaeead790a359c->leave($__internal_2cec86ee7f2b0a96f806f64be17c9413c8c1ebb99545f59ccdbaeead790a359c_prof);

        
        $__internal_44e3975da80887fd4bc9093a45de347b51b7ab426854ae8dc0cf612dbaf881af->leave($__internal_44e3975da80887fd4bc9093a45de347b51b7ab426854ae8dc0cf612dbaf881af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
