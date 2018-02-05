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
        $__internal_9972c89f4b8d7980f1f7fa23296479fc13e9c3290c459913405335d90a94d70c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9972c89f4b8d7980f1f7fa23296479fc13e9c3290c459913405335d90a94d70c->enter($__internal_9972c89f4b8d7980f1f7fa23296479fc13e9c3290c459913405335d90a94d70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_002224ce42650972442072fd1be994ceadaf699a1fd75d4aebd9d16b74440f95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_002224ce42650972442072fd1be994ceadaf699a1fd75d4aebd9d16b74440f95->enter($__internal_002224ce42650972442072fd1be994ceadaf699a1fd75d4aebd9d16b74440f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9972c89f4b8d7980f1f7fa23296479fc13e9c3290c459913405335d90a94d70c->leave($__internal_9972c89f4b8d7980f1f7fa23296479fc13e9c3290c459913405335d90a94d70c_prof);

        
        $__internal_002224ce42650972442072fd1be994ceadaf699a1fd75d4aebd9d16b74440f95->leave($__internal_002224ce42650972442072fd1be994ceadaf699a1fd75d4aebd9d16b74440f95_prof);

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
