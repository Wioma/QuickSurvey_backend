<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_4931c82106835d7be72bd669d8dcd9f7e9f12d09d625c1d5f28785c0488a089d extends Twig_Template
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
        $__internal_de592b0431f9adc0d47ce89be7120ac88e41383e2045f03d61aee08b6e1dca02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de592b0431f9adc0d47ce89be7120ac88e41383e2045f03d61aee08b6e1dca02->enter($__internal_de592b0431f9adc0d47ce89be7120ac88e41383e2045f03d61aee08b6e1dca02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_8f593217bbf107ea49bb9ba7f60621f561754a44ae5cf3ea98ad1bd2c4ac9bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f593217bbf107ea49bb9ba7f60621f561754a44ae5cf3ea98ad1bd2c4ac9bc2->enter($__internal_8f593217bbf107ea49bb9ba7f60621f561754a44ae5cf3ea98ad1bd2c4ac9bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_de592b0431f9adc0d47ce89be7120ac88e41383e2045f03d61aee08b6e1dca02->leave($__internal_de592b0431f9adc0d47ce89be7120ac88e41383e2045f03d61aee08b6e1dca02_prof);

        
        $__internal_8f593217bbf107ea49bb9ba7f60621f561754a44ae5cf3ea98ad1bd2c4ac9bc2->leave($__internal_8f593217bbf107ea49bb9ba7f60621f561754a44ae5cf3ea98ad1bd2c4ac9bc2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
