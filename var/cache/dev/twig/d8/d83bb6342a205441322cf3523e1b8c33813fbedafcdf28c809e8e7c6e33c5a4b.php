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
        $__internal_0065ca06fe493c9e13f4c82d0ca1e679b8f5630f3f9fbb263db092e62dcc262f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0065ca06fe493c9e13f4c82d0ca1e679b8f5630f3f9fbb263db092e62dcc262f->enter($__internal_0065ca06fe493c9e13f4c82d0ca1e679b8f5630f3f9fbb263db092e62dcc262f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_fc2900944a4f010bd1a51746495f551ca291c7122ef88094525e7b7f287bb6e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc2900944a4f010bd1a51746495f551ca291c7122ef88094525e7b7f287bb6e5->enter($__internal_fc2900944a4f010bd1a51746495f551ca291c7122ef88094525e7b7f287bb6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_0065ca06fe493c9e13f4c82d0ca1e679b8f5630f3f9fbb263db092e62dcc262f->leave($__internal_0065ca06fe493c9e13f4c82d0ca1e679b8f5630f3f9fbb263db092e62dcc262f_prof);

        
        $__internal_fc2900944a4f010bd1a51746495f551ca291c7122ef88094525e7b7f287bb6e5->leave($__internal_fc2900944a4f010bd1a51746495f551ca291c7122ef88094525e7b7f287bb6e5_prof);

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
