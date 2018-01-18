<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_d8a39486ac19c2e61d47f168cc8fc5824e195ff51a840fde3f9266c5ab209afe extends Twig_Template
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
        $__internal_f09505cc153d9cdf3ae33b7b8876e7cbe977c742d71f3f5368ac8af3cc83dfcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f09505cc153d9cdf3ae33b7b8876e7cbe977c742d71f3f5368ac8af3cc83dfcb->enter($__internal_f09505cc153d9cdf3ae33b7b8876e7cbe977c742d71f3f5368ac8af3cc83dfcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_9e47c41d289298350152204915ff8e71a80713b26cdd512055fbeb431ecd6bd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e47c41d289298350152204915ff8e71a80713b26cdd512055fbeb431ecd6bd8->enter($__internal_9e47c41d289298350152204915ff8e71a80713b26cdd512055fbeb431ecd6bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_f09505cc153d9cdf3ae33b7b8876e7cbe977c742d71f3f5368ac8af3cc83dfcb->leave($__internal_f09505cc153d9cdf3ae33b7b8876e7cbe977c742d71f3f5368ac8af3cc83dfcb_prof);

        
        $__internal_9e47c41d289298350152204915ff8e71a80713b26cdd512055fbeb431ecd6bd8->leave($__internal_9e47c41d289298350152204915ff8e71a80713b26cdd512055fbeb431ecd6bd8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
