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
        $__internal_dcfcb183d422d338a9467f040b5bf8f0d282502c79e3907c4fc9460a4ad9abfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcfcb183d422d338a9467f040b5bf8f0d282502c79e3907c4fc9460a4ad9abfc->enter($__internal_dcfcb183d422d338a9467f040b5bf8f0d282502c79e3907c4fc9460a4ad9abfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_8eb24e73f6ea7486cf6464c3ac146bbf6d891b239cb6e351356e8e61c78d5bec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eb24e73f6ea7486cf6464c3ac146bbf6d891b239cb6e351356e8e61c78d5bec->enter($__internal_8eb24e73f6ea7486cf6464c3ac146bbf6d891b239cb6e351356e8e61c78d5bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_dcfcb183d422d338a9467f040b5bf8f0d282502c79e3907c4fc9460a4ad9abfc->leave($__internal_dcfcb183d422d338a9467f040b5bf8f0d282502c79e3907c4fc9460a4ad9abfc_prof);

        
        $__internal_8eb24e73f6ea7486cf6464c3ac146bbf6d891b239cb6e351356e8e61c78d5bec->leave($__internal_8eb24e73f6ea7486cf6464c3ac146bbf6d891b239cb6e351356e8e61c78d5bec_prof);

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
