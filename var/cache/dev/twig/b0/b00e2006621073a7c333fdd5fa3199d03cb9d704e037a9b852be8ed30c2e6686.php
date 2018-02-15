<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_ef49f90fb700fffec6419e1d5e045d981ed2bc16ad438702a669fd2dca4aa6c1 extends Twig_Template
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
        $__internal_b0a13509a860fa04c5d8feccab47072bc002130f8391351140e9e99ffda6d886 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0a13509a860fa04c5d8feccab47072bc002130f8391351140e9e99ffda6d886->enter($__internal_b0a13509a860fa04c5d8feccab47072bc002130f8391351140e9e99ffda6d886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_e47ee731b172b4b4711ab3958c42fa3ee1652ebfccce24f4ad551f176208cfa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e47ee731b172b4b4711ab3958c42fa3ee1652ebfccce24f4ad551f176208cfa0->enter($__internal_e47ee731b172b4b4711ab3958c42fa3ee1652ebfccce24f4ad551f176208cfa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_b0a13509a860fa04c5d8feccab47072bc002130f8391351140e9e99ffda6d886->leave($__internal_b0a13509a860fa04c5d8feccab47072bc002130f8391351140e9e99ffda6d886_prof);

        
        $__internal_e47ee731b172b4b4711ab3958c42fa3ee1652ebfccce24f4ad551f176208cfa0->leave($__internal_e47ee731b172b4b4711ab3958c42fa3ee1652ebfccce24f4ad551f176208cfa0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
