<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_ed54fa6982fcd7392710714cdb214f4d3e9033dd2e98b5496df6cad397aaadbb extends Twig_Template
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
        $__internal_022580275f01594ca0a9917924b732c362509fd11d90c134f4ada71608600006 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_022580275f01594ca0a9917924b732c362509fd11d90c134f4ada71608600006->enter($__internal_022580275f01594ca0a9917924b732c362509fd11d90c134f4ada71608600006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_d8932ce00dbdbdc3006fffe668e651fe3c3a61b8db88b9dfa6845d89c7641c5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8932ce00dbdbdc3006fffe668e651fe3c3a61b8db88b9dfa6845d89c7641c5c->enter($__internal_d8932ce00dbdbdc3006fffe668e651fe3c3a61b8db88b9dfa6845d89c7641c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_022580275f01594ca0a9917924b732c362509fd11d90c134f4ada71608600006->leave($__internal_022580275f01594ca0a9917924b732c362509fd11d90c134f4ada71608600006_prof);

        
        $__internal_d8932ce00dbdbdc3006fffe668e651fe3c3a61b8db88b9dfa6845d89c7641c5c->leave($__internal_d8932ce00dbdbdc3006fffe668e651fe3c3a61b8db88b9dfa6845d89c7641c5c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
