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
        $__internal_8aa0bbd5d6badebedaae48397564fc206804971ef402f84d0e232fe7646a8fb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aa0bbd5d6badebedaae48397564fc206804971ef402f84d0e232fe7646a8fb7->enter($__internal_8aa0bbd5d6badebedaae48397564fc206804971ef402f84d0e232fe7646a8fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_239e0b97fe165cf4520602dfde31c00585a479fc1162a27cd690c3a5a141d003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_239e0b97fe165cf4520602dfde31c00585a479fc1162a27cd690c3a5a141d003->enter($__internal_239e0b97fe165cf4520602dfde31c00585a479fc1162a27cd690c3a5a141d003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8aa0bbd5d6badebedaae48397564fc206804971ef402f84d0e232fe7646a8fb7->leave($__internal_8aa0bbd5d6badebedaae48397564fc206804971ef402f84d0e232fe7646a8fb7_prof);

        
        $__internal_239e0b97fe165cf4520602dfde31c00585a479fc1162a27cd690c3a5a141d003->leave($__internal_239e0b97fe165cf4520602dfde31c00585a479fc1162a27cd690c3a5a141d003_prof);

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
