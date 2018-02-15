<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_80d9e7dccecc4a64eed7687d4fd134b347234d3836f6210be7e8dfcf7fdb327e extends Twig_Template
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
        $__internal_be3e59679a9503c3be2910752862e7958da60e177885ab20c801069c44ff89b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be3e59679a9503c3be2910752862e7958da60e177885ab20c801069c44ff89b7->enter($__internal_be3e59679a9503c3be2910752862e7958da60e177885ab20c801069c44ff89b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_147ecfa3239490be060f96820810b43a19df627ce4cc0efcbc9b20f28d0f0dcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_147ecfa3239490be060f96820810b43a19df627ce4cc0efcbc9b20f28d0f0dcf->enter($__internal_147ecfa3239490be060f96820810b43a19df627ce4cc0efcbc9b20f28d0f0dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_be3e59679a9503c3be2910752862e7958da60e177885ab20c801069c44ff89b7->leave($__internal_be3e59679a9503c3be2910752862e7958da60e177885ab20c801069c44ff89b7_prof);

        
        $__internal_147ecfa3239490be060f96820810b43a19df627ce4cc0efcbc9b20f28d0f0dcf->leave($__internal_147ecfa3239490be060f96820810b43a19df627ce4cc0efcbc9b20f28d0f0dcf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
